<?php
class Boek {
    private $titel;
    private $auteur;
    private $prijs;

    public function __construct($titel, $auteur, $prijs) {
        $this->titel = $titel;
        $this->auteur = $auteur;
        $this->prijs = $prijs;
    }

    public function getTitel() {
        return $this->titel;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getPrijs() {
        return $this->prijs;
    }

    public static function getAllBooks() {
        $boeken = [
            new Boek("Boek 1", "Auteur 1", 10.99),
            new Boek("Boek 2", "Auteur 2", 11.99),
            new Boek("Boek 3", "Auteur 3", 12.99),            
        ];

        return $boeken;
    }

}
?>