<!doctype html>
<html lang="en">

<?php include("database/dbi.php"); ?>
<?php
                    include 'includes/header.php';
            ?>

    <body data-sidebar="dark">

        <!-- Begin page -->
   

            <!-- ========== Left Sidebar Start ========== -->
         
<?php
                    include 'includes/Sidebar.php';
            ?>

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
                                <div class="p-lg-3">
                                    <h3>Cuentas</h3>

                                    <a href="RegistrarCuentas.php"><input type="button" value="Registrar" class="btn btn-primary   float-right "></a>   
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
            <th>Cedula </th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM cuentas ORDER BY ID_cuentas DESC";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Apellido']; ?></td>
            <td><?php echo $row['Cedula']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
           
            <td>
              <a href="edit_cuentas.php?ID_cuentas=<?php echo $row['ID_cuentas']?>" class="btn btn-secondary">
                <i class="fas fa-marker"><img src="assets/images/lapiz.png" height="20px"></i>
              </a>
              <a href="delete_cuentas.php?ID_cuentas=<?php echo $row['ID_cuentas']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"><img src="assets/images/basurero-cerrado.Png" height="20px" ></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
    </body>
</html>
