<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <p align="center">
        <a><img src="cousumain1.png" width="200" height="100" class="responsive" id="logo_mobile"/></a></p>

    <h2 align="center">EXTRANET COUSUMAIN.FR</h2>
    <style type="text/css">
        #menu li {
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        #menu li a {
            align: center;
            color: black;
            border: red;
            border-style: solid;
            text-decoration: none;
        }
        ul { list-style: none;}
    </style>
</head>
<ul id="menu">
    <li><a href="#supprimer">Supprimer une commande</a></li>
    <li><a href="#statut">Modifier le statut d'une commande</a></li>
</ul>
<?php

echo "<h2 align='center'>"."<u>"."TABLEAU DES COMMANDES"."</u>"."</h2>";

$mysqli = new mysqli("localhost", "root", "", "cousumain");
$mysqli->set_charset("utf8");
$requete = "SELECT * FROM panier";
$resultat = $mysqli->query($requete);

echo "<table border='1' align='center'>
<tr>
<th>Id panier</th>
<th> Date </th>
<th> Pseudo </th>
<th>Nom article</th>
<th>Quantité</th>
<th>Prix Article</th>
<th> Statut </th>
</tr>";

while ($ligne = $resultat->fetch_assoc()) {
    echo "<tr>";
    echo "<td align='center'>" . $ligne['id_panier'] . "</td>";
    echo "<td align='center'>" . $ligne['date'] . "</td>";
    echo "<td align='center'>" . $ligne['pseudo'] . "</td>";
    echo "<td align='center'>" . $ligne['nom_art'] . "</td>";
    echo "<td align='center'>" . $ligne['quantite'] . "</td>";
    echo "<td align='center'>" . $ligne['prixArticle'] . "</td>";
    echo "<td align='center'>" . $ligne['statut'] . "</td>";
    echo "</tr>";
}
echo "</table>";

$mysqli->close();
?>

<body>
<br>
<div id="supprimer">
<fieldset>
<h3 align='center'>SUPPRIMER UNE COMMANDE</h3>
<form action="suprcom.php" method="post">
    <h4 align="center">Id Panier : <input type="number" name="idpaniersupr" size="6"/><input type="submit" class="bouton" name="suprcom" value="Supprimer" /></h4>

</form>
</fieldset>
</div>
<br>
<div id="statut">
<fieldset>
<h3 align='center'>MODIFIER LE STATUT D'UNE COMMANDE</h3>
<form action="update_com.php" method="post">
    <h4 align="center">Id Panier : <input type="number" name="idpaniermodif" size="6"/></h4>
        <h4 align='center'>Veuillez choisir le statut :</h4>
    <p align="center"><input type="submit" class='bouton' name="encours" value="En cours" /><input type="submit" class='bouton' name="livre" value="Livré" /></p>

</form>
</fieldset>
</div>
</body>
</html>