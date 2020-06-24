<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Categories.php';
class ControleurGestion extends ControleurSecurise 
{
    private $gestion;
    public function __construct(){
        $this->gestion = new Categories;
    }
    public function index(){
        $categories = $this->gestion->readCategorie();
        $this->genererVue(array('categories' => $categories));
    }
    public function select(){
        $id = $this->requete->getParametre("id");
       $lister = $this->gestion->selectCategorie($id);
       var_dump  ($lister);
       $this->genererVue(array('lister' => $lister));
    }
    public function update(){
        $id = $this->requete->getParametre("id");
        $categorie = $this->gestion->getCategorie($id);
        var_dump  ($categorie);
      $this->genererVue(array('categorie' => $categorie));
    }
    public function updateCategorie(){
        $id = $this->requete->getParametre("id");
        $newId =  $this->requete->getParametre("newId");
        $nom = $this->requete->getParametre("nom");
        $this->gestion->updateCategorie($nom,$id,$newId);
        $this->rediriger('gestion','index');   
     }
     public function create(){
        $this->genererVue();
     }
     public function createCategorie(){
        $nom = $this->requete->getParametre("nom");
        $this->gestion->createCategorie($nom);
        $this->rediriger('gestion','index');  
     }
}

?>