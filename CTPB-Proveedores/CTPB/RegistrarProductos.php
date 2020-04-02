<body data-sidebar="dark"> 
<?php   include 'includes/cerrar.php';
                      include 'includes/header.php';
                      include 'includes/Sidebar.php';?>

<div class="main-content">
<div class="page-content">
<div class="card ">

        <h1>Registro producto</h1>
        <form method="POST" action="./nuevo.php">
            <label for="codigo">Id producto</label>
            <input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

            <label for="descripcion">Descripción:</label>
            <textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>

            <label for="precioVenta">Precio de venta:</label>
            <input class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

            <label for="precioCompra">Precio de compra:</label>
            <input class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">
            
            <label for="existencia">Existencia:</label>
            <input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
            <br><br><input class="btn btn-info" type="submit" value="Guardar">
            </form>
    </div>
    </div>
    </div>
            <?php
                include 'includes/footer.php';
            ?>