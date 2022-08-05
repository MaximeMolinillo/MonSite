<?php
require_once('../system/config.php');

$page = "Détails de projets";

// $query = $db->query("SELECT * FROM products ORDER BY id ");
$query = $db->query("SELECT products.*, GROUP_CONCAT(pictures.name SEPARATOR ', ')AS 'Pictures'
                  FROM products
                  INNER JOIN product_pictures
                  ON products.id = product_pictures.id_products
                  INNER JOIN pictures
                  ON product_pictures.id_pictures = pictures.id
                  GROUP BY products.title;");

$works = $query->fetchAll();

foreach ($works as $item) {
    if ($_GET["id"] == $item["id"]) {
        $find = true;
        $data = $item;
    }
}

include("../templates/header.php");
?>

<?php
if ($find) {
?>

    <main>

        <h1><?= $data['title'] ?></h1>
        <div class="work-details">

            <div class="picturesProject">
                <!-- <img src="../assets/img/projets/<?= $data['name'] ?>" alt="image de <?= $data['title'] ?>">
            <img src="../assets/img/projets/<?= $data['Pictures'] ?>" alt="image de <?= $data['title'] ?>">
            <img src="../assets/img/projets/<?= $data['picture'] ?>" alt="image de <?= $data['title'] ?>"> -->

                <img src="../assets/img/projets/<?= $data['picture'] ?>" alt="image de <?= $data['title'] ?>">
            </div>
            <div class="txtProject">
                <p><?= $data["description"] ?></p>

                <p><a href="<?= $data["url"] ?>" target="_blank"> Visiter ce site </a></p>

                <p>Technologies utilisées : <?= $data["technologies"] ?></p>

                <p>Contexte : <?= $data["contexte"] ?></p>

                <h2>
                    <?= date("d/m/Y", strtotime($data["date"])); ?></h2>
            </div>
        </div>
        <?php


        ?>

    </main>

<?php
}

include("../templates/footer.php");
?>