<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Modificar Usuarios</title>
    </head>
    
    <body>
       
       <h1>Eliminar usuarios</h1>
       
       <div class="formulario">
           
            <form action="listadoUsuarios.php?borrar=true" method="post">
                
                <label for="id">ID del usuario que desea elimirar</label>
                <input type="text" name="id" id="id" autofocus required>


                <input type="submit" value="Enviar">

            </form>
        </div>
        
        <a href="insertarUsuario.php">Añadir otro usuario</a>
        <a href="muestraUsuario.php">Buscar a un usuario</a>
        <a href="actualizarUsuario.php">Actualizar a un usuario</a>
        <a href="listadoUsuarios.php?listado=true">Ver todos los usuarios</a>
   
    </body>
</html>