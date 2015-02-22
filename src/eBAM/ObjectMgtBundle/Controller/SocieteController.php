<?php

namespace eBAM\ObjectMgtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SocieteController extends Controller
{
    public function indexAction()
    {
		$content = $this->get('templating')->render('eBAMObjectMgtBundle:Societe:index.html.twig');
		return new Response($content);
    }
}