<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure le fichier d'autoloader de PHPMailer
require_once 'C:\xampp\htdocs\site\vendor\autoload.php';

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier le CAPTCHA
    $recaptcha = new \ReCaptcha\ReCaptcha('6Lf4szgpAAAAAGLbu0X2Qrvh8ZKTEU6RyH23EA5W');
    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

    if ($resp->isSuccess()) {
        // Obtenir les données du formulaire
        $Prenom = $_POST['Prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Initialisation de PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Paramètres du serveur
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Host = 'smtp.gmail.com';
            $mail->Username = 'phpsiomail@gmail.com';
            $mail->Password = 'pmbo mbtt hnxc oxzm';
            $mail->Port = 465;
            $mail->SMTPSecure = 'ssl';

            // Paramètres de l'expéditeur et du destinataire
            $mail->setFrom('phpsiomail@gmail.com', 'Dev Local');
            $mail->addAddress('phpsiomail@gmail.com', 'Dev Local');

            // Contenu du message
            $mail->isHTML(true);
            $mail->Subject = 'Formulaire reçu';
            $mail->Body = "Prénom: $Prenom<br>Nom: $nom<br>Email: $email<br>Message: $message";

            if (!$mail->send()) {
                echo 'Nous avons rencontré une erreur : ' . $mail->ErrorInfo;
            } else {
                echo 'Le message a bien été envoyé.';
            }

            $mail->smtpClose();
        } catch (Exception $e) {
            echo 'Le message n\'a pas pu être envoyé. Erreur du serveur de messagerie : ', $mail->ErrorInfo;
        }
    } else {
        // Échec de la vérification du CAPTCHA
        echo 'Le CAPTCHA n\'est pas valide. Veuillez réessayer.';
    }
}
?>
