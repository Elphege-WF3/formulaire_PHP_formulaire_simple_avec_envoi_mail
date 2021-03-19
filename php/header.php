<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire contact</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <img class="header__img" src="./assets/img/logo.jpeg" alt="logo">
        <nav>
<?php

$a = [
    "#index"     => 'Accueil',
    "#contact"   => 'Contactez-moi',
];
foreach($a as $cle => $valeur)
{
    if ($valeur == $titre) 
    {
        echo 
        <<<html
            <a class="active" href="$cle">$valeur</a>

        html; 
    }
    else
    {
        echo 
        <<<html
            <a class="" href="$cle">$valeur</a>
    
        html;
    }
}
?>
        </nav>
    </header>

    <main>
        <h1>Bienvenue</h1>
       