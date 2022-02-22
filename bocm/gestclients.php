<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <p align="center">
        <a><img src="cousumain1.png" width="200" height="100" class="responsive" id="logo_mobile"/></a></p>

    <h2 align="center">EXTRANET COUSUMAIN.FR</h2>
    <style type="text/css">
        #menu li {

            display: inline;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        #menu li a {
            display: inline-block;
            color: black;
            border: red;
            border-style: solid;
            text-decoration: none;
        }

    </style>
</head>
<div align="center">
<ul id="menu">
    <li><a href="#supprimer">Supprimer un client</a></li>
    <li><a href="#adresse">Modifier adresse</a></li>
    <li><a href="#cp">Modifier code postal</a></li>
    <li><a href="#ville">Modifier ville</a></li>
    <li><a href="#telephone">Modifier téléphone</a></li>
    <li><a href="#mail">Modifier email</a></li>


</ul>
</div>
<br>
<?php

echo "<h2 align='center'>"."<u>"."LISTE DES CLIENTS"."</u>"."</h2>";

$mysqli = new mysqli("localhost", "root", "", "cousumain");
$mysqli->set_charset("utf8");
$requete = "SELECT * FROM clients";
$resultat = $mysqli->query($requete);

echo "<table border='1' align='center'>
<tr>
<th>Id client</th>
<th> Pseudo </th>
<th> Nom </th>
<th>Prenom</th>
<th>Adresse</th>
<th>CP</th>
<th>Ville</th>
<th>Téléphone</th>
<th>Mail</th>
</tr>";

while ($ligne = $resultat->fetch_assoc()) {
    echo "<tr>";
    echo "<td align='center'>" . $ligne['id_clt'] . "</td>";
    echo "<td align='center'>" . $ligne['pseudo'] . "</td>";
    echo "<td align='center'>" . $ligne['nom_clt'] . "</td>";
    echo "<td align='center'>" . $ligne['prenom'] . "</td>";
    echo "<td align='center'>" . $ligne['adresse'] . "</td>";
    echo "<td align='center'>" . $ligne['cp'] . "</td>";
    echo "<td align='center'>" . $ligne['ville'] . "</td>";
    echo "<td align='center'>" . $ligne['telephone'] . "</td>";
    echo "<td align='center'>" . $ligne['mail'] . "</td>";
    echo "</tr>";
}
echo "</table>";

$mysqli->close();
?>

<body>
<br>
<div id="supprimer">
<fieldset>
<h3 align='center'>SUPPRIMER UN CLIENT</h3>
<form action="suprclient.php" method="post">
    <h4 align="center">Id Client : <input type="number" name="idcltsupr" size="6"/><input type="submit" class="bouton" name="suprclt" value="Supprimer" /></h4>
</form>
</fieldset>
</div>
<br>
<div id="adresse">
    <fieldset>
<h3 align='center'>MODIFIER L'ADRESSE D'UN CLIENT</h3>
<form action="modifadresse.php" method="post">
    <h4 align="center">Id Client : <input type="number" name="idcltmodifadresse" size="6"/></h4>
    <h4 align="center">Adresse : <input type="text" name="modifadresse" size="100"/></h4>
    <p align="center"><input type="submit" class="bouton" name="modifadresseclt" value="Modifier" /></p>
</form>
</fieldset>
</div>
<br>
<div id="cp">
<fieldset>
<h3 align='center'>MODIFIER LE CODE POSTAL D'UN CLIENT</h3>
<form action="modifcp.php" method="post">
    <h4 align="center">Id Client : <input type="number" name="idcltmodifcp" size="6"/></h4>
    <h4 align="center">Code postal : <input type="text" name="modifcp" size="6"/></h4>
    <p align="center"><input type="submit" class="bouton" name="modifcpclt" value="Modifier" /></p>
</form>
</fieldset>
</div>
<br>
<div id="ville">
<fieldset>
<h3 align='center'>MODIFIER LA VILLE D'UN CLIENT</h3>
<form action="modifville.php" method="post">
    <h4 align="center">Id Client : <input type="number" name="idcltmodifville" size="6"/></h4>
    <h4 align="center">Ville : <input type="text" name="modifville" size="25"/></h4>
    <p align="center"><input type="submit" class="bouton" name="modifvilleclt" value="Modifier" /></p>
</form>
</fieldset>
</div>
<br>
<div id="telephone">
<fieldset>
<h3 align='center'>MODIFIER LE TELEPHONE D'UN CLIENT</h3>
<form action="modiftel.php" method="post">
    <h4 align="center">Id Client : <input type="number" name="idcltmodiftel" size="6"/></h4>
    <h4 align="center">Téléphone : <input type="text" name="modiftel" size="25"/></h4>
    <p align="center"><input type="submit" class="bouton" name="modiftelclt" value="Modifier" /></p>
</form>
</fieldset>
</div>
<br>
<div id="mail">
<fieldset>
<h3 align='center'>MODIFIER L'ADRESSE MAIL D'UN CLIENT</h3>
<form action="modifmail.php" method="post">
    <h4 align="center">Id Client : <input type="number" name="idcltmodifmail" size="6"/></h4>
    <h4 align="center">E-mail : <input type="text" name="modifmail" size="25"/></h4>
    <p align="center"><input type="submit" class="bouton" name="modifmailclt" value="Modifier" /></p>
</form>
</fieldset>
</div>
</body>
</html>
