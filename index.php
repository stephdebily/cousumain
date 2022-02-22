<?php

try { $bdd = new PDO('mysql:host=localhost;dbname=cousumain;charset=utf8', 'root', '');}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cousumain.fr : vente d'articles de couture</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

    <script>
        jQuery(function(){
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 200 ) {
                        $('#scrollUp').css('right','10px');
                    } else {
                        $('#scrollUp').removeAttr( 'style' );
                    }
                });
            });
        });
    </script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<header>

    <img src="../img/cousumain.jpg" width="200" height="100" class="responsive" id="logo"/>
    <img src="../img/cousumain1.png" width="200" height="100" class="responsive" id="logo_mobile"/>

    <div>
        <h1 class="responsive"><em>Cousumain.fr</em></h1>
        <h4 class="responsive">Vente d'articles de couture en ligne</h4>
    </div>
    <div>
        <input class="responsive" type="image" src="../img/person-fill.svg" title="Connection" value="Connection" width="100" height="50"/>
        <p class="responsive">Connection</p>
    </div>
    <div>
        <input class="responsive" type="image" src="../img/cart-fill.svg" title="Mon panier" value="Panier" width="100" height="50"/>
        <p class="responsive">Mon panier</p>
    </div>

</header>

<div class="topnav" id="myTopnav">
    <a href="#machine">Machines</a>
    <a href="#patron">Patrons</a>
    <a href="#fil">Fils</a>
    <a href="#accessoires">Accessoires</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

</div>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

<div id="slider">
    <figure>
        <img src="../img/bobines.jpg" alt=""/>
        <img src="../img/machinediapo.jpg" alt=""/>
        <img src="../img/patrondiapo.jpg" alt=""/>
        <img src="../img/bobines.jpg" alt=""/>
    </figure>
</div>

<h2 class="responsive">Presentation</h2>
<div class="presentation">
    <div class="row">
        <div class="col-md-6 how-img">
            <img src="../img/portrait.jpg" width="150" height="200" alt=""/>
        </div>
        <div class="col-md-6">
            <h4>Passionnée de couture, j'ai selectionné pour vous une gamme de machines, de fils, de patrons et d'accessoires de qualité afin que vous puissiez créer des modèles uniques et développer votre créativité.</h4>
            <br/><h5 class="responsive"><em>Claire C</em></h5>
        </div>
    </div>
</div>

<h2 class="responsive">Machines</h2>
<div class="flex-container" id="machine">
    <div id="singer1">
        <!--<?php include('singer1.php'); ?>-->
        <img src="../img/singer1.jpg" alt="singer1" width="100" height="100" />
        <h4>singer1</h4>
        <h5>300 €</h5>
    </div>
    <div id="singer2">
        <img src="../img/singer2.jpg" alt="singer2" width="100" height="100"/>
        <h4> singer2</h4>
        <h5>300 €</h5>
    </div>
    <div id="singer3">
        <img src="../img/singer3.jpg" alt="singer3" width="100" height="100"/>
        <h4>singer3</h4>
        <h5>300 €</h5>
    </div>
    <div id="singer4">
        <img src="../img/singer4.jpg" alt="surjeteuse singer" width="100" height="100"/>
        <h4>surjeteuse singer</h4>
        <h5>250 €</h5>
    </div>
</div>
<div class="flex-container">
    <div id="brother1">
        <img src="../img/brother1.jpg" alt="brother1" width="100" height="100"/>
        <h4>brother1</h4>
        <h5>200 €</h5>
    </div>
    <div id="brother2">
        <img src="../img/brother2.jpg" alt="brother2" width="100" height="100"/>
        <h4>brother2</h4>
        <h5>200 €</h5>
    </div>
    <div id="brother3">
        <img src="../img/brother3.jpg" alt="brother3" width="100" height="100"/>
        <h4>brother3</h4>
        <h5>200 €</h5>
    </div>
    <div id="brother4">
        <img src="../img/brother4.jpg" alt="surjeteuse brother" width="100" height="100"/>
        <h4>surjeteuse brother</h4>
        <h5>300 €</h5>
    </div>
</div>

<h2 class="responsive">Patrons</h2>
<div class="flex-container" id="patron">
    <div id="patron1">
        <img src="../img/patron1.jpg" alt="patron1" width="100" height="100"/>
        <h4>patron1</h4>
        <h5>16 €</h5>
    </div>
    <div id="patron2">
        <img src="../img/patron2.jpg" alt="patron2" width="100" height="100"/>
        <h4>patron2</h4>
        <h5>16 €</h5>
    </div>
    <div id="patron3">
        <img src="../img/patron3.jpg" alt="patron3" width="100" height="100"/>
        <h4>patron3</h4>
        <h5>16 €</h5>
    </div>
    <div id="patron4">
        <img src="../img/patron4.jpg" alt="patron4" width="100" height="100"/>
        <h4>patron4</h4>
        <h5>16 €</h5>
    </div>
</div>
<div class="flex-container">
    <div id="patron5">
        <img src="../img/patron5.jpg" alt="patron5" width="100" height="100"/>
        <h4>patron5</h4>
        <h5>16 €</h5>
    </div>
    <div id="patron6">
        <img src="../img/patron6.jpg" alt="patron6" width="100" height="100"/>
        <h4>patron6</h4>
        <h5>16 €</h5>
    </div>
    <div id="patron7">
        <img src="../img/patron7.jpg" alt="patron7" width="100" height="100"/>
        <h4>patron7</h4>
        <h5>16 €</h5>
    </div>
    <div id="patron8">
        <img src="../img/patron8.jpg" alt="patron8" width="100" height="100"/>
        <h4>patron8</h4>
        <h5>16 €</h5>
    </div>
</div>

<h2 class="responsive">Bobines de fils</h2>
<div class="flex-container" id="fil">
    <div id="filblanc">
        <img src="../img/bobineblanc.jpg" alt="fil blanc" width="100" height="100"/>
        <h4>Bobine de fil blanc</h4>
        <h5>2,80 €</h5>
    </div>
    <div id="filbleu">
        <img src="../img/bobinebleu.jpg" alt="fil bleu" width="50" height="100"/>
        <h4>Bobine de fil bleu</h4>
        <h5>2,80 €</h5>
    </div>
    <div id="filjaune">
        <img src="../img/bobinejaune.jpg" alt="fil jaune" width="100" height="100"/>
        <h4>Bobine de fil jaune</h4>
        <h5>2,80 €</h5>
    </div>
    <div id="filnoir">
        <img src="../img/bobinenoir.jpg" alt="fil noir" width="100" height="100"/>
        <h4>Bobine de fil noir</h4>
        <h5>2,80 €</h5>
    </div>
</div>
<div class="flex-container">
    <div id="filorange">
        <img src="../img/bobineorange.jpg" alt="fil orange" width="100" height="100"/>
        <h4>Bobine de fil orange</h4>
        <h5>2,80 €</h5>
    </div>
    <div id="filrose">
        <img src="../img/bobinerose.jpg" alt="fil rose" width="50" height="100"/>
        <h4>Bobine de fil rose</h4>
        <h5>2,80 €</h5>
    </div>
    <div id="filrouge">
        <img src="../img/bobinerouge.jpg" alt="fil rouge" width="100" height="100"/>
        <h4>Bobine de fil rouge</h4>
        <h5>2,80 €</h5>
    </div>
    <div id="filvert">
        <img src="../img/bobinevert.jpg" alt="fil vert" width="50" height="100"/>
        <h4>Bobine de fil vert</h4>
        <h5>2,80 €</h5>
    </div>
</div>

<h2 class="responsive">Accessoires</h2>
<div class="flex-container" id="accessoires">
    <div id="buste">
        <img src="../img/buste.jpg" alt="buste" width="60" height="100"/>
        <h4>Buste de couturier</h4>
        <h5>150 €</h5>
    </div>
    <div id="crochets">
        <img src="../img/crochets.jpg" alt="crochets" width="100" height="100"/>
        <h4>Crochets tunisiens</h4>
        <h5>70 €</h5>
    </div>
    <div id="aiguilles">
        <img src="../img/aiguilles.jpg" alt="aiguilles" width="100" height="100"/>
        <h4>Lot de 2 aiguilles</h4>
        <h5>3 €</h5>
    </div>
    <div id="boule">
        <img src="../img/boule.jpg" alt="boule" width="100" height="100"/>
        <h4>Boule de piquage</h4>
        <h5>3 €</h5>
    </div>
</div>
<div id="scrollUp">
    <a href="#top"><img src="../img/to-top.jfif" width="30" height="30"/></a>
</div>
<footer>
    <a href="">Mentions légales</a>
    <a class="responsive" id="enveloppe" href="mailto:cousumain@yahoo.fr">Nous contacter</a>
    <a class="responsive" id="enveloppe_mobile" href="mailto:cousumain@yahoo.fr"><img src="../img/enveloppe.png"  width="40" height="40" /></a>

    <div id="reseau">
        <p class="responsive">Suivez-nous sur :</p><a href="https://www.instagram.com"><img src="../img/insta.jfif" alt="insta" width="40" height="40" /></a>
        <a href="https://www.pinterest.fr"><img src="../img/pinterest.jfif" alt="pinterest" width="40" height="40" /></a>
        <a href="https://twitter.com"><img src="../img/twitter.jfif" alt="twitter" width="40" height="40" /></a>
        <a href="https://fr-fr.facebook.com"><img src="../img/fb.jfif" alt="facebook" width="40" height="40" /></a>
    </div>
</footer>
</body>
</html>
?>