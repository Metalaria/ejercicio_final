<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    echo "No ha iniciado sesi&oacute;n";
    header("refresh: 3; url= index.php");   
} else {
    $con = new mysqli('localhost', 'root', '', 'prueba');
$busqueda =""; 

$all="";


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
    
    $busca = mysqli_query($con, "select ejercicio from ejercicios where reservado='n' ");
    echo "<form action='reservado.php' method='post' enctype='multipart/form-data'>";
    while ($f =  mysqli_fetch_array($busca)){
        $user=makestring($f);
        echo "<input type='checkbox' name='reservar_ejercicio[]' value='$user' />$user<br/>";
    }
    echo " <input type='submit' name='boton' value='reservar' />";
    echo "</form>";
    echo " <p><a href='exito.php'>Volver atr&aacute;s</a></p>";
    
    echo "<form name= 'form1' action='desconexion.php' method='POST' >
                    <input type='submit' name='salir' value='salir' />
                </form>";
    

}


?>
