<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPlataformaController extends AbstractController
{
    /**
     * @Route("/admin/adminPlataforma", name="app_adminPlataforma")
     */
    public function index(): Response
    {        
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('admin_plataforma/index.html.twig');
    }    

}
