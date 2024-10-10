<?php

class Dbh{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "login_system";

    protected function connect() {
        $dsn = 'mysql:host=' . $this -> hostname . '; dbname=' . $this -> database; 
        $pdo = new PDO($dsn, $this -> username, $this -> password);
        $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

    public function setUserSmtp($email, $userName, $password_1, $password_2) {
        if ($password_1 !== $password_2) {
            throw new Exception("Passwords do not match.");
        }
        
        $hashed_password = password_hash($password_1, PASSWORD_DEFAULT);
    
        $sql = "INSERT INTO sign_up(email, username, password, conform_password) VALUES(?, ?, ?, ?)";
        $smtp = $this->connect()->prepare($sql);
    
        try {
            $smtp->execute([$email, $userName, $hashed_password, $hashed_password]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function loginUser($email, $password) {
        $sql = "SELECT * FROM sign_up WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return $user;  
        } else {
            return false;  
        }
    }
    
}
