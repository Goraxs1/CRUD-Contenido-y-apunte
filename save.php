<?php

include("db.php");

if(isset($_POST['Guardar_contenido'])){
    $titulo = $_POST['Titulo'];
    $descripcion = $_POST['Descripcion'];

    $query = "INSERT INTO contenido (nombre,descripcion,fecha_creacion,fecha_actualizacion) 
    VALUES ('$titulo','$descripcion',now(),now())";
    $resultado= mysqli_query($conn, $query);
    if(!$resultado){
        die("Query fallida");
    }
    $_SESSION['mensaje'] = 'Contenido guardado';
    $_SESSION['tipo_mensaje'] = 'success';

    header("location: index.php");
}

if(isset($_POST['Registro'])) {
    $nombre = $_POST['usuario'];
    $pass = $_POST['contraseña'];
    
    $query = "INSERT INTO usuarios (email,codigo,fecha_creacion,fecha_actualizacion,fecha_codigo)
    VALUES ('$nombre','$pass',now(),now(),now())";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        die("query fallida");
    }
    header("location: login.php");
}

if(isset($_POST['Guardar_apunte'])) {
    $id =$_POST['contenido_id'];
    $nombre = $_POST['nombre'];
    $URL = $_POST['URL'];
    $tipo = $_POST['tipo'];

    $query = "INSERT INTO apunte (contenido_id,nombre,url,tipo,fecha_creacion,fecha_actualizacion)
    VALUES ('$id','$nombre','$URL','$tipo',now(),now())";
    $resultado_apunte = mysqli_query($conn,$query);
    if(!$resultado_apunte){
        die("query fallida"); 
    }
    header("location:apunte.php");
}

if(isset($_POST['Guardar_at'])) {
    $nombre = $_POST['nombre'];

    $query = "INSERT INTO apunte_tipo (nombre, fecha_creacion,fecha_actualizacion) VALUES ('$nombre',now(),now())";
    $resultado_at = mysqli_query($conn,$query);
    if(!$resultado_at){
        die("query fallida"); 
    }
    header("location:apunte.php");
}
?>
