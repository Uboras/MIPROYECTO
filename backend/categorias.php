<?php

require_once __DIR__ . '/../class/autoload.php';

$db = new Database();
$categoria = new Categorias($db);

if (!empty($_POST)) {
    $categoria->nombre = $_POST['nombre'] ?? '';
    $categoria->guardar();
}
header('Location: ../backend/views/lista_categorias.html');

exit;