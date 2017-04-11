<?php
require_once 'pdo.php';
?>

<!-- All the files that are required -->
<link rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="index.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" charset="UTF-8"/>

<!-- form info complémentaires -->

<?php
    if (!empty($_SESSION)) {
        echo "Bienvenue ".$_SESSION['login']." Veuillez renseigner ces informations :";
    } else {
            echo "Vous êtes déconnecté.";
        }
?>


<div class="text-center" style="padding:50px 0">
    <div class="logo">Informations complémentaires</div>
    <div class="login-form-1">
        <form id="register-form" class="text-left" method="POST">
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">

                    <div class="form-group">
                        <label for="adresse" class="sr-only"> Adresse :</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="votre adresse" required>
                    </div>
                    <div class="form-group">
                        <label for="ville" class="sr-only">Ville :</br></label>
                        <input type="text" class="form-control" id="ville" name="ville" placeholder="ville" required>
                    </div>
                    <div class="form-group">
                        <label for="cp" class="sr-only">Code postal :</label>
                        <input type="text" class="form-control" id="cp" name="cp" placeholder="code postal" required>
                    </div>
                    <div class="form-group">
                        <label for="tel" class="sr-only">Téléphone :</label>
                        <input type="text" class="form-control" id="tel" name="tel" placeholder="téléphone" required>
                    </div>
                </div>
                <input type="submit" name="complement" value="Enregistrer" class="button">
            </div>
        </form>
    </div>
</div>
