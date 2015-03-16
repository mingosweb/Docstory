<?php

include "modelo/modelo.usuario.php";

class controladorMain{
    
    function ingresar($user,$password){
        $usuario = new Tusuario();
        $resLogin = $usuario->acceder($user,$password);
        switch($resLogin){
            case 1:
                echo "1";
            break;
            case 2:
                echo "2";
            break;
            case 3:
                echo "3";
            break;
            default:
            echo "No existe";
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

}

?>