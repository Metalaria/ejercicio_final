<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
       <?php

        session_start();

        if (!isset($_SESSION['id_user'])) {
            echo "No ha iniciado sesi&oacute;n";
            header("refresh: 3; url= index.php");   
        } else{
            echo " <p><a href='reservar.php'>Reservar ejercicio</a></p>";
                
              echo"  <form name= 'form1' action='desconexion.php' method='POST' >
                    <input type='submit' name='salir' value='salir' />
                </form>";
        }
?>
            
         
        
    </body>
</html>
