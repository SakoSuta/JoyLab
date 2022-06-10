<!-- <div class="row">
    <div class="col-sm-8">
        <?php foreach ($posts as $post): ?>

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

<main>
    <section>
        <div>
            <video autoplay muted loop>
            <source src="../public/img/Video/PS5.mp4" type="video/mp4">
            </video>
        </div>
    </section>
    <section>
        <div class="CategorieAc">
            <a href="">
                <img src="../public/img/Uniques.png" alt="Couleurs-Uniques">
            </a>
            <div class="autreCategorie">
                <a href="" class="motifs">
                    <img src="../public/img/Motifs.png" alt="Divers-Motifs">
                </a>
                <a href="">
                    <img src="../public/img/Themejeux.png" alt="Thèmes-de-jeux-vidéos">
                </a>
            </div>
        </div>
    </section>
    <section>
        <div class="MeilleursAchats">

            <p class="NosMeilAchat policeCHAKRA font32">Nos Meilleurs achats</p>

            <div class="emilie">
                <div class="ContenuMeilAchat">
                    
                    <a href="" class="passe"><img src="../public/img/Icon/White/Précedent.svg" alt="Précedent"></a>
                    
                    <div class="MeilleurArticle">
                        <a href="">
                            <img src="../public/img/Article/Article1.png" alt="Article1">
                        </a>
                        <a href="">
                            <img src="../public/img/Article/Article2.png" alt="Article2">
                        </a>
                        <a href="">
                            <img src="../public/img/Article/Article3.png" alt="Article3">
                        </a>
                    
                    </div>
                    
                    <a href="" class="passe"><img src="../public/img/Icon/White/Suivant.svg" alt="Suivant"></a>
                
                </div>
            </div>
        </div>
    </section>
</main>