<?php
include ('../header.php');
//démarrer une session pour faire passer des données d'une page à une autre.
session_start();
$_SESSION['lastname'] = 'Dupont';
$_SESSION['firstname'] = 'Jean';
$_SESSION['age'] = 18;
// "session_write_close" permet à la session de clôturer en fin de lecture de la page. Sécurité pour la transition des données.
session_write_close();
?>
<p>Sur la page index, faire un liens vers une autre page.</p>
<p>Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. 
<p>Ces variables auront été définies directement dans le code. Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
<p>Page 2 : <a href="page2.php">içi</a></p>
</body>
</html>