<?php
include ('../header.php');
 if (!empty($_POST['login'])) {
setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
 }
  if (!empty($_POST['passeword'])) {
 setcookie('passeword', $_POST['passeword'], time() + 365*24*3600, null, null, false, true);
  }
?>
<h2>Exercice 3</h2>
<p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.</p>
<p>A la validation du formulaire, stocker les informations dans un cookie.</p>
  <?php  if (count($_POST) == 0) { ?>
<form method="POST" action="index.php">
    <div class="form-group">
        <label for="login">login : </label>
        <input type="text" name="login" class="form-control" id="login" placeholder="User123" />
        <label for="password">Mot de passe : </label>
        <input type="password" name="passeword" class="form-control" id="passeword" placeholder="azerty12" />
        <input type="submit" name="submit" value="Envoyer" class="btn btn-primary" />
    </div>
</form>
  <?php } else {
      ?>
      <div class="alert-success">
        <p>login et mdp valide</p>
      </div>
      <div class="well jumbotron">
        <p>
          login : <?= htmlspecialchars($_COOKIE['login']) ?> <br/>
          mdp : <?= htmlspecialchars($_COOKIE['passeword']);?>
        </p>
        <a href="index.php" title="Retour vers le formulaire" class="btn btn-info">Retour</a>
      </div>
    <?php } ?>
</body>
</html>