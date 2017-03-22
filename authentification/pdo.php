<?php
session_start();

try {
    $dbh = new PDO('mysql:host=localhost;dbname=ecolight', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$save = true;
//enregistrement
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
        $bResult = $req->execute($tab);

        if ($bResult) {
            header('Location: connexion.php');
            exit();
        }
    } else {
        $save = false;
    }
}


// connexion (session)

if (isset($_POST['connexion']) && $_POST['connexion'] == "Connexion") {

        $login = $_POST['login'];
        $mdp = $_POST['password'];


        $tab = array(
            ':login' => $login,
            ':mdp' => $mdp);



        $sql = "select * FROM `Utilisateur` WHERE `login_util` = :login and `mdp_util` = :mdp" ;
        $req = $bdd->prepare($sql);
        $req->execute($tab);
        $sInfo = $req->fetch(PDO::FETCH_ASSOC);

            if ($sInfo){
                $_SESSION['login'] = $login;
                $_SESSION['nom'] = $sInfo['nom'];
                $_SESSION['prenom'] = $sInfo['prenom'];
            }
    }

