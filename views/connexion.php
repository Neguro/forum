<?php
?>

<form role="form" action="index.php?c=connexion&a=login" method="post" class="">
  <div class="">
    <label for="username">Entez votre pseudo: </label>
    <input type="text" name="username" id="username" required>
  </div>
  <div class="">
    <label for="mdp">Entez votre mot de passe: </label>
    <input type="password" name="mdp" id="mdp" required>
  </div>
  <div class="">
    <input type="submit" value="Se connecter">
  </div>
</form>