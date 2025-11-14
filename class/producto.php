<?php
require_once 'database.php';

class Producto {
    private $conn;
    public $id;
    public $nombre;
    public $precio;
    public $categoria_id;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function guardar() {
        $query = "INSERT INTO productos (nombre, precio, categoria_id) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$this->nombre, $this->precio, $this->categoria_id]);
    }

    public function listar() {
        $query = "SELECT p.id, p.nombre, p.precio, c.nombre AS categoria
                  FROM productos p
                  JOIN categorias c ON p.categoria_id = c.id";
        return $this->conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function eliminar($id) {
        $query = "DELETE FROM productos WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id]);
    }
}
?>
