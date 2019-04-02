<?php include ('../header.php') ?>
<p>Faire une page HTML permettant de donner à l'utilisateur : </p>
<ul>
    <li>son User Agent</li>
    <li>son adresse ip</li>
    <li>le nom du serveur</li>
</ul>
<?php /*  La variable surperglobale $_SERVER est un tableau contenant des informations créees par le serveur web. 
  On peut y trouver l'adresse du script exécutée, l'adresse IP du client et du serveur, etc.
  $_SERVER (tableau associatif). */ ?>
<p>Information sur l'utilisateur : </p>
<ul>
    <li>User agent : <?= $_SERVER['HTTP_USER_AGENT']; ?></li>
    <?php // $_SERVER REMOTE ADDR affiche l'IP du visiteur. ATTENTION ne pas confondre avec $_SERVER SERVER ADDR  ?>
    <li>Adresse ip : <?= $_SERVER['REMOTE_ADDR']; ?></li>
    <?php // $_SERVER SERVER NAME affiche le nom du serveur. Ici, le nom du Vhost.  ?>
    <li>Nom du serveur : <?= $_SERVER['SERVER_NAME']; ?></li>
</ul>
</body>
</html>