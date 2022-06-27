<main>
    <section>
        <div>
            <video autoplay muted loop>
            <source src="../public/img/Video/PS5.mp4" type="video/mp4">
            </video>
        </div>
    </section>
    <section>
        <?php foreach($sous_categories as $sous_categorie): ?>
        <div class="CategoryAppareil">
            <div class="InfoCategoryApp">
                <p class="CHAKRARegular font32">Toutes nos manette <?= $sous_categorie->titre; ?></p>
                <p class="policeCHAKRA font20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim</p>
            </div>
            <div class="ContenuCategoryApp">
                <div class="passe"><img src="../public/img/Icon/Black/Précedent.svg" alt="Précedent"></div>
                <div class="Articles">
                    <?=var_dump($sous_categories)?>
                    <?=var_dump($produits)?>
                    <?php foreach($produits as $produit): ?>
                        <a href="../public/index.php?p=posts.show&id=<?=$produit->id?>"><img src="../public/img/Article/<?=$produit->img1?>" alt="Image Produit"></a>
                    <?php endforeach; ?>
                </div>
                <div class="passe"><img src="../public/img/Icon/Black/Suivant.svg" alt="Suivant"></div>
            </div>
            <div class="VoirPlusApp">
                <a href="<?= $sous_categorie->url; ?>" class="policeCHAKRA font20">Voir plus</a>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
</main>