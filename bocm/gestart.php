<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <p align="center">
        <a><img src="cousumain1.png" width="200" height="100" class="responsive" id="logo_mobile"/></a></p>

    <h2 align="center">EXTRANET COUSUMAIN.FR</h2>
</head>

<?php

echo "<h2 align='center'>"."<u>"."LISTE DES ARTICLES"."</u>"."</h2>";

$mysqli = new mysqli("localhost", "root", "", "cousumain");
$mysqli->set_charset("utf8");
$requete = "SELECT * FROM articles";
$resultat = $mysqli->query($requete);

echo "<table border='1' align='center'>
<tr>
<th>Id article</th>
<th>Nom article </th>
<th>Prix</th>
<th>Stock</th>
</tr>";

while ($ligne = $resultat->fetch_assoc()) {
    echo "<tr>";
    echo "<td align='center'>" . $ligne['id_art'] . "</td>";
    echo "<td align='center'>" . $ligne['nom_art'] . "</td>";
    echo "<td align='center'>" . $ligne['prix'] . "</td>";
    echo "<td align='center'>" . $ligne['stock'] . "</td>";
    echo "</tr>";
}
echo "</table>";

$mysqli->close();
?>
<br>
<fieldset>
<h3 align='center'>MODIFIER LE STOCK D'UN ARTICLE</h3>
<form action="modifstock.php" method="post">
    <h4 align="center">Id article : <input type="number" name="idartmodif" size="6"/></h4>
    <h4 align="center">STOCK : <input type="number" name="modifstock" size="6"/></h4>
    <p align="center"><input type="submit" class="bouton" name="Valider" value="Valider" /></p>

</form>
</fieldset>
</html>