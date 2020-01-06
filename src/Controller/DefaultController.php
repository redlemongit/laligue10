<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function default()
    {
        $number = mt_rand(0, 50);
        return $this->render('default/index.html.twig', array(
            'number' => $number,
        ));
    }

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('default/login.html.twig');
    }
}