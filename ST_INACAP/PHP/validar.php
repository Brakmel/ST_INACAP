<?php
include('db.php');
$User=$_POST['User'];
$Pass=$_POST['Pass'];
session_start();
$_SESSION['User']=$User;


$conexion=mysqli_connect("localhost","root","","");

$consulta="SELECT*FROM usuarios where User='$User' and Pass='$Pass'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:../Php/Administrador.php");

}else{
    ?>
  <h1>Si desconoces el codigo te recomiendo hablar con Brakmel, el te podra ayudar<a href="../index.html">Volver</a></h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);