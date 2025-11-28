<?php
// backend/lista_categorias.php

require_once __DIR__ . '/../class/autoload.php';

$db = new Database();
$sql = "SELECT id, nombre,precio,categoria_id FROM productos ORDER BY id ASC";
$productos = $db->select($sql);

if (!empty($productos)) {
             foreach ($productos as $prod) {
        $id        = $prod['id'] ?? '';
        $nombre    = $prod['nombre'] ?? '';
        $precio    = $prod['precio'] ?? '';
        $categoria = $prod['categoria'] ?? 'Sin categoría'; // 👈 valor por defecto

        echo '<tr>';
        echo '<td>' . htmlspecialchars((string)$id) . '</td>';
        echo '<td>' . htmlspecialchars((string)$nombre) . '</td>';
        echo '<td>' . htmlspecialchars((string)$precio) . '</td>';
        echo '<td>' . htmlspecialchars((string)$categoria) . '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="2">No hay productos cargados.</td></tr>';
}
