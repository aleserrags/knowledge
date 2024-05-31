<?php

namespace App\Controller\Web\Usuario;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UsuarioController extends AbstractController
{
    #[Route('/web/usuario/usuario', name: 'app_web_usuario_usuario')]
    public function index(): Response
    {
        return $this->render('web/usuario/usuario/index.html.twig', [
            'controller_name' => 'UsuarioController',
        ]);
    }
}
