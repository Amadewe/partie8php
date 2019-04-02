<?php
include ('../header.php');
//on doit redémarrer la session pour y avoir accès.
session_start();
?>
<?php if(!empty($_SESSION['lastname'])){ ?>
<p>Nom : <?= $_SESSION['lastname']; ?></p>
<?php } if(!empty($_SESSION['firstname'])){ ?>
<p>Prénom : <?= $_SESSION['firstname']; ?></p>
<?php } if(!empty($_SESSION['age'])){ ?>
<p>Age : <?= $_SESSION['age']; ?></p>
<?php } ?>
  <?php // "session_destroy" permet de supprimer les variables de session et détruire les sessions 
 session_destroy(); ?>
</body>
</html>