<?php
// backend/lista_categorias.php

require_once __DIR__ . '/../class/autoload.php';

$db = new Database();
$sql = "SELECT id, nombre FROM categorias ORDER BY id ASC";
$categorias = $db->select($sql);

if (!empty($categorias)) {
    foreach ($categorias as $cat) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($cat['id']) . '</td>';
        echo '<td>' . htmlspecialchars($cat['nombre']) . '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="2">No hay categorías cargadas.</td></tr>';
}
