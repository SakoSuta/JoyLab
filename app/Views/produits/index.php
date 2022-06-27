<div class="row">
    <div class="col-sm-8">
        <?php foreach ($produits as $produit): ?>

            <h2><a href="<?= $produit->url ?>"><?= $produit->titre; ?></a></h2>

            <p><?= $produit->extrait; ?></p>

        <?php endforeach; ?>

    </div>

    <div class="col-sm-4">
        <ul>
        <?php foreach($categories as $categorie): ?>
            <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>

