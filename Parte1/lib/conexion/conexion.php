<?php

    class conexion{
        
        //Atributos para realizar la conexión
        private $host= "localhost";
        private $user= "root";
        private $pass= "";
        private $db_name= "juegos";
        
        private $mysqli;
        private $error= false;
        
        function __construct(){
            
            $this->mysqli= new mysqli($this->host, $this->user, $this->pass, $this->db_name);
            if($this->mysqli->connect_errno){
                $this->error= true;
            }
            
        }
        
        function consulta($consulta){
            if($this->error==false){
                $resultado= $this->mysqli->query($consulta);
                return $resultado;
            }else{
                return null;
            }
        }
        
        
        
    }

?>