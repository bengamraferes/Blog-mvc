<?php $this->titre = "Mon Blog - Administration" ?>
 <h2>Administration</h2>
  Bienvenue, <?= $this->nettoyer($login) ?>
 ! Ce blog comporte <?= $this->nettoyer($nbBillets) ?>
  billet(s) et   <?= $this->nettoyer($nbCommentaires) ?>
 commentaire(s).
 <a id="lienDeco" href="connexion/deconnecter">Se déconnecter</a>
 <a id="lienDeco" href="gerer/index"> Gerer</a>
 <a id="lienDeco" href="gestion/index"> Gestion des ctégories</a>