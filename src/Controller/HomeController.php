<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param SessionInterface $session
     * @return Response
     */
    public function index(SessionInterface $session): Response
    {
        $session->remove('cart');
        $cart = $session->get('cart');
        return $this->render('home/index.html.twig');
    }
}
