<div class="container-fluid" style="background: rgba(219, 186, 144)">
    <div class="vh-100 row m-0 text-center align-items-center justify-content-center">
        <div class = "col-auto">
            <div class="card border-primary mb-3" style="max-width: 40rem;">
                <div class="card-header">Buscador de Zapatillas</div>
                <div class="card-body text-primary">
                    <?php if($msg != "") {?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo seg::decodificar($msg) ?>
                    </div>
                    <?php }?>
                    <form action="<?php echo "index.php?c=".seg::codificar("busqueda")."&m=".seg::codificar("buscar_producto_mostrar") ?>" method="post" class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="col-12">
                            <label class="visually-hidden" for="inlineFormInputGroupUsername">ID</label>
                            <div class="input-group">
                            <div class="input-group-text">ID</div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Numero de ID" name="txtBuscar" />
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo seg::getToken() ?>" name="token"/>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-warning">Encontrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>