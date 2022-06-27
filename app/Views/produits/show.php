<h1><?= $produit->titre; ?></h1>

<img src="../public/img/upload/<?= $produit->img; ?>" style="width: 10%;">

<p><?= $produit->description; ?></p>


<p><?= $produit->prix; ?>€</p>

<form method="post" action="index.php?p=panier.add">

    <label for="nbr">Nombre</label>
    <input type="number" name="nbr" id="nbr" class="form-control">
    <input type="hidden" name="idProduit" id="idProduit" class="form-control" value="<?=$produit->id;?>">
    <input type="hidden" name="prix" id="prix" class="form-control" value="<?=$produit->prix;?>">
    <input type="hidden" name="titre" id="titre" class="form-control" value="<?=$produit->titre;?>">

    <button class="btn btn-primary">Ajouter au panier</button>
</form>