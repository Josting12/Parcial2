<div class="container-xxl" style="background: rgba(219, 186, 144)">
    <br>
    <center>          
    <div class="card mb-3 w-50">
    <div class="card">
    <div class="card-body">
        <?php foreach(contenido_controllers::arreglo_productos() as $tabla) { $id_comparacion = $tabla->getId_producto() ?>
        <?php if (seg::decodificar($i) == $id_comparacion){?>   
        <h5 class="card-title"><?php echo $tabla->getDescripcion() ?></h5>
        
        <p class="card-text">
        Precio De Compra: $<?php echo $tabla->getPrecio_venta()?>
        </p>
        <?php if(isset($_SESSION["correo"])) {?>
        <a href="<?php echo "index.php?c=".seg::codificar("pagina_compra")."&m=".seg::codificar("pagina_compra")."&i=".seg::codificar($id_comparacion) ?>">
        <button type="button" class="btn btn-outline-warning">Comprar Zapatilla </button>
        <p class="card-text mb-0">
        Cantidad Disponible Actualmente: <?php echo $tabla->getCantidad_en_existencia()?>
        </p>
        </a>
      


        <?php }else{?>
       
        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"> Comprar Zapatilla
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered      ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¡Estamos A Un Paso De Tu Compra!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Debes Iniciar Sesión Para Poder Terminar Tu Compra
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        
                        <a href="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("login"); setcookie("compra", $id_comparacion, time()+40) ?>">
                        <button type="button" class="btn btn-danger">
                            Iniciar Sesion
                        </button>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        <?php } ?>
        <p class="card-text">
        <small class="text-muted">Estas a un paso de realizar tu compra</small>
        </p>
        <p class="card-text">
        <small class="text-muted">*Presiona el boton Comprar*</small>
        </p>
    </div>
    </center>

    <?php } ?>
    <?php } ?>
    </div>
    </div>
</div>