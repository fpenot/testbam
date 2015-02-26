<?php

namespace eBAM\IBANServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('eBAMIBANServiceBundle:Default:index.html.twig', array('name' => $name));
    }
}
