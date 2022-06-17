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
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">


    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../public/css/reset.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">

</head>

<body>

    <nav class="navig">
        <div class="contenuNav">
            <a href="index.php">
                <img class="LogoNav" src="../public/img/Logo/JoyW.svg" alt="logo">
            </a>
            <div class="categorieNav font24 policeIBM">
                <a class="over" href="../public/index.php?p=posts.categoryAppareil">PlayStation</a>
                <a class="over" href="">Xbox</a>
                <a class="over" href="">Nintendo</a>
            </div>
            <div class="icon">
                <a href="">
                    <img class="overimg" src="../public/img/Icon/White/heart.svg" alt="icon">
                </a>
                <a href="../public/index.php?p=users.panier">
                    <img class="overimg" src="../public/img/Icon/White/shopping-basket.svg" alt="icon">
                </a>
                <a href="../public/index.php?p=users.login">
                    <img class="overimg" src="../public/img/Icon/White/user.svg" alt="icon">
                </a>
            </div>
        </div>
    </nav>

    <div>

        <?= $content; ?>

    </div>

    <footer class="Footerrr">
        <div class="LogoAndNew">
            <img class="LogoFoot" src="../public/img/Logo/JoyW.svg" alt="logo">
            <div class="News font24">
                <p class="font20 policeCHAKRA">Rejoingnez-nous</p>
                <div class="mail">
                    <img src="../public/img/Icon/White/mail.svg" alt="icon-mail">
                    <p class="font16 policeCHAKRA">Entrer votre email</p>
                </div>
                <a class="boutonFooter font16 policeCHAKRA" href="">
                    S’inscrire
                </a>
            </div>
        </div>
        <div class="en-savoir-plus">
            <div class="contenuFoot">
                <p class="titreFoot font20 CHAKRAMedium">Informations</p>
                <div class="info font16 policeCHAKRA">
                    <a class="over" href="">Qui sommes-nous ?</a>
                    <a class="over" href="">Conditions générales</a>
                    <a class="over" href="">Mentions légales</a>
                    <a class="over" href="">Aide</a>
                    <a class="over" href="">CGV</a>
                </div>
            </div>
            <div class="contenuFoot">
                <p class="titreFoot font20 CHAKRAMedium">Nos Engagements</p>
                <div class="info font16 policeCHAKRA">
                    <a class="over" href="">Paiement sécuriser</a>
                    <a class="over" href="">Livraison en 48h</a>
                    <a class="over" href="">Frais de port</a>
                    <a class="over" href="">Contact 7j/7</a>
                </div>
            </div>
            <div class="contenuFoot">
                <p class="titreFoot font20 CHAKRAMedium">Moyens de paiements</p>
                <div class="infoPaiement font16 policeCHAKRA">
                    <img src="../public/img/Icon/White/paypal.svg" alt="icon-paypal">
                    <img src="../public/img/Icon/White/visa.svg" alt="icon-visa">
                    <img src="../public/img/Icon/White/mastercard.svg" alt="icon-mastercard">
                </div>
            </div>
            <div class="Contacter">
                <p class="CHAKRAMedium font20">Contactez-nous</p>
                <div class="contact policeCHAKRA font16">
                    <img src="../public/img/Icon/White/phone.svg" alt="phone">
                    <p>+33 2 22 22 22 22</p>
                </div>
                <div class="contact policeCHAKRA font16">
                    <img src="../public/img/Icon/White/mail.svg" alt="mail">
                    <p>CeciEstUn@Email.com</p>
                </div>
                <div class="Btn-contact">
                    <a href="../public/index.php?p=posts.contact" class="boutonFooter policeCHAKRA font16">Contacter</a>
                </div>
                <div class="reseau">
                    <a href=""><img class="overimg" src="../public/img/Icon/White/facebook.svg" alt="facebook"></a>
                    <a href=""><img class="overimg" src="../public/img/Icon/White/youtube.svg" alt="youtube"></a>
                    <a href=""><img class="overimg" src="../public/img/Icon/White/instagram.svg" alt="instagram"></a>
                    <a href=""><img class="overimg" src="../public/img/Icon/White/twitter.svg" alt="twitter"></a>
                </div>
            </div>
        </div>

    </footer>


</body>

</html>