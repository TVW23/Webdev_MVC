<?php


require_once '../app/models/Boek.php';

class HomeController {
    public function index() {
        $boeken = Boek::getAllBooks();

        require_once '../app/view/home.php';
    }
}
?>