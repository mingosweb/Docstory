<?php

    include "controlador/controlador.principal.php";

    $mvc = new controladorMain();
$sesion= $mvc->haySesion();


    if(!isset($_GET['accion']) && !isset ($_POST['accion'])){
        
        $mvc->principal();
        
     }else if(isset ($_GET['accion']) && !isset ($_POST['accion']) ){
      
        switch ($_GET['accion']){
            case "registrar":
                                $mvc->registrar();    
							break;
            case "cerrar":
                           if($sesion==1){
                              $mvc->cerrarsesion();
                             }else{
                             echo $mvc->principal();
                           	}
                            break;
            case "crear":
							if($sesion==1){
                             $mvc->crear();
                            }else{
                            echo $mvc->principal();
                            }
                        break;
            
            case "inicio": if($sesion==1){
                              
                            $mvc->inicio(); }
                            else {
                            echo $mvc->principal();
                            }
                           
                           break;
            
            
            $variable = $_GET['accion'];
            $mvc->$variable();
            
            case "buscar": 
							if($sesion==1){
                            $mvc->buscar(); }
                            else {
                            echo $mvc->$variable();
                            }
                           
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

            case "guardar":
                        $mvc->guardar($_POST['contenido']);
                        break;
            
            
        }
    }
    
?>