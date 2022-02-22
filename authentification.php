
<!doctype html>

<html>

<head>

    <meta charset="utf-8">



    <link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">

<style>

body{

    background-image: url("../img/patrondiapo.jpg");

    text-align: center;

    font-family:'Source Code Pro','Century Gothic', 'ariane';

    font-size: 16px;

    border-radius: 15px;

    width: 30%;

    border: 2px solid rgb(93, 87, 87);

    margin: 0 auto;

    padding:5px;

    line-height: 25px;

    margin-top: 10px;

    }

    fieldset { background-color: lightgray;}
    table{

    margin: 0 auto;

        width:50%;

        margin-top: 30px;

        margin-bottom: 50px;

    }

    .table1{

    background-color: bisque;

    }





</style>

</head>



<body>

<h2 align="center">Pour commander<br>vous devez vous inscrire<br/>ou vous connecter</h2>

<div id ="inscription">

<form action="inscription.php" method="POST">

    <fieldset>

        <legend><strong>Inscription</strong></legend>
        <table class='table1'>

        <tr><td><label>Pseudo</label></td><td><input type="text" name="pseudo"/></td></tr>

        <tr><td><label>Nom</label></td><td><input type="text" name="nom_clt"/></td></tr>

        <tr><td><label>Prenom</label></td><td><input type="text" name="prenom"/></td></tr>

        <tr><td><label>Adresse</label></td><td><input type="text" name="adresse"/></td></tr>

        <tr><td><label>Code postal</label></td><td><input type="text" name="cp"/></td></tr>

        <tr><td><label>Ville</label></td><td><input type="text" name="ville"/></td></tr>

        <tr><td><label>Telephone</label></td><td><input type="text" name="telephone"/></td></tr>

        <tr><td><label>Email</label></td><td><input type="text" name="mail"/></td></tr>

        <tr><td><label>Mot de passe</label></td><td><input type="password" name="pwd"/></td></tr>

        <tr><td><label>Confirmer</label></td><td><input type="password" name="confpwd"/></td></tr>

        <tr><td><input type="reset" name="Effacer" value="Effacer"/></td><td><input type="submit" name="Envoyer" value="Envoyer"/></td></tr>

    </table>

    </fieldset>



</form>

</div>

<br/>

<div id="connexion">

<form action="connexion.php" method="POST">

    <fieldset>

        <legend><strong>Authentification</strong></legend>

         <table class='table1'>

         <tr><td><label>Pseudo</label></td><td><input type="text" name="pseudo"/></td></tr>

         <tr><td><label>Mot de passe</label></td><td><input type="password" name="pwd"/></td></tr>

         <tr><td><input type="reset" name="Effacer" value="Effacer"/></td><td><input type="submit" name="Envoyer" value="Envoyer"/></td></tr>

     </table>

    </fieldset>



 </form>

</div>

</body>

</html>
