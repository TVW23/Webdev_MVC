<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'bibliotheek';
    private $username = 'root';
    private $password = '';
    protected $pdo;

    public function __construct() {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            die("Databaseverbinding mislukt: " . $e->getMessage());
        }
    }

    public function query($sql) {
        return $this->pdo->query($sql);
    }
}

?>