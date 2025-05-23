<?php
class Database {
    private $host = "localhost";
    private $db = "login_db";
    private $user = "root";
    private $pass = "";
    public $conn;

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }
}
?>
