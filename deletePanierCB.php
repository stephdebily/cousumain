<?php
if (isset($_POST['payer'])) {
    try {
        $dbco = new PDO('mysql:host=localhost;dbname=cousumain', 'root', '');

        $sql = 'DELETE FROM lignecommande';
        $sth = $dbco->prepare($sql);
        $sth->execute();

        echo "<h2 align='center'>" . "Merci pour votre paiement" . "</h2>";
        echo "<div align='center'><form method='post' action='accueil.php'>
    <input type='submit' class='bouton' name='retour' value='Retour boutique' />
    </form></div>";

    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}


?>