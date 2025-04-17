<?php 
require_once 'core/Database.php';

class UserModel extends Database {
    public function register($username, $password) {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)"; 
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':username' => $username, 
            ':password' => $hashed
        ]);
    }

    public function login($username, $password) {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return False;
    }
}
