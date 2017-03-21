<?php
require_once 'pdo.php';
?>

<!-- All the files that are required -->
<link rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="index.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" charset=utf-8" />

<!-- connexion -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">Connexion</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">

						<label for="login" class="sr-only">Nom d'utilisateur</label>
						<input type="text" class="form-control" id="login" name="login" placeholder="nom d'utilisateur">
					</div>

					<div class="form-group">
						<label for="password" class="sr-only">Mot de passe</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="mot de passe">
					</div>
<!--					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">remember</label>
					</div>-->
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
                            <p>Mot de passe oublié ? <a href="new_pwd.php">Cliquez ici !</a></p>
                                <p>Nouvel utilisateur ? <a href="enregistrement.php">S'enregistrer</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
