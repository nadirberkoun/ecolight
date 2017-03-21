<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=ecolight', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

//enregistrement
if (isset($_POST['enregistrer']) && ($_POST['enregistrer'] == "Enregistrer")) {
    $MessageForm = array();

    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $email = $_POST['email'];

    $tab = array(
        ':login' => $login,
        ':password' => $password,
        ':email' => $email
    );
    if ($password === $password_confirm) {
        $sql = "INSERT INTO `Utilisateur` (`id_util`, `login_util`, `mdp_util`, `mail_util`) VALUES (null, :login, :password, :email)";
        $req = $dbh->prepare($sql);
        $bResult = $req->execute($tab);

        header('Location : connexion.php');
    } else {
        header('Location: enregistrement.php');
        echo "Mot de passe       ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd      dc incorect";

    }
}
