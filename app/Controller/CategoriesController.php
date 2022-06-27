<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class CategoriesController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Category');
        $this->loadModel('SousCategory');
        $this->loadModel('Produit');
    }

    public function index()
    {
        $categories = $this->Category->all();
        $this->render('categories.index', compact('categories'));
    }

    public function souscategory()
    {
        $categories = $this->Category->all();
        $categorieAppareil = $this->SousCategory->find($_GET['id']);
        if ($categorieAppareil === false) {
            $this->notFound();
        }
        $produits = $this->Produit->lastBySousCategory($_GET['id']);
        $this->render('categories.souscategory', compact('categories', 'categorieAppareil', 'produits'));
    }

    public function category()
    {
        $categories = $this->Category->all();
        $sous_categories = $this->SousCategory->allByCategory($_GET['id']);
        if ($sous_categories === false) {
            $this->notFound();
        }
        $produits = $this->Produit->lastBySousCategory($_GET['id']);
        $this->render('categories.category', compact('categories', 'sous_categories', 'produits'));
    }

}