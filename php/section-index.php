<section>
    <article>
        <h2>Voici le formulaire de contact</h2>
        <h3>Son contenu sera envoyé à mon adresse mail</h3>
        <br>
        <form action="" method="POST">
            <label>
                <div>VOTRE NOM</div>
                <input type="text" name="nom" required placeholder="NOM">
            </label>
            <label>
                <div>VOTRE EMAIL</div>
                <input type="email" name="email" required placeholder="EMAIL">
            </label>
            <label>
                <div>VOTRE MESSAGE</div>
                <textarea name="message" cols="80" rows="10" required placeholder="MESSAGE"></textarea>
            </label>
            <div><button type="submit">ENVOYER LE MESSAGE</button></div>
<?php

if (count($_POST) == 0) 
{
    echo "<h4>Merci de remplir le formulaire</h4>";
}
else
{
    $nom        = $_POST["nom"];
    $email      = $_POST["email"];
    $message    = $_POST["message"];

    $mail = 
    <<<texte
      message reçu sur le site.

      nom: $nom
      email: $email
      message: $message
      -----------------------

      texte;
    
    $headers = 'From: contact@monsite.fr' . "\r\n" .
               'Reply-To: no-reply@monsite.fr' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    @mail("prenom.nom@gmail.com", "nouveau message", $mail, $headers);

    file_put_contents("php/contact.txt", $mail, FILE_APPEND);

    echo "<h4>Votre message a bien été envoyé</h4>";
}
?>
        </form>
    </article>
</section>
