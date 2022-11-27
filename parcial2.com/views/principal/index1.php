<?php
if (session_status() == 1) session_start();
require_once("models/producto.php");
require_once("controllers/producto_controller.php");
?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/cr1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <p>La mayoría de los perros, saben lo que son, no como los humanos..</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../img/cr2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <p>Un perro es una sonrisa y una cola que se mueve alegremente... lo demás ¡No importa!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../img/cr3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <p>Todos los hombres son dioses para su perro. Por eso hay gente que ama más a sus perros que a los hombres.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>
<br>

<hr>
<br>
<div class="container-sm">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="card border-warning mb-3" style="max-width: 18rem;">
         <div class="card-header">Nosotros</div>
              <div class="card-body text-info">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
         </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="card border-warning mb-3" style="max-width: 18rem;">
         <div class="card-header">Enfermedades</div>
              <div class="card-body text-info">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
         </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="card border-warning mb-3" style="max-width: 18rem;">
         <div class="card-header">Razas</div>
              <div class="card-body text-info">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
         </div>
      </div>

    </div>
    <br>
</div>
     <hr>

    <h1 class="text-center">Razas</h1>

<hr>
<hr>

<div class="container-fluid">
    

<div class="row w-100">
<?php

if (isset($_GET["id"])) {
    $obj = new producto($_GET["id"]);
    $resultado = $obj->Bproducto();
    $n = 5;

    foreach ($resultado as $r) {
        if(count($resultado) == $n){
            $n = 6;

        
?>
                    <div class="col">
                <div class="card" style="width:18rem;">
                    <img src="img/p<?php echo $resultado["id_producto"]?>.jpg" alt="Teckel" width="250" height="250">
                    <div class="card-body">
                    <h3><?php echo $resultado["descripcion"] ?></h3>
                        <p class="card-text">
                            
                        </p>
                        <h3><?php echo $resultado["costo_compra"] ?></h3>
                        
                    <a href="<?php echo "index.php?c=".seg::codificar("contacto")."&m=".seg::codificar("crear") ?>" class="btn btn-primary">Comprar</a>
                </div>
                    </div>
                </div>
            </div>
<?php
    }

    }
} else {
    $resultado = producto::Mproducto();
    foreach ($resultado as $r) {

    ?>
    
        
            <div class="col">
                <div class="card" style="width:18rem;">
                    <img src="img/p<?php echo $r["id_producto"]?>.jpg" alt="" width="250" height="250">
                    <div class="card-body">
                    <h3><?php echo $r["descripcion"] ?></h3>
                        <p class="card-text">
                        </p>
                        <h3><?php echo $r["costo_compra"] ?></h3>
                        <div class="btn-group">
                    <a href="#" class="btn btn-primary">Ver</a>
                    <a href="<?php echo "index.php?c=".seg::codificar("contacto")."&m=".seg::codificar("crear") ?>" class="btn btn-primary">Comprar</a>
                </div>
                    </div>
                </div>
            </div>
        



<?php
    }
}
?>
      </div>
</div>
<hr>
<br>
