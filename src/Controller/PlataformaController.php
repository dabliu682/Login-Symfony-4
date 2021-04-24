<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlataformaController extends AbstractController
{
    /**
     * @Route("/plataforma", name="plataforma_homepage")
     */
    public function index()
    {
        return $this->render('plataforma/index.html.twig', ['controller_name' => 'PlataformaController',]);
    }
}
