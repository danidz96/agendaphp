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
              <div class="crear">
                  <h2>Nuevo Contacto</h2>
                  <form action="crear.php" method="post">
                          <div class="campo">
                              <label for="nombre">Nombre:</label>
                              <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                          </div>
                          <div class="campo">
                              <label for="numero">Teléfono:</label>      
                              <input type="text" name="numero" id="numero" placeholder="Número">
                          </div>
                          <input type="submit" value="Agregar" id="agregar" class="boton">  
                  </form>
              </div><!--.crear_contacto-->
        </div> <!--.contenido-->

    </div>
    
</body>
</html>
