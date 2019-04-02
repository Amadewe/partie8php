<?php
include ('../header.php');
session_start();
?>
<p>Nom : <?= $_SESSION['lastname']; ?></p>
<p>Prénom : <?= $_SESSION['firstname']; ?></p>
<p>Age : <?= $_SESSION['age']; ?></p>
</body>
</html>