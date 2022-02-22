<?php
session_start();



$valider = $_POST["Valider"];
$pseudo = $_SESSION["pseudo"];
if (isset($valider)) {

    try {

        $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');

        $sth = $bdd->prepare("SELECT * FROM lignecommande");
        $sth->execute();

        $result = $sth->fetchAll();
        foreach ($result as $row) {
            $query = $bdd->prepare('INSERT INTO panier(date, pseudo, nom_art, quantite, prixArticle, statut) VALUES(?,?,?,?,?,?)');
            $query->execute(array(date('Y-m-d'), $pseudo, $row['nom_art'], $row['quantite'], $row['prixArticle'], 'En cours'));
        }

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    echo "<h2 align='center'>"."Merci pour votre commande"."<br>"."Vous recevrez une confirmation de commande par mail une fois le paiement de votre commande reçu"."</h2>";

}
?>

<?php
$valider = $_POST["Valider"];
$pseudo = $_SESSION["pseudo"];
if (isset($valider)) {
    try {

        $db = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');

        $sql = $db->query("SELECT ROUND(SUM(prixArticle)) as total FROM lignecommande");
        $data = $sql->fetch();
        $somme = $data['total'];

        echo "<h2 align='center'>" . "Montant total à payer : " . $data['total'] . " €" . "</h2>";
        echo "<div align='center'>"."<form method='post' action='paiement.php'>
    <input type='submit' class='bouton' name='payer' value='Payer' />
    </form>"."</div>";


    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

}
?>

