<?php

// Outil majeur de PHP nou spermettant de stocker des informations avant l'enregistrement en BDD ou autre
// Exemple : 
// conservation d'un panier avant la validation de la commande qui nous permettra d'enregistrer la commande BDD
// maintenir la connexion d'un utilisateur sur notre site


// session_start() permet de créer un fichier de session dans le serveur au niveau du dossier tmp/
// xampp/tmp
// mamp/tmp/php
// crée aussi un cookie sur le navigateur de l'utilisateur lié à la session

session_start();

// $_SESSION est une superglobal

$_SESSION['pseudo'] = 'Admin';
$_SESSION['mdp'] = 'soleil';
$_SESSION['email'] = 'lebron.pro.77@gmail.com';
$_SESSION['adresse'] = '30 avenue du test';
$_SESSION['ville'] = 'bruxelles';
$_SESSION['cp'] = 1090;
$_SESSION['panier'] = [
    'produit1' => [
        'id' => 1507,
        'nom' => 'Basket Nike',
        'taille' => 42,
        'quantite' => 2,
        'prix' => 50
    ],
];

echo 'Premier affichage de la session : <hr>';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

// Pour supprimer un élément du tableau
unset($_SESSION['panier']['produit1']['taille']);

echo 'Premier affichage de la session : <hr>';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


// Pour supprimer
// session_destroy() est bien reconnu par le langage mais ne sera pas exécutée immédiatement
// le langage va d'abord exécuter toutes les lignes de code de cette page et ensuite la fonction session_destroy() pour supprimer la session
session_destroy();

echo 'Troisième affichage de la session : <hr>';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
