<div class="container-fluid" style="background: rgba(219, 186, 144)">
    <h1 class="fw-bold p-3 text-center">Catalogo</h1>

    <div class="container-xl">
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach(contenido_controllers::arreglo_productos() as $tabla) { ?>
        <div class="col">
            <div class="card hvr-bob" style="width: 22rem;">
                <img src="<?php echo $tabla->getImagen() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <?php $id = $tabla->getId_producto() ?>
                    <p class="card-text"><?php echo $tabla->getDescripcion() ?></p>
                    <a href="<?php echo "index.php?c=".seg::codificar("pagina_dinamica")."&m=".seg::codificar("pagina_dinamica")."&i=".seg::codificar($id) ?>"><button type="button" class="btn btn-outline-dark w-100"><i class="bi bi-credit-card-fill"> Ver Más</i></button></a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    </div>
</div>

