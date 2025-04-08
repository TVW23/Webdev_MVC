<?php
require_once 'models/BookModel.php';

class HomeController {
    public function index() {
        $bookModel = new BookModel();
        $books = $bookModel->getAllBooks();
        
        require 'views/home.php';
    }
}
?>