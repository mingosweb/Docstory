<?php

include "modelo/modelo.usuario.php";

class controladorMain{
    
    function ingresar($user,$password){
        $usuario = new Tusuario();
        $encrip = md5($password);
        $resLogin = $usuario->acceder($user,$encrip);
        switch($resLogin){
            case 1:
                $pagina = file_get_contents("vista/page.php");
                $header1 = file_get_contents("vista/seccion/header-usuario.php");
                $pagina = preg_replace('/\#encabezado\#/ms',$header1,$pagina);
                echo $pagina;
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
    
    function registrar(){
     $pagina = file_get_contents("vista/page.php");
        $header1 = file_get_contents("vista/seccion/header.php");
        $pagina = preg_replace('/\#encabezado\#/ms',$header1,$pagina);
        $login = file_get_contents("vista/modulos/panel1.registro.php");
        $pagina = preg_replace('/\#panel1\#/ms',$login,$pagina);
        $bienvenida = file_get_contents("vista/modulos/panel2.registro.php");
        $pagina = preg_replace('/\#panel2\#/ms',$bienvenida,$pagina);
        echo $pagina;
    }
    
    function registrar2($nombre, $apellido,$usu,$password) {
        $usuario = new Tusuario();
        $usuario->insertar_usuario($nombre, $apellido,$usu,$password);
    
        echo "EL USUARIO HA SIDO REGISTRADO!";
         echo "<br>";
        echo "Ya puedes acceder a tu cuenta ";
        echo "<br>";
        $this->principal();
            
        }
    }

?>