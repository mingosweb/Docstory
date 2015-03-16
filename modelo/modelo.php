<?php

    include "conf.php";

    class modelo{
        
        var $motorBD = "mysql";
        var $host = "localhost";
        var $nombreBD = "desarrollo";
        var $usuarioBD = "desarrollo";
        var $passwordBD = "desarrollo";
        var $pdoObj;
    
        function modelo(){
            try{
                $this->pdoObj = new PDO($this->motorBD.":host=".$this->host.";dbname=".$this->nombreBD,$this->usuarioBD,$this->passwordBD);
            }catch(PDOException $e){
                echo "ERROR: ".$e->getMessage;
            } 
        }
        
        function peticion($sqlConsult){
            $res = $this->pdoObj->query($sqlConsult);
            return $res;
        }
        
        function obtener_resultado_arreglo($sqlConsult){
            $res = $this->pdoObj->query($sqlConsult);
            $array = $res->fetchAll();
            return $array;
        }
        
        function eliminar($sql){
            $res = $this->pdoObj->exec($sql);
           
        }
        
        function insertar($sql){
            $res = $this->pdoObj->exec($sql);
           
        }
        
         function actualizar($sql){
            $res = $this->pdoObj->exec($sql);
            
        }
        
        function cerrarConexion(){
            $this->pdoObj = null;
        }
    
    }
   

?>