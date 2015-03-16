<?php

include "modelo/modelo.usuario.php";

class controladorMain{
    
    function ingresar($user,$password){
        $usuario = new Tusuario();
        $resLogin = $usuario->acceder($user,$password);
        switch($resLogin){
            case 1:
                echo "usuario correcto";
            break;
            case 2:
                echo "Usuario o contraseña no son validos";
            break;
        }
    }
    
    function mostrarPagina($pagina){
        echo $pagina;   
    }
    
    function principal(){
        $pagina = file_get_contents("vista/page.php");
        $header1 = file_get_contents("vista/seccion/header.php");
        $pagina = preg_replace('/\#encabezado\#/ms',$header1,$pagina);
        $login = file_get_contents("vista/modulos/panel1.php");
        $pagina = preg_replace('/\#panel1\#/ms',$login,$pagina);
        $bienvenida = file_get_contents("vista/modulos/panel2.php");
        $pagina = preg_replace('/\#panel2\#/ms',$bienvenida,$pagina);
        echo $pagina;
    }
    
    function ninguna(){
    
    }

}

?>