<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-6 mt-5 mx-auto">
                <h1>Formulaire</h1>
                <?php 
                    echo '<pre>';
                    print_r($_POST);
                    echo '</pre>';
                    echo '<pre>';
                    print_r($_GET);
                    echo '</pre>';
                    echo '<pre>';
                    print_r($GLOBALS);
                    echo '</pre>';
                    // http://localhost/php/POST/formulaire_post.php
                    // ?
                    // pseudo=dopakd
                    // &
                    // email=daz%5Epkdaz

                ?>

                <form action="" method="post" enctype="multipart/form-data" class="mt-5">
                    <div class="mb-3">
                        <label for="pseudo" class="form-label">Pseudo</label>
                        <input type="text" name="pseudo" id="pseudo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary w-100" value="Valider">
                    </div>
                </form>
            </div>
        </div>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>