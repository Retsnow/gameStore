<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter - R6SAPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<?php 
if($_SESSION['connexion'] == true) {

}





?>


<div class="container-fluid h-100">
        <div class="row align-items-center h-100">
        <div class="offset-3 col-6 card bg-secondary p-3">
            <h4 class="card-title text-light">Ajouter agent R6</h4>
            <form action="ajouter.php" method="get">
                <div class="row text-light">
                    URL Image : <input type="text" name="image" <?php
                        if (!empty($_GET['image'])){
                            echo 'value="'.$_GET['image'].'">';
                        }
                        else {
                            echo '> <h6>Une image est requise</h6>';
                        }
                    ?>
                </div>
                <div class="row text-light">
                    Nom : <input type="text" name="nom" <?php
                        if (!empty($_GET['nom'])){
                            echo 'value="'.$_GET['nom'].'">';
                        }
                        else {
                            echo '> <h6>Un nom est requis</h6>';
                        }
                    ?>
                </div>
                <div class="row text-light">
                    Position : <input type="text" name="position" <?php
                        if (!empty($_GET['position'])){
                            echo 'value="'.$_GET['position'].'">';
                        }
                        else {
                            echo '> <h6>Une position est requise</h6>';
                        }
                    ?>
                </div>
                <div class="row text-light">
                    Organisation : <input type="text" name="organisation" <?php
                        if (!empty($_GET['organisation'])){
                            echo 'value="'.$_GET['organisation'].'">';
                        }
                        else {
                            echo '> <h6>Une organisation est requise</h6>';
                        }
                    ?>
                </div>
                <div class="row text-light">
                    Arme Principal : <input type="text" name="arme_p"
                    <?php
                        if (!empty($_GET['arme_p'])){
                            echo 'value="'.$_GET['arme_p'].'">';
                        }
                        else {
                            echo '> <h6>Une arme principale est requise</h6>';
                        }
                    ?>
                </div>
                <div class="row text-light">
                    Arme Secondaire : <input type="text" name="arme_s" <?php
                        if (!empty($_GET['arme_s'])){
                            echo 'value="'.$_GET['arme_s'].'">';
                        }
                        else {
                            echo '> <h6>Une arme secondaire est requise</h6>';
                        }
                    ?>
                </div>
                <div class="row text-light">
                    <input type="submit" class="mt-3"> 
                </div>
                    
            </form>
        </div>
        </div>
    </div>


    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>