<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormSuccesController extends AbstractController
{
    #[Route('/department/succes', name: 'app_form_succes')]
    public function index(): Response


    {
        return $this->render('form_succes/index.html.twig', [
            'controller_name' => 'FormSuccesController',
        ]);
    }
}
