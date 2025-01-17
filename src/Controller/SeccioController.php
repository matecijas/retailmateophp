<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class SeccioController extends AbstractController
{

    private $dades = array(
        array(
            "codi" => 1,
            "nom" => "Roba",
            "descripcio" => "Descripció de la secció",
            "any" => "2024",
            "articles" => array("Pantalons", "Camisa", "Jersey", "Xaqueta"),
        ),
        array(
            "codi" => 2,
            "nom" => "Ferramentes",
            "descripcio" => "Descripció de la secció",
            "any" => "2023",
            "articles" => array("Destornillador", "Clau", "Pegament", "Tuerques"),
        ),
        array(
            "codi" => 3,
            "nom" => "Cuina",
            "descripcio" => "Descripció de la secció",
            "any" => "2025",
            "articles" => array("Sartens", "Perols", "Culleres", "Forqueta"),
        ),
        array(
            "codi" => 4,
            "nom" => "Esport",
            "descripcio" => "Descripció de la secció",
            "any" => "2021",
            "articles" => array("Pantalons deportius", "Camisa deportiva", "Jersey deportiu", "Xaqueta deportiva"),
        ),
    );

    #[Route('/dades_seccio', name: 'dades_seccio_error')]
    public function fitxa_error()
    {
         return $this->render("dades_seccio.html.twig", [
            'codi' => $this->dades[0]['codi'],
            'nom' => $this->dades[0]['nom'],
            'any' => $this->dades[0]['any'],
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