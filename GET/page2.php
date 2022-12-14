<?php
// echo '<pre>';
// print_r($GLOBALS);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <style>
        .conteneur { width: 1000px; margin: 0 auto; padding: 20px; border: 1px solid;}
        h1 {background: steelblue; padding: 20px; color: white;}
    </style>
</head>
<body>
    <div class="conteneur">
        <h1>Exercice GET page 2</h1>
        <a href="page1.php">Retour à la page 1</a>
        <hr>
        <?php

            echo '<pre>';
            print_r($_GET);
            echo '</pre>';

            if(isset($_GET['categorie']) && $_GET['categorie'] === 'pantalon')
            {
                echo '<div style="background: black; color:white;">';
                echo 'Vous avez sélectionné la catégorie : ' . $_GET['categorie'] . '<hr>';
                echo '</div>'; 
            }
            if(isset($_GET['taille']))
            {
                echo 'Vous avez sélectionné la taille : ' . $_GET['taille'] . '<hr>'; 
            }
            if(isset($_GET['couleur']))
            {
                echo 'Vous avez sélectionné la couleur : ' . $_GET['couleur'] . '<hr>'; 
            }

            // echo 'Vous avez sélectionné la couleur : ' . $_GET['couleur'] . '<hr>'; 


            // La manipulation de l'URL est un protocole HTTP nommé GET
            // GET représente l'url de la page
            // L'outil PHP correspond : $_GET
            // $_GET est une superglobale (disponible dans l'environnement global et local)
            // Les superglobales sont des tableaux Array

            // $_GET est un tableau vide par défaut, en revanche si des informations sont présentes avec la bonne syntaxe dans l'url, on les retrouves naturellement dans le tableau $_GET


        ?>

        
    </div>
    
</body>
</html>











<!-- 
https://
www.leboncoin.fr/
recherche
?
category=43
&
text=ps5
&
locations=r_12
&
console_model=ps5
&
video_game_type=console
&
console_brand=sony
&
price=min-1000 -->