<?php

namespace App\Controller;

use App\Entity\ReferenceUser;
use App\Form\ReferentRegisterFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
 
class SecurityController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     */
    public function register( Request $request, UserPasswordEncoderInterface $encoder ,EntityManagerInterface $entityManager ): Response    
    {
        $form = $this->createForm(ReferentRegisterFormType::class);
        //dd($form);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $ReferentUser = $form->getData();
            
            $encoded = $encoder->encodePassword($ReferentUser, $ReferentUser->getPasswordReferent());
            $ReferentUser->setPasswordReferent($encoded);

            $entityManager->persist($ReferentUser);
            $entityManager->flush();
        }
        return $this->render('register.html.twig', [
            'preregistrationForm'=>$form->createView()
        ]);
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(): Response
    {
        return $this->render('login.html.twig');
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        //return $this->render('login.html.twig');
    }

}
