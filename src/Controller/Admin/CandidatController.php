<?php

namespace App\Controller\Admin;

use App\Entity\Recrutement;
use App\Form\CandidatForm;
use App\Repository\RecrutementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CandidatController extends AbstractController
{
    #[Route('/admin/candidat', name: 'app_admin_candidat')]
    public function index(RecrutementRepository $recrutementRepository): Response
    {
        $candidats = $recrutementRepository->findAll();

        return $this->render('admin/candidat/index.html.twig', [
            'candidats' => $candidats,
        ]);
    }

    #[Route('/admin/candidat/ajouter', name: 'app_admin_candidat_ajouter')]
    #[Route('/modifer/(id}', name: '_modifier')]
    public function ajouter(Request $request, recrutementRepository $candidatRepository, EntityManagerInterface $entityManager, int $id = null): Response
    {

        if($request->attributes->get('_route') == 'app_admin_candidat_ajouter'){
            $recrutement = new Recrutement();
        }else{
            $candidat = $candidatRepository->find($id);
                }


        
        $form = $this->createForm(CandidatForm::class, $recrutement);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($recrutement);
            $entityManager->flush();


            //Gestion des messages de confirmation
            if($request->attributes->get('_route') == 'app_admin_candidat_ajouter'){

            $this->addFlash('success', 'Candidat ajouté avec succès !');
       
        }else{

            $this->addFlash('success', 'Candidat modifié avec succès !');
        }


            return $this->redirectToRoute('app_admin_candidat');
        }

        return $this->render('admin/candidat/editer.html.twig', [
            'form' => $form,
        ]);
    }



#[Route('/admin/candidat/supprimer/{id}', name: 'app_admin_candidat_supprimer')]
    public function supprimer(RecrutementRepository $recrutementRepository, EntityManagerInterface $entityManager, int $id): Response
    {
        $candidat = $recrutementRepository->find($id);
        $entityManager->remove($candidat);
        $entityManager->flush();

        $this->addFlash('success', 'Candidat supprimé avec succès !');

        return $this->redirectToRoute('app_admin_candidat');

    }
}