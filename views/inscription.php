<?php

?>

<form role="form" action="index.php?c=inscription&a=signin" method="post" class="">
  <div class="">
    <label for="nom">Entez votre nom: </label>
    <input type="text" name="nom" id="nom" required>
  </div>
  <div class="">
    <label for="prenom">Entez votre prenom: </label>
    <input type="text" name="prenom" id="prenom" required>
  </div>
  <div class="">
    <label for="email">Entez votre email: </label>
    <input type="email" name="email" id="email" required>
  </div>
  <div class="">
    <label for="username">Entez votre pseudo: </label>
    <input type="text" name="username" id="username" required>
  </div>
  <div class="">
    <label for="mdp">Entez votre mot de passe: </label>
    <input type="password" name="mdp" id="mdp" required>
  </div>
  <div class="">
    <input type="submit" value="S'inscrire">
  </div>
</form>