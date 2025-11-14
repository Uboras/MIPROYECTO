<?php
require_once 'database.php';

class Categoria {
    private $conn;
    public $nombre;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function guardar() {
        $query = "INSERT INTO categorias (nombre) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$this->nombre]);
    }
}
?>
