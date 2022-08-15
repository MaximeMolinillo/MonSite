CREATE DATABASE mesProjets;

Use mesProjets;

CREATE TABLE products(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    picture VARCHAR(256) NOT NULL,
    url VARCHAR(300),
    description TEXT,
    technologies VARCHAR(60) NOT NULL,
    contexte TEXT,
    date DATE
);

INSERT INTO
    products (
        title,
        picture,
        url,
        description,
        technologies,
        contexte,
        date
    )
VALUES
    (
        "Mon Portfolio",
        "monsite.png",
        "www.maxime-molinillo.fr",
        "Ce site me permet d'être une vitrine de mes projets - site responsive",
        "HTML, SASS, JavaScript, PHP, SQL, photoshop, illustrator",
        "Créer en autonomie dans le but de mettre en ligne et présenter mes différents travaux",
        "2022/07/10"
    ),
    (
        "Demain dès l'Aube",
        "ddla.png",
        "https://demaindeslaube.site/public/index.php",
        "Site vitrine réalisé pour une fleuriste afin de mettre en avant ses créations - Ce site contient une page administrateur qui permet à la fleuriste d'ajouter elle même du contenu à la base de données (image, titre, description, catégorie), depuis une interface simple - Site responsive",
        "HTML, SASS, PHP, SQL, Photoshop",
        "Réalisé lors d'un stage en entreprise pour le diplôme de Développeur web et web mobile",
        "2022/05/12"
    ),
    (
        "Platform Movie",
        "MoviePlatform.png",
        "https://platformmovie.000webhostapp.com/index.php",
        "Service d'informations cinématographiques - Création et interaction avec une base de données - Système de recherche de films - Page de détails",
        "HTML, SASS, PHP, SQL",
        "Exercice débuté en formation puis customisé et pousser plus loin par envie personnel ",
        "2022/03/06"
    ),
    (
        "Clône de Disney +",
        "Disney.png",
        "https://maximemolinillo-83f37.web.app/#/",
        "Clone d'une application existante - Interaction avec un fichier JSON existant - Site responsive",
        "REACT, HTML, SASS",
        "Exercice réalisé lors de la formation de Développeur web et web mobile",
        "2022/02/25"
    ),
    (
        "Clône du site de l'hôtel Olivarius",
        "Hotel.png",
        "https://hotelprojectmaxmoli.000webhostapp.com/?#",
        "Clône d'un site existant - Calcul simple d'une facture ",
        "JavaScript, HTML, CSS",
        "Clone d'un site existant - Calcul simple d'une facture ",
        "2022/02/05"
    );


CREATE TABLE pictures (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE product_pictures(
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_products SMALLINT,
    id_pictures SMALLINT
);

insert into pictures 
    (name)
VALUES
("monsite.png"),
("ddla.png"),
("ddla2.png"),
("ddla3.png"),
("ddla4.png"),
("ddla5.png"),
("MoviePlatform.png"),
("MoviePlatform2.png"),
("MoviePlatform3.png"),
("MoviePlatform4.png"),
("MoviePlatform5.png"),
("Disney.png"),
("Hotel.png");



INSERT INTO product_pictures
(id_products, id_pictures)
VALUES
(1,1),
(2,2),(2,3),(2,4),(2,5),(2,6),
(3,7),(3,8),(3,9),(3,10),(3,11),
(4,12),
(5,13);


-- vue
SELECT products.title , GROUP_CONCAT(pictures.name SEPARATOR " , ") AS "Pictures"
FROM products
INNER JOIN product_pictures
ON products.id = product_pictures.id_products
INNER JOIN pictures
ON product_pictures.id_pictures = pictures.id
GROUP BY products.title;


CREATE TABLE language(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100)NOT NULL,
    picture VARCHAR(256) NOT NULL
);

INSERT INTO language
(name, picture)
VALUES
("HTML", "html.png"),
("CSS", "css.png"),
("JavaScript", "JavaScript.png"),
("React", "react.png"),
("PHP", "php.png"),
("MySQL", "mysql.png"),
("WordPress", "wordpress.png"),
("Illustrator", "illustrator.png"),
("Photoshop", "photoshop.png"),
("Sass", "sass.png");


CREATE TABLE product_language(
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_prod SMALLINT,
    id_language SMALLINT
);

INSERT INTO product_language
(id_prod, id_language)
VALUES
(1,1),(1,10),(1,3),(1,5),(1,6),(1,9),(1,8),
(2,1),(2,10),(2,5),(2,9),(2,6),
(3,1),(3,10),(3,5),(2,6),
(4,1),(4,4),(4,10),
(5,1),(5,3),(5,2);


CREATE TABLE hobbies(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(70) NOT NULL,
    picture VARCHAR(80)
);

INSERT INTO hobbies
(name, picture)
VALUES
("Informatique", "pc.png"),
("VTT", "velo.png"),
("Jardinage", "plante.png"),
("Voyage", "voyage.png"),
("Musique", "ecouteur.png"),
("Rétro-gaming", "game.png"),
("Lego", "lego.png"),
("Art", "art.png"),
("Football", "ballon.png"),
("Cinéma", "cinema.png");
