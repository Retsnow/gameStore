<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumenLogin - R6SAPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid h-100">
        <div class="row align-items-center h-100">
        <div class="offset-3 col-6 card bg-secondary p-3">
            <h4 class="card-title text-light">Connexion</h4>
            <form action="login.php" method="post">
                <div class="row text-light">
                    Nom d'utilisateur : <input type="text" name="user" <?php
                        if (!empty($_POST['image'])){
                            echo 'value="'.$_POST['image'].'">';
                        }
                        else {
                            echo "> <h6>Un nom d'utilisateur est requise</h6>";
                        }
                    ?>
                </div>
                <div class="row text-light">
                    Mot de passe : <input type="password" name="password" <?php
                        if (!empty($_POST['nom'])){
                            echo 'value="'.$_POST['nom'].'">';
                        }
                        else {
                            echo '> <h6>Un mot de passe est requis</h6>';
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

    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['user'];
        $password = $_POST['password'];

        $password = sha1($password, false);

        $servername = "localhost";
        $usernamebd = "root";
        $passwordbd = "root";
        $db = "agents";

        $conn = new mysqli($servername, $usernamebd, $passwordbd, $db);

        if($conn->connect_error){
            die("Connection failed:" . $conn->connect_error);
        }

        $sql = "SELECT * FROM usagers where user='$user' and password='$password'";
        $result =$conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<h1>Connecté</h1>";
            $_SESSION["connexion"] = true;
            header("Location:index.php");
        }
        else {
            echo "<h2>Nom d'usager ou mot de passe invalide</h2>";
        }

    }
    
    ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>