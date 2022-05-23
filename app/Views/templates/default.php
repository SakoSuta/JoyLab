<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/style.css " rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header navigg">
            <a href="index.php">
                <img src="../public/img/Joy.svg" alt="logo" width="301px">
            </a>
            <div class="aaa">
                <a href="">User</a>
                <a href="http://localhost/Lecon/Sources-Model-View-Controller/public/index.php?p=admin.posts.index">Produit</a>
                <a href="http://localhost/Lecon/Sources-Model-View-Controller/public/index.php?p=admin.categories.index">Catégories</a>
                <a href="http://localhost/Lecon/Sources-Model-View-Controller/public/index.php?p=users.login">Déconnexions</a>
            </div>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template" style="padding-top: 100px;">
        <?= $content; ?>
    </div>

</div><!-- /.container -->


</body>
</html>
