<?php

namespace eBAM\ObjectMgtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use eBAM\IBANServiceBundle;
use eBAM\ObjectMgtBundle\Entity\Company;

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
	
		$em = $this->get('doctrine')->getManager();
		$repository= $em->getRepository('eBAMObjectMgtBundle:Company');
		$company = $repository->find($id);
	
		if ( $company != null ) {
			return $this->render(
				'eBAMObjectMgtBundle:Company:view.html.twig', 
				array(
					'company' => $company
				)
			);
		} else {
			throw new \Exception('Vous ne pouvez pas accéder à cette société');
		}
		
    }
	
	public function addAction(Request $request)
	{
		$Company = new Company();
		$Company->setFullLegalName('Société 1');
		$Company->setTradingName('Société Trading 1');
		// $Company->setRegistrationDate('2015-05-27');
		
		$em = $this->get('doctrine')->getManager();
		
	   // Étape 1 : On « persiste » l'entité
		$em->persist($Company);

		// Étape 2 : On « flush » tout ce qui a été persisté avant
		$em->flush();

		// Reste de la méthode qu'on avait déjà écrit
		if ($request->isMethod('POST')) {
		  $request->getSession()->getFlashBag()->add('notice', 'Société bien enregistrée.');
		  return $this->redirect($this->generateUrl('company_mgt_view', array('id' => $Company->getId())));
		}


		$iban = $this->container->get('e_bamiban_service.iban_service');
		
		// Je pars du principe que $IBAN contient le texte d'un message quelconque
		$IBAN = '123';
		if ($iban->isIBAN($IBAN)) {
			throw new \Exception('Votre IBAN n\'est pas correct !');
		}
    
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