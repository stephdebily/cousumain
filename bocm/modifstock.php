<?php

if (isset($_POST['Valider'])) {

    $pdo = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');

    $id = $_POST['idartmodif'];
    $stock = $_POST['modifstock'];

    $sql = "UPDATE articles SET stock = '$stock' WHERE id_art = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    echo "<h3 text align='center'>"."Stock modifié"."</h3>";
    echo "<br>";
    echo "<div align='center'><form method='post' action='extranet_cm.php'>
    <input type='submit' class='bouton' name='retourextranet' value='Retour vers accueil extranet' />
    </form></div>";

}

?>
