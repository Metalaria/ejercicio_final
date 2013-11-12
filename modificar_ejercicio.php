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
/***************************************************************************************************************/

    $busca = mysqli_query($con, "SELECT ejercicio FROM ejercicios WHERE reservado= 's'");
    echo "<form action='modificando.php' method='post' enctype='multipart/form-data'>";
    $array= mysqli_fetch_array($busca);
    
    //while ($array= mysqli_fetch_array($busca)){
        $ejer=makestring($array);
        echo "$prenda"."<br/>";
            echo"Prenda: <input type='checkbox' name='editar_prenda' value='$ejer' />$ejer<br/>";
    //}
    echo " <input type='submit' name='boton' value='editar' />";
     
   echo "</form>";

 
} 


?>