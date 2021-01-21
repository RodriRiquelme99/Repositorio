<?php require 'header.php'; ?>

<div class="contenedor">

    <div class="post">
        <article>
            <h2 class="titulo"> <a href="#">Titulo del articulo</a> </h2>
            <p class="fecha">14 abril 1999</p>
            <div class="thumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>/imagenes/1.png?>" alt="">
                </a>
            </div>
            <p class="extracto">Lorem</p>
            <a href="#" class="continuar">Continuar Leyendo</a>
        </article>
    </div>

    <div class="post">
        <article>
            <h2 class="titulo"> <a href="#">Titulo del articulo</a> </h2>
            <p class="fecha">14 abril 1999</p>
            <div class="thumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>/imagenes/1.png?>" alt="">
                </a>
            </div>
            <p class="extracto">Lorem</p>
            <a href="#" class="continuar">Continuar Leyendo</a>
        </article>
    </div>



    <?php require 'paginacion.php';  ?>
</div>

<?php require 'footer.php';  ?>