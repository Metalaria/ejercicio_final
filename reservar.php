<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    echo "No ha iniciado sesi&oacute;n";
    header("refresh: 3; url= index.php");   
} else {
    $con = new mysqli('localhost', 'root', '', 'prueba');

// funcion para convertir el contenido de un array en un string
function makestring($array)
  {
  $outval = '';
  if (is_array($array)) {
   foreach($array as $key=>$value)
    {
    if(is_array($value))
      {
      $outval = makestring($value);
      }
    else
      {
      $outval = $value;
      }
    }
}
  
  return $outval;
  }
    // El blucle genera un formulario con cada uno de los valores que devuelve la consulta
    $busca = mysqli_query($con, "select ejercicio from ejercicios where reservado='n' ");
    echo "<form action='reservado.php' method='post' enctype='multipart/form-data'>";
    while ($f =  mysqli_fetch_array($busca)){
        $ejercicio=makestring($f);
        echo "<input type='checkbox' name='reservar_ejercicio[]' value='$ejercicio' />$ejercicio<br/>";
    }
    echo " <input type='submit' name='boton' value='reservar' />";
    echo "</form>";
    echo " <p><a href='exito.php'>Volver atr&aacute;s</a></p>";
   
    // este formulario sirve para destruir la sesión y desconectarse
    echo "<form name= 'form1' action='desconexion.php' method='POST' >
                    <input type='submit' name='salir' value='salir' />
                </form>";
}
?>
