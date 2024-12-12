<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

</head>


<body>


<?php
session_start();


if (!isset($_SESSION["connexion"]) || $_SESSION["connexion"] !== true) {
    
    header("Location: connexion.php");
    exit;
}
?>

    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="connexion.php">Connexion</a>
                    <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                    <a class="nav-link" target="blank" href="nousJoindre.html">Nous Joindre</a>
                    <a class="nav-link" target="blank" href="/PageWebHouse/index.html">Autres Albums de House</a>
                </div>
                </div>
            </div>
        </nav>
    


    <?php 

        
         header('Content-Type: text/html; charset=utf-8');
         $servername = "localhost";
         $username = "root";
         $password = "root";
         $db = "intra";
     
         // Create connection
         $conn = new mysqli($servername, $username, $password, $db);
 
         // Checkconnection
         if($conn->connect_error){
             die("Connection failed:" . $conn->connect_error);
         }
 
         // CRUD CREATE READ UPDATE DELETE
         // ON VEUT FAIRE UN READ
         // Cette ligne ne fait  rien
         $sql = "select * from periodique";
 
         $conn->set_charset('utf8mb4');
         $resultat = $conn->query($sql);

    ?>

    <div class="container-fluid mt-5 p-5">
        <div class="row align-items-center text-center">
        <?php
         if($resultat->num_rows > 0) {
            while($row = $resultat->fetch_assoc()){
                echo '
                            <div class="col-xl-4 col-md-6 col-12 align-items-center text-center pb-5">
                                <img src="'.$row["photo"].'" class="album img-fluid" >
                                <p>'.$row["nom"].'
                                <br>
                                '.$row["titre"].'
                                <br>
                                No.'.$row["numero"].'
                                </p>
                                
                            </div>';
                    }
                }
                else {
                    echo 'Pas de preiodique dans la BD...';
                }
    ?>






    




   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</html>