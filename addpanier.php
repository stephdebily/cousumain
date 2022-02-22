<?php require_once('connexionBDD.php'); ?>
<?php

    if (isset($_POST['singer1'])) {

        $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
        $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=1');
        while ($donnees = $reponse->fetch()) {

            //récupération valeurs
            $qte = $_POST['singer1'];
            $prix = $donnees['prix'] * $qte;

            if ($donnees['stock'] < $_POST['singer1']) {
                echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
                echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
            }
            else {


                $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
                $req->execute(array('singer1', $_POST['singer1'], $_POST['singer1'] * $donnees['prix']));
                echo "<h2 align='center'>Article ajouté au panier</h2>";
                echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
            }
        }
}

if (isset($_POST['singer2'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=2');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['singer2'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['singer2']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('singer2', $_POST['singer2'], $_POST['singer2'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['singer3'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=3');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['singer3'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['singer3']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('singer3', $_POST['singer3'], $_POST['singer3'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['surjeteusesinger'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=4');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['surjeteusesinger'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['surjeteusesinger']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('surjeteusesinger', $_POST['surjeteusesinger'], $_POST['surjeteusesinger'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['brother1'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=5');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['brother1'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['brother1']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('brother1', $_POST['brother1'], $_POST['brother1'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['brother2'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=6');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['brother2'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['brother2']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('brother2', $_POST['brother2'], $_POST['brother2'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['brother3'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=7');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['brother3'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['brother3']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('brother3', $_POST['brother3'], $_POST['brother3'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['surjeteusebrother'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=8');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['surjeteusebrother'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['surjeteusebrother']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('surjeteusebrother', $_POST['surjeteusebrother'], $_POST['surjeteusebrother'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['patron1'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=9');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['patron1'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['patron1']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('patron1', $_POST['patron1'], $_POST['patron1'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['patron2'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=10');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['patron2'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['patron2']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('patron2', $_POST['patron2'], $_POST['patron2'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['patron3'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=11');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['patron3'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['patron3']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('patron3', $_POST['patron3'], $_POST['patron3'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['patron4'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=12');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['patron4'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['patron4']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('patron4', $_POST['patron4'], $_POST['patron4'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['patron5'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=13');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['patron5'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['patron5']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('patron5', $_POST['patron5'], $_POST['patron5'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['patron6'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=14');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['patron6'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['patron6']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('patron6', $_POST['patron6'], $_POST['patron6'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['patron7'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=15');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['patron7'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['patron7']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('patron7', $_POST['patron7'], $_POST['patron7'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['patron8'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=16');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['patron8'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['patron8']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('patron8', $_POST['patron8'], $_POST['patron8'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['fblanc'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=17');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['fblanc'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['fblanc']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('filblanc', $_POST['fblanc'], $_POST['fblanc'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['fbleu'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=18');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['fbleu'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['fbleu']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('filbleu', $_POST['fbleu'], $_POST['fbleu'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['fjaune'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=19');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['fjaune'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['fjaune']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('filjaune', $_POST['fjaune'], $_POST['fjaune'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['fnoir'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=20');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['fnoir'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['fnoir']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('filnoir', $_POST['fnoir'], $_POST['fnoir'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['forange'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=21');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['forange'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['forange']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('filorange', $_POST['forange'], $_POST['forange'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['frose'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=22');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['frose'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['frose']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('filrose', $_POST['frose'], $_POST['frose'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['frouge'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=23');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['frouge'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['frouge']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('filrouge', $_POST['frouge'], $_POST['frouge'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['fvert'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=24');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['fvert'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['fvert']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('filvert', $_POST['fvert'], $_POST['fvert'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['buste'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=25');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['buste'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['buste']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('buste', $_POST['buste'], $_POST['buste'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['crochets'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=26');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['crochets'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['crochets']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('crochetstunisiens', $_POST['crochets'], $_POST['crochets'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['aiguilles'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=27');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['aiguilles'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['aiguilles']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('aiguilles', $_POST['aiguilles'], $_POST['aiguilles'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}

if (isset($_POST['boule'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM articles WHERE id_art=28');
    while ($donnees = $reponse->fetch()) {

        //récupération valeurs
        $qte = $_POST['boule'];
        $prix = $donnees['prix'] * $qte;

        if ($donnees['stock'] < $_POST['boule']) {
            echo "<fieldset><h2 align='center'>Quantité insuffisante en stock<br/>Veuillez inscrire une quantité inférieure</h2></fieldset>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
        else {


            $req = $bdd->prepare('INSERT INTO lignecommande (nom_art, quantite, prixArticle) VALUES (?,?,?)');
            $req->execute(array('boule', $_POST['boule'], $_POST['boule'] * $donnees['prix']));
            echo "<h2 align='center'>Article ajouté au panier</h2>";
            echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";
        }
    }
}
