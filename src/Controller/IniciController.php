<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class IniciController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index()
    {
        return $this->render("base.html.twig");
    }

    #[Route('/inici', name: 'inici')]
    public function index2()
    {
        return $this->render("inici.html.twig");
    }
}
