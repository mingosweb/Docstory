<?php

    session_start();

    include "modelo.php";

    class Tusuario extends modelo{
    
        function usuario(){
            parent::modelo();
        }
        
        function acceder($user,$password){
            $tipoRes=0;
            $arrayUsuario = $this->obtener_resultado_arreglo("SELECT * FROM usuario WHERE (usuario.nomusuario='".$user."')");
            foreach($arrayUsuario as $fila){
                if ($fila['nomusuario'] == $user && $fila['password'] == $password){
                    $_SESSION['usuario'] = $fila['nomusuario'];
                    $tipoRes=1;
                    break;
                }else{
                    $tipoRes = 2;
                }
            }
            return $tipoRes;
        }
        
        function insertar_usuario($nombre,$apellido,$usuario,$password){
            $encrip = md5($password);
            $res = $this->insertar("insert into usuario (nombre,apellido,nomusuario,password) values ('".$nombre."','".$apellido."','".$usuario."','".$encrip."')");
            return $res;
        }
        
        function guardar_doc($contenido){
            $consulta=$this->obtener_resultado_arreglo("SELECT id FROM usuario WHERE    (usuario.nomusuario='".$_SESSION['usuario']."')");
             foreach($consulta as $fila){
                 $res = $this->insertar("INSERT INTO documentos VALUES(null,'".$fila['id']."','".$_SESSION['usuario']."','introduccion','1','".$contenido."')");
            return $res;
             
             }
   
        }
        
         function cerrarS(){
            if (isset ($_SESSION['usuario'])){
            unset($_SESSION['usuario']);
         session_destroy();}
         }
        
        function Existe_sesion(){
            
           
        if (isset ($_SESSION['usuario'])){
            $rta= true;
             
        }else {
            $rta= false;
             
        }
             return $rta;
        
        }
    }
   

?>