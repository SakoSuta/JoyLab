<main>
    <section>
        <div class="Category">
            <div class="InfoCategory">
                <p class="CHAKRARegular font40">Tous nos manettes <?=$categorieAppareil->titre?></p>
            </div>
            <div class="ContenuCategory">
                <div class="TousArticles">
                    <div class="Articles">
                        <?php foreach($produits as $produit): ?>
                            <?=var_dump($produit)?>
                        <a href="../public/index.php?p=posts.show&id=<?=$produit->id?>"><img src="..\public\img\upload\<?=$produit->img2?>" alt="Image Produit"></a>
                        <a href="../public/index.php?p=posts.show&id=<?=$produit->id?>" class="NomArticle policeCHAKRA font24"><?=$produit->titre?> - <?=$produit->prix?></a>
                        <a href="../public/index.php?p=posts.show&id=<?=$produit->id?>" class="btnAcheter policeCHAKRA font20">Acheter</a>
                        <?php endforeach; ?>
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