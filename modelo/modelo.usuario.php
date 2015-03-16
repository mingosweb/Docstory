<?php

    session_start();

    include "modelo.php";

    class Tusuario extends modelo{
    
        function usuario(){
            parent::modelo();
        }
        
        function acceder($user,$password){
            $tipoRes=0;
            $arrayUsuario = $this->obtener_resultado_arreglo("SELECT * FROM usuario WHERE (usuario.nomusuario='".$user."' and usuario.password = '".$password."')");
            foreach($arrayUsuario as $fila){
                if ($fila['nomusuario'] == $user){
                    if($fila['password'] == $password){
                        $_SESSION['usuario'] = $fila['nomusuario'];
                        $tipoRes = 1;
                    }else{
                        $tipoRes = 2;
                    }
                    
                }else{
                        $tipoRes = 3;
                }
            }
            return $tipoRes;
        }
        
        function insertar($nombre,$apellido,$usuario,$password){
            
            $res = $this->insertar("INSERT INTO usuario VALUES(null,'".$nombre."','".$apellido."','".$usuario."','".$password."')");
            return $res;
            
        }
        
    }
   

?>