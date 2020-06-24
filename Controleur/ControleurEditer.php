<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Modifier.php';
require_once 'Modele/Billet.php';

class ControleurEditer extends ControleurSecurise 
{
    private $editer;
    private $billet;

    public function __construct(){
        $this->editer = new Modifier;
        $this->billet = new Billet;
    }
    public function index(){
        $idBillet = $this->requete->getParametre("id");
        $billet = $this->billet->getBillet($idBillet);
        $this->genererVue(array('billet' => $billet));
    }
    public function modifier(){
        $idBillet = $this->requete->getParametre("id");
        $titre = $this->requete->getParametre("titre");
        $contenu = $this->requete->getParametre("contenu");
        $this->editer->modifierBillet($titre,$contenu,$idBillet);
        $this->rediriger('gerer','index');
    }
}

?>