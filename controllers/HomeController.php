<?php
require_once 'core/Controller.php';
require_once 'models/BookModel.php';

class HomeController extends Controller {
    public function index() {
        $bookModel = new BookModel();
        $books = $bookModel->getAllBooks();

        $this->view('home', ['books' => $books]);
    }
}

?>