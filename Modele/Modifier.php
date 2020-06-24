<?php
require_once 'Framework/Modele.php';
require_once 'Modele/Billet.php';
class Modifier extends Modele
{
    public function modifierBillet($titre,$contenu,$id){
    $sql = 'update T_BILLET set BIL_ID = ?,BIL_TITRE = ?,BIL_CONTENU = ? where BIL_ID=? ';
         
          $modifier =  $this->executerRequete($sql,array(NULL,$titre,$contenu,$id));
          return $modifier;
    }
  
}
