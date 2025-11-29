<?php

require_once __DIR__ . '/../class/autoload.php';

$db = new Database();
$sql = "SELECT nombre, precio, categoria_id FROM productos ORDER BY id ASC";
$productos = $db->select($sql);

if (!empty($productos)) {

    
    foreach ($productos as $prod) {

        
        $nombre    = $prod['nombre'] ?? '';
        $precio    = $prod['precio'] ?? '';
        $categoria = $prod['categoria'] ?? 'Sin categoría'; 

        echo '<div class="card-home">';
        
        echo '<p class="card-parrafo">' . htmlspecialchars($nombre) . '</p>';
        echo '<p class="card-parrafo">' . htmlspecialchars($categoria) . '</p>';
        echo '<p class="card-parrafo">$ ' . number_format($precio, 2) . '</p>';
        echo '<a href="#" class="btn-producto">Ver producto</a>';
        echo '</div>';
    }
    } else {
    echo '<p>No hay productos.</p>';
}
