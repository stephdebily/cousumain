<?php
if (isset($_POST['modifadresseclt'])) {

    $pdo = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');

    $id = $_POST['idcltmodifadresse'];
    $adresse = $_POST['modifadresse'];

    $sql = "UPDATE clients SET adresse = '$adresse' WHERE id_clt = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    echo "<h3 text align='center'>"."Adresse modifiée"."</h3>";
    echo "<br>";
    echo "<div align='center'><form method='post' action='extranet_cm.php'>
    <input type='submit' class='bouton' name='retourextranet' value='Retour vers accueil extranet' />
    </form></div>";

}
?>