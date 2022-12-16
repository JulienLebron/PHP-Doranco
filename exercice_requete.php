<?php

// 01 - Créer un formulaire
// (prenom, nom, sexe, service, salaire)
// 02 - Récupérer les infos du formulaire
// 03 - Passer les infos du formulaire dans une requete d'insertion



    $host = 'mysql:host=localhost;dbname=entreprise'; // le serveur (localhost) et le nom de la BDD (entreprise)
    $login = 'root'; // le login de connexion à mySQL
    $password = '';  // le mot de passe de connexion à mySQL (sur mamp "root")
    $options = array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );
    // PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING : gestion des erreurs en mode warning
    // PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' : gestion de l'utf-8

    // PDO : PHP Data Object
    // création de l'objet : 
    $pdo = new PDO($host, $login, $password, $options);

echo "<h2>Formulaire d'ajout d'un employé</h2>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
</head>

<body>

    <div class="container">

    <form action="">

    </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
</body>

</html>