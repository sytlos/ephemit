<?php

namespace Ephemit\CalendrierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalendrierController extends Controller
{
    public function indexAction()
    {
        return $this->render('EphemitCalendrierBundle:Calendrier:calendrier.html.twig');
    }
}
