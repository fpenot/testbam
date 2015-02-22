<?php

namespace eBAM\ObjectMgtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    public function indexAction()
    {
		return $this->render('eBAMObjectMgtBundle:Company:index.html.twig');
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
		// Si la requête est en POST, c'est que le visiteur a soumis le formulaire
		if ($request->isMethod('POST')) {
			// Ici, on s'occupera de la création et de la gestion du formulaire

			$request->getSession()->getFlashBag()->add('notice', 'Compagnie bien enregistrée.');

			// Puis on redirige vers la page de visualisation de cette compagnie
			return $this->redirect($this->generateUrl('company_mgt_view', array('id' => 5)));
		}

		// Si on n'est pas en POST, alors on affiche le formulaire
		return $this->render('eBAMObjectMgtBundle:Company:add.html.twig');	
	}
	
	public function editAction($id, Request $request)
	{
		// Ici, on récupérera la comagnie correspondante à $id

		// Même mécanisme que pour l'ajout
		if ($request->isMethod('POST')) {
		  $request->getSession()->getFlashBag()->add('notice', 'Compagnie bien modifiée.');

		  return $this->redirect($this->generateUrl('company_mgt_view', array('id' => 5)));
		}

		return $this->render('eBAMObjectMgtBundle:Company:edit.html.twig');
	}

	public function deleteAction($id)
	{
		// Ici, on récupérera l'annonce correspondant à $id

		// Ici, on gérera la suppression de l'annonce en question

		return $this->render('eBAMObjectMgtBundle:Company:delete.html.twig');
	}
	
}