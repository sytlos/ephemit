<?php

namespace Ephemit\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ephemit\SiteBundle\Form\PageSearchType;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('EphemitSiteBundle:Site:index.html.twig');
    }
    
    public function searchPageAction(){
        $form = $this->createForm(new PageSearchType());
        
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if($form->isValid()){
                $search = $request->request->get('ephemit_page_search');
                $repoEvent = $this->getDoctrine()->getRepository('EphemitEvenementBundle:Evenement');
                $events = $repoEvent->getPublicEvents($search['search']);
                
                return $this->render('EphemitSiteBundle:Site:search-results.html.twig', array('events'=>$events));
            }
        }
        
        return $this->render('EphemitSiteBundle:Site:search.html.twig', array('formSearch'=>$form->createView()));
    }
}
