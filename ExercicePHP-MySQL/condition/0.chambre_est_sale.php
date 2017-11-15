Theorie sur les CONDITIONS  : IF / ELSE   -   TRUE / FALSE

Exemple theorique :


<?p
if( condition ) {                        // code à n'exécuter que si la condition est TRUE
   echo "La condition est vraie.";
 } else {                                // code à n'exécuter que si la condition est FALSE
   echo "La condition est fausse.";
 }
?>


<!-- En pratique, ça devient : -->

<?p
 if( $temperature > 21 ) {               // code à exécuter si la condition est TRUE
     $vetement_du_jour = "T-shirt";
  } else {                               // code à exécuter si la condition est FALSE
   $vetement_du_jour = "Pull-over";
  }
?>



<!-- condition1 ET / OU condition2 -->
<?p
if ( $age <= 12 AND $langue == "français" ) { ...
?>




<?p
if ($genre == 'femme'){                              // Ici, du code à exécuter SSI le genre est une "femme"

  	if ( $age <= 12 and $langue == "français" ) {
                        // Ici, du code à exécuter si le genre est "femme", que l'âge est inférieur à 13 et que la langue est "français"
  		...
  	} else{
	  // Ici, du code à exécuter si le genre est "femme", et que l'âge est supérieur à 13 ou que la langue n'est pas "français"
  		...
}
} else {                                             // Ici, du code à exécuter si le genre n'est pas "femme"

  	if ( $age <= 12 and $langue == "français" ) {    // Ici, du code à exécuter si le genre n'est pas "femme", que l'âge est inférieur à 13 et que la langue est "français"
  		...
  	}
  }
?>


<!-- Autre exemple de condition : -->
<?p
$temperature = 34; // Joue avec cette valeur pour tester ton script.

  if( $temperature > 21 ) {// code à exécuter si la condition est TRUE
      $vetement_du_jour = "T-shirt";
    }elseif ( $temperature > 10 ){
      $vetement_du_jour = "Pull-over";
    } else {               // code à exécuter si toutes les conditions précédentes sont FALSE
      $vetement_du_jour = "Pull-over, écharpe et bonnet";
    }

   echo $vetement_du_jour;
?>

<!-- Fin de la théorie -->



<!-- DEBUT DES EXERCICES : -->

0) $chambre_est_sale :

Première façon :

<?p
$chambre_est_sale = TRUE;

if ($chambre_est_sale){
  echo "Range ta chambre, on dirait la cage d'un bonobo!";
} else {
  echo "Ta chambre est trop propre, vis un peu!";
}
?>


// Deuxième façon selon l'énoncé :
<?p
$chambre_est_sale = TRUE;

if ($chambre_est_sale){
  echo "Range ta chambre, on dirait la cage d'un bonobo!";
  }elseif ($chambre_est_sale = "dégoutante"){
  echo "la chambre est dégoutante";
  }
  elseif ($chambre_est_sale = "sale"){
  echo "la chambre est dégoutante";
  }
  }elseif ($chambre_est_sale = "en ordre"){
  echo "la chambre est dégoutante";
  }
  elseif ($chambre_est_sale = "immaculée"){
  echo "la chambre est immaculée";
  }
  elseif ($chambre_est_sale = "maniaque"){
  echo "la chambre est maniaque";
} else {
  echo "Ta chambre est trop propre, vis un peu!";
}
?>
