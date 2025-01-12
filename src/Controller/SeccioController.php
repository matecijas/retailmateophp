<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class SeccioController extends AbstractController
{

    
    #[Route('/seccio/{codi}', name: 'seccio')]
    public function fitxa($codi)
    {
         return new Response("Dades del contacte amb codi $codi");
    }
}
