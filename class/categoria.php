<?php
/* @autor Hernán Manera */

class Categorias
{
    public $id;
    public $nombre;

    private $db; // instancia de Database

    public function __construct(Database $db)
    {
        $this->db = $db;
        if ($db) {
            echo "Conexión a la base de datos establecida.";
        }
    }

    public function guardar()
    {
           $sql = "INSERT INTO categorias (nombre) VALUES (?)";
            $this->id = $this->db->insert($sql, [$this->nombre]);
                  
    }

    public function eliminar()
    {
        $sql = "DELETE FROM categorias WHERE id = ?";
        return $this->db->delete($sql, [$this->id]);
    }
}
