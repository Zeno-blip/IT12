<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}

class Connection{
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $dbname = 'gkb.database';
    public $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
    }
    
}

class Login extends Connection {
    private $user_id;
    private $role;

    public function login($username, $password) {
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($result);
    
        if ($row) {
            // Compare the plain text password directly
            if ($password === $row['password']) {
                $this->user_id = $row['user_id'];
                $this->role = $row['role'];
                return 1; // Login successful
            } else {
                return 10; // Wrong password
            }
        } else {
            return 100; // User not found
        }
    }
    

    public function idUser() {
        return $this->user_id;
    }

    public function getUserRole() {
        return $this->role;
    }
}
?>