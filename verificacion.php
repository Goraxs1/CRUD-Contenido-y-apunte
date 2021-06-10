<?php
include("db.php");

$nombre = $_POST["usuario"];
$pass = $_POST["contraseña"];

$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE email = '".$nombre."' and codigo = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    header("location:index.php");
}
else if ($nr == 0)
{
    echo "Datos de usuario invalido";
}
?>
