<?php
require_once('../system/config.php');

$page = "Détails de projets";

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

$query = $db->query("SELECT *, GROUP_CONCAT(language.name)AS 'Language'
                  FROM language
                  INNER JOIN product_language
                  ON language.id = product_language.id_language
                  INNER JOIN products
                  ON product_language.id_prod = products.id
                  GROUP BY language.id;");
$languages = $query->execute();
$idPage = $_GET;

$query = $db->prepare("SELECT * FROM product_language WHERE id_prod = :idPage");
$query->bindParam(":idPage", $idPage, PDO::PARAM_INT);
$langProject = $query->fetchAll();

include("../templates/header.php");

if ($find) {
?>

    <main class="bgDetail">

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
                <div class="responsive">
                    <div class="wrap-resp">
                        <img src="../assets/img/logo/portable.svg" alt="Compatible PC">
                    </div>
                    <!-- <div class="wrap-resp">
                        <img src="../assets/img/logo/tablette.svg" alt="Compatible Tablette">
                    </div>
                    <div class="wrap-resp">
                        <img src="../assets/img/tel.svg" alt="Compatible Smartphone">
                    </div> -->
                </div>

                <p>Contexte : <?= $data["contexte"] ?></p>

                <h2>
                    <?= date("d/m/Y", strtotime($data["date"])); ?></h2>
            </div>
        </div>

        <?php
        foreach ($langProject as $language) {
        ?>
            <div class="techno">
                <img src="../assets/img/logo/<?= $language['picname'] ?>" alt="000">
                <h1><?= $language["name"] ?></h1>
            </div>
        <?php
        }
        ?>
    </main>

<?php
}
include("../templates/footer.php");
?>