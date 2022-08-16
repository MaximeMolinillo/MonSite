<?php
require_once('../system/config.php');
$page = "Mes projets";




// $query = $db->query("SELECT * FROM products ORDER BY id");
// $products = $query->fetchAll(PDO::FETCH_ASSOC);

include("../templates/header.php");
?>

<main class="main">


    <div class="wrapProjects">


        <!-- <p class="rellax" data-rellax-speed="-4">
            <a href="detailProjet.php?id=1">Portfolio </a>
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
        </p> -->
        <div class="logoMM logoMM1 rellax" data-rellax-speed="-2">
            <img src="../assets/img/logoMM.svg" alt="">
        </div>
        <div class="logoMM logoMM2 rellax" data-rellax-speed="1">
            <img src="../assets/img/logoMM.svg" alt="">
        </div>
        <div class="logoMM logoMM3 rellax" data-rellax-speed="8">
            <img src="../assets/img/logoMM.svg" alt="">
        </div>
        <div class="logoMM logoMM4 rellax" data-rellax-speed="5">
            <img src="../assets/img/logoMM.svg" alt="">
        </div>
        <div class="logoMM logoMM5 rellax" data-rellax-speed="9">
            <img src="../assets/img/logoMM.svg" alt="">
        </div>
        <div class="logoMM logoMM6 rellax" data-rellax-speed="8">
            <img src="../assets/img/logoMM.svg" alt="">
        </div>
        <div class="logoMM logoMM7 rellax" data-rellax-speed="1">
            <img src="../assets/img/logoMM.svg" alt="">
        </div>
        <div class="logoMM logoMM8 rellax" data-rellax-speed="-2">
            <img src="../assets/img/logoMM.svg" alt="">
        </div>



        <div class="box box1 rellax" data-rellax-speed="-5">
            <a href="detailProjet.php?id=1">
                <img src="../assets/img/projets/monsite.png" alt="Mon site">
            </a>
        </div>
        <div class="box box2 rellax" data-rellax-speed="-3">
            <a href="detailProjet.php?id=2">
                <img src="../assets/img/projets/ddla.png" alt="Demain des l'aube">
            </a>
        </div>
        <div class="box box3 rellax" data-rellax-speed="-1">
            <a href="detailProjet.php?id=3">
                <img src="../assets/img/projets/MoviePlatform.png" alt="Movie platform">
            </a>
        </div>
        <div class="box box4" data-rellax-speed="1">
            <a href="detailProjet.php?id=4">
                <img src="../assets/img/projets/Disney.png" alt="Clône de Disney +">
            </a>
        </div>
        <div class="box box5" data-rellax-speed="5">
            <a href="detailProjet.php?id=5">
                <img src="../assets/img/projets/Hotel.png" alt="Clône du site Hotel Olivarius">
            </a>
        </div>

    </div>


</main>




<?php
include("../templates/footer.php");
?>