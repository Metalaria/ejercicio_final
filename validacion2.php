<?php

$con = new mysqli('localhost', 'root', '', 'prueba');
//recibe los datos y hace la consulta
$user = $_POST['user1'];
$pass = $_POST['pass1'];
//realiza la consulta para realizar la conexion
$queUser = mysqli_query( $con,"select usuario from usuarios where password = '$pass'");

$fila = mysqli_fetch_assoc($queUser);

$contra = $fila['usuario'];

if ($user == $contra) {
    header('location:exito.php');
} else {
    echo "<br/>"."usuario  o contrase&ntilde;a incorrecta  <br/>";
    echo "Redirigiendo a la p&aacute;gina principal ...<br/>";
    header('refresh: 3; url= index.php');
}

session_start();
if (!isset($_SESSION['id_user'])) {
    $_SESSION['id_user'] = $_POST['user1']; 
}
?>
