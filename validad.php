<?php
include ('conexion.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$consulta="SELECT*FROM usuarios Where Usuario= '$usuario' and Password= '$contraseña'";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas){
    echo "<script> alert('Bienvenido $usuario');window.location='login.html'</script>";
}else{
    include("login.html");
    ?>
    <h1> erro SXSXr</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conex);
?>
