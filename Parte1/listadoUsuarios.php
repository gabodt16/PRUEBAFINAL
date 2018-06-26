<?php

    //require_once "lib/conexion/conexion.php";
    require_once "lib/Consulta/Consulta.php";

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css">
        <title></title>
    </head>

    <body>
        <?php
            
            $consulta = new Consulta();
            
        
            //$resultado= $conexion->
            /*
            $conector = new mysqli('localhost', 'root', '', 'juegos');
            if($conector->connect_errno){
                echo "Fallo al conectar a MySQL: ". $conector->connect_errno;
            }else{
            */
        
        
                function actualizar(){
                    
                    $id=$_POST["id"];
                    $new_nombre=$_POST["new_nombre"];
                    $new_apellido=$_POST["new_apellido"];
                    $new_edad=$_POST["new_edad"];
                    $new_curso=$_POST["new_curso"];
                    $new_correo=$_POST["new_correo"];
                    /*
                    
                    1834.34
                    57.51
                    $consultaUpdate="UPDATE usuarios SET Nombre = '".$new_nombre."', Apellido = '".$new_apellido."', Edad = ".$new_edad.", Curso = '".$new_curso."',  Correo = '".$new_correo."' WHERE id = ".$id."";
                    echo $consultaUpdate. "<br>";
                    
                    
                    $resultado = $conector->query($consultaUpdate);
                    mostrarListado();
                    
                    */
                    
                    echo "SON" . $id . $new_nombre . $new_apellido . $new_edad . $new_curso . $new_correo;
                    
                    $consulta->actualizar($new_nombre, $new_apellido, $new_edad, $new_curso, $new_correo, $id);
                    
                    
                }
                
             
                function insertar(){
                    
                    
                    //$conector = new mysqli('localhost', 'root', '', 'juegos');    
                    $nombre=$_POST["nombre"];
                    $apellido=$_POST["apellido"];
                    $edad=$_POST["edad"];
                    $curso=$_POST["curso"];
                    $correo=$_POST["correo"];
                    $consulta="INSERT INTO usuarios (Nombre, Apellido, Edad, Curso, Correo) VALUES('".$nombre."', '".$apellido."', '".$edad."', '".$curso."', '".$correo."')";
                    echo $consulta. "<br>";
    
                    $conexion->consulta($consulta);
                    //$resultado = $conector->query($consulta);
                    mostrarListado();

                }
            
                function borrar(){
                    //$conector = new mysqli('localhost', 'root', '', 'juegos');
                    $id=$_POST["id"];
                    $consulta="DELETE FROM usuarios WHERE id = ".$id."";
                    echo $consulta. "<br>";
    

                    $resultado = $conector->query($consulta);
                    mostrarListado();
                }
            
                
                
                if (isset($_GET['insertar'])) {
                    insertar();
                }else if(isset($_GET['actualizar'])){
                    actualizar();
                }else if(isset($_GET['borrar'])){
                    borrar();
                }elseif(isset($_GET['listado'])){
                    mostrarListado();
                }
            //}
            ?>
                
                
            <?php
        
            /* DELETE FROM `usuarios` WHERE `usuarios`.`id` = 35;*/        
            
                function mostrarListado(){
                    $cont = 1;
                    $conector = new mysqli('localhost', 'root', '', 'juegos');
                    $consulta2="SELECT * FROM usuarios";
                    $resultado1 = $conector->query($consulta2);
                    
            ?>
            
        <div id="tabla1">
        <table>

            <thead>
                <tr> <td>ID</td> <td>Nombre</td> <td>Apellido</td> <td>Edad</td> <td>Curso</td> <td>Correo</td> <td>Puntuación</td></tr>
            </thead>

            <tbody>
            
            
            <?php

                    foreach($resultado1 as $fila){
                        if (($cont % 2) == 0){
                                echo "<tr class='lineas'>". "<td>". $fila['id']. "</td>". "<td>". $fila['Nombre']. "</td>". "<td>". $fila['Apellido']. "</td>". "<td>". $fila['Edad']. "</td>".  "<td>". $fila['Curso']. "<td>". $fila['Correo']. "</td>". "</td>". "<td>". $fila['Puntuacion']. "</td>"."</tr>";
                        }else{
                            echo "<tr>". "<td>". $fila['id']. "</td>". "<td>". $fila['Nombre']. "</td>". "<td>". $fila['Apellido']. "</td>". "<td>". $fila['Edad']. "</td>".  "<td>". $fila['Curso']. "<td>". $fila['Correo']. "</td>". "</td>". "<td>". $fila['Puntuacion']. "</td>"."</tr>";
                        }
                        $cont++;
                    }
                }
                   
            ?>
            
            
            </tbody>
        </table><!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>  
        
        <a href="insertarUsuario.php">Añadir otro usuario</a>
        <a href="actualizarUsuario.php">Actualizar a un usuario</a>
        <a href="muestraUsuario.php">Buscar a un usuario</a>
        <a href="borrarUsuario.php">Borrar Usuarios</a>
    </body>
</html>