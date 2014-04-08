<?php

namespace Ephemit\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('EphemitSiteBundle:Site:index.html.twig');
    }
}
