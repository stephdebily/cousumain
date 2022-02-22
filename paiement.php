<?php
if (isset($_POST['payer'])) {
try {
    $dbci = new PDO('mysql:host=localhost;dbname=cousumain', 'root', '');

    $sql = 'DELETE FROM lignecommande';
    $sth = $dbci->prepare($sql);
    $sth->execute();

echo "<h2 align='center'>" . "Veuillez procéder au paiement" . "</h2>";

} catch (PDOException $e) {
echo "Erreur : " . $e->getMessage();
}
}


?>




<!doctype html>

<html xmlns="http://www.w3.org/1999/html">
<head>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
            <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
            <form accept-charset='UTF-8' action='' class='require-validation' data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
                <div class='form-row'>
                    <div class='col-xs-12 form-group required'>
                        <label class='control-label'>Nom sur la carte</label>
                        <input class='form-control' size='4' type='text'>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='col-xs-12 form-group card required'>
                        <label class='control-label'>Numéro de carte</label>
                        <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='col-xs-4 form-group cvc required'>
                        <label class='control-label'>Code vérif</label>
                        <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                    </div>
                    <div class='col-xs-4 form-group expiration required'>
                        <label class='control-label'>Expire fin</label>
                        <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                    </div>
                    <div class='col-xs-4 form-group expiration required'>
                        <label class='control-label'> </label>
                        <input class='form-control card-expiry-year' placeholder='AAAA' size='4' type='text'>
                    </div>
                </div>
                <!--<div class='form-row'>
                    <div class='col-md-12'>
                        <div class='form-control total btn btn-info'>
                            <?php

                            try {

                                $db = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');

                                $sql = $db->query("SELECT ROUND(SUM(prixArticle)) as total FROM lignecommande");
                                $data = $sql->fetch();
                                $somme = $data['total'];

                                echo "<form action='deletePanierCB.php'>"."<span class='amount'>"."TOTAL ".$data['total']." €"."</span>"."</form>";




                            } catch (Exception $e) {
                                die('Erreur : ' . $e->getMessage());
                            }

                            ?>

                        </div>
                    </div>
                </div>-->
                <div>
                <div class='form-row'>
                    <div class='col-md-12 form-group'>

                            <button class='form-control btn btn-primary submit-button' type='submit'>Payer »</button>


                    </div>
                </div>
                <div class='form-row'>
                    <div class='col-md-12 error form-group hide'>
                        <div class='alert-danger alert'>
                            Please correct the errors and try again.
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class='col-md-4'></div>
    </div>
</div>
</html>
