<div class="row">
  <?php if(!empty($panier)){ ?>
    <form action="index.php?p=panier.recapitulatif" method="POST">
        <?php foreach ($panier as $idProduit => $champs): ?>
          <input type="hidden" id="produit-id-<?=$idProduit?>" name="produit-id-<?=$idProduit?>"  class="form-control" value="<?= $idProduit?>">
          <input type="hidden" id="produit-<?=$idProduit?>-total" name="produit-<?=$idProduit?>-total" class="form-control" value="<?= $champs['prix']* $champs['nbr']?>">
          <div class="row">
            <div class="col-lg-4 col-6">
              <label>Produit</label>
              <input type="text" id="produit-<?=$idProduit?>-titre-disabled" name="produit-<?=$idProduit?>-titre-disabled" class="form-control" value="<?=$champs['titre']?>" disabled="disabled">
            </div>
            <div class="col-lg-3 col-3">
              <label>Nbr</label>
              <input type="number" id="produit-<?=$idProduit?>-nbr" name="produit-<?=$idProduit?>-nbr" class="form-control produit-nbr" value="<?=$champs['nbr']?>"  data-produit="<?=$idProduit?>" data-prix="<?=$champs['prix']?>">
            </div>
            <div class="col-lg-2 col-3">
              <label>Prix unité</label>
              <input type="text" id="produit-<?=$idProduit?>-unite-disabled" name="produit-<?=$idProduit?>-unite-disabled" class="form-control" value="<?=$champs['prix']?>€" disabled="disabled">
            </div>
            <div class="col-lg-3 col-3">
              <label>Prix total</label>
              <input type="text" id="produit-<?=$idProduit?>-total-disabled" name="produit-<?=$idProduit?>-total-disabled" class="form-control produit-total" value="<?=$champs['prix']* $champs['nbr']?>€" disabled="disabled">
            </div>
          </div>  
          <?php endforeach; ?>

          <div class="col-lg-3 col-3">
              <label>Total de la commande</label>
              <input type="text" id="commande-total-disabled" name="commande-total-disabled" class="form-control" value="<?=$prixTotalCommande?>€" disabled="disabled">
          </div>

          <div class="col-lg-3 col-3">
              <input type="hidden" id="commande-total" name="commande-total" class="form-control" value="<?=$prixTotalCommande?>">
          </div>
          
          <button class="btn btn-primary">Valider le panier</button>
    </form>
<?php
  }else{ ?>
      <p>Pas de panier</p>
<?php
  }   ?>
</div>


<script>

  var elements = document.getElementsByClassName('produit-nbr');
  var prixCommande = document.getElementById('commande-total');
  var prixCommandeDisabled = document.getElementById('commande-total-disabled');
  var prixTotalCommande = 0;
  if(elements){
    window.addEventListener('change', changePrix)
  }

  function changePrix(){
    prixTotalCommande = 0;
    for (var i = 0; i < elements.length; i++) {

      var valeur = elements[i].value;
      var produit = elements[i].dataset.produit;
      var prix = elements[i].dataset.prix;
     
      var prixUnite = document.getElementById('produit-'+produit+'-total');
      var prixUniteDisabled = document.getElementById('produit-'+produit+'-total-disabled');

      var resulatPrixtotal = prix*valeur;

      prixUniteDisabled.setAttribute('value', resulatPrixtotal+"€")
      prixUnite.setAttribute('value', resulatPrixtotal)

      prixTotalCommande = prixTotalCommande + resulatPrixtotal;

      prixCommandeDisabled.setAttribute('value', prixTotalCommande+"€")
      prixCommande.setAttribute('value', prixTotalCommande)

    }

  }

</script>