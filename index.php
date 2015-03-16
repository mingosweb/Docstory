<!DOCTYPE html>
<html>
<head>
    <title>www.docstory.co</title>
    <link rel="stylesheet" type="text/css" href="vista/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="vista/css/estiloPrincipal.css" />
</head>
<body>
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

    /*if(!isset($_POST['accion'])){
        $mvc->principal();
    }else if($_POST['accion']=="ingresar"){
        $mvc->ingresar($_POST['usuario'],$_POST['password']);
    }*/
    
?>
</body>
</html>