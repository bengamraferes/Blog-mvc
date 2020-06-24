<?php $this->titre = "Mon Blog - Gerer" ?>
 <h2>Gerer</h2>

   <h3><a href="cree/index">Crée un nouveau Billet</a></h3>
    <table>
      <thead>
          <tr>
          <th colspan="1"> NOM</th>
          <th colspan="">DATE</th>
          <th colspan="">CONTENU</th>
          
          </tr>
       
      </thead>
      <tbody>
      <?php  foreach ($lister as $billet):?>
      <tr>
         <td id="titre"><?=$this->nettoyer($billet['titre_bil']); ?> </td>
         <td><?=$this->nettoyer($billet['date']) ?></td>
         <td><?=$this->nettoyer($billet['contenu']) ?></td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table