<?php
if (isset($_POST['modifcpclt'])) {

    $pdo = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');

    $id = $_POST['idcltmodifcp'];
    $cp = $_POST['modifcp'];

    $sql = "UPDATE clients SET cp = '$cp' WHERE id_clt = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    echo "<h3 text align='center'>"."Code postal modifié"."</h3>";
    echo "<br>";
    echo "<div align='center'><form method='post' action='extranet_cm.php'>
    <input type='submit' class='bouton' name='retourextranet' value='Retour vers accueil extranet' />
    </form></div>";

}
?>
