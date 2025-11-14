<?php
require_once '../clases/Categoria.php';
$categoria = new Categoria();
$lista = $categoria->listar();
echo json_encode($lista);
?>
