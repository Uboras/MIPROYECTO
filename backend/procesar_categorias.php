<?php

require_once __DIR__ . './../class/autoload.php';

// 1. Tomar el dato que vino del formulario
$nombre = $_POST['nombre'] ?? '';

// 2. Guardarlo usando tu clase Categorias
$db = new Database();
$categoria = new Categorias($db);
$categoria->nombre = $nombre;
$categoria->guardar();

// 3. Mostrar algo simple (HTML generado por PHP)
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Categoría guardada</title>
</head>
<body>
  <h1>Categoría guardada</h1>
  <p>Se guardó la categoría: <strong><?php echo htmlspecialchars($nombre); ?></strong></p>

  <p><a href="../views/formulario.html">Volver al formulario</a></p>
  <p><a href="lista_categorias.php">Ver lista de categorías</a></p>
</body>
</html>
