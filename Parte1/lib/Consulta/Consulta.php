 <?php

    require_once "lib/conexion/conexion.php";


    class Consulta extends conexion{

        
        function __construct(){
            
            
        }
        
        
        function actualizar($nom, $apellido, $edad, $curso, $correo, $id){
            $consultaUpdate="UPDATE usuarios SET Nombre = '".$nom."', Apellido = '".$apellido."', Edad = ".$edad.", Curso = '".$curso."',  Correo = '".$correo."' WHERE id = ".$id."";
            
            parent::consulta($consultaUpdate);
            //$resultado = $conector->query($consultaUpdate);
        }
        
    }

        

?>