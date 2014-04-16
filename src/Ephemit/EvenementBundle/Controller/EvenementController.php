<?php

namespace Ephemit\EvenementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ephemit\EvenementBundle\Form\CreerEvenementType;
use Ephemit\EvenementBundle\Entity\Evenement;
use Ephemit\EvenementBundle\Entity\Document;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\Response;
use Ephemit\EvenementBundle\Form\ProtectionPageType;
use Ephemit\EvenementBundle\Form\ProtectionPageAdminType;

class EvenementController extends Controller
{
    public function creerAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        /*if (!is_object($user) || !$user instanceof UserInterface)
        {
                throw new AccessDeniedException('This user does not have access to this section.');
        }*/
        $em = $this->getDoctrine()->getManager();
        $event = new Evenement();
        $formEvent = $this->createForm(new CreerEvenementType(), $event);
        
        $request = $this->get('request');
        
        $helper = $this->container->get('oneup_uploader.templating.uploader_helper');
        $endpoint = $helper->endpoint('gallery');

        if ($request->getMethod() == 'POST') {
            $formEvent->bind($request);
            if($formEvent->isValid()){
                $today = new \DateTime('now');
                $post = $request->request->get('ephemit_evenement_creer');
                
                if($post['publicpass']!=''){
                    $publicpass = sha1($post['publicpass']);
                    $event->setPublicpass($publicpass);
                }
                $adminpass1 = sha1($post['adminpass1']);
                $adminpass2 = sha1($post['adminpass2']);
                
                $time = time();
                $rand = rand(0, 100);
                $cle = $time*$rand;
                
                $event->setCle(md5($cle));
                
                $event->setAdminpass1($adminpass1);
                $event->setAdminpass2($adminpass2);
                $event->setDateCreation($today);
                $em->persist($event);
                
                /*documents*/
                foreach($post['documents'] as $document){
                    $doc = new Document();
                    $doc->setEvent($event);
                    $doc->setNom($document['nom']);
                    $doc->setNomOriginal($document['nomOriginal']);
                    
                    $em->persist($doc);
                }
                
                $em->flush();
                
                
                
                
                $tabRetour= array();
                $tabRetour['code'] = 0;

                $reponse = new Response(json_encode($tabRetour));
                $reponse->headers->set('Content-Type', 'application/json');
                return $reponse;
            }
        }
        
        return $this->render('EphemitEvenementBundle:Evenement:creer.html.twig', array(
            'formEvent'=>$formEvent->createView()
        ));
    }
    
    public function listeAction(){
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface)
        {
                throw new AccessDeniedException('This user does not have access to this section.');
        }
        
        $repoEvent = $this->getDoctrine()->getRepository('EphemitEvenementBundle:Evenement');
        $listEvent = $repoEvent->findAll();
        
        $favoris = $user->getFavoris();
        
        return $this->render('EphemitEvenementBundle:Evenement:liste.html.twig', array(
            'listEvent'=>$listEvent,
            'favoris'=>$favoris
        ));
    }
    
    public function supprimerAction($id){
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface)
        {
                throw new AccessDeniedException('This user does not have access to this section.');
        }
        $repoEvent = $this->getDoctrine()->getRepository('EphemitEvenementBundle:Evenement');
        $event = $repoEvent->findOneById($id);
        
        $request = $this->get('request');
        $em = $this->getDoctrine()->getManager();
        
        if ($request->getMethod() == 'POST') {
            
            $em->remove($event);
            $em->flush();
            
            $tabRetour= array();
            $tabRetour['code'] = 0;
            $reponse = new Response(json_encode($tabRetour));
            $reponse->headers->set('Content-Type', 'application/json');
            return $reponse;
        }
        
        return $this->render('EphemitEvenementBundle:Evenement:supprimer-evenement.html.twig', array(
            'event'=>$event
        ));
    }
    
    public function modifierAction($cle){
        
        $repoEvent = $this->getDoctrine()->getRepository('EphemitEvenementBundle:Evenement');
        $event = $repoEvent->findOneByCle($cle);
        
        $formEvent = $this->createForm(new CreerEvenementType(), $event);
        $request = $this->get('request');
        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == 'POST') {
            $formEvent->bind($request);
            if($formEvent->isValid()){
                $em->persist($event);
                $em->flush();
                
                $tabRetour= array();
                $tabRetour['code'] = 0;

                $reponse = new Response(json_encode($tabRetour));
                $reponse->headers->set('Content-Type', 'application/json');
                return $reponse;
            }
        }
        return $this->render('EphemitEvenementBundle:Evenement:modifier-evenement.html.twig', array(
            'event'=>$event,
            'formEvent'=>$formEvent->createView()
        ));
    }
    
    public function ajouterFavorisAction($id){
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface)
        {
                throw new AccessDeniedException('This user does not have access to this section.');
        }
        $repoEvent = $this->getDoctrine()->getRepository('EphemitEvenementBundle:Evenement');
        $event = $repoEvent->findOneById($id);
        
        $user->addFavori($event);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        
        $tabRetour= array();
        $tabRetour['code'] = 0;
        $reponse = new Response(json_encode($tabRetour));
        $reponse->headers->set('Content-Type', 'application/json');
        return $reponse;
    }
    
    public function pageAction($cle){
        $repoEvent = $this->getDoctrine()->getRepository('EphemitEvenementBundle:Evenement');
        $page = $repoEvent->findOneByCle($cle);
        $formPass = $this->createForm(new ProtectionPageType());
        
        $documents = $page->getDocuments();
        $arrayExtImg = array('jpg','jpeg','png','gif');
        $arrayImg = array();
        $arrayPJ = array();
        
        foreach($documents as $doc){
            $ext = explode('.', $doc->getNom());
            if(in_array($ext[1], $arrayExtImg)){
                $arrayImg[] = $doc;
            }
            else{
                $arrayPJ[] = $doc;
            }
        }
        
        if($page->getPublicpass() != null){
            $protect = true;
            
            $request = $this->get('request');
            
            if ($request->getMethod() == 'POST') {
                $formPass->bind($request);
                if($formPass->isValid()){
                    $post = $request->request->get('ephemit_protection_page');
                    $pass = $post['publicpass'];
                    if($page->getPublicpass() == sha1($pass)){
                        $protect = false;
                    }
                }
            }
        }
        else{
            $protect = false;
        }
        return $this->render('EphemitEvenementBundle:Evenement:page.html.twig', array(
            'page'=>$page, 
            'protect'=>$protect,
            'formPass'=>$formPass->createView(),
            'arrayImg'=>$arrayImg,
            'arrayPJ'=>$arrayPJ
        ));
    }
    
    public function gererAction($cle){
        $repoEvent = $this->getDoctrine()->getRepository('EphemitEvenementBundle:Evenement');
        $page = $repoEvent->findOneByCle($cle);
        $formPassAdmin = $this->createForm(new ProtectionPageAdminType());
        
        $request = $this->get('request');
        $valid = false;
            
        if ($request->getMethod() == 'POST') {
            $formPassAdmin->bind($request);
            if($formPassAdmin->isValid()){
                $post = $request->request->get('ephemit_protection_page_admin');
                $adminpass1 = $post['adminpass1'];
                $adminpass2 = $post['adminpass2'];
                if(($page->getAdminPass1() == sha1($adminpass1)) && ($page->getAdminPass2() == sha1($adminpass2))){
                    $valid = true;
                }
                else{
                    $valid = false;
                }
            }
        }
        return $this->render('EphemitEvenementBundle:Evenement:gerer.html.twig', array(
            'page'=>$page,
            'formPassAdmin'=>$formPassAdmin->createView(),
            'valid'=>$valid
        ));
    }
    
    public function adminPageAction($cle){
        $repoEvent = $this->getDoctrine()->getRepository('EphemitEvenementBundle:Evenement');
        $page = $repoEvent->findOneByCle($cle);
        
        
        return $this->render('EphemitEvenementBundle:Evenement:admin-page.html.twig', array(
            'page'=>$page
        ));
    }
    
    public function apercuAction($cle){
        $repoEvent = $this->getDoctrine()->getRepository('EphemitEvenementBundle:Evenement');
        $page = $repoEvent->findOneByCle($cle);
        
        return $this->render('EphemitEvenementBundle:Evenement:apercu-page.html.twig', array(
            'page'=>$page
        ));
    }
}
