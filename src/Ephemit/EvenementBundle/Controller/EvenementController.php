<?php

namespace Ephemit\EvenementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ephemit\EvenementBundle\Form\CreerEvenementType;
use Ephemit\EvenementBundle\Entity\Evenement;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\Response;

class EvenementController extends Controller
{
    public function creerAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface)
        {
                throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->getDoctrine()->getManager();
        $event = new Evenement();
        $formEvent = $this->createForm(new CreerEvenementType(), $event);
        
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $formEvent->bind($request);
            if($formEvent->isValid()){
                $today = new \DateTime('now');
                
                $event->setUtilisateur($user);
                $event->setDateCreation($today);
                $event->setDate($date);
                $em->persist($event);
                $em->flush();
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
        $listEvent = $repoEvent->findByUtilisateur($user);
        
        return $this->render('EphemitEvenementBundle:Evenement:liste.html.twig', array(
            'listEvent'=>$listEvent
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
    
    public function modifierAction($id){
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface)
        {
                throw new AccessDeniedException('This user does not have access to this section.');
        }
        $repoEvent = $this->getDoctrine()->getRepository('EphemitEvenementBundle:Evenement');
        $event = $repoEvent->findOneById($id);
        
        $formEvent = $this->createForm(new CreerEvenementType(), $event);
        $request = $this->get('request');
        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == 'POST') {
            $formEvent->bind($request);
            if($formEvent->isValid()){
                $em->persist($event);
                $em->flush();
            }
        }
        return $this->render('EphemitEvenementBundle:Evenement:modifier-evenement.html.twig', array(
            'event'=>$event,
            'formEvent'=>$formEvent->createView()
        ));
    }
}
