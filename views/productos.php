
<div class="row">
    <br><br>
    <?php foreach ($productos as $producto){ ?>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/img/<?= $producto["id"]; ?>" alt="Card image cap" height="300px">
                    <div class="card-body">
                        <!-- h5 class="card-title">Card title</h5 -->
                        <p class="card-text"><?= $producto["nombre"]; ?></p>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?= $producto["descripcion"]; ?></p>
                        <a onclick="id=<?= $producto["id"]; ?>" class="card-link" >Agregar a carrito</a>
                        <a href="#" class="card-link">Detalle</a>
                    </div>
                </div>
            </div>
    <?php } ?>
</div>
       