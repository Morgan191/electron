<?php

namespace App\Controller;

use App\Entity\Recrutement;
use App\Entity\Recrutement2;
use App\Entity\Recrutement3;
use App\Entity\User;
use App\Form\Candidat2Form;
use App\Form\Candidat3Form;
use App\Form\CandidatForm;
use App\Service\MailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;




final class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login/index.html.twig', [

            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }


    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $user_password_hasher, EntityManagerInterface $entityManager, MailService $mailService): Response
    {

        $recrutement = new Recrutement();
        //$user = new User;
        //$user->setRoles(['ROLE_USER']);
        //$recrutement->setRoles(['ROLE_USER']);
        $form = $this->createForm(CandidatForm::class, $recrutement);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $hashedPassword = $user_password_hasher->hashPassword(
                new User,
                $recrutement->getPassword()

                /* $user->setPassword(
                $userPasswordHasher->hashPassword($recrutement,$recrutement->getPassword())
            );*/
            );


            $recrutement->setPassword($hashedPassword);

            // $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($recrutement);
            $entityManager->flush();

            $mailService->sendMail("Vous êtes bien inscrit pour être candidat au Fablab ELECTRON", "Nous vous recontacterons aprés étude de votre candidature");

            $this->addFlash(
                'success',
                'Votre demande a bien été envoyée'
            );

            return $this->redirectToRoute('app_profil');
        }

        return $this->render('registration/index.html.twig', [
            'formCandidat' => $form->createView()
        ]);

        /*return $this->renderForm('registration/register.html.twig', [
            'form' => $form
        ]);*/
    }

    #[Route('/candidat2', name: 'app_candidat2')]
    public function candidat2(Request $request, EntityManagerInterface $entityManager): Response
    {
        $recrutement2 = new Recrutement2();
        $form = $this->createForm(Candidat2Form::class, $recrutement2);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($recrutement2);
            $entityManager->flush();

            $this->addFlash('success', 'Données envoyées avec succès !');
            return $this->redirectToRoute('app_profil');
        }

        return $this->render('candidature2/index.html.twig', [
            'formCandidat2' => $form->createView(),
        ]);
    }

    #[Route('/candidat3', name: 'app_candidat3')]
    public function candidat3(Request $request, EntityManagerInterface $entityManager): Response
    {
        $recrutement3 = new Recrutement3();
        $form = $this->createForm(Candidat3Form::class, $recrutement3);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($recrutement3);
            $entityManager->flush();

            $this->addFlash('success', 'Formulaire 3 envoyé avec succès !');
            return $this->redirectToRoute('app_profil');
        }

        return $this->render('candidature3/index.html.twig', [
            'formCandidat3' => $form->createView(),
        ]);
    }




    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout()
    {
        // controller can be blank:it will never be called!
        throw new \Exception('Don\'t forget to activate logout in security yaml');
    }
}
