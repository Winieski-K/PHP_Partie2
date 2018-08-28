<?php
$age = 18;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 1</title>
</head>
<body>
  <p>
    <?php
    if ($age > 0 && $age <= 120) {
      if($age >= 18) {
        echo 'Vous êtes majeur';
      } else {
        echo 'Vous êtes mineur';
      }
    } else {
      echo 'Vueillez entrer un âge valide';
    }

    ?>
  </p>
</body>
</html>
