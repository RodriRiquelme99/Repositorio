<?php require '../views/header.php'; ?>

<div class="contenedor">
    <h2>Panel de control</h2>
    <div class="post">
        <?php foreach ($posts as $post) : ?>
            <div class="post">
                <article>
                    <h2 class="titulo"></h2>
                    <a href="#">Editar</a>
                    <a href="#">Ver</a>
                    <a href="#">Borrar</a>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
    <?php require '../views/footer.php';  ?>
</div>

<?php require 'footer.php';  ?>