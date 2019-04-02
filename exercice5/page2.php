<?php
include ('../header.php');

if (!empty($_POST['login'])) {
    setcookie('login', 'aaa', time() + 365 * 24 * 3600, null, null, false, true);
}
if (!empty($_POST['passeword'])) {
    setcookie('passeword', 'hhhh', time() + 365 * 24 * 3600, null, null, false, true);
}
?>

<div class="alert-success">
    <p>login et mdp valide</p>
</div>
<div class="well jumbotron">
    <p>
        login : <?= htmlspecialchars($_COOKIE['login']) ?> <br/>
        mdp : <?= htmlspecialchars($_COOKIE['passeword']); ?>
    </p>
    <a href="index.php" title="Retour vers le formulaire" class="btn btn-info">Retour</a>
</div>

</body>
</html>