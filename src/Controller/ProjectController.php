<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/dhs-entreprise', name: 'project')]
    public function project(Request $request): Response
    {

        if (!$request->getSession()->get('security_code_entered')) {
            return $this->redirectToRoute('security');
        }

        return $this->render('project/project.html.twig');
    }
}