<?php
  if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
  }
  if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
  }
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }

   try {
        require_once('funciones/bd_conexion.php');
        $sql = "UPDATE contactos SET nombre = '$nombre', telefono = '$numero' WHERE id = '$id'"; 
        $resultado = $conn->query($sql);
   } catch (Exception $e) {
         $error = $e->getMessage();
   }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda PHP</title>
    <link rel="stylesheet" href="css/estilos.css" media="screen">
</head>
<body>
    <div class="contenedor">
        <h1>Agenda de Contactos</h1>
        <div class="contenido">
          <?php
          if ($resultado) {
            echo "Contacto actualizado";
          }else {
            echo "error " . $conn->error;
          }
           ?>
           <br>
           <a class="volver" href="index.php">Volver a Inicio</a>
        </div> <!--.contenido-->

    </div>
<?php
$conn->close();
 ?>
</body>
</html>
