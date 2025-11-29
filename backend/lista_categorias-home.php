<?php

require_once __DIR__ . '/../class/autoload.php';

$db = new Database();
$sql = "SELECT nombre FROM categorias ORDER BY id ASC";
$categorias = $db->select($sql);

if (!empty($categorias)) {
    foreach ($categorias as $cat) {
        $nombre    = $cat['nombre'] ?? '';
       
        echo '<div class="card-home">';
        echo '<p class="card-parrafo">' . htmlspecialchars($nombre) . '</p>';
        echo '</div>';
    }
    
    } else {
    echo '<p>No hay productos.</p>';
}

    
