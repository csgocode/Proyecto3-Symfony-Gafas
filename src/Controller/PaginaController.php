<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaginaController extends AbstractController
{
    #[Route('/', name: 'app_pagina')]
    public function index(): Response
    {
        return $this->render('pagina/index.html.twig', [
            'controller_name' => 'PaginaController',
        ]);
    }



    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('pagina/about.html.twig', [
            'controller_name' => 'PaginaController',
        ]);
    }

    #[Route('/gafas', name: 'gafas')]
    public function gafas(): Response
    {
        return $this->render('pagina/gafas.html.twig', [
            'controller_name' => 'PaginaController',
        ]);
    }

    #[Route('/tienda', name: 'tienda')]
    public function tienda(): Response
    {
        return $this->render('pagina/tienda.html.twig', [
            'controller_name' => 'PaginaController',
        ]);
    }





}
