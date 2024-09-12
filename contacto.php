<?php
include("header.php");
?>

<section class="container">
    <div class="contacto_box">
        <form class="d-flex flex-column justify-content-center" action="enviar_consulta.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-input">

            <label for="nombre">Apellido</label>
            <input type="text" name="apellido" class="form-input">

            <label for="email">Correo electronico</label>
            <input type="text" name="email" class="form-input">

            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="" rows="4" class="form-input"></textarea>
            <input type="submit" value="Enviar consulta" class="submit-button">
        </form>
    </div>
        <?php
        if (isset($_GET['ok'])) {
            echo "<h3> Su consulta fue enviada con éxito </h3>";
        }
        ?>
</section>

<?php
include("footer.php");
?>