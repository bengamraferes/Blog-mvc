<?php
require_once 'Framework/Controleur.php';
require_once 'Modele/Categories.php';
class ControleurCategorieBillets extends Controleur
{
    private $categorie;

    public function __construct() {
        $this->categorie = new Categories;
    }
    public function index(){
        $id = $this->requete->getParametre("id");
        $billets = $this->categorie->selectCategorie($id);
        $this->genererVue(array('billets' => $billets));
    }
}
?>