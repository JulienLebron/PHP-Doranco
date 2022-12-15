<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement PHP</title>
    <style>
        h1 {
            background: darkorchid;
            padding: 20px;
            color: #fff;
        }
        h2 {
            background: steelblue;
            padding: 20px;
            color: #fff;
        }
        h3 {
            background: orange;
            padding: 20px;
            color: #fff;
        }

        .conteneur {
            max-width: 1200px;
            padding: 20px;
            border: 1px solid #dedede;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <div class="conteneur">
        <h1>Entrainement PHP</h1>

        <h2>Histoire de PHP</h2>

        La première version du langage PHP fut créée en 1994 par Rasmus Lerdorf et repris en 1997 par deux étudiants : Andi Gutmans et Zeev Suraski.
        Dans le monde, plus de 300 millions de sites reposent sur la technologie Php. Ce chiffre ne cesse d'augmenter.

       <?php 

            // La ligne ci-dessus est la balise ouvrante PHP
            // commentaire PHP sur une seule ligne
            # commentaire PHP sur une seule ligne
            /*
                commentaire
                sur 
                plusieurs
                lignes
            */

            // Quelques liens utiles : 
            // https://www.php.net/              - documentation officielle
            // https://stackoverflow.com/        - forum pour les développeurs

            /*
            SOMMAIRE 
            --------
            - 01 - Instruction d'affichage
            - 02 - Variables : déclaration / affection / type 
            - 03 - Concaténation 
            - 04 - Guillemets & quotes
            - 05 - Constantes & constantes magiques
            - 06 - Conditions & opérateurs de comparaison
            - 07 - Fonctions prédéfinies
            - 08 - Fonctions utilisateurs
            - 09 - Boucles
            - 10 - Inclusions
            - 11 - Tableaux
            - 12 - Classes & objects
            */

            echo '<h2>01 - Instruction d\'affichage</h2>';
            // echo est une instruction permettant de déclencher un affichage (écriture dans le code source)
            // Chaque instruction doit se terminer par un point virgule ";"

            echo 'Bonjour'; // il est possible d'afficher du texte
            echo '<br>';    // il est également possible d'afficher de l'html
            echo 'à tous <br>';

            print 'Nous sommmes Lundi ! <br>';
            // print est une autre instruction d'affichage quasiment similaire à echo
            // Dans le cadre de ce cours nous utiliserons toujours echo
        ?>
        <?= 'Cette balise php contient un echo et ne sert que lorsque l\'on souhaite déclencher un affichage'; ?>
        <?php echo ''; ?>

        <?php 

            echo '<h2>02 - Variables : type / déclaration / affectation </h2>';
            // définition : un variable est un espace nommé permettant de conserver une valeur
            // une variable en php est déclaré avec le signe $
            // PHP est sensible à la casse, la variable $A n'est pas la même que la variable $a
            // Caractère autorisés : a-z A-Z 0-9 _
            // ⚠ Attention ! une variable ne peut pas commencer par un chiffre

            $a = 123; // déclaration d'une variable nommée "a" et affectation de la valeur numérique 123
            echo gettype($a);  // integer : un entier
            echo '<br>';
            
            $a = 1.5; // chiffre décimal
            echo gettype($a); // double (float) : chiffre décimal
            echo '<br>';
            
            $a516548435154561 = 'un chaine'; // une chaine caractère
            echo gettype($a516548435154561); // string
            echo '<br>';
            
            $boolean = true; // TRUE ou FALSE
            echo gettype($boolean); // boolean
            echo '<br>';

            echo '<h2>03 - Concaténation</h2>';
            // La concaténation permet d'assembler des chaines de caractères les unes avec les autres

            $x = 'Bonjour';
            $y = 'tout le monde';

            // sans la concaténation 
            echo $x;
            echo ' ';
            echo $y; 
            echo '<br>';

            // avec la concaténation 
            echo $x . ' ' . $y . '<br>'; 
            echo $x , ' ' , $y , '<br>'; 

            // La concaténation se fait avec le point "." que l'on peut traduire par suivie de 
            // il est possible de faire la concaténation avec la virgule "," mais à éviter car ne fonctionne pas si on utilise print !! 
            // pour se protéger autant utiliser toujours le point !

            // concaténation lors de l'affectation : 

            $prenom = 'Robert';
            $prenom = 'Georges';
            echo $prenom . '<br>';

            $prenom2 = 'Julien';
            $prenom2 .= ' Lebron'; // Julien Lebron
            // Raccourci équivalent à écrire : $prenom2 = $prenom2 . ' Lebron';
            echo $prenom2 . '<br>';

            $prenom2 .= ' étudie le langage PHP';
            echo $prenom2 . '<br>';

            echo '<h2>04 - Guillemets et apostrophes</h2>';
            
            // Dans des apostrophes, une variable est considérée comme du texte
            // Dans des guillemets, une variable est reconnue et interprétée 
            
            // $pseudo = 'Admin';
            $temps = 'beau';
            
            echo 'Bonjour $pseudo <br>';
            echo 'Bonjour ' . $pseudo . '<br>';
            
            echo "Bonjour $pseudo <br>";
            echo "Aujourd'hui il fait $temps <br>";
            echo 'Aujourd\'hui il fait ' . $temps . '<br>';
            echo "Aujourd'hui il fait $temps <br>";
            
            echo '<h2>05 - Constantes & constantes magique</h2>';
            // Une constante est comme une variable sauf que comme son nom l'indique, on ne pourra pas changer la valeur pendant l'exécution du code.
            // Très pratique pour isoler une information et l'appeler dans notre code partout ou cela est nécessaire
            
            // Par convention, une constante s'écrit toujours en majuscule
            // define('nom_constante', 'valeur de la constante')
            
            define('CAPITALE', 'Bruxelles');
            define('CHEMIN', '/projet/index.html');
            echo CAPITALE . '<br>';
            echo CHEMIN . '<br>';
            
            // Constantes magiques : (déjà inscrite dans le langage)
            // -----------------------------------------------------
            
            echo __DIR__ . '<br>'; // chemin jusqu'au dossier qui contient le fichier sur lequel je me trouve
            echo __FILE__ . '<br>'; // le chemin du fichier actuel
            echo __LINE__ . '<br>'; // le numéro de la ligne
            
            echo '<h3>Exercice variable</h3>';
            // Créer 3 variables et placer dans chacune une des valeurs suivantes : bleu, blanc, rouge
            // Ensuite via un seul echo il faut afficher la chaine suivante : 
            // Les couleurs du drapeau Français sont : bleu - blanc - rouge
            
            $couleur1 = 'bleu';
            $couleur2 = 'blanc';
            $couleur3 = 'rouge';
            
            echo 'Les couleurs du drapeaux Français sont : ' . $couleur1 . ' - ' . $couleur2 . ' - ' . $couleur3 . '<br>'; 
            echo "Les couleurs du drapeaux Français sont : $couleur1 - $couleur2 - $couleur3 <br>";
            
            // Créer des variables, stocker les couleurs et le nom d'un pays et afficher la chaine suivante : 
            // couleur1 - couleur2 - couleur3 sont les couleurs du drapeaux "nom du pays"
            
            $couleur4 = 'vert';
            $couleur5 = 'jaune';
            $couleur6 = 'rouge';
            $pays = 'Jamaïque';
            
            
            echo "$couleur4 - $couleur5 - $couleur6 sont les couleurs du drapeau de la $pays <br>";
            echo $couleur4 . ' - ' . $couleur5 . ' - ' . $couleur6 . ' sont les couleurs du drapeau de la ' . $pays . '<br>';
            

            echo '<h3>Opérateurs arithmétique</h3>';

            $valeur1 = 10;
            $valeur2 = 2;

            echo $valeur1 + $valeur2 . '<br>'; // Addition 
            echo $valeur1 - $valeur2 . '<br>'; // Soustraction 
            echo $valeur1 / $valeur2 . '<br>'; // Division 
            echo $valeur1 * $valeur2 . '<br>'; // Multiplication 
            echo $valeur1 % $valeur2 . '<br>'; // Modulo // Le restant de la divison en terme d'entier
            echo $valeur1 ** $valeur2 . '<br>'; // Puissance

            // opération / affectation 

            $valeur1 += $valeur2; // équivalent à écrire $valeur1 = $valeur1 + $valeur2
            $valeur1 -= $valeur2; // équivalent à écrire $valeur1 = $valeur1 - $valeur2
            $valeur1 /= $valeur2; // équivalent à écrire $valeur1 = $valeur1 / $valeur2
            $valeur1 *= $valeur2; // équivalent à écrire $valeur1 = $valeur1 * $valeur2
            $valeur1 %= $valeur2; // équivalent à écrire $valeur1 = $valeur1 % $valeur2
            $valeur1 **= $valeur2; // équivalent à écrire $valeur1 = $valeur1 ** $valeur2

            echo '<h2>06 - Conditions & opérateurs de comparaison</h2>';
            // isset() / empty()
            // isset() permet de savoir si une information existe (elle est définie)
            // empty() permet de savoir si une information n'existe pas ou si elle existe mais vide
            // (exemple : une chaine vide, false, 0)

            // isset()
            $abc = 'bonjour'; 
            echo $abc . '<br>';
            // echo $blabla . '<br>'; // ⚠ Attention Erreur car la variable $blabla n'existe pas
            // $blabla = "J'existe";

            if(isset($blabla))
            {
                echo $blabla . '<br>';
            }
            else 
            {
                echo 'Cette variable n\'existe pas <br>';
            }

            // empty()
            // empty() renvoi true si la variable n'existe pas ou si elle existe (exemple champ de formulaire avec aucune saisie : l'information existe mais vide)
            // valeurs vides : une chaine vide '', 0, tableau vide, la chaine '0' et false

            $pseudo = 'Pat 982';
            if(empty($pseudo))
            {
                echo 'La variable n\'existe pas ou existe mais contient une valeur considérée comme vide <br>';
            }
            else 
            {
                echo 'La variable existe et n\'est pas vide <br>';
            }

            // isset() et empty() seront obligatoire dans le cas ou on manipule une information provenant de l'utilisateur (formulaire / url / cookie)

            if(empty($pseudo))
            {
                echo 'Bienvenue sur notre site ! <br><br>';
            }
            else 
            {
                echo "Bonjour, $pseudo bienvenue sur notre site ! <br><br>";
            }

            /*
            // Opérateur de comparaison
            //---------------------------

            =              ☠ Attention (ce n'est pas un opérateur de comparaison ! )
            ==             est égal en terme de valeur uniquement
            ===            est strictement égal à (on compare en terme de valeur et en terme de type)
            !=             est différent de (en terme de valeur uniquement)
            !==            est strictement différent de (en terme de valeur et de type)
            >              strictement supérieur
            <              strictement inférieur
            >=             supérieur ou égal
            <=             inférieur ou égal

            */

            // Créer un conditionnement a > b 

            $a = 10;
            $b = 5; 
            $c = 2; 

            if($a > $b)
            {
                echo 'La valeur de la variable $a est bien supérieur à la valeur de la variable $b <br>';
            }
            else
            {
                echo 'a n\'est pas supérieur a b <br>';
            }

            // Plusieurs conditions : AND => &&
            // Créer un conditionnement a > b et b > c et a > c

            if($a > $b && $b > $c && $c > $b)
            {
                echo "Ok pour toutes les conditions <br>";
            }
            else 
            {
                echo 'Une des conditions ou toutes les conditions sont fausses <br>';
            }

            // L'une ou l'autre d'un ensemble de condition : OR => ||

            if($a > $b || $b > $c || $c > $b )
            {
                echo 'Ok pour au moins une des conditions <br>';
            }

            if($b > $a || $b < $c || $c == 10 )
            {
                echo 'Ok pour au moins une des conditions <br>';
            }

            // if / elseif / else

            if($a == 8)
            {
                echo 'Réponse 1 <br>';
            }
            elseif($a != 10)
            {
                echo 'Réponse 2 <br>';
            }
            elseif($c == 12)
            {
                echo 'Réponse 3 <br>';
            }
            else 
            {
                echo 'Réponse 4 <br>';
            }

            $a1 = 1;
            $a2 = '1';

            echo '<hr>';

            if( $a1 == $a2)
            {
                echo 'Ok, les deux variable contiennent la même valeur <br>';
            }   
            else
            {
                echo 'NOK, les valeurs sont différentes <br>';
            }

            if( $a1 === $a2)
            {
                echo 'Ok, les deux variable contiennent la même valeur du même type <br>';
            }   
            else
            {
                echo 'NOK, les valeurs et/ou les types sont différents <br>';
            }

            // ecriture ternaire
            echo ($a1 === $a2) ? 'Ok, les deux variables contiennent la même valeur du même type<br>' : 'Nok, les valeurs et/ou les types sont différents <br>';

            // Condition switch()

            $couleur = 'vert';

            switch($couleur)
            {
                case 'bleu' :
                    echo 'Vous aimez le bleu <br>';
                break;
                case 'vert' :
                    echo 'Vous aimez le vert <br>';
                break;
                case 'rouge' :
                    echo 'Vous aimez le rouge <br>';
                break;
                case 'orange' :
                    echo 'Vous aimez le orange <br>';
                break;
                default : 
                    echo "Vous n'aimez pas le bleu, ni le rouge ni le vert ni le orange<br>";
                    break;
                }
                
            echo '<h3>Exercice : refaire cette condition en utilisant if / else</h3>';
                
            $couleur = 'violet';
                
            if($couleur == 'bleu')
            {
                echo 'Vous aimez le ' .  $couleur . '<br>';
            }
            elseif($couleur == 'vert')
            {
                echo 'Vous aimez le ' . $couleur . '<br>';
            }
            elseif($couleur == 'rouge')
            {
                echo 'Vous aimez le ' . $couleur . '<br>';
            }
            elseif($couleur == 'orange')
            {
                echo 'Vous aimez le ' . $couleur . '<br>';
            }
            else 
            {
                echo "Vous n'aimez pas le bleu, ni le rouge ni le vert ni le orange<br>";
            }

            if($couleur == 'bleu' || $couleur == 'orange' || $couleur == 'vert' || $couleur == 'rouge')
            {
                echo 'Vous aimez le ' . $couleur . '<br>';
            }
            else 
            {
                echo 'Vous n\'aimer pas le bleu pas le rouge ni le vert ni le orange';
            }

            echo '<h2>07 - Fonctions prédéfinies</h2>';
            separateur();
            // déjà inscrites au langage, le développeur ne fait que l'exécuter

            // fonction date()
            // https://www.php.net/manual/fr/function.date.php
            // https://www.php.net/manual/fr/datetime.format.php

            echo 'Nous sommes le : ' . date('d/m/Y à H:i:s', 5615615129) . '<hr>';
            echo time() . '<br><br>';

            // htmlentities
            // https://www.php.net/manual/fr/function.htmlentities
            echo '&copy; &Omega; &beta; &epsilon; <hr>';
            $exemple = 'Un \'apostrophe\' en <strong>gras</strong>';
            echo htmlentities($exemple, ENT_QUOTES);

            // echo htmlspecialchars($exemple);

            $str = "Un \'apostrophe\' en <strong>gras</strong>";
            $converti = htmlentities($str);
            // echo $converti;
            
            // fonction de traitement de chaine de caractère 
            // strpos()
            // Cette fonction permet de chercher la position d'une chaine dans une autre chaine
            // Valeurs de retours
                // Succès : On obtient un INT représentant la position
                // Echec : On obtient false

            $email = 'exemple@gmail.com';
            $email2 = 'exemple.gmail.fr';

            echo strpos($email, '@') . '<hr>'; // nous allons chercher le @ dans cette chaine de caractère
            echo strpos($email2, '@') . '<hr>';

            // ⚠ Attention, le premier caractère à la position 0 !

            // strlen()
            // strlen() permet de compter le nombre de caractère d'une chaine

            $pseudo = 'Admin0007';
            echo 'Taille de la chaine contenu dans la variable $pseudo : ' . strlen($pseudo) . '<hr>';
            
            $test = 'été';
            echo 'Taille de la chaine contenu dans la variable $test : ' . strlen($test) . '<hr>';

            // Pour la gestion de l'UTF-8 et les caractères spéciaux, il faut priviligier la fonction iconv_strlen()
            // Avec iconv_strlen() on compte réellement le nombre de caractère

            echo 'Avec iconv_strlen() : <br><br>';
            echo 'Taille de la chaine contenu dans la variable $pseudo : ' . iconv_strlen($pseudo) . '<hr>';
            echo 'Taille de la chaine contenu dans la variable $pseudo : ' . iconv_strlen($test) . '<hr>';
            
            // iconv_substr()
            // permet de découper une chaine
            // substr(chaine, position_depart, nb_de_caractere)
            $texte = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit recusandae facilis sequi, incidunt distinctio vel obcaecati ex omnis? Tenetur nihil natus odit, quod quo incidunt temporibus sint reprehenderit. Dignissimos, alias.';
            
            
            echo 'Taille de la chaine contenu dans la variable $pseudo : ' . iconv_strlen($texte) . '<hr>';
            echo iconv_substr($texte, 5, 100) . '... <a href="">Lire la suite</a>';

            echo '<h2>08 - Fonctions utilisateurs</h2>';
            // déclarée et excutée par le développeur
            // fonction simple sans argument qui va afficher 3 balises hr dans la page
            // il est possible d'exécuter une fonction avant sa déclaration
            // c'est possible car l'interpréteur php va faire deux lecture du code
            // une première lecture pour isoler toutes les fonctions et les pré charger
            // une deuxième lecture pour exécuter tout le code


            // déclaration
            function separateur()
            {
                echo '<hr><hr><hr>';
            }

            // exécution
            separateur();

            // fonction avec argument
            // un argument (parameter) est fourni à une fonction afin de permettre de modifier le comportement de la fonction

            function bonjour($prenom)
            {
                return 'Bonjour ' . $prenom . ', bienvenue sur notre site! <br>';
            }
            

            $prenom = 'Julien';
            echo bonjour($prenom);

            // Fonction pour calculer la TVA sur une valeur
            function calcul_tva($valeur)
            {
                return $valeur * 1.2;
            }

            echo '1000 € avec une tva de 20% = ' . calcul_tva(1000) . '€<hr>';
            
            // Pour améliorer cette fonction, il faudrait permettre de choisir le taux de tva afin que ce soit pas toujours 20%
            // le fait de mettre un deuxième argument, nous permet de fournir le taux concerné lors de l'exécution
            function calcul_tva_taux($valeur, $taux)
            {
                return $valeur * $taux;
            }
            
            $valeur = 5000;
            $taux = 1.2;
            
            echo '1000 € avec une tva de 20% = ' . calcul_tva_taux($valeur, 1.2) . '€<hr>';
            echo '1000 € avec une tva de 5.5% = ' . calcul_tva_taux(1000, 1.055) . '€<hr>';
            
            // La même fonction avec $taux falcultatif 
            function calcul_tva_taux2($valeur, $taux = 1.2)
            {
                return $valeur * $taux;
            }
            echo '1500 € avec une tva de 20% = ' . calcul_tva_taux2(1500) . '€<hr>';
            echo '1500 € avec une tva de 5.5% = ' . calcul_tva_taux2(1500, 1.055) . '€<hr>';

            function machine_glace($taille, $parfum = 'chocolat')
            {
                return 'Voici votre glace avec un cone de taille : ' . $taille . ' et un parfum : ' . $parfum . '<br>';
                return "Voici votre glace avec un cone de taille : $taille et un parfum : $parfum <br>";
            }

            echo machine_glace('L', 'Fraise-Vanille');
            echo machine_glace('S');

            // Environnement (scope)
            // Global : le script complet
            // Local  : à l'intérieur des accolades d'une fonction
            // L'existence des variables va dépendre de l'environnement ou elles sont déclarées


            $animal = 'lapin'; // espace global

            function foret()
            {
                $animal = 'renard'; // espace local
                return "J'ai vu un $animal en forêt<br>";
            }

            echo $animal . '<br>';
            echo foret();
            echo $animal . '<br>';

            $angleterre = 'Angleterre';
            $etat = 'France';

            function affiche_pays()
            {
                global $etat;
                return "J'habite en $etat <br>";
            }

            echo affiche_pays();
            separateur();


            // Exercice : 

            // 01 - Créer une fonction meteo() avec 2 arguments attendue
            // 02 - En fonction de la saison et de la température le résultat en sortie sera différent 
            // Exemple : Nous sommes en "saison", et il fait "température" degrés
            // Dans le cas ou la saison est printemps et dans le cas ou la température est comprise entre -1 et 1 degré
            // Nous sommes au printemps, et il fait 1 degré
            // Bonus : ecriture ternaire des conditions


            function meteo($saison, $temperature)
            {
                if($saison == 'printemps')
                {
                    $debut = 'Nous sommes au ' . $saison;
                }
                else 
                {
                    $debut = 'Nous sommes en ' . $saison;
                }

                if($temperature <= 1 && $temperature >= -1)
                {
                    $suite = ', et il fait ' . $temperature . ' degré<hr>';
                }
                else
                {
                    $suite = ', et il fait ' . $temperature . ' degrés<hr>';
                }

                return $debut . $suite;

            }


            echo meteo('été', 35);
            echo meteo('printemps', 20);
            echo meteo('automne', 10);
            echo meteo('hiver', 1);

            separateur();

            function meteo2($saison, $temperature)
            {
                $article = 'en';
                $s = 's';

                if($saison == 'printemps')
                {
                    $article = 'au';
                }

                if($temperature >= -1 && $temperature <= 1)
                {
                    $s = '';
                }

                return 'Nous sommes ' . $article . ' ' . $saison . ', et il fait ' . $temperature . ' degré' . $s . '<hr>';
            }

            echo meteo2('été', 35);
            echo meteo2('printemps', 20);
            echo meteo2('automne', 10);
            echo meteo2('hiver', 1);
            
            separateur();
            
            function meteo3($saison, $temperature)
            {
                $debut = ($saison == 'printemps') ? 'Nous sommes au ' . $saison : 'Nous sommes en ' . $saison;
                $suite = ($temperature >= -1 && $temperature <= 1) ? ', et il fait ' . $temperature . ' degré<hr>' : ', et il fait ' . $temperature . ' degrés<hr>';
                return $debut . $suite;
            }
            
            echo meteo3('été', 0);
            echo meteo3('printemps', 30);
            echo meteo3('automne', -10);
            echo meteo3('hiver', -1);

            separateur();

            echo '<h2>09 - Structure itérative : boucles</h2>';
            // Une boucle est un outil nous permettant de répéter un ensemble d'instruction
            // pour mettre en place une boucle, nous avons besoin de 3 informations : 
                // 01 - une valeur de départ (compteur)
                // 02 - une condition d'entrée (question)
                // 03 - une incrémentation pour modifier la valeur du compteur afin de ne pas avoir une boucle infinie

            // boucle while()
            $i = 0;          // compteur
            while($i < 10)   // condition d'entrée
            {
                echo 'Je ne dois pas bavarder en classe<br>'; // instruction qui sera répété
                $i++; // incrémentation // $i = $i + 1;
            }

            separateur();

            // boucle for()
            for($i = 0; $i < 10; $i++)
            {
                echo 'La valeur du compteur $i est égal à : ' . $i . '<br>';
            }

            // Exercices : 
            // 01 - Faire en sorte de ne pas avoir le dernier "-" après le chiffre 9 
            // 0 - 1 - 2 - 3 - 4 - 5 - 6 - 7 - 8 - 9

            // 02 - Afficher les chiffres de 0 à 9 dans un tableau html

            separateur();

            for($i = 0; $i < 10; $i++)
            {
                if($i == 9)
                {
                    echo $i;
                }
                else
                {
                    echo $i . ' - ';
                }
            }

            separateur();

            $i = 0;
            while($i < 10)
            {
                if($i < 9)
                {
                    echo $i . ' - ';
                }
                else 
                {
                    echo $i;
                }
                $i++;
            }

            separateur();
            // Affichage de 0 à 9 dans un tableau html
            echo '<table border="1" style="border-collapse: collapse; width: 50%; margin: 0 auto; text-align: center;">';

            echo '<tr>';

            $i = 0;
            while($i < 41)
            {
                if($i == 11 || $i == 21 || $i == 31)
                {
                    echo '</tr><tr><td style="padding: 10px;">' . $i . '</td>';
                }
                echo '<td style="padding: 10px;">' . $i . '</td>';
                $i++;
            }

            echo '</tr>';

            echo '</table>';

            echo '<h2>10 - Inclusion</h2>';

            echo 'Premier appel avec include :<hr>';
            include 'exemple.inc.php';
            separateur();
            
            echo 'Deuxième appel avec include_once : <hr>';
            include_once 'exemple.inc.php';
            separateur();

            echo 'Premier appel avec require : <hr>';
            require 'exemple.inc.php';
            separateur();

            echo 'Deuxième appel avec require_once : <hr>';
            require_once 'exemple.inc.php';
            separateur();

            // include et require permettent d'inclure le contenu d'un fichier extérieur dans celui-ci
            // avec le _once on vérifie si le fichier à déjà été appelé dans cette page, si c'est le cas on ne le rappel pas !

            // Différence entre le include et le require : 
                // Dans le cas d'une erreur (fichier non trouvé), include va déclencher un warning et la page continue de s'exécuter
                // Dans le cas d'une erreur (fichier non trouvé), require va déclencher une fatale erreur et bloque l'exécution du code à la suite

            echo '<h2>11 - Tableau de données ARRAY</h2>';
            // Un tableau peut contenir un ensemble de valeur à l'inverse d'une variable simple qui ne peut contenir qu'une seule valeur
            // Un tableau ne peut avoir que deux colonnes : 
            // Une colonne avec l'indidice et une colonne avec la valeur correspondante à l'indice
            // Il est possible d'avoir un tableau dans un tableau (tableau multidimensionnel)    
            // Un tableau est toujours contenu dans une variable

            // Comment déclarer un tableau
            $tableau = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi');
            $tableau2 = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi'];

            // Pour voir le contenu du tableau : 
            // deux instruction d'affichage améliorées : 
            // print_r()
            echo '<pre>';
            print_r($tableau);
            echo '</pre>';
            
            // var_dump()
            echo '<pre>';
            var_dump($tableau2);
            echo '</pre>';
            
            // Afficher la valeur "mercredi" en piochant dans le tableau avec un echo
            echo 'Nous sommes ' . $tableau[2] . '<br>';
            
            // On peut rajouter des éléments dans le tableau
            $tableau[] = 'samedi';
            $tableau[] = 'dimanche';
            
            // Rajouter un élément au début du tableau
            // array_unshift($tableau, 'dimanche');
            echo '<pre>';
            print_r($tableau);
            echo '</pre>';
            
            $tab_legume = ['concombre', 'radis', 'tomate', 'salade', 'courgette'];
            echo '<pre>';
            print_r($tab_legume);
            echo '</pre>';
            
            // Il est possible de changer une des valeurs :
            $tab_legume[2] = 'aubergine';
            echo '<pre>';
            print_r($tab_legume);
            echo '</pre>';
            
            // il est possible de choisir nous même les indices du tableau
            $tab_couleur = ['b' => 'bleu', 'r' => 'rouge', 'bl' => 'blanc', 'v' => 'violet'];
            echo '<pre>';
            print_r($tab_couleur);
            echo '</pre>';
            
            echo $tab_couleur['v'] . '<br>';
            $tab_couleur['b'] = 'jaune';
            echo '<pre>';
            print_r($tab_couleur);
            echo '</pre>';
            
            $user = ['pseudo' => 'Ryu77', 'mdp' => 'diozajdizahdiazh', 'email' => 'admin@gmail.com', 'adresse' => '30 avenue du test' , 'cp' => 75000, 'ville' => 'Paris', 'sexe' => 'm'];
            
            echo '<pre>';
            print_r($user);
            echo '</pre>';

            echo '<p>Votre pseudo sur le site est : ' . $user['pseudo'] . '</p>';

            // Pour connaitre la taille d'un tableau (nb d'élément du tableau)
            echo 'Taille du tableau "user" : ' . sizeof($user) . '<hr>';
            echo 'Taille du tableau "tableau" : ' . count($tableau) . '<hr>';

            echo '<ul>';
            $i = 0;
            while($i < sizeof($tableau))
            {
                echo '<li>' . $tableau[$i] . '</li>';
                $i++;
            }
            echo '</ul>';
            
            
            // boucle foreach() spécifique aux tableaux et aux objets
            
            
            echo '<ul>';
           
            foreach($user AS $valeur)
            {
                echo '<li>' . $valeur . '</li>';
            }
            echo '</ul>';

            separateur();

            echo '<ul>';
           
            foreach($user AS $indice => $valeur)
            {
                echo '<li><b>' . $indice . '</b> : ' . $valeur . '</li>';
            }
            echo '</ul>';

            // Une boucle foreach() va tourner naturellement autant de fois qu'il y a d'éléments dans le tableau.
            // Dans les parenthèses du foreach, on commence par nommer le tableau puis le mot clé AS obligatoire
            // Après le mot clé AS on peut avoir 1 ou 2 variables
            // Avec une seule variable, cette variable contient la valeur du tableau en cours à chaque tour de boucle
            // Avec deux variables, la première reçoit l'indice en cours, la deuxième reçoit la valeur en cours

            // echo '<pre>';
            // print_r($GLOBALS);
            // echo '</pre>';
            // echo '<pre>';
            // print_r($_SERVER);
            // echo '</pre>';

            echo '<h2>12 - Class et object</h2>';


            class Personnage
            {
                // Propriétées
                public $prenom = 'Arthur';
                public $nom = 'Pendragon';
                public $profession = 'Roi';
                public $pays = 'Bretagne';

                // Méthodes
                public function changer_prenom($nouveau)
                {
                    return $this->prenom = $nouveau;
                }

                public function changer_nom($nouveau)
                {
                    return $this->nom = $nouveau;
                }

                public function changer_profession($nouveau)
                {
                    return $this->profession = $nouveau;
                }
            }

            $mon_objet1 = new Personnage;

            // Afficher les propriétés de l'objet : 
            echo '<pre>';
            print_r($mon_objet1);
            echo '</pre>';
            
            // Afficher les méthodes de l'objet 
            echo '<pre>';
            print_r(get_class_methods($mon_objet1));
            echo '</pre>';

            // Pour piocher dans l'objet ->
            echo $mon_objet1->prenom . ' ' . $mon_objet1->nom . '<br>';

            // On appel la méthode pour changer la propriété prenom
            $mon_objet1->changer_prenom('Fadia');
            echo $mon_objet1->prenom . ' ' . $mon_objet1->nom .  '<br>';
            $mon_objet1->changer_profession('Reine');
            echo $mon_objet1->profession . '<br>';


            
            


























            
            


            
            
            
            
            
            
            




            



            

        ?>
        















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
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>

</html>