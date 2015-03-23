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
                $script =  file_get_contents("vista/modulos/script.editor.php");
                $pagina = preg_replace('/\#librerias\#/ms',$script,$pagina);
                $header2 = file_get_contents("vista/seccion/header-usuario.php");
                $pagina = preg_replace('/\#encabezado\#/ms',$header2,$pagina);
                $cuerpo = file_get_contents("vista/modulos/cuerpo70.php");
                $pagina = preg_replace('/\#cuerpo\#/ms',$cuerpo,$pagina);
                $menuLateral = file_get_contents("vista/modulos/panel1.menuLateral.php");
                $pagina = preg_replace('/\#panel1\#/ms',$menuLateral,$pagina);
                $mensaje = file_get_contents("vista/modulos/panel2.index.php");
                $pagina = preg_replace('/\#panel2\#/ms',$mensaje,$pagina);
                echo $pagina;
            break;
            case 2:
                echo "Usuario o contraseña no son validos";
                $this->principal();
            break;
            default:
                echo "Usuario no existe";
                $this->principal();
            break;
        }
    }
    function inicio(){
                $pagina = file_get_contents("vista/page.php");
                $script =  file_get_contents("vista/modulos/script.editor.php");
                $pagina = preg_replace('/\#librerias\#/ms',$script,$pagina);
                $header2 = file_get_contents("vista/seccion/header-usuario.php");
                $pagina = preg_replace('/\#encabezado\#/ms',$header2,$pagina);
                $cuerpo = file_get_contents("vista/modulos/cuerpo70.php");
                $pagina = preg_replace('/\#cuerpo\#/ms',$cuerpo,$pagina);
                $menuLateral = file_get_contents("vista/modulos/panel1.menuLateral.php");
                $pagina = preg_replace('/\#panel1\#/ms',$menuLateral,$pagina);
                $mensaje = file_get_contents("vista/modulos/panel2.index.php");
                $pagina = preg_replace('/\#panel2\#/ms',$mensaje,$pagina);
                echo $pagina;
    }
    
    function mostrarPagina($pagina){
        echo $pagina;   
    }
    
    function principal(){
        $pagina = file_get_contents("vista/page.php");
          $script = file_get_contents("vista/modulos/script.sesion.php");
        $pagina = preg_replace('/\#librerias\#/ms',$script,$pagina);
        $header1 = file_get_contents("vista/seccion/header.php");
        $pagina = preg_replace('/\#encabezado\#/ms',$header1,$pagina);
         $script = file_get_contents("vista/modulos/script.sesion.php");
        $pagina = preg_replace('/\#librerias\#/ms',$script,$pagina);
        $cuerpo = file_get_contents("vista/modulos/cuerpo.php");
        $pagina = preg_replace('/\#cuerpo\#/ms',$cuerpo,$pagina);
        $login = file_get_contents("vista/modulos/panel1.php");
        $pagina = preg_replace('/\#panel1\#/ms',$login,$pagina);
        $bienvenida = file_get_contents("vista/modulos/panel2.php");
        $pagina = preg_replace('/\#panel2\#/ms',$bienvenida,$pagina);
        echo $pagina;
    }
    
    function registrar(){
        $pagina = file_get_contents("vista/page.php");
         $script = file_get_contents("vista/modulos/script.sesion.php");
        $pagina = preg_replace('/\#librerias\#/ms',$script,$pagina);
        $header1 = file_get_contents("vista/seccion/header.php");
        $pagina = preg_replace('/\#encabezado\#/ms',$header1,$pagina);
        $cuerpo = file_get_contents("vista/modulos/cuerpo.php");
        $pagina = preg_replace('/\#cuerpo\#/ms',$cuerpo,$pagina);
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
        
        $this->principal();
            
        }
    function cerrarsesion(){
    $usuario= new Tusuario();
    $usuario->cerrarS();
    $this->principal();
    }
    
    function haySesion(){
        $usuario = new Tusuario();
        $rta=$usuario->Existe_sesion();
        return $rta;
        
    }
    function crear(){
                $pagina = file_get_contents("vista/page.php");
                $script =  file_get_contents("vista/modulos/script.editor.php");
                $pagina = preg_replace('/\#librerias\#/ms',$script,$pagina);
                $header2 = file_get_contents("vista/seccion/header-usuario.php");
                $pagina = preg_replace('/\#encabezado\#/ms',$header2,$pagina);
                $cuerpo = file_get_contents("vista/modulos/cuerpo70.php");
                $pagina = preg_replace('/\#cuerpo\#/ms',$cuerpo,$pagina);
                $menuLateral = file_get_contents("vista/modulos/panel1.menuLateral.php");
                $pagina = preg_replace('/\#panel1\#/ms',$menuLateral,$pagina);
                $editor = file_get_contents("vista/modulos/panel2.editor.html");
                $pagina = preg_replace('/\#panel2\#/ms',$editor,$pagina);
                echo $pagina;
    
    }
    
    function guardar($contenido){
        $usuario = new Tusuario();
        $usuario->guardar_doc($contenido);
        echo "Documento guardado!";
        $this->inicio();
    }
    
    function buscar(){
                $pagina = file_get_contents("vista/page.php");
                $script =  file_get_contents("vista/modulos/script.editor.php");
                $pagina = preg_replace('/\#librerias\#/ms',$script,$pagina);
                $header2 = file_get_contents("vista/seccion/header-usuario.php");
                $pagina = preg_replace('/\#encabezado\#/ms',$header2,$pagina);
                $cuerpo = file_get_contents("vista/modulos/cuerpo70.php");
                $pagina = preg_replace('/\#cuerpo\#/ms',$cuerpo,$pagina);
                $menuLateral = file_get_contents("vista/modulos/panel1.menuLateral.php");
                $pagina = preg_replace('/\#panel1\#/ms',$menuLateral,$pagina);
                $buscar = file_get_contents("vista/modulos/panel2.buscar.php");
                $pagina = preg_replace('/\#panel2\#/ms',$buscar,$pagina);
                echo $pagina;
    
    
    }
    }

?>