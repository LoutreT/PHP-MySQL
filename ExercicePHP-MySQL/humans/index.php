	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">

			<title>Premier essai de PHP</title>
		</head>
		<body>

<?php

	$heure = 12;

	if ($heure >= 5 || $heure <= 9) {
	echo "Bonjour<br/>"  ;

	} elseif ($heure > 9 && $heure <= 12) {
	echo "Bonne journee <br/>" ;
	} elseif ($heure > 12 && $heure <= 16) {
	echo "Bon aprem <br/>";
	} elseif ($heure > 16 && $heure <= 21) {
	echo "Bonne soirée <br/>";
	} elseif ($heure > 21 && $heure < 5) {
	echo "Bonne nuit <br/>";
	}


	// ------------------------------------
	/*2. Affiche une salutation différente selon l'âge de l'utilisateur.

	Crée un petit formulaire contenant une seule question: "Quel est votre âge ?" (champ de type Number).
	Méthode: GET Affiche un message différent selon la réponse au formulaire.

	    Si l'âge est inférieur à 12 ans, affiche "Salut petit!"
	    Si l'âge est entre 12 et 18 ans, affiche "Salut l'ado!"
	    Si l'âge est entre 18 et 115 ans, affiche "Salut l'adulte!"
	    Si l'âge est supérieur à 115 ans, affiche "Wow! Toujours vivant?"*/


	$age = 32;

	if($age > 12){
		echo "Salut petit!";
	} elseif($age >= 12 && $age < 18){
		echo "Salut l'ado!";
	} elseif($age >= 18 && $age < 115){
		echo "Salut l'adulte!";
	} elseif($age >= 115){
	  echo "Wow! Toujours vivant?";
	}


	// ------------------------------------
	/*3. Affiche une salutation différente selon l'âge et le genre de l'utilisateur.

	Complète le formulaire de l'exercice précédent en ajoutant une deuxième question :
	"Homme ou Femme?" (champ de type Radio).
	Si le genre est féminin, adapte la réponse de l'âge correspondant au genre féminin.
	Par exemple, si l'âge est entre 12 et 18 ans et le genre féminin, affiche "Salut l'adolescente!" sinon affiche "Salut l'adolescent!".
	Idem pour les autres tranches d'âge.
	Astuce: Exploite le fait que l'on puisse mettre des conditions dans des conditions.*/
?>
	<form method="post">
		Genre <input type="radio" name="genre<br/>" value="Homme" checked> Male<br>
		<input type="radio" name="genre" value="Femme"> Female
		<br>
		<input type="radio" name="genre" value="autre"> Autre
	</form>

<?php
	$age = number;

	  if($_POST["genre"]=="Homme")
		    echo "Vous êtes un Homme";
		else
		    echo "Vous êtes une Femme";
?>

</body>
</html>
