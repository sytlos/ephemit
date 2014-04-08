<?php

namespace Ephemit\EvenementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ephemit\EvenementBundle\Form\CreerEvenementType;
use Ephemit\EvenementBundle\Entity\Evenement;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

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
                $tabValeurs = $request->request->get('ephemit_evenement_creer');
                $date = new \DateTime($tabValeurs['date']);
                
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
}
