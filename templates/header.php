<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Molinillo Maxime. Développeur Web et Web Mobile Junior. JavaScript-REACT-PHP-SQL-SASS">

  <link rel="stylesheet" href="../assets/css/main.css" />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png" />
  <link rel="manifest" href="../favicon/site.webmanifest" />

  <title>Maxime Molinillo - <?= $page ?></title>
</head>

<body>

  <header>
    <nav>
      <a href="../index.html" class="nav-icon" aria-label="visit homepage" aria-current="page">
        <img src="../assets/img/logoMM.svg" alt="Logo Maxime Molinillo" />
        <span>Maxime Molinillo</span>
      </a>

      <div class="main-navlinks">
        <button class="hamburger" type="button" aria-label="Toggle navigation" aria-expanded="false">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="navlinks-container">
          <!-- <a href="../index.html" aria-current="page">Home</a> -->
          <a href="./aPropos.php">A propos</a>
          <a href="./projets.php">Mes projets</a>
        
          <a href="./contact.php">Contact</a>
        </div>
      </div>
      <div class="nav-authentifications">
        <a href="https://www.linkedin.com/in/maxime-molinillo/" class="sign-user" aria-label="Sign in page" target="_blank">
          <img src="../assets/img/linkedin.svg" alt="Lien vers Linkedin" />
        </a>
        <a href="https://github.com/MaximeMolinillo" class="sign-user" aria-label="Sign in page" target="_blank">
            <img src="../assets/img/github.svg"  alt="Lien vers github"/>
          </a>
          <a href="mailto:maxime.molinillo@outlook.fr" class="sign-user" aria-label="Sign in page" target="_blank">
            <img src="../assets/img/mail.svg" alt="Lien pour envoyer un mail"/>
          </a>
          <a href="tel:+33658885994" class="sign-user" aria-label="Sign in page" target="_blank">
            <img src="../assets/img/tel.svg" alt="Lien pour lancer un appel téléphonique"/>
          </a>
      </div>
    </nav>
  </header>