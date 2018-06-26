<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Modificar Usuarios</title>
    </head>

    <body>
       
       <h1>Modificar Usuarios</h1>
       
       <div class="formulario">
           
            <form action="listadoUsuarios.php?actualizar=true" method="post">
                
                <label for="id">ID del usuario</label>
                <input type="text" name="id" id="id" autofocus required>

                <label for="new_nombre">Nuevo nombre</label>
                <input type="text" name="new_nombre" id="new_nombre" required>
                <br><br>

                <label for="new_apellido">Nuevo apellido</label>
                <input type="text" name="new_apellido" id="new_apellido" required>

                <label for="new_edad">Nueva edad</label>
                <input type="text" name="new_edad" id="new_edad" required>
                <br><br>

                <label for="new_curso">Nuevo curso</label>
                <input type="text" name="new_curso" id="new_edad" required>
                
                
                <label for="new_correo">Nuevo correo</label>
                <input type="email" name="new_correo" id="new_correo" required>
                <br><br>

                <input type="submit" value="Enviar">

            </form>
        </div>
        
        <a href="insertarUsuario.php">Añadir otro usuario</a>
        <a href="muestraUsuario.php">Buscar a un usuario</a>
        <a href="borrarUsuario.php">Borrar Usuarios</a>
        <a href="listadoUsuarios.php?listado=true">Ver todos los usuarios</a>
    </body>
</html>