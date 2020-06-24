<?php 
require_once 'Framework/Modele.php';
class Categories extends Modele 
{
    public function readCategorie(){
        $sql = 'select CAT_ID as id , CAT_NOM as nom from T_CATEGORIE order by CAT_ID desc ';
        $categories = $this->executerRequete($sql);
        return $categories;
    }
    public function getCategorie($id){
        $sql = 'select CAT_ID as id , CAT_NOM as nom from T_CATEGORIE  where  CAT_ID = ? order by CAT_ID desc ';
        $categorie = $this->executerRequete($sql, array($id));
        if ($categorie->rowCount() > 0)
        return $categorie->fetch();  // Accès à la première ligne de résultat
    else
        throw new Exception("Aucun billet ne correspond à l'identifiant '$id'");
}
        
    public function selectCategorie($id){
        $sql =  'select BIL_TITRE as titre_bil,BIL_DATE as date,BIL_CONTENU as contenu ,CAT_NOM as nom_cat, BIL_ID as id '
                .'from T_CATEGORIE as c '
                .'inner join T_BILLET as b '
                .'on c.CAT_ID = b.CAT_ID '
                .'where b.CAT_ID =?';
       return $this->executerRequete($sql ,array($id));
    }
    public function createCategorie($nom){
        $sql = 'insert into T_CATEGORIE (CAT_ID,CAT_NOM) value (?,?)';
        return $this->executerRequete($sql ,array(NULL,$nom));
    }
    public function updateCategorie($nom , $id ,$newId ){
        $sql = ' update T_CATEGORIE as c '
               .' set c.CAT_NOM = ? where c.CAT_ID = ?  ';
        return $this->executerRequete($sql ,array($nom,$id));
    }
    public function deleteCategorie(){
        
    }

}

?>