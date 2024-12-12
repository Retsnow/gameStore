<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <?php IF(isset($_GET['secret'])) { ?>

        <div class="container-fluid">
            <div class="row align-items-center">
                
                <img src="https://i.imgflip.com/8hdb48.png?a478680" class="img-fluid" alt="">
                
            </div>
        </div>

    <?php }
    else { 
        
        $nom = $_GET['nom'];
        
        IF(strcasecmp($nom, "slay") == 0)
        {
            $photo = "https://www.liveabout.com/thmb/5Jqt2NdU5fjtcwhy6FwNg26yVRg=/1500x1167/filters:fill(auto,1)/yoda-56a8f97a3df78cf772a263b4.jpg";
        }
        else {
            $photo = $_GET['photo'];
        }

        $jeu = $_GET['jeu'];
        $citation = $_GET['citation'];
        ?>


    <div class="container-fluid h-100">
        <div class="row align-items-center h-100">
            <div class="offset-3 col-6 card bg-secondary p-3">
                <h1 class="card-title text-light"><?php echo $nom; ?></h1>
                <div class="row">
                    <img src="<?php echo $photo; ?>" class="img-fluid" alt="">
                </div>
                <div class="row text-light pt-3">
                    <p>Jeux Préféré: <?php echo $jeu; ?></p>
                </div>
                <div class="row text-light">
                    <p>Citation Préféré: <?php echo $citation ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>