<?php

try { $base = new PDO('mysql:host=localhost;dbname=cousumain', 'root', '');}

catch
(Exception $e) {
    // message en cas d'erreur
    die('Erreur : ' . $e->getMessage());
}
?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');
$reponse = $bdd->query('SELECT * FROM articles WHERE id_art=23');
while ($donnees=$reponse->fetch())
{
?>


<p align="center">
    <head>
        <a href="accueil.php"><img src="../img/cousumain1.png" width="200" height="100" class="responsive" id="logo_mobile"/></a>
    </head>
    <br/><br/>
    <strong><?php echo $donnees['nom_art'];?></strong><br/>
    <?php echo '<img width="250" src="data:image/jpeg;base64,'.base64_encode($donnees['photo']).'"/>';?><br/>
    Description :<br/>

    <?php echo $donnees['description'];?><br/><br/>

    <strong>PRIX : <?php echo $donnees['prix'];?> € </strong><br/><br/>

    <?php
    if ($donnees['stock'] <=0)
    { echo "<strong style='color: red'>Indisponible</strong>"; }
    else
    { echo "<strong style='color: green'>En stock</strong>"; }


    }



    ?>




</p>

<?php

$reponse->closeCursor();

?>




