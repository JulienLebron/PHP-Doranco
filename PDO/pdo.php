<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>PHP DATA OBJECT</title>
</head>
<style>
    h2 {
        background: #7952B3;
        padding: 20px;
        color: white;
    }

    .conteneur {
        max-width: 1200px;
        padding: 20px;
        border: 1px solid #dedede;
        margin: 0 auto;
    }

    table,
    td {
        border: 1px solid #333;
    }

    thead,
    tfoot {
        background-color: #333;
        color: #fff;
    }
</style>

<body>

    <div class="conteneur">

    <?php 

    // echo '<pre>';
    // print_r(get_declared_classes());
    // echo '</pre>';

    echo '<h2>Connexion à une BDD</h2>';

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

    var_dump($pdo);

    echo '<pre>';
    print_r(get_class_methods($pdo));
    echo '</pre>';

    echo '<h2>Query : pour une requête de type action (INSERT / UPDATE / DELETE)</h2>';

    // La méthode query() permet de déclencher une requête SQL
    // Requête d'insertion

    // $resultat = $pdo->query("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Adriana', 'Gonzalez', 'f', 'Web', CURDATE(), 2000)");

    // requête UPDATE
    // $resultat = $pdo->query("UPDATE employes SET salaire = 2500 WHERE id_employes = 1004");
    // $resultat = $pdo->query("UPDATE employes SET salaire = (salaire+200) WHERE service = 'commercial'");

    // requete DELETE 
    // $resultat = $pdo->query("DELETE FROM employes WHERE id_employes = 1002");
    // $resultat = $pdo->query("DELETE FROM employes WHERE id_employes IN(1004,1005)");
    // $resultat = $pdo->query("DELETE FROM employes WHERE id_employes BETWEEN 1007 AND 1011");
    // $resultat = $pdo->query("DELETE FROM employes WHERE service='Web' AND id_employes != 1006 AND prenom = 'Adriana'");



    // Pour connaître le nombre de ligne impactées par la requête : rowCount()
    // echo '<div class="alert alert-success text-center">Nombre de ligne impactées par la dernière requête : ' . $resultat->rowCount() . '<br></div>';
    
    echo '<h2>Query : pour des requêtes de type Question (SELECT) pour une ligne de résultat</h2>';
    
    $resultat = $pdo->query("SELECT * FROM employes WHERE id_employes = 999");

    var_dump($resultat);
    
    echo '<pre>';
    print_r(get_class_methods($resultat));
    echo '</pre>';
    
    
    
    // echo '<div class="alert alert-success text-center">Nombre de ligne impactées par la dernière requête : ' . $resultat->rowCount() . '<br></div>';
    
    // En l'état, la réponse de la base de données ($resultat) est inexploitable
    // Pour rendre les données exploitable par PHP, il faut transformer la ligne obtenu avec la méthode fecth()
    
    // FETCH_ASSOC pour obtenir la ligne sql sous forme de tableau associatif (associatif : on associe le nom des colonnes comme étant les indices du tableau array)
    // $donnees = $resultat->fetch(PDO::FETCH_ASSOC); // on traite la ligne obtenu avec un fetch en mode FECTH_ASSOC
    
    // FETCH_NUM pour obtenir la ligne sql sous forme de tableau array avec des indices numériques
    // $donnees = $resultat->fetch(PDO::FETCH_NUM);
    
    // FETCH_BOTH (cas par défaut si non précisé) pour obtenir un mélange de FETCH_ASSOC et FETCH_NUM
    // $donnees = $resultat->fetch(PDO::FETCH_BOTH);
    
    // FETCH_OBJ pour obtenir les resultats sous forme d'objet
    // $donnees = $resultat->fetch(PDO::FETCH_OBJ);
    
    
    // echo '<pre>';
    // print_r($donnees);
    // echo '</pre>';
    
    // echo $donnees['prenom'] . ' ' . $donnees['nom'] . '<br>';
    // echo $donnees[1] . ' ' . $donnees[2] . '<br>';
    // echo $donnees->prenom . ' ' . $donnees->nom . '<br>';
    
    
    echo '<h2>Query : pour des requêtes de type Question (SELECT) pour plusieurs lignes de résultat</h2>';

    $resultat = $pdo->query("SELECT * FROM employes");
    
    // votre requête vous renvoie une seule ligne de résultat : un fetch
    // votre requête vous renvoie plusieurs lignes de résultat : une boucle pour appliquer un fetch à chaque tour de boucle
    
    // pour faire sur un jeu de résultat : while()
    // while() va tourner tant qu'il y a une ligne que l'on traite avec un fetch
    while($ligne_en_cours = $resultat->fetch(PDO::FETCH_ASSOC))
    {
        echo '<pre>'; print_r($ligne_en_cours); echo '</pre>';
    }
    
    echo '<div class="alert alert-success text-center">Nombre de ligne impactées par la dernière requête : ' . $resultat->rowCount() . '<br></div>';
    
    echo 'Pour affichage propre : <hr>';
    echo '<div style="display: flex; flex-wrap: wrap; justify-content: space-between;">';
    $resultat = $pdo->query("SELECT * FROM employes");
    
    while($ligne_en_cours = $resultat->fetch(PDO::FETCH_ASSOC))
    {
       echo '<div style="background: blue; color: white; padding: 10px; box-sizing: border-box; width: 19%; margin-top: 20px">';

            // echo 'Id_employes : ' . $ligne_en_cours['id_employes'] . '<br>';
            // echo 'Prénom : ' . $ligne_en_cours['prenom'] . '<br>';
            // echo 'Nom : ' . $ligne_en_cours['nom'] . '<br>';
            // echo 'Service : ' . $ligne_en_cours['service'] . '<br>';
            // echo 'Sexe : ' . $ligne_en_cours['sexe'] . '<br>';
            // echo 'Date d\'embauche : ' . $ligne_en_cours['date_embauche'] . '<br>';
            // echo 'Salaire : ' . $ligne_en_cours['salaire'] . '<br>';

            foreach($ligne_en_cours AS $indice => $valeur)
            {
                echo ucfirst($indice) . ' : ' . $valeur . '<br>';
            }

       echo '</div>';
    }
    echo '</div>';


    ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
</html>