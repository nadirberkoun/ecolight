<?php

session_start();

try {
    $dbh = new PDO('mysql:host=localhost;dbname=ecolight', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$test = 'bobobobobobbbbbb';
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
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $cp = $_POST['cp'];
    $tel = $_POST['tel'];

    $tab = [
        ':login' => $login,
        ':password' => $password,
        ':email' => $email,
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':adresse' => $adresse,
        ':ville' => $ville,
        ':cp' => $cp,
        ':tel' => $tel
    ];

    if ($password === $password_confirm) {
        $sql = "INSERT INTO `utilisateur` (`id_util`, `login_util`, `mdp_util`, `mail_util`, `nom_util`, `prenom_util`, `adresse_util`, `ville_util`, `cp_util`, `tel_util`) VALUES (null, :login, :password, :email, :nom, :prenom, :adresse, :ville, :cp, :tel)";
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




// connexion (session?)

$mdp_ok = true;

//$login= $_POST['login'];  //filter_input( INPUT_POST, 'login', FILTER_VALIDATE_REGEX);

if (isset($_POST['connexion']) && $_POST['connexion'] == "Connexion") {
    $login = $_POST['login'];
    $mdp = $_POST['password'];

    $tab = [
        ':login' => $login,
        ':mdp' => $mdp
    ];

    $sql = 'select count(*) as count from `utilisateur` WHERE `login_util`= :login';
    $r = $dbh->prepare($sql);
    $r->execute([':login' => $login]);
    $res = $r->fetch();

    if ($res['count'] == 0) {
        $msg = 'Ce login n\'existe pas, merci de procéder à votre inscription';
    } else {
        $sql = "select * FROM `utilisateur` WHERE `login_util` = :login and `mdp_util` = :mdp";
        $req = $dbh->prepare($sql);
        $req->execute($tab);
        $sInfo = $req->fetch(PDO::FETCH_ASSOC);

        if ($sInfo) {
            $_SESSION['login'] = $login;
            
        } else {
            $msg = 'Mot de passe incorrect';
        }
    }
}


// info complémentaires

//if (isset($_POST['complement']) && ($_POST['complement'] == "Enregistrer")) {
//    $MessageForm = array();
//
//    $adresse = $_POST['adresse'];
//    $ville = $_POST['ville'];
//    $cp = $_POST['cp'];
//    $tel = $_POST['tel'];
//    $login = $_SESSION['login'];
//
//    $tab = [
//        ':adresse' => $adresse,
//        ':ville' => $ville,
//        ':cp' => $cp,
//        ':tel' => $tel,
//        ':login' => $login
//    ];
//
//        $sql = "UPDATE `utilisateur` SET `adresse_util` = :adresse, `ville_util` = :ville, `cp_util` = :cp, `tel_util` = :tel WHERE `login_util` = :login";
//        $req = $dbh->prepare($sql);
//        $result = $req->execute($tab);
//
//        if ($result) {
//            header('Location: index2.php');
//            exit();
//        }
//
//}

//test
