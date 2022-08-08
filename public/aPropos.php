<?php
require_once('../system/config.php');
$page = "A propos";

$query = $db->query("SELECT * FROM language ORDER BY id");
$language = $query->fetchAll();

include("../templates/header.php");

?>
<main>
  <div class="letter-container">
    <h1>
      <span>à</span>
      <pre>&nbsp</pre>
      <span>p</span>
      <span>r</span>
      <span>o</span>
      <span>p</span>
      <span>o</span>
      <span>s</span>
    </h1>
  </div>
  <div class="container-carreAnim">

    <div class="carreAnim">
      <img src="../assets/img/MaxMoli.png" class="pic">
      <img src="../assets/img/forme-apropos/gauche.svg" class="carre gauche">
      <div class="haut-centre-bas">
        <img src="../assets/img/forme-apropos/haut.svg" class="carre haut">

        <!-- <img src="../assets/img/forme-apropos/centre.svg" class="centre"> -->
        <img src="../assets/img/forme-apropos/bas.svg" class="carre bas">
      </div>

      <img src="../assets/img/forme-apropos/droite.svg" class="carre droite">
    </div>

    <div class="school sectionCV">
      <h2>Cursus Scolaire</h2>
      <ul>
        <li><span>2021: </span>Obtention du titre pro Développeur-Web avec M2i formation.</li>
        <br>
        <li><span>2011: </span>Préparation du BAC Pro cuisine au château Fortier, Valarep, de Saint-Saulve.
        </li>
        <br>
        <li><span>2010: </span>Obtention du Contrat Entrepreneur de la Petite Entreprise au CFA la
          Viroloise de Tourcoing en alternance.
        </li>
        <br>
        <li><span>2009:</span> Obtention du BEP hôtellerie production culinaire au CFA de Prouvy.</li>
        <br>
        <li><span>2008: </span>Obtention du niveau BTS Design de Produit à l’ESAAT de Roubaix</li>
        <br>
        <li><span>2006: </span>Obtention du Baccalauréat STI Arts Appliqués à l’ ESAAT de Roubaix.</li>
      </ul>
    </div>

    <div class="exp sectionCV">
      <h2>Expérience Professionnelle</h2>
      <ul>
        <br>
        <li><span>2016/2021: </span>Traiteur dans la société Maison Davaine à Douai</li>
        <br>
        <li><span>2014/2016:</span> Chef d’entreprise de la société Molinillo Traiteur( Organisation
          d’evennement, location de salle, repas à domicile )</li>
        <br>
        <li><span>2010/2014:</span> Chef traiteur/ cuisinier chez Molinillo Traiteur, et gérant d’une salle
          de reception à Condé/Escaut.</li>
        <br>
        <li><span>2010: </span>Apprenti cuisinier, dans le restaurant gastronomique La Grignotière à
          Raismes.</li>
        <br>
        <li><span>2009: </span>Apprenti cuisinier, dans le restaurant, brasserie La Tourtiére à
          Valenciennes.</li>
        <br>
        <li><span>2008: </span>Apprenti cuisinier/traiteur dans la boucherie, charcuterie, traiteur
          Molinillo à Condé/Escaut.
        </li>
        <br>
        <li><span>2007: </span>stage de deux mois dans l’entreprise Innovaxe, comme Designer Graphique.</li>
      </ul>
    </div>

    <div class="qualit sectionCV">
      <h2>Qualités personelles</h2>
      <p>Mon expérience de cuisinier m'a appris le travail en équipe, la rigueur et l'investissement dans le
        travail.
        Tandis que mes études en Arts Appliquées m'ont enseigné l'art du graphisme et ont éveillé ma curiosité .
        Je suis persuadé que ces qualités me seront utiles dans ma nouvelle vie.</p>
    </div>
  </div>
  <div class="containerSlot">
    <div class="slot"></div>
    <button class="btnConfettis">language</button>
  </div>
  <div class="language">
    <?php
    foreach ($language as $lang) {
    ?>
      <div class="lang">

        <img src="../assets/img/logo/<?= $lang["picture"] ?>" alt="<?= $lang["name"] ?>">


      </div>
    <?php
    }
    ?>
    <img src="../assets/img/logo/html.png" alt="">
  </div>

</main>


<?php
include("../templates/footer.php");
?>