<!doctype html>
<html lang="en">

<?php include("database/db.php"); ?>
<?php
                      include 'includes/cerrar.php';
                      include 'includes/header.php';
                      include 'includes/Sidebar.php';
            ?>

    <body data-sidebar="dark">

        <!-- Begin page -->
   

            <!-- ========== Left Sidebar Start ========== -->
         


            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

           

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="card ">
                             <div class="card-body">
                                <div class="p-lg-1">
                                    <h3>Proveedores</h3>

                                    <a href="registro.php"><input type="button" value="Registrar" class="btn btn-primary   float-right "></a>   
                        <!-- end page title -->
                    </div> <!-- container-fluid -->
                    <div class="col-md-8">
        <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
         
            <th>Telefono</th>
            <th>Nombre_empresa</th>
            <th>Direccion_empresa</th>
            <th>Telefono_empresa</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM proveedores ORDER BY id_proveedor DESC";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['cedula']; ?></td>
            <td><?php echo $row['telefono']; ?></td>

            <td><?php echo $row['nombre_empresa']; ?></td>
            <td><?php echo $row['direccion_empresa']; ?></td>
            <td><?php echo $row['telefono_empresa']; ?></td>
            <td>
 
              <a href="edit.php?id_proveedor=<?php echo $row['id_proveedor']?>" class="btn btn-secondary">
                <i class="fas fa-marker" ><img src="assets/images/lapiz.png" height="20px"></i>
              </a>
              <a href="delete_task.php?id_proveedor=<?php echo $row['id_proveedor']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"><img src="assets/images/basurero-cerrado.PnG" height="20px" ></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

                <br>
            <?php
                include 'includes/footer.php';
            ?>
    </body>
</html>
