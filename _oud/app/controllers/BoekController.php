<?php
class BoekController {
    public function lijstBoeken() {
        $boeken = [
            ['titel' => 'Boek 1', 'auteur' => 'Auteur 1'],
            ['titel' => 'Boek 2', 'auteur' => 'Auteur 2'],
            ['titel' => 'Boek 3', 'auteur' => 'Auteur 3'],
        ];

        include '../views/boeken.php/';
    }
}
?>