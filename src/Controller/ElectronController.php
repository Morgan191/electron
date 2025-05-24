<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ElectronController extends AbstractController
{
    #[Route('/electron', name: 'app_electron')]
    public function index(): Response
    {
        return $this->render('electron/index.html.twig', [
            'controller_name' => 'ElectronController',
        ]);
    }
}
