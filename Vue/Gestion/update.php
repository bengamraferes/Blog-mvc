<h2>Vous etes entrain d'iditer la catgorie <?=$this->nettoyer( $categorie['nom']); ?> </h2>
<form action="gestion/updateCategorie" method="post">
<p>Titre<input type="text" name ="nom" value =<?=$this->nettoyer( $categorie['nom']); ?> ></p>
<input type="hidden" name="id" value=<?= $categorie['id'] ?> />
<p><button type="submit" name = "modifier">Modifier</button></p>
</form>