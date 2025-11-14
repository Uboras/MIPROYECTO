<?php
require_once '../clases/Producto.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $producto = new Producto();
    $producto->nombre = $_POST['nombre'];
    $producto->precio = $_POST['precio'];
    $producto->categoria_id = $_POST['categoria_id'];
    $producto->guardar();
    header("Location: ../vistas/productos.html");
}
?>
