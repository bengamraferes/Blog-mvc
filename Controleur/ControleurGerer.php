<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Billet.php';
class ControleurGerer extends ControleurSecurise 
{
    private $gerer ;
    // constructeur

    public function __construct(){
        $this->gerer = new Billet;
    }
    public function index() {
        $gerer =  $this->gerer->getBillets();
        $this->genererVue(array('gerer' => $gerer ));
    }
    public function supprimer(){
        $idBillet = $this->requete->getParametre("id");
        $this->gerer->supprimerBillet($idBillet);
        $this->executerAction('index');
    }
}
 
?>