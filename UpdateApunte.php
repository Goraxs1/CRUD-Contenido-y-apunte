<?php 
    include("db.php");
    /*update para contenido*/
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM apunte WHERE id = $id";
        $resultado_update = mysqli_query($conn, $query);
        if (mysqli_num_rows($resultado_update) == 1) {
            $row = mysqli_fetch_array($resultado_update);
            $nombre = $row['nombre'];
            $URL = $row['url'];
            $tipo = $row['tipo'];
        }
    }

    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $URL= $_POST['url']; 
        $tipo = $_POST['tipo'];

        $query = "UPDATE apunte SET nombre ='$nombre', url ='$URL', tipo = '$tipo' , fecha_actualizacion= now()
        WHERE id = $id";
        mysqli_query($conn, $query);

        $_SESSION['mensaje'] = 'Contenido actualizado';
        $_SESSION['tipo_mensaje'] = 'warning';
        header("location:apunte.php");
    }
?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="UpdateApunte.php?id=<?php echo $_GET['id'];?>" method="post">

                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre;?>" class="form-control" 
                        placeholder="Nombre de apunte" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="text" name="url" value="<?php echo $URL ; ?>" class="form-control" 
                        placeholder="Ingrese URL de apunte" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="number" min="1"name="tipo" value="<?php echo $tipo;?>"class="form-control" 
                        placeholder="Ingrese numero de tipo apunte" autofocus>
                    </div><br>
                                
                    <button class="btn btn-success" name="update">
                        Actulizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
