<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlataformaController extends AbstractController
{
    /**
     * @Route("/plataforma", name="app_plataforma")
     */
    public function index()
    {
        if($this->isGranted('ROLE_USER'))
        {
            return $this->render('plataforma/index.html.twig', ['controller_name' => 'PlataformaController',]);
        }

        if($this->isGranted('ROLE_ADMIN'))
        {
            return $this->redirectToRoute('app_adminPlataforma');
        }

        
        
    }
}
