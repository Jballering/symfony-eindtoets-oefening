<?php

namespace App\Controller;

use App\Entity\Department;
use App\Form\DepartmentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DepartmentController extends AbstractController
{
    #[Route('/department/new', name: 'app_department')]
    public function newAction(Request $request): Response
    {
        $department=new Department();
        $form=$this->createForm(DepartmentType::class,$department) ;

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $form->getData();

            $this->addFlash(
                'notice',
                'lekker besig pik'
            );

            return $this->redirectToRoute('app_form_succes');
        }

        return $this->render('department/index.html.twig', [
            'departmentForm' => $form,
        ]);
    }

}
