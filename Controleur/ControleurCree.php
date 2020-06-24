<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Ajouter.php';
class ControleurCree extends ControleurSecurise
{
    private $ajouter ;
    public function __construct(){
        $this->ajouter = new Ajouter;
    }
    public function index(){
        $this->genererVue();
    }
    public function ajouter(){
        $titre = $this->requete->getParametre("titre");
        $contenu = $this->requete->getParametre("contenu");
        $this->ajouter->ajouterBillet($titre,$contenu);
        $this->rediriger('gerer','index');
    }
}
?>