<!-- <h1><?= $article->titre; ?></h1>

<p><em><?= $article->categorie; ?></em></p>

<p><?= $article->contenu; ?></p> -->

<main>
    <section>
        <div class="FicheProduit">
            <div class="ContenuFP">
                <div class="ImageProduit">
                    <img src="..\public\img\Article\CouleurRougeB.png" alt="Couleur Rouge">
                </div>
                <div class="FicheInfo">
                    <div class="haut">
                        <div class="Produit">
                            <p class="CHAKRASemiBold font40">Couleur Rouge</p>
                            <p class="Play CHAKRARegular font24">PlayStation 5</p>
                            <p class="CHAKRAMedium font32">64,99 €</p>
                        </div>
                        <div class="quanti">
                            <div class="ContenuQuanti">
                                <p class="CHAKRAMedium font20">Quantité :</p>
                                <div class="InputQuanti"><?= $form->input('quantité', '1', ['type' => 'number']); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="descrip">
                        <p class="CHAKRAMedium font24">Description</p>
                        <div class="ContenuDescrip">
                            <p class="policeCHAKRA font20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In purus porttitor fermentum sociis in. Neque risus nunc tellus mauris. Varius enim urna, quisque amet, integer. Aliquet vulputate pretium ultricies sed faucibus tempus et non, in. Ut nunc viverra suspendisse enim, consequat, nulla.</p>
                        </div>
                    </div>
                    <div class="AjoutPanier">
                        <a href=""class="CHAKRAMedium font24">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>