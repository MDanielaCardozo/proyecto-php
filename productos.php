<?php
include("header.php");
?>

<section class="container productos">
    <div class="productos_opciones mb-4">
        <div class="d-grid gap-4">
            <button class="btn btn-outline-secondary" type="button"><a href="productos.php?producto=tr" class="text-white">Tarta de ricota</a></button>
            <button class="btn btn-outline-secondary" type="button"><a href="productos.php?producto=rc" class="text-white">Roll de canela</a></button>
            <button class="btn btn-outline-secondary" type="button"><a href="productos.php?producto=ct" class="text-white">Chocotorta</a></button>
            <button class="btn btn-outline-secondary" type="button"><a href="productos.php?producto=md" class="text-white">Medialunas</a></button>
        </div>
</section>

<?php
if (isset($_GET['producto'])) {
    $producto = $_GET['producto'];

    switch ($producto) {
        case 'tr':
            $nombre = "Tarta de Ricota";
            $valor = 2000;
            $descripcion = "Deliciosa tarta hecha con ricota fresca.";
            $img = "assets/img/tarta_ricota.jpg";
            break;
        case 'rc':
            $nombre = "Roll de canela";
            $valor = 2100;
            $descripcion = "Exquisito roll de canela con un toque de dulce de leche.";
            $img = "assets/img/roll_canela.jpg";
            break;
        case 'ct':
            $nombre = "Chocotorta";
            $valor = 3100;
            $descripcion = "Chocotorta deliciosa.";
            $img = "assets/img/chocotorta.jpg";
            break;

        default:
            $nombre = "Medialunas";
            $valor = 1500;
            $descripcion = "Deliciosas medialunas.";
            $img = "assets/img/medialunas.jpg";
            break;
    }

?>

    <section class="container d-flex justify-content-center">
        <div class="card" style="width: 20rem;">
            <img src="<?php echo $img; ?>" class="card-img-top" alt="<?php $nombre ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $nombre ?></h5>
                <p class="card-text"><?php echo $descripcion ?></p>
                <a href="#" class="btn btn-outline-secondary">$ <?php echo $valor ?> </a>
            </div>
        </div>
        <!-- <h3> <?php echo $nombre ?></h3>
        <ul>
            <li> Valor: <?php echo $valor ?></li>
            <li> Descripcion: <?php echo $descripcion ?></li>

        </ul>
        <div>
            <img src="<?php echo $img; ?>" alt="<?php $nombre ?>">
        </div> -->
    </section>

<?php } else {

    echo "<p> Por favor seleccione una opcion del productos </p>";
} ?>

<?php
include("footer.php");
?>