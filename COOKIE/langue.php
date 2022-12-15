<?php

print_r($_GET);

if(isset($_GET['langue']))
{
    // Si l'indice langue existe dans la superglobal $_GET
    // (si l'utilisateur à cliqué sur un des liens)
    $langue = $_GET['langue'];
}
elseif(isset($_COOKIE['code_langue']))
{
    // Si l'indice lang existe dans la superglobal $_COOKIE 
    // (un cookie existe déjà sur le navigateur de l'internaute)
    $langue = $_COOKIE['code_langue'];
}
else 
{
    // sinon la langue par défaut sera le Français
    $langue = 'fr';
}

// print_r($_COOKIE);


// pour conserver le choix de l'utilisateur, nous allons créer un cookie sur le navigateur de l'utilisateur afin de pourvoir l'interroger lors de ses prochaines visites
// setcookie(son_nom, sa_valeur, sa_duree_de_vie)

// echo time();
$un_an = 365*24*3600;
setcookie('code_langue', $langue, time() + $un_an);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .conteneur { width: 1000px; margin: 0 auto; padding: 20px; border: 1px solid;}
        h1 {background: steelblue; padding: 20px; color: white;}
    </style>
    <title>COOKIE</title>

</head>
<body>

<div class="conteneur">
    <h1>Veuillez choisir une langue</h1>
    <ul>
        <li><a href="?langue=fr">Français</a></li>
        <li><a href="?langue=es">Espagnol</a></li>
        <li><a href="?langue=it">Italien</a></li>
        <li><a href="?langue=en">Anglais</a></li>
        <li><a href="?langue=de">Allemand</a></li>
    </ul>
</div>

<?php

    if($langue == 'fr')
    {
        echo '<p>🏴‍☠️ Bonjour, vous visitez actuellement le site en Français. Effectivement, la sauvegarde du cookie permet de retenir la langue avec laquelle vous naviguez sur le site pour vos prochaines visites. A bientôt !</p>';
    }
    elseif($langue == 'es')
    {
        echo '<p>🏴‍☠️ Hola, En este momento està visitando el sitio en espanol. De hecho, la cookie permite la copia de seguridad de conservar el idioma que utilise el sitio para futuras visitas. Pronto.</p>';
    }
    elseif($langue == 'it')
    {
        echo '<p>🏴‍☠️ Ciao, Se stai attualmente visitando il sito in Italiano. Infatti, il cookie consente il backup per mantenere la lingua che il sito per una futura visita. A presto </p>';
    }
    elseif($langue == 'en')
    {
        echo '<p>🏴‍☠️ Hello, You are currently visiting the site in English. Indeed, the cookie allows the backup to retain the language that you use the site for future visits. Soon</p>';
    }
    elseif($langue == 'de')
    {
        echo '<p>🏴‍☠️ Hallo, Sie besuchen die Seite derzeit auf Deutsch. Tatsächlich wird durch das Speichern des Cookies die Sprache, mit der Sie auf der Seite navigieren, für Ihre nächsten Besuche gespeichert. Bis bald</p>';
    }

    // echo '<pre>';
    // print_r($_SERVER);
    // echo '</pre>';

    $langue_navigateur = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    echo $langue_navigateur;

?>
    
</body>
</html>


