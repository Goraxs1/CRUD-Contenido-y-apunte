<?php

    include("db.php"); 

    if (isset($_GET['id'])) { 
        $id = $_GET['id'];
        $query = "DELETE FROM apunte WHERE ID = $id";
        $resultado_delete = mysqli_query($conn, $query);
        if (!$resultado_delete) {
            die("Query fallida");
        }

        $_SESSION['mensaje']='Elemento eliminado';
        $_SESSION['tipo_mensaje'] = 'danger';

        header("location: apunte.php");
    }
?>
