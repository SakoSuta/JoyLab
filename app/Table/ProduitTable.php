<?php
namespace App\Table;

use Core\Table\Table;

class ProduitTable extends Table{

    protected $table = 'produits';

    /**
     * Récupère les derniers produits
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT produits.id, produits.titre, produits.img1, produits.img2, produits.img3, produits.img4, produits.prix,  produits.description
            FROM produits
            LEFT JOIN sous_categories ON sous_categories_id = sous_categories.id
            ORDER BY produits.date DESC LIMIT 3");
    }

    /**
     * Récupère les derniers produits de la category demandée
     * @param $category_id int
     * @return array
     */
    public function lastByCategory($category_id){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.img, produits.prix, produits.date, categories.titre as categorie
            FROM produits
            LEFT JOIN categories ON categories_id = categories.id
            LEFT JOIN sous_categories ON sous_categories_id = sous_categories.id
            WHERE produits.sous_categories_id = ?
            ORDER BY produits.date DESC", [$category_id]);
    }

    /**
     * Récupère un produit en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\ProduitEntity
     */
    public function findWithCategory($id){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.img, produits.prix
            FROM produits
            WHERE produits.id = ?", [$id], true);
    }

    /**
     * Récupère les derniers produits de la category demandée
     * @param $category_id int
     * @return array
     */
    public function lastBySousCategory($category_id){
        return $this->query("
        SELECT *
        FROM produits
        LEFT JOIN sous_categories ON sous_categories_id = sous_categories.id
        WHERE produits.sous_categories_id = ?
        ORDER BY produits.id", [$category_id]);
    }

    /**
     * Récupère les derniers produits de la category demandée
     * @param $category_id int
     * @return array
     */
    public function lastBySSousCategory($category_id){
        return $this->query("
        SELECT sous_categories.titre, sous_categories.id
            FROM sous_categories
            LEFT JOIN categories ON categories_id = categories.id
            WHERE sous_categories.categories_id = ?
            ORDER BY sous_categories.id", [$category_id]);
    }
}