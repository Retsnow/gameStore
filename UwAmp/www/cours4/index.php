<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R6SAPI</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
        header('Content-Type: text/html; charset=utf-8');
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $db = "agents";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);

        // Checkconnection
        if($conn->connect_error){
            die("Connection failed:" . $conn->connect_error);
        }

        // CRUD CREATE READ UPDATE DELETE
        // ON VEUT FAIRE UN READ
        // Cette ligne ne fait  rien
        $sql = "select * from agents";

        $conn->set_charset('utf8mb4');
        $resultat = $conn->query($sql);
                

        echo '
        <div class="table-responsive">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Nom</th>
            <th scope="col">Position</th>
            <th scope="col">Organisation</th>
            <th scope="col">Arme Principal</th>
            <th scope="col">Arme Secondaire</th>
          </tr>
        </thead>
        <tbody>';

            if($resultat->num_rows > 0) {
            while($row = $resultat->fetch_assoc()){
                echo '<tr>
                        <th scope="row">'.$row["id"].'</th>
                        <td class="text-center"><img src="'.$row["image"].'" class="img-fluid" style="width:50%" alt=""></td>
                        <td class="text-center">'.$row["nom"].'</td>
                        <td class="text-center">'.$row["position"].'</td>
                        <td class="text-center">'.$row["organisation"].'</td>
                        <td class="text-center">'.$row["arme_p"].'</td>
                        <td class="text-center">'.$row["arme_s"].'</td>';
                    }
                }
                else {
                    echo 'Pas d\'agents dans la BD...';
                }
                
        echo '</tbody>
      </table>
      </div>';


        
            
           // ID : " . $row["id"] . " nom : " . $row["nom"];'
        
           $conn->close();
    
    ?>

    <a href="ajouter.php" class="btn btn-warning">Lien vers ajouter.php</a>
    <a href="login.php" class="btn btn-primary">Lien vers login.php</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>