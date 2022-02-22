<?php
$pdo = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');

$id = $_POST['idpaniermodif'];

if (isset($_POST['livre'])) {

$sql = "UPDATE panier SET statut = 'livré' WHERE id_panier = ?";
$q = $pdo->prepare($sql);
$q->execute(array($id));
echo "<h3 text align='center'>"."Statut modifié"."</h3>";
echo "<br>";
echo "<div align='center'><form method='post' action='extranet_cm.php'>
    <input type='submit' class='bouton' name='retourextranet' value='Retour vers accueil extranet' />
    </form></div>";
}
$pdo->closeCursor();
?>

