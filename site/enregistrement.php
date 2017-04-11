<?php
require_once 'pdo.php';
?>

<!-- fichiers requis -->
<link rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="index.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" charset="UTF-8" />

<!-- enregistrement -->

<div class="text-center" style="padding:50px 0">
    <div class="logo">Enregistrement</div>
    <?= ( $save) ? '' : 'Mot de passe incorect, veuillez recommencer'; ?>
    <p></p>
    <div class="login-form-1">
        <form id="register-form" class="text-left" action="enregistrement.php" method="POST">
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">

                    <div class="form-group">
                        <label for="login" class="sr-only"> Login :</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="login" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Mot de passe :</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="mot de passe" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirm" class="sr-only">Confirmer :</label>
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="mot de passe" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                    </div>
                    <div class="form-group">
                        <label for="nom" class="sr-only">Nom  :</br></label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom" class="sr-only">Prenom  :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prénom">
                    </div>
                    <!--	<div class="form-group login-group-checkbox">
                                <input type="radio" class="" name="reg_gender" id="male" placeholder="username">
                                <label for="male">male</label>

                                <input type="radio" class="" name="reg_gender" id="female" placeholder="username">
                                <label for="female">female</label>
                            </div>-->
                    <!--	<div class="form-group login-group-checkbox">
                                <input type="checkbox" class="" id="reg_agree" name="reg_agree">
                                <label for="reg_agree">i agree with <a href="#">terms</a></label>
                            </div>-->

                </div>
                <input type="submit" name="enregistrer" value="Enregistrer" class="button">
            </div>
            <div class="etc-login-form">
                <p>Déja un compte? <a href="connexion.php">Se connecter</a></p>
            </div>
        </form>
    </div>
</div>
