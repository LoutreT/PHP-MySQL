<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Boucle PHP</title>
</head>
<body>

  <!--- Conjugue le verde coder--->
  <?php
  $pronoms_personnels = array('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
  foreach ($pronoms_personnels as $key => $value) {
    echo $value;
    if ($value == "Je") {
      $conjugaison = " code <br>";       // ici on intègre 'conjugaison'
    } elseif ($value == "Tu") {
      $conjugaison = " codes <br>";
    } elseif ($value == "Il/Elle") {
      $conjugaison = " code <br>";
    } elseif ($value == "Nous") {
      $conjugaison = " codons <br>";
    } elseif ($value == "Vous") {
      $conjugaison = " codez <br>";
    } elseif ($value == "Elles/Ils") {
      $conjugaison = " codent <br>";
    };
    echo $conjug;                        //ici, on rend le résultat de 'conjug'
    echo "<br>";  //Mise à la ligne
  };
  ?>

</body>
</html>
