<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AppAccessController extends AbstractController
{
    /**
     * @Route("/app/access", name="app_access")
     * @IsGranted("ROLE_USER")
     */
    public function index(): Response
    {
        return $this->render('app_access/index.html.twig', [
            'controller_name' => 'AppAccessController',
        ]);
    }
}
