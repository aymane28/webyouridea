<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends AbstractController
{
    #[Route('/security', name: 'security')]
    public function security(): Response
    {
        return $this->render('security/security.html.twig');
    }

    #[Route('/check-security', name: 'check_security', methods: ['POST'])]
    public function checkSecurity(Request $request): Response
    {
        $securityCode = $request->request->get('security_code');

        if ($securityCode === "123456") { // Remplacer '123456' par votre code de sécurité réel
            // Stocker le statut de validation du code dans la session
            $request->getSession()->set('security_code_entered', true);
            return $this->redirectToRoute('project');
        } else {
            $this->addFlash('failure', 'Code d\'accès invalide !'); // Rediriger vers une page d'erreur
            return $this->redirectToRoute('security');
        }
    }
}