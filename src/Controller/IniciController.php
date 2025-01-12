<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class IniciController extends AbstractController
{
    #[Route('/', name: 'inici')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Projecte Gestió Retail de 2n de DAW',
            'path' => 'src/Controller/IniciController.php',
        ]);
    }
}
