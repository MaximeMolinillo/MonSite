<?php
require_once('../system/config.php');
$page = "Mes projets";




$query = $db->query("SELECT * FROM products ORDER BY id");
$products = $query->fetchAll(PDO::FETCH_ASSOC);

include("../templates/header.php");
?>

<main>

    <?php
    foreach ($products as $item) {
    ?>
        <div class="wrapProjects">


            <p class="rellax" data-rellax-speed="-4">
                <a href="detailProjet.php?id=1">Port-Folio </a>
            </p>

            <p class="rellax" data-rellax-speed="-2">
                <a href="detailProjet.php?id=2">Demain dès l'Aube</a>
            </p>

            <p class="rellax" data-rellax-speed="0">
                <a href="detailProjet.php?id=3">Platform Movie</a>
            </p>

            <p class="rellax" data-rellax-speed="2">
                <a href="detailProjet.php?id=4">Disney +</a>
            </p>
            
            <p class="rellax" data-rellax-speed="3">
                <a href="detailProjet.php?id=5">Olivarius</a>
            </p>



            <div class="box box1 rellax" data-rellax-speed="-5">
                <img src="../assets/img/projets/monsite.png" alt="Mon site">
            </div>
            <div class="box box2 rellax" data-rellax-speed="-3">
                <img src="../assets/img/projets/ddla.png" alt="Demain des l'aube">
            </div>
            <div class="box box3 rellax" data-rellax-speed="-1">
                <img src="../assets/img/projets/MoviePlatform.png" alt="Movie platform">
            </div>
            <div class="box box4" data-rellax-speed="1">
                <img src="../assets/img/projets/Disney.png" alt="Clône de Disney +">
            </div>
            <div class="box box5" data-rellax-speed="5">
                <img src="../assets/img/projets/Hotel.png" alt="Clône du site Hotel Olivarius">
            </div>

        </div>
    <?php

    }
    ?>

</main>
<div class="db">
    <?php
    foreach ($products as $product) {
    ?>

        <div class="products">
            <h1><?= $product["title"] ?></h1>
            <h1><?= $product["id"] ?></h1>

            <img src="../assets/img/projets/<?= $product['picture'] ?>" alt="<?= $product["title"] ?>">

            <p><a href="<?= $product["url"] ?>" target="_blank">Visiter ce site</a></p>

            <p><?= $product["description"] ?></p>

            <p>Technologies utilisées : <?= $product["technologies"] ?></p>

            <p>Contexte : <?= $product["contexte"] ?></p>

            <h2><?= $product["date"] ?></h2>

            <p></p>
        </div>

    <?php
    }
    ?>
</div>



<?php
include("../templates/footer.php");
?>