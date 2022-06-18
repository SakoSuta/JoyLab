<!-- <h1><?= $categorie->titre ?></h1>

<div class="row">
    <div class="col-sm-8">
        <?php foreach ($articles as $post): ?>

            <h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>

            <p><em><?= $post->categorie; ?></em></p>

            <p><?= $post->extrait; ?></p>

        <?php endforeach; ?>

    </div>

    <div class="col-sm-4">
        <ul>
            <?php foreach($categories as $categorie): ?>
                <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div> -->

<!-- <?php foreach($categories as $categorie): ?>
                <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
            <?php endforeach; ?> -->

<main>
    <section>
        <div class="Category">
            <div class="InfoCategory">
                <p class="CHAKRARegular font40">Tous nos thémes de jeux de manette PS5</p>
            </div>
            <div class="ContenuCategory">
                <div class="TousArticles">
                    <div class="Articles">
                        <a href="../public/index.php?p=posts.show&id=1"><img src="..\public\img\Article\CouleurRouge.png" alt=""></a>
                        <a href="../public/index.php?p=posts.show&id=1" class="NomArticle policeCHAKRA font24">Couleur Rouge - 64,99 €</a>
                        <a href="../public/index.php?p=posts.show&id=1" class="btnAcheter policeCHAKRA font20">Acheter</a>
                    </div>
                    <div class="Articles">
                        <a href="../public/index.php?p=posts.show&id=1"><img src="..\public\img\Article\CouleurRouge.png" alt=""></a>
                        <a href="../public/index.php?p=posts.show&id=1" class="NomArticle policeCHAKRA font24">Couleur Rouge - 64,99 €</a>
                        <a href="../public/index.php?p=posts.show&id=1" class="btnAcheter policeCHAKRA font20">Acheter</a>
                    </div>
                    <div class="Articles">
                        <a href="../public/index.php?p=posts.show&id=1"><img src="..\public\img\Article\CouleurRouge.png" alt=""></a>
                        <a href="../public/index.php?p=posts.show&id=1" class="NomArticle policeCHAKRA font24">Couleur Rouge - 64,99 €</a>
                        <a href="../public/index.php?p=posts.show&id=1" class="btnAcheter policeCHAKRA font20">Acheter</a>
                    </div>
                    <div class="Articles">
                        <a href="../public/index.php?p=posts.show&id=1"><img src="..\public\img\Article\CouleurRouge.png" alt=""></a>
                        <a href="../public/index.php?p=posts.show&id=1" class="NomArticle policeCHAKRA font24">Couleur Rouge - 64,99 €</a>
                        <a href="../public/index.php?p=posts.show&id=1" class="btnAcheter policeCHAKRA font20">Acheter</a>
                    </div>
                    <div class="Articles">
                        <a href="../public/index.php?p=posts.show&id=1"><img src="..\public\img\Article\CouleurRouge.png" alt=""></a>
                        <a href="../public/index.php?p=posts.show&id=1" class="NomArticle policeCHAKRA font24">Couleur Rouge - 64,99 €</a>
                        <a href="../public/index.php?p=posts.show&id=1" class="btnAcheter policeCHAKRA font20">Acheter</a>
                    </div>
                    <div class="Articles">
                        <a href="../public/index.php?p=posts.show&id=1"><img src="..\public\img\Article\CouleurRouge.png" alt=""></a>
                        <a href="../public/index.php?p=posts.show&id=1" class="NomArticle policeCHAKRA font24">Couleur Rouge - 64,99 €</a>
                        <a href="../public/index.php?p=posts.show&id=1" class="btnAcheter policeCHAKRA font20">Acheter</a>
                    </div>
                </div>
                <div class="VoirPlus">
                    <a href="" class="policeCHAKRA font20">Voir Plus</a>
                </div>
            </div>
        </div>
    </section>
</main>