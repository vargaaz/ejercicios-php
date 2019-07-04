<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"]; 
echo "Hola " . $nombre . " " . $apellido . ", <br /> 
Te has registrado con el siguiente correo electrónico: " . $email . ".";
?>

<?php
$contrasena = $_POST["contrasena"];
if($contrasena=="qwertz123")
   {
   echo "La contraseña es correcta";
   }
else
   {
   echo "La contraseña es incorrecta";
   }
?>