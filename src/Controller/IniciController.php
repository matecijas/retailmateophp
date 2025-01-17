<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\ServeiDadesSeccio;


class IniciController extends AbstractController
{
    private $dades;

    public function __construct($dadesSeccions){
        $this->dades = $dadesSeccions->get();
    }



    #[Route('/', name: 'home')]
    public function index()
    {
        return $this->render("base.html.twig");
    }

    #[Route('/inici', name: 'inici')]
    public function index2()
    {
        return $this->render("inici.html.twig", array(
            'dades'=> $this->dades
        ));
    }
}
