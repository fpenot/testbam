<?php

namespace eBAM\ObjectMgtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('eBAMObjectMgtBundle:Default:index.html.twig', array('name' => $name));
    }
}
