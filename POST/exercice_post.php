<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      
      <div class="container">
          <div class="row">
              <div class="col-12 mt-5 mx-auto">
                <h1>Inscription</h1>

                <?php 
                // Exercice : Création d'un formulaire d'inscription + récupération des informations + traitement php
                // Créer un formulaire d'inscription
                // Afficher proprement (avec un echo) les informations provenant du formulaire
                // Pseudo :
                // Email :
                // Penser au cas d'erreur possible (est-ce que ça existe)
                // Traitement PHP
                // supprimer les espaces en début et en fin de chaine
                // Controle sur le Pseudo
                // Le pseudo doit avoir entre 4 et 14 caractère inclus sinon message d'erreur
                // Contrôle sur la validité de l'email
                // Si le format de l'email n'est pas correct on affiche un message d'erreur pour l'utilisateur
                echo '<pre>';
                print_r($_POST);
                echo '</pre>';

                if(!empty($_POST['pseudo']) && !empty($_POST['email']))
                {
                    // supprimer les espaces en début en fin de chaine
                    // trim() est une fonction permettant de supprimer les espaces en début et en fin de chaine

                    $pseudo = trim($_POST['pseudo']);
                    $email = trim($_POST['email']);

                    if(iconv_strlen($pseudo) < 4 || iconv_strlen($pseudo) > 14)
                    {
                        echo '<div class="alert alert-danger mt-3">🛑 Attention, le Pseudo doit avoir entre 4 et 14 caractères inclus</div>';
                    }
                    else 
                    {
                        echo '<div class="alert alert-success mt-3">✅ Le Pseudo : ' . $pseudo . ' est correct ! Bienvenue sur notre site.</div>';
                    }

                    // controle sur la validité de l'email
                    // si le format d'email n'est pas correct on affiche un message d'erreur pour l'utilisateur
                    
                    if(filter_var($email, FILTER_VALIDATE_EMAIL) == false)
                    {
                        echo '<div class="alert alert-danger mt-3">🛑 Attention, le format de l\'adresse email n\'est pas correct ! Veuillez renseigner un email valide.</div>';
                    }
                    else
                    {
                        echo '<div class="alert alert-success mt-3">✅ L\'adresse Email : ' . $email . ' est correct ! Bienvenue sur notre site.</div>';
                    }

                }
                else
                {
                    echo '<div class="alert alert-danger mt-3">🛑 Veuillez renseigner tous les champs du formulaire svp !</div>';
                }

                
                ?>

                <form action="" method="post" class="mt-5">
                    <div class="mb-3">
                        <label for="pseudo" class="form-label">Pseudo</label>
                        <input type="text" name="pseudo" id="pseudo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Valider" class="btn btn-primary">
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>