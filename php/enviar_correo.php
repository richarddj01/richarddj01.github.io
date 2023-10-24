<?php
    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje'])){
            $nombre = $_POST['nombre'];
            $correo = $_POST['email'];
            $mensaje = $_POST['mensaje'];
            $encabezado_mensaje = "From: " . $nombre . " (". $correo .")\r\n";
            $encabezado_mensaje.= "X-Mailer: PHP/" . phpversion();
            $mail = mail("admin@ricardopineda.net","Formulario ricardopineda.net", $mensaje,$encabezado_mensaje);
            if($mail){
                header("Location: ../contacto.php?enviado=true");
            }
            else{
                header("Location: ../contacto.php");
            }
            exit();
        }
    }
?>