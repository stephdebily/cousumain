<!DOCTYPE html>

<html>
<head>
    <style type="text/css">
        .bouton { display: block;
        margin: 0 auto;}
    </style>
    <meta charset="utf-8">
    <p align="center">
        <a href="accueil.php"><img src="../img/cousumain1.png" width="200" height="100" class="responsive" id="logo_mobile"/></a></p>
</head>
<body>
<?php
try {

$db = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');

$sql = $db->query("SELECT ROUND(SUM(prixArticle)) as total FROM lignecommande");
$data = $sql->fetch();
$somme = $data['total'];

echo "<h2 align='center'>" . "Montant du panier : " . $data['total'] . " €" . "</h2>";

} catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}
?>

<?php
$mysqli = new mysqli("localhost", "root", "", "cousumain");
$mysqli -> set_charset("utf8");
$requete = "SELECT * FROM lignecommande";
$resultat = $mysqli -> query($requete);

echo "<table border='1' align='center'>
<tr>
<th>Id ligne</th>
<th>Nom article</th>
<th>Quantité</th>
<th>Prix total</th>
</tr>";

while ($ligne = $resultat -> fetch_assoc()) {
    echo "<tr>";
    echo "<td align='center'>" . $ligne['id'] . "</td>";
    echo "<td align='center'>" . $ligne['nom_art'] . "</td>";
    echo "<td align='center'>" . $ligne['quantite'] . "</td>";
    echo "<td align='center'>" . $ligne['prixArticle'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

$mysqli->close();



?>

<br>
<form action="deletePanier.php">
    <input type="submit" class="bouton" value="Vider" />
</form>
<br>
<form action="authentification.php">
    <input type="submit" class="bouton" value="Commander" />
</form>

</body>
</html>


