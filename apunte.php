<?php include ("includes/header.php")?>
<?php include ("db.php"); ?>

<!--Visualizacion y formulario de tipo apunte --> 
<div class="container p-4">
        <h4>Formulario tipo apunte</h4>
        <div class="col-md-4">

            <?php if(isset($_SESSION['mensaje'])) { ?>
                <div class="alert alert-<?= $_SESSION['tipo_mensaje'];?>
                alert-dismissible fade show" role="alert">
                <?=$_SESSION['mensaje'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?> 

            <div class="card card-body">
                <form action ="save.php" method="POST">
                    <div class="form-group">
                        <input type="text"name="nombre" class="form-control" 
                        placeholder="Ingrese el tipo de apunte" autofocus>
                    </div><br>

                    <input type="submit" class="btn btn-success btn-block" name="Guardar_at" value="Guardar">
                </form>
            </div>
        </div><br>
        <div class="col-md-10">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha creacion</th>
                        <th>Fecha actualizacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM apunte_tipo";
                    $resultado_at = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_array($resultado_at)) { ?>
                        <tr>
                            <td><?php echo $row['ID']?></td>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['fecha_creacion']?></td>
                            <td><?php echo $row['fecha_actualizacion']?></td>
                            <td>
                                <a href="UpdateAT.php?id=<?php echo $row['ID']?>">
                                    <i class="fas fa-edit"></i><br>
                                </a>
                                <a href="deleteAT.php?id=<?php echo $row['ID']?>">
                                    <i class="fas fa-trash-alt"></i><br>
                                </a> 
                            </td>
                        </tr>
                    <?php } ?> 
                </tbody>
        </table>
    </div>
</div>
<!--Formulario para apuntes-->
<div class="container p-4">
        <h4>Formulario de apuntes</h4>
        <div class="col-md-4">

            <?php if(isset($_SESSION['mensaje'])) { ?>
                <div class="alert alert-<?= $_SESSION['tipo_mensaje'];?>
                alert-dismissible fade show" role="alert">
                <?=$_SESSION['mensaje'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?> 

            <div class="card card-body">
                <form action ="save.php" method="POST">
                    <div class="form-group">
                        <input type="number" min="1"name="contenido_id" class="form-control" 
                        placeholder="Ingrese id del contenido" autofocus>
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" 
                        placeholder="Nombre de apunte" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="text" name="URL" class="form-control" 
                        placeholder="Ingrese URL de apunte" autofocus>
                    </div><br>
                    <div class="form-group">
                        <input type="number" min="1"name="tipo" class="form-control" 
                        placeholder="Ingrese numero de tipo apunte" autofocus>
                    </div><br>

                    <input type="submit" class="btn btn-success btn-block" name="Guardar_apunte" value="Guardar">
                </form>
            </div>
        </div><br>
        <div class="col-md-10">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>contenido_id</th>
                        <th>Nombre</th>
                        <th>URL</th>
                        <th>Tipo</th>
                        <th>Fecha creacion</th>
                        <th>Fecha actualizacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM apunte";
                    $resultado_apunte = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_array($resultado_apunte)) { ?>
                        <tr>
                            <td><?php echo $row['ID']?></td>
                            <td><?php echo $row['contenido_id']?></td>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['url']?></td>
                            <td><?php echo $row['tipo']?></td>
                            <td><?php echo $row['fecha_creacion']?></td>
                            <td><?php echo $row['fecha_actualizacion']?></td>
                            <td>
                                <a href="UpdateApunte.php?id=<?php echo $row['ID']?>">
                                    <i class="fas fa-edit"></i><br>
                                </a>
                                <a href="deleteApunte.php?id=<?php echo $row['ID']?>">
                                    <i class="fas fa-trash-alt"></i><br>
                                </a> 
                            </td>
                        </tr>
                    <?php } ?> 
                </tbody>
        </table>
    </div>
</div>
