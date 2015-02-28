<?php

namespace eBAM\RefDataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('eBAMRefDataBundle:Default:index.html.twig', array('name' => $name));
    }
}
