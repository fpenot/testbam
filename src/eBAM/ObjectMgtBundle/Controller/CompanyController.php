<?php

namespace eBAM\ObjectMgtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    public function indexAction()
    {
		$content = $this->get('templating')->render('eBAMObjectMgtBundle:Company:index.html.twig');
		return new Response($content);
    }
	
    public function viewAction($id)
    {
		return new Response("Afficahge de la société d'id :".$id);
    }
}