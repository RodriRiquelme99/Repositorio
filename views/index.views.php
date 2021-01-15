<?php

require 'header.php';

?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2>Mi primer articulo</h2>
            <p>Fecha 14 de Enero de 2021</p>
            <div class="thumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
                </a>
            </div>
            <p class="extracto"> LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT.</p>
            <a href="#" class="continuar">Continuar Leyendo</a>
        </article>
    </div>

    <div class="post">
        <article>
            <h2>Mi segundo articulo</h2>
            <p>Fecha 14 de Enero de 2021</p>
            <div class="thumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>/imagenes/2.png" alt="">
                </a>
            </div>
            <p class="extracto"> LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT.</p>
            <a href="#" class="continuar">Continuar Leyendo</a>
        </article>
    </div>
    <?php require 'paginacion.php';  ?>
</div>

<?php require 'footer.php';  ?>