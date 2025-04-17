<?php
require_once 'core/Database.php';

class BookModel extends Database {
    public function getAllBooks() {
        $stmt = $this->query("SELECT * FROM books");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>