<?php

    include("db.php"); 

    if (isset($_GET['id'])) { 
        $id = $_GET['id'];
        $query = "DELETE FROM apunte_tipo WHERE ID = $id";
        $resultado_delete = mysqli_query($conn, $query);
        if (!$resultado_delete && !$resultado_delete2) {
            die("Query fallida");
        }

        $_SESSION['mensaje']='Elemento eliminado';
        $_SESSION['tipo_mensaje'] = 'danger';

        header("location: apunte.php");
    }
?>
