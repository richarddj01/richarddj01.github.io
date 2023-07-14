<?php
require_once '../DAO.php';

$dao = new dao();


if($dao ->formularioContacto_Insertar($_POST['nombre'],$_POST['email'],$_POST['mensaje'])){
    header("Location: ../../contacto.php?enviado=true");
}
else{
    header("Location: ../../contacto.php");
}
exit();

?>