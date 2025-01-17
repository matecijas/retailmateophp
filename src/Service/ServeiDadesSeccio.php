<?php
namespace App\Service;

class ServeiDadesSeccio
{
    private $dades = array(
        array(
            "codi" => 1,
            "nom" => "Roba",
            "descripcio" => "Descripció de la secció",
            "any" => "2024",
            "articles" => array("Pantalons", "Camisa", "Jersey", "Xaqueta"),
            "imatge"=> "ropa.jpg"
        ),
        array(
            "codi" => 2,
            "nom" => "Ferramentes",
            "descripcio" => "Descripció de la secció",
            "any" => "2023",
            "articles" => array("Destornillador", "Clau", "Pegament", "Tuerques"),
            "imatge"=> "ferramentes.jpeg"
        ),
        array(
            "codi" => 3,
            "nom" => "Cuina",
            "descripcio" => "Descripció de la secció",
            "any" => "2025",
            "articles" => array("Sartens", "Perols", "Culleres", "Forqueta"),
            "imatge"=> "cocina.jpeg"
        ),
        array(
            "codi" => 4,
            "nom" => "Esport",
            "descripcio" => "Descripció de la secció",
            "any" => "2021",
            "articles" => array("Pantalons deportius", "Camisa deportiva", "Jersey deportiu", "Xaqueta deportiva"),
            "imatge"=> "ropadeport.jpg"
        ),
    );

public function get(){
        return $this->dades;
    }
}
?>