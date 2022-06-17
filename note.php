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