<?php 




// 01 - récupérer 5 images sur le web de même extension (jpg ou jpeg) et les renommer de cette manière // 
// image1.jpg / image2.jpg / image3.jpg / image4.jpg / image5.jpg (format d'image petit) // 
// 02 - Afficher la première image avec un echo et une balise img        //                
// 03 - Afficher 5 fois la même image toujours avec un seul echo et une seule balise img // 
// 04 - Afficher les 5 différentes images toujours avec un seul echo et une seule balise img // 
// Bonus : Afficher les 5 différentes images toujours avec un seul echo et une seule balise img sans connaitre leur nom
// (constante magique + fonction scandir() )

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice image4</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .conteneur {
            width: 1000px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #dedede;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        img {
            width: 45%;
            margin-top: 20px;
        }
    </style>
</head>
<body>

        <div class="conteneur">
            <?php
                echo '<img src="img/image1.jpg" alt="une image de chat">';
            ?>
        </div>
        <div class="conteneur">
            <?php
                for($i = 0; $i < 5; $i++)
                {
                    echo '<img src="img/image1.jpg" alt="une image de chat">';
                }
            ?>
        </div>
        <div class="conteneur">
            <?php
                for($i = 1; $i < 6; $i++)
                {
                    echo '<img src="img/image' . $i . '.jpg" alt="une image de chat">';
                }
            ?>
        </div>
        <div class="conteneur">
            <?php

                // echo __DIR__;
                // On récupère le contenu du dossier img et scandir nous renvoi un tableau
                $tableau_image = scandir(__DIR__ . '/img');
                
                // echo '<pre>';
                // print_r($tableau_image);
                // echo '</pre>';

                // On boucle sur le tableau $tableau_image
                foreach($tableau_image AS $src)
                {
                    // On force les minuscules sur la chaine de caractère
                    $src = strtolower($src);
                    // avant de déclencher l'affichage de l'image on cérifie s'il y a bien une extension de type jpg ou jpeg ou png ou gif
                    if(strpos($src, '.jpg') || strpos($src, '.jpeg') || strpos($src, '.png') || strpos($src, '.gif'))
                    {
                        echo '<img src="img/' . $src . '" alt="une image">';
                    }
                }
            ?>
        </div>
</body>
</html>