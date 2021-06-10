<?php 
    include("db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM apunte_tipo WHERE id = $id";
        $resultado_update = mysqli_query($conn, $query);
        if (mysqli_num_rows($resultado_update) == 1) {
            $row = mysqli_fetch_array($resultado_update);
            $titulo = $row['nombre'];
        }
    }

    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $titulo = $_POST['titulo'];

        $query = "UPDATE apunte_tipo SET nombre = '$titulo', fecha_actualizacion = now()
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
                    <form action="UpdateAT.php?id=<?php echo $_GET['id'];?>" method="post">

                        <div class="form-group">
                            <input type="text" name="titulo" value="<?php echo $titulo;?>"
                            class="form-control" placeholder="Actualice tipo de apunte">
                        </div><br>
                                    
                        <button class="btn btn-success" name="update">
                            Actulizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include("includes/footer.php") ?>