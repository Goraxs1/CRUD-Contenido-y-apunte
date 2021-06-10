<?php

    include("db.php"); 

    if (isset($_GET['id'])) { 
        $id = $_GET['id'];
        $query2 = "DELETE FROM apunte WHERE contenido_id = $id";
        $resultado_delete2 = mysqli_query($conn,$query2);
        $query = "DELETE FROM contenido WHERE ID = $id";
        $resultado_delete = mysqli_query($conn, $query);
        if (!$resultado_delete && !$resultado_delete2) {
            die("Query fallida");
        }

        $_SESSION['mensaje']='Elemento eliminado';
        $_SESSION['tipo_mensaje'] = 'danger';

        header("location: index.php");
    }
?>
