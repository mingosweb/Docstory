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
            $res = $this->insertar("INSERT INTO usuario VALUES(null,'".$nombre."','".$apellido."','".$usuario."','".$encrip."')");
            return $res;
        }
        
        function cerrarS(){
            session_destroy();
        }
        
    }
   

?>