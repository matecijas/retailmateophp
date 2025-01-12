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


    #[Route('/dades_seccio/{codi}', name: 'dades_seccio')]
    public function fitxa($codi)
    {
        $resultat = array_filter($this->dades, function ($dades) use ($codi) {
            return $dades["codi"] == $codi;
        });

        if (count($resultat) > 0) {
            $resposta = "";
            $resultat = array_shift($resultat); // Torna el primer element
            $resposta .= "<ul>
                            <li>" . $resultat["nom"] . "</li>
                            <li>" . $resultat["codi"] . "</li>
                            <li>" . $resultat["any"] . "</li>
                             <li>" . implode(", ", $resultat["articles"]) . "</li>
                            
                        </ul>";

            return new Response("<html><body>$resposta</body></html>");
        } else {
            return new Response("Seccio no existeix");
    }
}
}

?>