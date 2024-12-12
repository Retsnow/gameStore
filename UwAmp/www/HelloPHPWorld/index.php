<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelloPHPWorld</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid h-100">
        <div class="row align-items-center h-100">
        <div class="offset-3 col-6 card bg-secondary p-3">
            <h4 class="card-title text-light">Formulaire Personnalisé</h4>
            <form action="traitement.php" method="get">
                <div class="row text-light">
                    Nom : <input type="text" name="nom">
                </div>
                <div class="row text-light">
                    URL Photo Avatar : <input type="text" name="photo">
                </div>
                <div class="row text-light">
                    Jeu d'ordinateur favoris : <input type="text" name="jeu">
                </div>
                <div class="row text-light">
                    Citation Favorite : <input type="text" name="citation">
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