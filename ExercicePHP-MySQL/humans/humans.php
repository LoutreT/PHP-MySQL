<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>humans</title>
		</head>
		<body>
			<!-- <img src="52695.png" alt="pinguoin"> -->
	  <?php



	  /*0. Représente en code le fait de devoir ranger sa chambre si elle est sale.

	  Astuce: Initialise une variable booléenne $chambre_est_sale puis teste là dans une condition.
	  Si elle est vraie, affiche "Range ta chambre, on dirait la cage d'un bonobo!".
	  Sinon, affiche "Ta chambre est trop propre, vis un peu!".*/

	  $chambre_est_sale = true;

	    if($chambre_est_sale == true){
		    echo "Range ta chambre, on dirait la cage d'un bonobo! <br/>";
	  }


	  /*1. Affiche un message de salutation différent selon l'heure courante.

	  Si l'heure est entre 05h00 et 9h00 du matin, affiche "Bonjour!".
	  Si l'heure est entre 9h01 et 12h00, affiche "Bonne journée!".
	  Si l'heure est entre 12h01 et 16h00, affiche "Bon après-midi!".
	  Si l'heure est entre 16h01 et 21h00, affiche "Bonne soirée!".
	  Si l'heure est entre 21h01 et 04h59, affiche "Bonne nuit!".
	  1. Affiche un message de salutation différent selon l'heure courante.

	  Si l'heure est entre 05h00 et 9h00 du matin, affiche "Bonjour!".
  	Si l'heure est entre 9h01 et 12h00, affiche "Bonne journée!".
	  Si l'heure est entre 12h01 et 16h00, affiche "Bon après-midi!".
  	Si l'heure est entre 16h01 et 21h00, affiche "Bonne soirée!".
	  Si l'heure est entre 21h01 et 04h59, affiche "Bonne nuit!".*/

	 $heure = 12;

	  if ($heure >= 5 && $heure <= 9) {
	    echo "Bonjour <br/>";
	  } elseif ($heure > 9 && $heure <= 12) {
	    echo "Bonne journee <br/>";
	  } elseif ($heure > 12 && $heure <= 16) {
	    echo "Bon aprem <br/>";
	  } elseif ($heure > 16 && $heure <= 21) {
	    echo "Bonne soirée <br/>";
	  } elseif ($heure > 21 && $heure < 5) {
	    echo "Bonne nuit <br/>";
	  }



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
	    echo "Wow! Toujours vivant?<br>";
	  }



    /*3. Affiche une salutation différente selon l'âge et le genre de l'utilisateur.

	  Complète le formulaire de l'exercice précédent en ajoutant une deuxième question :
	  "Homme ou Femme?" (champ de type Radio).
	  Si le genre est féminin, adapte la réponse de l'âge correspondant au genre féminin.
  	Par exemple, si l'âge est entre 12 et 18 ans et le genre féminin, affiche "Salut l'adolescente!" sinon affiche "Salut l'adolescent!".
	  Idem pour les autres tranches d'âge.
	  Astuce: Exploite le fait que l'on puisse mettre des conditions dans des conditions.*/

    $age = number;

	  <form method="post">
		  Genre <input type="radio" name="Genre" value="Homme" checked> Homme<br>
		  <input type="radio" name="Genre" value="Femme"> Femme
		  <br>
		  <input type="radio" name="Genre" value="Autre"> Autre
	  </form>


		if($_POST["Genre"]=="Homme"){
      if ($age > 12 && $age < 18){
			  echo "Salut l'adolescent! <br>";
			}else if ($age >= 18){
				echo "Bonjour Hombre ! Habla espanol ?<br>";
			}
		}else if ($age > 12 && $age < 18){
		    echo "Salut l'adolescente ! <br>";
      }else if ($age >= 18){
			  echo "Bonjour Madame <br>";
		}



	  /* 6. La structure "Switch".

		Dans le switch, on indique au début sur quelle variable on travaille.
		On dit à PHP : Je vais analyser la valeur de $note.
		Après, on utilise des case pour analyser chaque cas (case 0,case 10, etc.).
		Cela signifie : Dans le cas où la valeur est 0… Dans le cas où la valeur est 10…

		Avantage : on n'a plus besoin de mettre le double égal !
		Défaut : ça ne marche pas avec les autres symboles (< > <= >= !=).
		En clair, le switch ne peut tester que l'égalité.*/

		?>

  </body>
</html>



<!-- Exo 2
echo "<h3>Exo 2</h3></br>";
echo "indique ton age et ton genre dans l'url : (...)?age=x,sexe=h/f </br>";
$sexe= $_GET['sexe'];
$age = $_GET['age'];
if ($age < 12 and $sexe == "h"){
  echo "Salut petit!";
} else if ($age < 12 and $sexe == "f"){
    echo "Salut petite!";
} else if (($age >= 12 and $age <= 18) and $sexe == "h"){
  echo "Salut l'adolescent!";
} else if (($age >= 12 and $age <= 18) and $sexe == "f"){
  echo "Salut l'adolescente!";
} else if (($age >= 18 and $age <= 115) and $sexe == "h"){
  echo "Salut l'adulte!";
} else if (($age >= 18 and $age <= 115) and $sexe == "f"){
  echo "Salut l'adulte!";
} else if ($age > 115 and $sexe == "h"){
  echo "Wow! Toujours vivant?";
} else if ($age > 115 and $sexe == "f"){
  echo "Wow! Toujours vivante?";
}
//Exo 3
echo "<h3>Exo 3</h3></br>";
 ?>
-->
