<?php
public function lastByCategory($category_id){
    return $this->query("
        SELECT produits.id, produits.titre, produits.contenu, produits.img, produits.prix, produits.date, categories.titre as categorie
        FROM produits
        LEFT JOIN categories ON category_id = categories.id
        LEFT JOIN sous_categories ON sous_category_id = sous_categories.id
        WHERE produits.category_id = ?
        ORDER BY produits.date DESC", [$category_id]);
}


public function last(){
    return $this->query("
        SELECT produits.id, produits.titre, produits.img, produits.prix, categories.titre as categorie, sous_categories.titre as souscategorie
        FROM produits
        LEFT JOIN categories ON category_id = categories.id
        LEFT JOIN sous_categories ON sous_category_id = sous_categories.id
        ORDER BY produits.date DESC LIMIT 3");
}
?>

<table>
    <thead>
        <tr>
            <th class="CHAKRASemiBold font24">Produit</th>
            <th class="CHAKRASemiBold font24">Manette</th>
            <th class="CHAKRASemiBold font24">Prix</th>
            <th class="CHAKRASemiBold font24">Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div class="ContenuProduit">
                    <div class="Info">
                        <img src="..\public\img\Article\CouleurRougeB.png" alt="">
                        <div class="InfoProduit">
                            <div class="Article">
                                <p class="CHAKRASemiBold font24">Couleur Rouge</p>
                            </div>
                            <p class="policeCHAKRA font24">Catégories :</p>
                            <p class="policeCHAKRA font24">Couleur Unique</p>
                        </div>
                    </div>
                </div>
            </td>
            <td class="policeCHAKRA font24"><div class="ContenuProduit">PS4</div></td>
            <td class="policeCHAKRA font24"><div class="ContenuProduit">64,99€</div></td>
            <td><div class="ContenuProduit"><a href=""><img src="../public/img/Icon/Black/Trash.svg" alt=""></a></div></td>
        </tr>
        <tr>
            <td>
                <div class="ContenuProduit">
                    <div class="Info">
                        <img src="..\public\img\Article\CouleurRougeB.png" alt="">
                        <div class="InfoProduit">
                            <div class="Article">
                                <p class="CHAKRASemiBold font24">Couleur Rouge</p>
                            </div>
                            <p class="policeCHAKRA font24">Catégories :</p>
                            <p class="policeCHAKRA font24">Couleur Unique</p>
                        </div>
                    </div>
                </div>
            </td>
            <td class="policeCHAKRA font24">
                <div class="ContenuProduit">
                    <p>PS4</p>
                </div>
            </td>
            <td class="policeCHAKRA font24">
                <div class="ContenuProduit">
                    <p>64,99€</p>
                </div>
            </td>
            <td>
                <div class="ContenuProduit">
                    <a href=""><img src="../public/img/Icon/Black/Trash.svg" alt=""></a>
                </div>
            </td>
        </tr>
    </tbody>
</table>

Table {
        width: 818px;
        background-color: $blanc;
        border: 4px solid $vert;
        border-radius: 10px;

        thead {
          border: 4px solid $vert;
          tr {
            th {
              border: 4px solid $vert;
              padding: 25px 0px;
            }
          }
        }

        tbody {
          tr {
            border: 4px solid $vert;
            td {
              border: 4px solid $vert;
              .ContenuProduit {
                padding: 20px 0px;
                display: flex;
                justify-content: center;
                align-items: center;

                .Info {
                  img {
                    width: 200px;
                    margin-bottom: 10px;
                  }

                  .InfoProduit {
                    display: flex;
                    flex-direction: column;
                    align-items: center;

                    .Article {
                      padding-bottom: 15px;
                    }
                  }
                }
              }
            }
          }
        }
      }

<?php

        // if(!empty($_POST)){
        //     // Vérification des champs de manière générale
        //     if(empty($_POST['firstname']) || 
        //        empty($_POST['lastname']) || 
        //        empty($_POST['email']) ||
        //        empty($_POST['password']) ||
        //        empty($_POST['passwordVerif'])
        //        ){
        //         $errors = true;
        //         $messageError = "Veuillez remplir tous les champs";
        //     }else{

        //         // if($_POST['email'] != $_POST['emailVerif']){
        //         //     $errors = true;
        //         //     $messageError = "Les champs d'email sont incorrect";
        //         // }

        //         if($_POST['password'] != $_POST['passwordVerif']){
        //             $errors = true;
        //             $messageError = "Les champs de password sont incorrect";
        //         }

        //         // if(strlen($_POST['tel']) < 10){
        //         //     $errors = true;
        //         //     $messageError = "Le champ de téléphone doit comporter 10 chiffres";
        //         // }

?>

<!-- <h1><?= $categorie->titre ?></h1>

<div class="row">
    <div class="col-sm-8">
        <?php foreach ($produits as $post): ?>

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