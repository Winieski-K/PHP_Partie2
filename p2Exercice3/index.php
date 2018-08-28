<?php
$age = 18;
$gender = '';
$isMale = true;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 3</title>
</head>
<body>
  <p>
    <?php
    if ($age > 0 && $age <= 120) {
      if($age >= 18 && $isMale == true) {
        $gender = 'homme';
        echo 'Vous êtes un ' . $gender . ' et vous êtes majeur.';
      }
      elseif($age >= 18 && $isMale == false) {
        $gender = 'femme';
        echo 'Vous êtes une ' . $gender . ' et vous êtes majeure.';
      }
      elseif($age < 18 && $isMale == true) {
        $gender = 'homme';
        echo 'Vous êtes un ' . $gender . ' et vous êtes mineur.';
      }
      elseif($age < 18 && $isMale == false) {
        $gender = 'femme';
        echo 'Vous êtes une ' . $gender . ' et vous êtes mineure.';
      }
    } else {
      echo 'Veuillez entrer un âge valide';
    }

    ?>
  </p>
</body>
</html>
