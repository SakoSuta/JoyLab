<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Glory:wght@300;500&display=swap" rel="stylesheet">
    

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../public/css/reset.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">

</head>

<body>

<nav class="navig ligne">
    <div>
        <a href="index.php">
            <img class="logo" src="../public/img/JoyW.svg" alt="logo">
        </a>
    </div>
    <div class="categorie font24 police ligne">
        <a href="">PlayStation</a>
        <a href="">Xbox</a>
        <a href="">Nintendo</a>
    </div>
    <div class="icon ligne">
        <a href="">
            <img class="icon-heart" src="../public/img/Wheart.svg" alt="icon">
        </a>
        <a href="">
            <img class="icon-shop" src="../public/img/Wshopping-basket.svg" alt="icon">
        </a>
        <a href="">
            <img class="icon-user" src="../public/img/Wuser.svg" alt="icon">
        </a>
    </div>
</nav>

<video autoplay muted loop>
  <source src="../public/img/PS5.mp4" type="video/mp4">
</video>

<div class="container">

    <div class="starter-template" style="padding-top: 100px;">
        <?= $content; ?>
    </div>

</div><!-- /.container -->

<footer class="Foot ligne centre">
    <div class="LogN ligne colonne">
        <img class="logoF" src="../public/img/JoyB.svg" alt="logo">
        <div class="News font24">
            <p class="font20 police">Rejoingnez-nous</p>
            <div class="mail ligne">
                <img src="../public/img/mail.svg" alt="icon-mail">
                <p class="font16 police">Entrer votre email</p>
            </div>
            <button class="font16 police boutonF">
                S’inscrire
            </button>
        </div>
    </div>
    <div class="en-savoir-plus ligne">
        <div class="autreF">
            <p class="font20 policegras titFoot">Informations</p>
            <div class="info font16 police">
                <p>Qui sommes-nous ?</p>
                <p>Conditions générales</p>
                <p>Mentions légales</p>
                <p>Aide</p>
                <p>CGV</p>
            </div>
        </div>
        <div class="autreF">
            <p class="font20 policegras titFoot">Nos Engagements</p>
            <div class="info font16 police">
                <p>Paiement sécuriser</p>
                <p>Livraison en 48h</p>
                <p>Frais de port</p>
                <p>Contact 7j/7</p>
            </div>
        </div>
        <div class="autreF">
            <p class="font20 policegras titFoot">Moyens de paiements</p>
            <div class="info font16 police">
                <img src="../public/img/paypal.svg" alt="icon-paypal">
                <img src="../public/img/visa.svg" alt="icon-visa">
                <img src="../public/img/mastercard.svg" alt="icon-mastercard">
            </div>
        </div>
        <div class="ligne colonne">
            <p class="policegras font20 titFoot">Contactez-nous</p>
            <div class="police font16 contact ligne">
                <img src="../public/img/phone.svg" alt="phone">
                <p>+33 2 22 22 22 22</p>
            </div>
            <div class="police font16 contact ligne">
                <img src="../public/img/mail.svg" alt="mail">
                <p>CeciEstUn@Email.com</p>
            </div>
            <div class="ligne centre">
                <button class="police font16 boutonF contacter">Contacter</button>
            </div>
            <div class="ligne reseau">
                <img src="../public/img/facebook.svg" alt="facebook">
                <img src="../public/img/youtube.svg" alt="youtube">
                <img src="../public/img/instagram.svg" alt="instagram">
                <img src="../public/img/twitter.svg" alt="twitter">
            </div>
        </div>
    </div>

</footer>


</body>
</html>
