<?php
$isOk = false;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7</title>
</head>
<body>
  <p>
    <?php
    if(!$isOk) {
      echo 'C\'est pas bon !!!';
    }
    else {
      echo 'C\'est ok !!';
    }
    ?>
  </p>
</body>
</html>
