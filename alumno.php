<?php
session_start();

        if (!isset($_SESSION['id_user'])) {
            echo "No ha iniciado sesi&oacute;n";
            header("refresh: 3; url= index.php");   
        } else{
            echo " <p><a href='reservar.php'>Reservar ejercicio</a></p>";
            echo " <p><a href='busqueda.php'>Ver ejercicios que ya est&aacute;n reservados</a></p>";
            
            // este formulario sirve para destruir la sesión y desconectarse
              echo"  <form name= 'form1' action='desconexion.php' method='POST' >
                    <input type='submit' name='salir' value='salir' />
                </form>";
        }
?>