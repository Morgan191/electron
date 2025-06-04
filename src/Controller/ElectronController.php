<?php

namespace App\Controller;

use App\Repository\AncienMembreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ElectronController extends AbstractController
{
    #[Route('/electron', name: 'app_electron')]
    public function index(AncienMembreRepository $ancienMembreRepository): Response
    {
        $anciens = $ancienMembreRepository->findAll();
        

        return $this->render('electron/index.html.twig', [
            'anciens' => $anciens
        ]);
    }
}
