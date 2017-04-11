<?php
require_once 'pdo.php';
?>

<!-- fichiers requis -->
<link rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="index.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" charset="UTF-8" />

<!-- page acceuil/ dashboard -->

<p>Page accueil/dashboard</p></br></br></br>

<?php
    if (!empty($_SESSION)) {
        echo "Bienvenue " . $_SESSION['nom'] . " " . $_SESSION['prenom'];
    } else {
            echo "Vous êtes déconnecté.";
        }
?>
