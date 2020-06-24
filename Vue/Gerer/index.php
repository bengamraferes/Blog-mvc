<?php $this->titre = "Mon Blog - Gerer" ?>
 <h2>Gerer</h2>

   <h3><a href="cree/index">Crée un nouveau Billet</a></h3>
    <table>
      <thead>
          <tr>
          <th colspan="1"> NOM</th>
          <th colspan="">DATE</th>
          <th colspan="">CONTENU</th>
          <th>EDITER</th>
          <th>SUPRIMER</th>
          </tr>
       
      </thead>
      <tbody>
      <?php  foreach ($gerer as $billet):?>
      <tr>
     
         <td id="titre"><?=$this->nettoyer($billet['titre']); ?> </td>
         <td><?=$this->nettoyer($billet['date']) ?></td>
         <td><?=$this->nettoyer($billet['contenu']) ?></td>
         <td><form method="post" action="editer/index">
            <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
            <input type="submit" value="Editer" />
            </form>
         </td>
         <td><form method="post" action="gerer/supprimer">
            <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
            <input id="supprimer" type="submit" value="Supprimer" />
            </form>
         </td>
       
       
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
