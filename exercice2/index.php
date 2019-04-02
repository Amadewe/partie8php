<?php
include ('../header.php');
session_start();
$_SESSION['lastname'] = 'Dupont';
$_SESSION['firstname'] = 'Jean';
$_SESSION['age'] = 18;
?>
<p>Sur la page index, faire un liens vers une autre page.</p>
<p>Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. 
<p>Ces variables auront été définies directement dans le code. Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
<p>Page 2 : <a href="page2.php">içi</a></p>
</body>
</html>