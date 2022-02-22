<?php
if (isset($_POST['modifmailclt'])) {

    $pdo = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');

    $id = $_POST['idcltmodifmail'];
    $mail = $_POST['modifmail'];

    $sql = "UPDATE clients SET mail = '$mail' WHERE id_clt = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    echo "<h3 text align='center'>"."Adresse e-mail modifiée"."</h3>";
    echo "<br>";
    echo "<div align='center'><form method='post' action='extranet_cm.php'>
    <input type='submit' class='bouton' name='retourextranet' value='Retour vers accueil extranet' />
    </form></div>";

}
?>
