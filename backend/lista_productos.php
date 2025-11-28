<?php
// backend/lista_categorias.php

require_once __DIR__ . '/../class/autoload.php';

$db = new Database();
$sql = "SELECT id, nombre,precio,categoria FROM productos ORDER BY id ASC";
$productos = $db->select($sql);

if (!empty($productos)) {
    foreach ($productos as $prod) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($cat['id']) . '</td>';
        echo '<td>' . htmlspecialchars($cat['nombre']) . '</td>';
        echo '<td>' . htmlspecialchars($cat['precio']) . '</td>';
        echo '<td>' . htmlspecialchars($cat['categoria']) . '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="2">No hay productos cargados.</td></tr>';
}
