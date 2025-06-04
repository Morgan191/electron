<?php

namespace App\Controller;

use App\Form\UserPasswordTypeForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\MailService;


final class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    #[Route('/', name: '')]
    public function index(): Response
    {
        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
    }

    #[Route('/changepassword', name: 'app_profil_changepassword')]
    public function changepassword(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, MailService $mailService): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        $form = $this->createForm(UserPasswordTypeForm::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$userPasswordHasher->isPasswordValid($user, $form->get('current_password')->getData())) {
                $this->addFlash('danger', 'Votre mot de passe actuel est incorrect.');
            } else {
                $hashedPassword = $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                );

                $user->setPassword($hashedPassword);
                $entityManager->persist($user);
                $entityManager->flush();


                $mailService->sendMail("Votre mot de passe a bien été modifié", "vous venez de modifier votre mot de passe sur le sit du Fablab ELECTRON");

                $this->addFlash('success', 'Votre mot de passe a bien été modifié.');
                return $this->redirectToRoute('app_profil');
            }
        }

        return $this->render('profil/change_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
