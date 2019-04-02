<?php include ('../header.php') ?>
<h2>Exercice 5</h2>
<p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
  <?php  if (count($_POST) == 0) { ?>
<form method="POST" action="page2.php">
    <div class="form-group">
        <label for="login">login : </label>
        <input type="text" name="login" class="form-control" id="login" placeholder="User123" />
        <label for="password">Mot de passe : </label>
        <input type="password" name="passeword" class="form-control" id="passeword" placeholder="azerty12" />
        <input type="submit" name="submit" value="Envoyer" class="btn btn-primary" />
    </div>
</form>
<?php } ?>
</body>
</html>