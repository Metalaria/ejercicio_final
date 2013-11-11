<?php
session_start();
if (!isset($_SESSION['id_user'])) {
            echo "No ha iniciado sesi&oacute;n";
            header("refresh: 3; url= index.php");   
        } else{

$con = new mysqli('localhost', 'root', '', 'prueba');
// El blucle imprime cada uno de los resultados que devuelve la consulta
$busca = mysqli_query($con, " SELECT ejercicio FROM ejercicios WHERE reservado= 's'"); 
    while ($f =  mysqli_fetch_array($busca)){
        echo $f ['ejercicio']."<br/>" ; 
    }
    echo " <p><a href='exito.php'>volver atr&aacute;s</a></p>";
        
        }
?>