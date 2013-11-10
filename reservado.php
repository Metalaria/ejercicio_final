<?php

session_start();

if (!isset($_SESSION['id_user'])) {
    echo "No ha iniciado sesi&oacute;n";
    header("refresh: 3; url= index.php");   
}else {
$con = new mysqli('localhost', 'root', '', 'prueba');

if(empty($_REQUEST["reservar_ejercicio"])){
    echo "No ha introducido ningún ejercicio";
}

if(isset($_REQUEST["reservar_ejercicio"])) {
    $q_res = "update ejercicios set reservado = 's' where ejercicio in ('" . implode("','", $_POST['reservar_ejercicio']) . "')";
    mysqli_query($con, $q_res);
    echo "ejercicio reservado con éxito";
    header('refresh: 3; url= exito.php');
}

}

?>
