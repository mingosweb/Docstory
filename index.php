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

    if(!isset($_POST['accion'])){
        $mvc->principal();
    }else if($_POST['accion']=="ingresar"){
        $mvc->ingresar($_POST['usuario'],$_POST['password']);
    }
    
?>
</body>
</html>