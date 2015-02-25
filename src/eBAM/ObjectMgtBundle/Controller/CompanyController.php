<?php

namespace eBAM\ObjectMgtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    public function indexAction()
    {
		$listCompanies = array(
			array (
				'nom'	=> 'Société 1',
				'id'	=> 1,
				'accountAdmin' => 'Fabien PENOT'
			)
		);		
		
		return $this->render(
			'eBAMObjectMgtBundle:Company:index.html.twig',
			array('listCompanies' => $listCompanies)
		);
    }

    public function viewAction($id)
    {
		return $this->render(
		  'eBAMObjectMgtBundle:Company:view.html.twig', 
		  array('id' => $id)
		);
    }
	
	public function addAction(Request $request)
	{
		$Company = array(
			'nom'	=> 'Société 1',
			'id'	=> 1,
			'accountAdmin' => 'Fabien PENOT'
		);		
			
		return $this->render(
			'eBAMObjectMgtBundle:Company:add.html.twig',
			array('company' => $Company)
		);
	}
	
	public function editAction($id, Request $request)
	{
		$Company = array(
			'nom'	=> 'Société 1',
			'id'	=> $id,
			'accountAdmin' => 'Fabien PENOT'
		);		
			
		return $this->render(
			'eBAMObjectMgtBundle:Company:edit.html.twig',
			array('company' => $Company)
		);
	}

	public function deleteAction($id)
	{
		// Ici, on récupérera l'annonce correspondant à $id

		// Ici, on gérera la suppression de l'annonce en question

		return $this->render('eBAMObjectMgtBundle:Company:delete.html.twig');
	}
	
}