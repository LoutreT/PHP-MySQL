<!-- Exercice 1 -->
<!-- 1. Affiche un message de salutation différent selon l'heure courante. -->

Si l'heure est entre 5h00 et 9h00 du matin, affiche "Bonjour!".
Si l'heure est entre 9h01 et 12h00, affiche "Bonne journée!".
Si l'heure est entre 12h01 et 16h00, affiche "Bon après-midi!".
Si l'heure est entre 16h01 et 21h00, affiche "Bonne soirée!".
Si l'heure est entre 21h01 et 04h59, affiche "Bonne nuit!".

<?php
$heure = intval((new DateTime())->format('H'));

if ($heure >= date('5:00:00') || $heure <= date('9:00:00')) {
  echo "Bonjour!";
} elseif ($heure >= date('9:01:00') || $heure <= date('12:00:00')) {
  echo "Bonne journée!";
} elseif ($heure >= date('12:01:00') || $heure <= date('16:00:00')) {
  echo "Bon après-midi!";
} elseif ($heure >= date('16:01:00') || $heure <= date('21:00:00')) {
  echo "Bonne soirée!";
} elseif ($heure >= date('21:01:00') || $heure <= date('4:59:00')) {
  echo "Bonne nuit!";
?>

<html>
  <head><title>Bonne journée</title></head>
  <body>
    <h1>Je vous souhaite <?php echo $heure ; ?> </h1>    <!-- ici on verra la réponse de salutation -->
    <h2>Il y a <?php echo strlen ("$heure"); ?>mots</h2> <!-- et ici, il va compter les lettres, caractères et espaces qu'il y a dans la réponse echo.) -->
  </body>
</html>









Notes officielles reprises sur https://www.w3schools.com/php/showphp.asp?filename=demo_date3
<!DOCTYPE html>
<html>
<body>
    <?php
    date_default_timezone_set("Europ/Brussels");
    echo "The time is " . date("h:i:sa");
    ?>
</body>
</html>




<?php
echo "The time is " . date("h:i:sa");
?>



<!-- Date = DateTime ou DateFuture1 ou DatePassee1 -->

<!-- Dates en anglais : -->
<?php
  print 'Nous sommes le ' .  date("l d-m-Y") . '<br />';

  $DateFuture1 = new DateTime(date("Y-m-d"));
  $DateFuture1->add(new DateInterval('P1D'));
  print 'Demain, nous serons le ' . $DateFuture1->format('l d-m-Y') . '<br />';

  $DateFuture2 = new DateTime(date("Y-m-d"));
  $DateFuture2->add(new DateInterval('P1M'));
  print 'Dans un mois, nous serons le ' . $DateFuture2->format('l d-m-Y') . '<br />';

  $DatePassee1 = new DateTime(date("Y-m-d"));
  $DatePassee1->sub(new DateInterval('P1D'));
  print 'Hier, nous étions le ' . $DatePassee1->format('l d-m-Y') . '<br />';

  $DatePassee2 = new DateTime(date("Y-m-d"));
  $DatePassee2->sub(new DateInterval('P1M'));
  print 'Il y a un mois, nous étions le ' . $DatePassee2->format('l d-m-Y') . '<br />';
?>


<!-- Date en français :  -->

<?php
 $jours = array('', 'dimanche','lundi','mardi','mercredi','jeudi','vendredi','samedi');
 $mois = array('', 'janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre');
 $datefr = $jours[date('w')].' '.date('d').' '.$mois[date('n')].' '.date('Y');
 echo 'Nous sommes le '. $datefr; exit;
?>
