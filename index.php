<?php

    include "controlador/controlador.principal.php";

    $mvc = new controladorMain();


    if(!isset($_GET['accion']) && !isset ($_POST['accion'])){
        
        $mvc->principal();
        
     }else if(isset ($_GET['accion']) && !isset ($_POST['accion']) ){
      
        switch ($_GET['accion']){
            case "registrar": 
                            $mvc->registrar();
                            break;
            case "cerrar":
                            $mvc->cerrarsesion();
                            break;
          
        }
    }else if(!isset ($_GET['accion']) && isset ($_POST['accion']) ){
        
        switch ($_POST['accion']){
            case "registrar2": 
                            $mvc->registrar2($_POST['nombre'], $_POST['apellido'],$_POST['usuario'],$_POST['password']);
            break;
            case "ingresar":
            $mvc->ingresar($_POST['usuario'],$_POST['password']);
            break;
        }
    }
    
?>