<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Billet.php';
require_once 'Modele/Categories.php';

class ControleurAccueil extends Controleur {

    private $billet;
    private $categorie;

    public function __construct() {
        $this->billet = new Billet();
        $this->categorie = new Categories;
    }

    // Affiche la liste de tous les billets du blog
        public function index() {
        $billets = $this->billet->getBillets();
        $this->genererVue(array('billets' => $billets));
    }
      

}

