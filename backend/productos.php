<?php

require_once __DIR__ . '/../class/autoload.php';

$db = new Database();
$producto = new Productos($db);

if (!empty($_POST)) {
    $producto->nombre       = $_POST['nombre'] ?? '';
    $producto->precio       = $_POST['precio'] ?? 0;
    $producto->categoria_id = $_POST['categoria_id'] ?? null;
    $producto->guardar();
}
header('Location: ../backend/views/lista_productos.html');


exit;