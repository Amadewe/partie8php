<?php include ('../header.php') ?>
<p>Faire une page HTML permettant de donner à l'utilisateur : </p>
<ul>
    <li>son User Agent</li>
    <li>son adresse ip</li>
    <li>le nom du serveur</li>
</ul>
<!--  La variable $_SERVER est un tableau contenant des informations créees par le serveur web. 
On peut y trouver l'adresse du script exécutée, l'adresse IP du client et du serveur, etc. 
$_SERVER (tableau associatif).-->
<p>Information sur l'utilisateur : </p>
<ul>
    <li>User agent : <?= $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li>Adresse ip : <?= $_SERVER['SERVER_ADDR']; ?></li>
    <li>Nom du serveur : <?= $_SERVER['SERVER_NAME']; ?></li>
</ul>
</body>
</html>