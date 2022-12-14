<?php
require("../vendor/autoload.php");

$page = "Contact";

use PHPMailer\PHPMailer\PHPMailer;

define("HOST", "http://localhost/MonSite/");

/**traitement du formulaire */
$errors = [];
$messageError = "";

if (isset($_POST["contactMail"])) {
    $name = trim(strip_tags($_POST["name"]));
    $firstname = trim(strip_tags($_POST["firstname"]));
    $society = trim(strip_tags($_POST["society"]));
    $email = trim(strip_tags($_POST["email"]));
    $tel = trim(strip_tags($_POST["tel"]));
    $object = trim(strip_tags($_POST["object"]));
    $message = trim(strip_tags($_POST["message"]));


    // $to = 'maxime.molinillo@outlook.fr';
    // // $to = 'max_224@hotmail.fr';
    // $messageMail = $message . ' 
    // ' . 'De la part de :' . " " . $firstname . " " . $name . ".
    // " . 'Numéro de téléphone :' . " " . $tel . ".
    // " . 'Mail de réponse :' .  " " . $email;
    // $from = $email;
    // $headers = 'From:' . $email . "\r\n" .
    // 'Reply-To:' . $email . "\r\n" .
    // 'X-Mailer: PHP/' . phpversion();
    // // $headers = 'From:' . $emailC . "\r\n" .
    // // 'Reply-To:$emailC' . "\r\n" .
    // // 'X-Mailer: PHP/' . phpversion();

    if (empty($email)) {
        array_push($error, "Veuillez renseigner votre email, afin que nous puissions vous transmettre une réponse !");
    };
    if (mail($to, $object, $message)) {
        $messageError = "Votre message à été envoyé avec succès !";
    } else {
        $messageError = "Impossible d'envoyer le mail, veillez recommencer.";
    }

    if (empty($errors)) {
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = '4a87d0b4f0169e';
        $phpmailer->Password = '0163345150a19e';
        $phpmailer->From = $email;
        $phpmailer->FromName = $name . " " . $firstname;
        // Destinataire
        $phpmailer->addAddress("maxime.molinillo@outlook.fr");
        // Adresse de réponse
        $phpmailer->addReplyTo($email);
        //Send HTML or Plain Text email
        $phpmailer->isHTML();
        $phpmailer->CharSet = "UTF-8";
        $phpmailer->Subject = $object;
        //Corps du mail
        $phpmailer->Body = $message . " " . 'De la part de :' . " " . $firstname . " " . $name . 'de la société :' . " " . $society . " . " . 'Numéro de téléphone :' . " " . $tel;

        //Envoie du mail
        if ($phpmailer->send()) {
            $messageError = "Mail envoyé avec succès !";
        }
        //     // On affiche un message de succès si la requéte s'est bien executée.
        //     $message = "<div class=\"error\">Votre message a bien été envoyé.</div>";
        // } catch (Exception $e) {
        //     $message = "Un problème s'est produit ";
        // }

    }
}

include("../templates/header.php");
?>


<main>
    <h1 class="contact-title">Contactez-moi !</h1>
    <hr>
    <div class="wrap-section">
        <div class="coordinate ">
            <div class="tel section">
                <img src="../assets/img/logo/telephone.png" alt="Téléphone">
                <h3>06 58 88 59 94</h3>
            </div>
            <div class="mail section">
                <img src="../assets/img/mail.svg" alt="email">
                <h3>maxime.molinillo@outlook.fr</h3>
            </div>
            <div class="location section">
                <img src="../assets/img/logo/loc.png" alt="location">
                <h3>Valenciennes - Lille</h3>
            </div>
            <div class="car section">
                <img src="../assets/img/logo/car.png" alt="Véhicule">
                <h3>Permis B - Véhiculé</h3>
            </div>
            <div class="age section">
                <img src="../assets/img/logo/calendrier.png" alt="Age">
                <h3>35 ans</h3>
            </div>
        </div>

        <form action="" method="post">
            <?php
            if (isset($messageError)) {
            ?>
                <p class="error"><?= $messageError ?></p>
            <?php
            }
            ?>
            <div class="wrap-form-group">
                <div class="column-form-group">
                    <div class="form-group">
                        <label for="inputName">Nom :</label>
                        <input type="text" name="name" id="inputName" placeholder="Votre Nom..." required>
                    </div>

                    <div class="form-group">
                        <label for="inputFirstname">Prénom :</label>
                        <input type="text" name="firstname" id="inputFirstname" placeholder="Votre Prénom...">
                    </div>

                    <div class="form-group">
                        <label for="inputSociety">Société :</label>
                        <input type="text" name="society" id="inputSociety" placeholder="Votre Société...">
                    </div>

                </div>

                <div class="column-form-group">
                    <div class="form-group">
                        <label for="inputEmail">Email :</label>
                        <input type="email" name="email" id="inputEmail" placeholder="Votre email...">
                    </div>

                    <div class="form-group">
                        <label for="inputTel">Téléphone :</label>
                        <input type="tel" name="tel" id="inputTel" placeholder="Votre Numéro de tél...">
                    </div>

                    <div class="form-group">
                        <label for="inputObject">Objet :</label>
                        <input type="text" name="object" id="inputObject" placeholder="Objet de votre demande...">
                    </div>

                </div>

            </div>

            <div class="textarea-btn">
                <div class="form-group">
                    <label for="inputMessage">Message :</label>
                    <textarea name="message" id="inputMessage" cols="30" rows="10" placeholder="Votre message..."></textarea>
                </div>

                <input type="submit" class="submit" value="Envoyer" name="contactMail">
            </div>

        </form>
    </div>
</main>


<?php
include("../templates/footer.php");
?>