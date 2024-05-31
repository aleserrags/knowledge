<?php

namespace App\Controller\Web\Artigo;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArtigoController extends AbstractController
{
    #[Route('/artigos', name: 'app_web_artigo')]
    public function index(): Response
    {
        return $this->render('artigo/index.html.twig', [
            'controller_name' => 'ArtigoController',
        ]);
    }
}
