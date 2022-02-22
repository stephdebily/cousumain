<?php


if (isset($_POST['pseudo']) && isset($_POST['pwd'])) {

    try {

        $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');

    }

    catch (Exception $e)

    {
        die('Erreur : ' . $e->getMessage());
    }

    //récupération valeurs

    $pseudo=$_POST['pseudo'];

    $motpasse=$_POST['pwd'];

    $pass_hache=sha1($_POST['pwd']);


    $sql="SELECT id_clt FROM clients WHERE pseudo =:pseudo AND mdp_clt=:pass";

    $req = $bdd->prepare($sql);

    $req-> execute(array('pseudo'=> $pseudo,'pass'=> $pass_hache));

    $resultat= $req ->fetch();


    //Si identifiant non reconnu

    if (!$resultat)

    {

        echo '<body onLoad="alert(\'Mauvais identifiant ou mauvais mot de passe !!\')">';

        echo '<a href="authentification.php">Retour page d\'authentification</a>';

    }



    else{



        // on la démarre :)

        session_start ();

        // on enregistre les paramètres de notre visiteur comme variables de session ($pseudo et $pwd)



        $_SESSION['pseudo'] = $_POST['pseudo'];

        $_SESSION['pwd'] = $_POST['pwd'];



        $req->closeCursor();


        // on redirige notre visiteur vers la page principale

        echo "<script type=\"text/javascript\"> window.location='commande.php';</script>";




    }



}

else {

    echo '<body onLoad="alert(\'Membre non reconnu...\')">';

    // puis on le redirige vers la page d'accueil

    echo "<script type=\"text/javascript\"> window.location='authentification.php' ;</script>";

}





?>

<!doctype html>

<html>

<head>

    <meta charset="utf-8">



    <style>

        body{

            background-color: #e5b63b;

            text-align: center;

            font-family:'Century Gothic', 'ariane';

            border-radius: 15px;

            width: 90%;

            border: 2px solid white;

            margin: 0 auto;

            padding:5px;

            line-height: 25px;

            margin-top: 50px;

        }

        table{

            margin: 0 auto;

            width:70%;

            margin-top: 30px;

            margin-bottom: 50px;

            text-align: center;

        }



    </style>

    </body>

</html>


