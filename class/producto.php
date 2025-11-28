<?php
/* @autor Hernán Manera */

class Productos
{
    public $id;
    public $nombre;
    public $precio;
    public $categoria_id;

    private $db; // instancia de Database

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function guardar()
    {
        if ($this->id) {
            // update
            $sql = "UPDATE productos 
                    SET nombre = ?, precio = ?, categoria_id = ?
                    WHERE id = ?";
            return $this->db->update($sql, [
                $this->nombre,
                $this->precio,
                $this->categoria_id,
                $this->id
            ]);
        } else {
            // insert
            $sql = "INSERT INTO productos (nombre, precio, categoria_id)
                    VALUES (?, ?, ?)";
            $this->id = $this->db->insert($sql, [
                $this->nombre,
                $this->precio,
                $this->categoria_id
            ]);
            return $this->id;
        }
    }

    public function eliminar()
    {
        $sql = "DELETE FROM productos WHERE id = ?";
        return $this->db->delete($sql, [$this->id]);
    }
}
