<?php
require_once 'Framework/Modele.php';
class Ajouter extends Modele
{
    public function ajouterBillet($titre,$contenu){
    $sql = 'insert into T_BILLET (BIL_ID, BIL_DATE, BIL_TITRE, BIL_CONTENU)'
           . 'values(?, ?, ?, ?)';
           $date = date(DATE_W3C);
          $billet =  $this->executerRequete($sql,array(NULL,$date,$titre,$contenu));
          return $billet;
    }
}

?>