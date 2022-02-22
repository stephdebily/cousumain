<?php

// on teste si nos variables sont définies

if (empty($_POST['pseudo']) || empty($_POST['nom_clt'])  || empty($_POST['prenom']) || empty($_POST['adresse']) || empty($_POST['cp']) || empty($_POST['ville']) || empty($_POST['telephone']) || empty($_POST['mail']) || empty($_POST['pwd']) && isset($_POST['Envoyer']))
{

    echo '<body onLoad="alert(\'Veuillez remplir toutes les cases du formulaire inscription\')">';

    // puis on le redirige vers la page d'authentification

    echo '<meta http-equiv="refresh" content="0;URL=authentification.php">';

}


else
{

    // on la démarre :)

    session_start();

    //TRAITEMENT SESSION

    // Etape 1 : Connexion à la base de données

    try {

        $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }


    //récupération valeurs

    $pseudo = $_POST['pseudo'];

    $nom = $_POST['nom_clt'];

    $prenom = $_POST['prenom'];

    $adresse = $_POST['adresse'];

    $cp = $_POST['cp'];

    $ville = $_POST['ville'];

    $telephone = $_POST['telephone'];

    $mail = $_POST['mail'];

    $motpasse = $_POST['pwd'];

    $verif_motpasse = $_POST['confpwd'];

    $pass_hache = sha1($_POST['pwd']);

    $vpass_hache = sha1($_POST['confpwd']);


    if ($pass_hache == $vpass_hache) {


        $sql = "INSERT INTO clients (pseudo, nom_clt, prenom, adresse, cp, ville, telephone, mail, mdp_clt) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $res = $bdd->prepare($sql);

        $execution = $res->execute(array($pseudo, $nom, $prenom, $adresse, $cp, $ville, $telephone, $mail, $pass_hache));

        $res->closeCursor();


        // on redirige notre visiteur vers la page d'accueil

        echo '<body onLoad="alert(\'Inscription Réussie! Veuillez vous authentifier.\')">';

        // puis on le redirige vers la page d'accueil

        echo '<meta http-equiv="refresh" content="0;URL=authentification.php">';

    }

    else{

        echo '<body onLoad="alert(\'Mot de passe Incorrect\')">';

        // puis on le redirige vers la page d'authentification

        echo '<meta http-equiv="refresh" content="0;URL=authentification.php">';

    }
}

?>