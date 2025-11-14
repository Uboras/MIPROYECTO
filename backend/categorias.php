<?php
require_once '../clases/Categoria.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoria = new Categoria();
    $categoria->nombre = $_POST['nombre'];
    $categoria->guardar();
    header("Location: ../vistas/categorias.html");
}
?>
