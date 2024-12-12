


<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
session_start();

// If the user confirms logout by clicking "OK" in the dialog
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    // Destroy session and redirect to login
    $_SESSION = array();
    session_destroy();
    header("Location: connexion.php");
    exit;
}

// If the user is not logged in, redirect to login page
if (!isset($_SESSION["connexion"]) || $_SESSION["connexion"] !== true) {
    header("Location: connexion.php");
    exit;
}
?>


    <div class="container mt-5">
        <h2>Êtes-vous sûr de vouloir vous déconnecter ?</h2>
        <!-- Button to trigger the confirmation -->
        <button id="logoutButton" class="btn btn-danger">Déconnexion</button>
    </div>

    <!-- JavaScript to display confirmation dialog -->
    <script>
        document.getElementById("logoutButton").addEventListener("click", function() {
            // Display confirmation dialog
            if (confirm("Voulez-vous vraiment vous déconnecter ?")) {
                // If confirmed, redirect to the same page with 'action=logout'
                window.location.href = 'deconnexion.php?action=logout';
            }
        });
    </script>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>