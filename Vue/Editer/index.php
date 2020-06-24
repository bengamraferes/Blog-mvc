
<h2>Vous etes entrain d'iditer le Billet <?=$this->nettoyer( $billet['titre']); ?> </h2>
<form action="editer/modifier" method="post">
<p>Titre<input type="text" name ="titre" value =<?=$this->nettoyer( $billet['titre']); ?> ></p>
<p>Contenu<textarea name="contenu" id="" cols="30" rows="5"  ><?=$this->nettoyer( $billet['contenu']); ?></textarea></p>
<input type="hidden" name="id" value="<?= $billet['id'] ?>" />
<p><button type="submit" name = "modifier">Modifier</button></p>
</form>