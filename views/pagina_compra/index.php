<div class="container-fluid">
    <div class="vh-100 row m-0 text-center align-items-center justify-content-center">
        <div class = "col-auto">
            <div class="card border-warning mb-3" style="max-width: 20rem;">
                <div class="card-header">Detalles De La Compra</div>
                <?php foreach(contenido_controllers::arreglo_productos() as $tabla) { $id_comparacion = $tabla->getId_producto() ?>
                <?php if (seg::decodificar($i) == $id_comparacion){?>
                <div class="card-body text-daek">
                    <h5 class="card-title">Nombre: <?php echo $tabla->getDescripcion()?></h5>
                    <h5 class="card-title">Talla: <?php echo rand(35,44)?></h5>
                    <h5 class="card-title">Cantidad: <?php echo "1"?></h5>
                    <h5 class="card-title">Codigo de producto: <?php  echo $tabla->getId_producto()?></h5>
                    <p class="card-text mb-0">Precio: $<?php echo $precio=$tabla->getPrecio_venta() ?> </p>
                    <br>

                    <?php $total=($precio*0.07)+$precio?>
                   
                    <button type="button" class="btn btn-outline-warning">Pagar</button>
                </div>
                <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>