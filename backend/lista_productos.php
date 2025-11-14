<?php
require_once '../clases/Producto.php';
$producto = new Producto();
$lista = $producto->listar();
echo json_encode($lista);
?>
