
<?php
$chambre_est_sale = true;

if($chambre_est_sale){
	echo "Range ta chambre, on dirait la cage d'un bonobo!";
}

// ------------------------------------

$heure = 12;

if ($heure >= 5 && $heure <= 9) {
echo "Bonjour <br>";
} elseif ($heure > 9 && $heure <= 12) {
echo "Bonne journee <br>";
} elseif ($heure > 12 && $heure <= 16) {
echo "Bon aprem <br>";
} elseif ($heure > 16 && $heure <= 21) {
echo "Bonne soirée <br>";
} elseif ($heure > 21 && $heure < 5) {
echo "Bonne nuit <br>";
}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Premier essai de PHP</title>
	</head>
	<body>
		<!-- <img src="52695.png" alt="pinguoin"> -->


	</body>
</html>
