<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validez et nettoyez les données si nécessaire

    // Construisez le corps du message
    $corpsMessage = "Nom: $nom\nEmail: $email\nMessage: $message";

    // Adresse email à laquelle vous souhaitez recevoir les messages
    $destinataire = "kendythe.c@gmail.com";

    // Sujet du message
    $sujet = "Nouveau message de la page de contact";

    // En-têtes du message
    $entetes = "De: $email\r\n";

    // Utilisez la fonction mail pour envoyer le message
    $envoiMail = mail($destinataire, $sujet, $corpsMessage, $entetes);

    if ($envoiMail) {
        echo "Message envoyé avec succès!";
    } else {
        echo "Échec de l'envoi du message.";
    }
}
?>
