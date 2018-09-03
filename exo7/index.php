<?php
$lastname = 'Patrick';
$firstname = 'Chirac';
$age = 78;
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
     echo 'Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . ' ans.';
       ?>
    </p>
  </body>
</html>
