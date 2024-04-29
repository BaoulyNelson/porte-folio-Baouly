<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Adresse email où vous souhaitez recevoir les données
    $to = 'elconquistadorbaoulyn@gmail.com';
    
    // Sujet de l'email
    $subject = 'Nouveau message depuis votre site web';
    
    // Corps de l'email
    $body = "Nom: $name\n" . "Email: $email\n" . "Message:\n$message";
    
    // En-têtes de l'email
    $headers = "From: $email";
    
    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Votre message a été envoyé avec succès.';
    } else {
        echo 'Une erreur s\'est produite lors de l\'envoi du message.';
    }
}
?>
