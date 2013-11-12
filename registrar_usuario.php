<?php

$con = new mysqli('localhost', 'root', '', 'prueba');

function validar_clave($clave,&$error_clave){
   if(strlen($clave) < 6){
      $error_clave = "La clave debe tener al menos 6 caracteres";
      return false;
   }
   if(strlen($clave) > 16){
      $error_clave = "La clave no puede tener más de 16 caracteres";
      return false;
   }
   if (!preg_match('`[a-z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra min&uacute;scula";
      return false;
   }
   if (!preg_match('`[A-Z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra may&uacute;scula";
      return false;
   }
   if (!preg_match('`[0-9]`',$clave)){
      $error_clave = "La clave debe tener al menos un caracter numérico";
      return false;
   }
   $error_clave = "";
   return true;
}

function create_user($var){
$prefix = "U";
$var = substr($var, -5);
(int)$var++;

for($i = 0; $i <= 5- strlen((String)$var); $i++) {
$prefix .= '0';
}

$prefix.=$var;

return $prefix;
}
$execute = mysqli_query($con, "select id_user from usuarios
    WHERE id_user=(SELECT MAX(id_user) FROM usuarios)");
$row = mysqli_fetch_array($execute);
$var1 = $row['id_user'];

$userid=create_user($var1);
$contrasenna=$_POST['pass'] ;
$info=$_POST['info'];

$query="select '$userid' from usuarios where id_user = '$userid'";
$resultado=mysqli_query($con, $query);
$rowcount=mysqli_num_rows($resultado);
if( $rowcount != 0 ){
echo "Ese usuario ya existe, elije otro"."<br/>";
header('refresh: 3; url= registrar.php');
} elseif(empty($_POST['info'])){
    echo "Debe rellenar la descripci&oacute;n del usuario"."<br/>";
    header('refresh: 3; url= registrar.php');
}  elseif(empty($_POST['pass'])) {
    echo "Debe rellenar la contrase&ntilde;a"."<br/>";
    header('refresh: 3; url= registrar.php');
}
elseif (validar_clave($contrasenna, $error_clave)==true){
mysqli_query($con, "insert into usuarios (password, descripcion, id_user,
    creacion) 
    values ('$userid','$contrasenna', 'alumno' )");

echo "Ususario registrado con exito"."<br/>";
} else{
      echo "contrase&ntilde;a no v&aacute;lida: " . $error_clave."<br/>";
   }

header('refresh: 3; url= exito.php');


 

?>
