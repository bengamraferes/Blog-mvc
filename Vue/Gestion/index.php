<!-- <form action="gestion/select_delete" method = "Post">
        <label for="pet-select">Select:</label>
        <select name="select" id="pet-select">
        <option value="">--Please choose an option--</option>
        <option value="select">Select</option>
        <option value="delete">Delete</option>>
        </select>
        <input type="submit" value="Trier" />
    </form> -->

    <?php $this->titre = "Mon Blog - Gestion" ?>
 <h2>Gestion</h2>

   <h3><a href="gestion/create">Crée un nouveau Billet</a></h3>
    <table>
      <thead>
          <tr>
          <th colspan="1"> NOM</th>
          <th>EDITER</th>
          <th>SUPRIMER</th>
          <th>LISTER</th>
          </tr>
       
      </thead>
      <tbody>
      <?php  foreach ($categories as $categorie):?>
      <tr>
     
         <td id="titre"><?=$this->nettoyer($categorie['nom']); ?> </td>
         <td><form method="post" action="gestion/update">
            <input type="hidden" name="id" value="<?= $categorie['id'] ?>" />
            <input type="submit" value="Editer" />
            </form>
         </td>
         <td><form method="post" action="gestion/delete">
            <input type="hidden" name="id" value="<?= $categorie['id'] ?>" />
            <input id="supprimer" type="submit" value="Supprimer" />
            </form>
         </td>
         <td><form method="post" action="gestion/select">
            <input type="hidden" name="id" value="<?= $categorie['id'] ?>" />
            <input id="supprimer" type="submit" value=" lister les Billets" />
            </form>
         </td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>