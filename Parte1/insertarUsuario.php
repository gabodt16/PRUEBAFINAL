<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Regístrate</title>
    </head>

    <body>
       
       <h1>Regístrate</h1>
       
       <div class="formulario">
           
            <form action="listadoUsuarios.php?insertar=true" method="post">

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" autofocus required>

                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" required>
                <br><br>

                <label for="edad">Edad</label>
                <input type="text" name="edad" id="edad" required>

                <label for="curso">Curso</label>
                <input type="text" name="curso" id="curso" required>
                <br><br>
                
                <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" required>
                <br><br>
                

                <input type="submit" value="Enviar" onclick="insertar()">

            </form>
        </div>
        
        
        
        <a href="muestraUsuario.php" >Buscar a un usuario</a>
        <a href="actualizarUsuario.php">Actualizar a un usuario</a>
        <a href="borrarUsuario.php">Borrar Usuarios</a>
        <a href="listadoUsuarios.php?listado=true">Ver todos los usuarios</a>
    </body>
</html>