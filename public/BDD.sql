CREATE DATABASE mesProjets;

Use mesProjets;

CREATE TABLE products(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100),
     picture VARCHAR(256) NOT NULL,
     url VARCHAR(300),
    description TEXT,
    technologies VARCHAR(60),
    contexte TEXT,
    date DATE
    
);

INSERT INTO products
(title, picture, url, description, technologies, contexte, date)
VALUES
("Mon Port-Folio", "", "", "Le site me permettant d'être une vitrine de mes projets - site responsive","HTML, SASS, JavaScript, PHP, SQL, photoshop, illustrator", "Créer en autonomie dans le but de mettre en ligne et présenter mes différents travaux", "2022/07/10"),
("Demain dès l'Aube", "", "https://demaindeslaube.site/public/index.php", "Site vitrine réalisé pour une Fleuriste afin de mettre en avant ses créations - Ce site contient une page administrateur qui permet à la fleuriste d'ajouter elle même du contenus à la base de donnée (image, titre, description, catégorie), depuis une interface simple - Site responsive","HTML, SASS, PHP, SQL, Photoshop", "Réalisé lors d'un stage en entreprise pour le diplôme de Développeur web et web mobile", "2022/05/12"),
("Platform Movie", "", "https://platformmovie.000webhostapp.com/index.php", "Interface d'informations de films - Création et intéraction avec une base de données - Systéme de recherche de films - Page de détails","HTML, SASS, PHP, SQL", "Exercice débuté en formation puis customisé et pousser plus loin par envie personnel ", "2022/03/06"),
("Clône de Disney +", "", "https://maximemolinillo-83f37.web.app/#/", "Clône d'une application existante - Intéraction avec un fichier JSON existant - Site responsive","REACT, HTML, SASS", "Exercice réalisé lors de la formation de Développeur web et web mobile", "2022/02/25"),
("Clône du site de l'hôtel Olivarius", "", "https://hotelprojectmaxmoli.000webhostapp.com/?#", "Clône d'un site existant - Calcul simple d'une facture ","JavaScript, HTML, CSS", "Exercice réalisé lors de la formation de Développeur web et web mobile", "2022/02/05")

