<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricule = $_POST['matricule'];
    $password = $_POST['password'];

   
    $password = sha1($password, false);

  
    $servername = "localhost";
    $usernamebd = "root";
    $passwordbd = "root";
    $db = "intra";

    $conn = new mysqli($servername, $usernamebd, $passwordbd, $db);

  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM usager WHERE matricule='$matricule' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User is authenticated
        $_SESSION["connexion"] = true;

        // Redirect to index.php
        header("Location: index.php");
        exit;
    } else {
        // Invalid credentials
        echo "<h2>Nom d'usager ou mot de passe invalide</h2>";
    }
}
?>




    <div class="container mt-5">
        <h2>Connexion</h2>
        <form action="connexion.php" method="POST">
            <div class="mb-3">
                <label for="matricule" class="form-label">Matricule</label>
                <input type="text" class="form-control" id="matricule" name="matricule" required>
            </div>
            <div class="mb-3">
                <label for="mot_de_passe" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
