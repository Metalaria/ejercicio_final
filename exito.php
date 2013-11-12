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
            "<p><a href='registrar_ropa.php'>a&ntilde;adir una prenda</a></p>
                <p><a href='modificador_ropa.php'>Modificar una prenda</a></p>
                <p><a href='buscador_ropa.php'>Buscar una prenda</a></p>
                <p><a href='eliminar_ropa.php'>Eliminar una prenda</a></p>
                <form name= 'form1' action='desconexion.php' method='POST' >
                    <input type='submit' name='salir' value='salir' />
                </form>";
        }
?>
            
         
        
    </body>
</html>
