<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Service\ServeiDadesSeccio;

class SeccioController extends AbstractController
{

    private $dades;
    
    public function __construct($dadesSeccions){
        $this->dades = $dadesSeccions->get();
    }

    #[Route('/dades_seccio', name: 'dades_seccio_error')]
    public function fitxa_error()
    {
         return $this->render("dades_seccio.html.twig", [
            'codi' => $this->dades[0]['codi'],
            'nom' => $this->dades[0]['nom'],
            'any' => $this->dades[0]['any'],
            'imatge' => $this->dades[0]['imatge'],
            'descripcio' => $this->dades[0]['descripcio'],
            'articles' => $this->dades[0]['articles']
        ]);
    }

    #[Route('/dades_seccio/{codi}', name: 'dades_seccio')]
    public function fitxa($codi)
    {

        $resultat = array_filter($this->dades, function ($dades) use ($codi) {
            return $dades["codi"] == $codi;
        });

        if (count($resultat) > 0) {
            $resultat = array_shift($resultat); // Torna el primer element
            return $this->render('dades_seccio.html.twig', array(
                'codi' => $resultat['codi'],
                'nom' => $resultat['nom'],
                'any' => $resultat['any'],
                'imatge' => $resultat['imatge'],
                'descripcio' => $resultat['descripcio'],
                'articles' => $resultat['articles']
            ));
        } else {
            return $this->render('dades_seccio_error.html.twig', array(
                'codi'=> $codi
            ));
    }
}
}

?>