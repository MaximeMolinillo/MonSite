<?php
require_once('../system/config.php');
$page = "A propos";

$query = $db->query("SELECT * FROM language ORDER BY id");
$language = $query->fetchAll();


$req = $db->query("SELECT * FROM hobbies ORDER BY id");
$hobbies = $req->fetchAll();

include("../templates/header.php");

?>
<main class="containerCv">
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

      <img src="../assets/img/forme-apropos/gauche.svg" class="gauche carre ">

      <div class="logo-carre" onclick="animTriangleLeft()">
        <img class="pgauche" src="../assets/img/logo/exp.svg" alt="Expérience">
      </div>

      <div class="haut-centre-bas">
        <div class="haut">
          <img src="../assets/img/forme-apropos/haut.svg" class=" carre">
        </div>

        <div class="logo-carre" onclick="animTriangleTop()">
          <img class="phaut" src="../assets/img/logo/lang.svg" alt="Technologies">
        </div>

        <img src="../assets/img/forme-apropos/bas.svg" class="carre bas">

        <div class="logo-carre" onclick="animTriangleBottom()">
          <img class="pbas" src="../assets/img/logo/hobbies.svg" alt="Hobbies">
        </div>
      </div>

      <img src="../assets/img/forme-apropos/droite.svg" class="carre droite">

      <div class="logo-carre" onclick="animTriangleRight()">
        <img class="pdroite" src="../assets/img/logo/school.svg" alt="Scolarité">
      </div>
    </div>


    <div class="school sectionCV">
      <h2>Cursus Scolaire</h2>
      <div class="l4"></div>
      <div class="logExp">
        <img src="../assets/img/logo/school.svg" alt="">
      </div>
      <ul>
        <li><span>2021: Obtention du titre pro Développeur-Web avec M2i formation.</span></li>
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
        <li><span>2008: Obtention du niveau BTS Design de Produit à l’ESAAT de Roubaix</span></li>
        <br>
        <li><span>2006: Obtention du Baccalauréat STI Arts Appliqués à l’ ESAAT de Roubaix.</span></li>
      </ul>
    </div>

    <div class="exp sectionCV">
      <h2>Expérience Professionnelle</h2>
      <div class="l4"></div>
      <div class="logExp">
        <img src="../assets/img/logo/exp.svg" alt="">
      </div>
      <ul>
        <li><span>2022: Stage pour la fleuriste Demain dès l'Aube -- Réalisation d'un site avec système d'authentification et gestion de contenus</span></li>
        <br>
        <li><span>2016/2021: </span>Traiteur dans la société Maison Davaine à Douai</li>
        <br>
        <li><span>2014/2016: Chef d’entreprise de la société Molinillo Traiteur( Organisation
            d’évènements, location de salle, repas à domicile )</span></li>
        <br>
        <li><span>2010/2014:</span> Chef traiteur/ cuisinier chez Molinillo Traiteur, et gérant d’une salle
          de réception à Condé/Escaut.</li>
        <br>
        <li><span>2010: </span>Apprenti cuisinier, dans le restaurant gastronomique La Grignotière à
          Raismes.</li>
        <br>
        <li><span>2009: </span>Apprenti cuisinier, dans le restaurant, brasserie La Tourtière à
          Valenciennes.</li>
        <br>
        <li><span>2008: </span>Apprenti cuisinier/traiteur dans la boucherie, charcuterie, traiteur
          Molinillo à Condé/Escaut.
        </li>
        <br>
        <li><span>2007: stage de deux mois dans l’entreprise Innovaxe, comme Designer Graphique.</span></li>
      </ul>
    </div>

    <div class="qualit sectionCV">
      <h2>Qualités personnelles</h2>
      <div class="l4"></div>
      <div class="logExp">
        <img src="../assets/img/logo/max.svg" alt="">
      </div>
      <p>Mon expérience de cuisinier m'a appris le travail en équipe, la rigueur et l'investissement dans le
        travail.
        Tandis que mes études en Arts Appliqués m'ont enseigné l'art du graphisme et ont éveillé ma curiosité .
        Je suis persuadé que ces qualités me seront utiles dans ma nouvelle vie.</p>
    </div>
  </div>
  <div class="wrap-language">



    <!-- <div class="containerSlot">
      <div class="slot"></div>
      <button class="btnConfettis">language</button>
    </div> -->
    <div class="language sectionCV">
      <div class="titleAp">
        <h2>Technologies et langages Web</h2>
        <div class="l4"></div>
        <div class="logExp">
          <img src="../assets/img/logo/lang.svg" alt="">
        </div>
      </div>
      <div class="wrap-lang">
        <?php
        foreach ($language as $lang) {
        ?>
          <div class="lang">
            <img src="../assets/img/logo/<?= $lang["picname"] ?>" alt="<?= $lang["name"] ?>" ">
        </div>
      <?php
        }
      ?>
      </div>
          </div>
      </div>

      <div class=" hobbies ">
        <div class=" titleAp">
            <h2>Hobbies</h2>
            <div class="l4"></div>
            <div class="logExp">
              <img src="../assets/img/logo/hobbies.svg" alt="">
            </div>
          </div>
          <div class="wrap-hob">
            <?php
            foreach ($hobbies as $hobbie) {
            ?>
              <div class="hob">
                <img src="../assets/img/logo/<?= $hobbie["picture"] ?>" alt="<?= $hobbie["name"] ?>" class="logoHobbies">
                <!-- <h3><?= $hobbie["name"] ?></h3> -->
              </div>
            <?php
            }
            ?>
          </div>
      </div>
</main>

<?php
include("../templates/footer.php");
?>