<?php
include 'CONEX.php';
$Usuario=$_POST['usuariooo'];
$contra=$_POST['contraseñaaa'];


$insertar = "INSERT INTO  usuarios (Usuario, Password) 
VALUES ('$Usuario','$contra')";
$res= mysqli_query($conex1,$insertar);  
if(!$res){
  echo "<script> alert('Error al registrar los datos');window.location='registrar.html'</script>";
}else{
    echo "<script> alert('¡Registro exitoso!');window.location='login.html'</script>";
}
mysqli_close($conex1);