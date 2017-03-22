<?php

session_start();

try {
    $dbh = new PDO('mysql:host=localhost;dbname=ecolight', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$msg = '';

//enregistrement

$save = true;

if (isset($_POST['enregistrer']) && ($_POST['enregistrer'] == "Enregistrer")) {
    $MessageForm = array();

    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    $tab = array(
        ':login' => $login,
        ':password' => $password,
        ':email' => $email,
        ':nom' => $nom,
        ':prenom' => $prenom
    );
    if ($password === $password_confirm) {
        $sql = "INSERT INTO `Utilisateur` (`id_util`, `login_util`, `mdp_util`, `mail_util`, `nom_util`, `prenom_util`) VALUES (null, :login, :password, :email, :nom, :prenom)";
        $req = $dbh->prepare($sql);
        $result = $req->execute($tab);

        if ($result) {
            header('Location: connexion.php');
            exit();
        }
    } else {
        $save = false;
    }
}


// connexion (session)

$mdp_ok = true;

if (isset($_POST['connexion']) && $_POST['connexion'] == "Connexion") {
    $login = $_POST['login'];
    $mdp = $_POST['password'];

    $tab = [
        ':login' => $login,
        ':mdp' => $mdp
    ];

    $sql= 'select count(*) as count from Utilisateur WHERE login_util= :login';
    $r= $dbh->prepare($sql);
    $r->execute([':login' => $login]);
    $res= $r->fetch();

    if( $res['count'] == 0) {
        $msg= 'Ce login n\'existe pas, merci de procéder à votre inscription';
    } else {
        $sql = "select * FROM `Utilisateur` WHERE `login_util` = :login and `mdp_util` = :mdp";
        $req = $dbh->prepare($sql);
        $req->execute($tab);
        $sInfo = $req->fetch(PDO::FETCH_ASSOC);

        if ($sInfo) {
            $_SESSION['login'] = $login;
            $_SESSION['nom'] = $sInfo['nom'];
            $_SESSION['prenom'] = $sInfo['prenom'];
            header('Location: info_compl.php');
            exit();
        } else {
            $msg= 'Mot de passe incorrect';
        }
    }
}
        //redirection




