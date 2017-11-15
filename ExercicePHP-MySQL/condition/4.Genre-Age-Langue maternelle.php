4. Affiche une salutation différente selon l'âge, le genre de l'utilisateur et sa langue maternelle.

Crée un petit formulaire à question avec age et genre homme ou femme.
Méthode: GET Affiche un message différent selon la réponse au formulaire.

    Si l'âge est inférieur à 12 ans, affiche "Salut petit(e)!"
    Si l'âge est entre 12 et 18 ans, affiche "Salut l'ado(lescente)!"
    Si l'âge est entre 18 et 115 ans, affiche "Salut l'adulte!"
    Si l'âge est supérieur à 115 ans, affiche "Wow! Toujours vivant(e)?"

Complète le formulaire de l'exercice précédent en ajoutant une troisième question : "Parles-tu anglais?" (champ de type Radio: réponses possibles: "yes" ou "non" ). Adapte le traitement du formulaire en fonction:

    Si l'âge est inférieur à 12 ans et que l'utilisateur répond "yes", retourne: "Hello boy!" ou "Hello Girl!" selon son genre.
    Si l'âge est entre 12 et 18 ans et que l'utilisateur répond "yes", affiche "Hello Teenage boy!" ou "Hello Teenage girl!" selon son genre.
    Si l'âge est entre 18 et 115 ans et que l'utilisateur répond "yes", affiche "Hello Sir!" ou "Hello Lady!" selon son genre.
    Si l'âge est supérieur à 115 ans et que l'utilisateur répond "yes", affiche "Wow! Still alive, old man?" ou "old lady?" selon son genre.



<?php
  $var = number("age");

  // Boutons radio pour parlez-vous anglais "oui" ou "non" ?
  $anglaisYES_status = 'unchecked';
  $anglaisNO_status = 'unchecked';

  if (isset($_POST['Submit1'])) {
  $selected_radio = $_POST['englishlanguage'];

  if ($selected_radio == 'yes') {
  $anglaisYES_status = 'checked';
  }
  else if ($selected_radio == 'no') {
  $anglaisNO_status = 'checked';
  }
}

  // Boutons radio pour genre "homme" ou "femme"
  $male_status = 'unchecked';
  $female_status = 'unchecked';

  if (isset($_POST['Submit1'])) {
  $selected_radio = $_POST['gender'];

  if ($selected_radio = = 'homme') {
  $male_status = 'checked';
  }
  else if ($selected_radio = = 'femme') {
  $female_status = 'checked';
  }
}

  if($anglaisNO){
    if($female_status="femme"){
      if ($age<12) {
        $salutation = "Salut petite!";
      }elseif ($age>=12||$age<18){
        $salutation = "Salut l'adolescente!";
      }elseif ($age>=18||$age<=115){
        $salutation = "Salut l'adulte!";
      }elseif ($age>115){
        $salutation = "Wow! Toujours vivante?";
      }
    }elseif($male_status="homme"){
      if ($age<12) {
        $salutation = "Hello boy!";
      }elseif ($age>=12||$age<18){
        $salutation = "Salut l'adolescent!";
      }elseif ($age>=18||$age<115){
        $salutation = "Salut l'adulte!";
      }elseif ($age>=115){
        $salutation = "Wow! Toujours vivant?";
      }
    }
  }elseif($anglaisYES){
    if($female_status="femme"){
      if ($age<12) {
        $salutation = "Hello Girl!";
      }elseif ($age>=12||$age<18){
        $salutation = "Hello Teenage girl!";
      }elseif ($age>=18||$age<=115){
        $salutation = "Hello Lady!";
      }elseif ($age>115){
        $salutation = "Wow! Still alive, old lady?";
      }
    }elseif($male_status="homme"){
      if ($age<12) {
        $salutation = "Hello boy!";
      }elseif ($age>=12||$age<18){
        $salutation = "Hello Teenage boy!";
      }elseif ($age>=18||$age<115){
        $salutation = "Hello Sir!";
      }elseif ($age>=115){
        $salutation = "Wow! Still alive, old man?";
      }
    }
  }
  echo $salutation;
  ?>


    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Genre et age</title>
      </head>
      <body>

        <!-- <h1>Bonjour, il faut juste noter votre âge :
         <php echo $_GET["age"]; ?>
        </h1>
        <h1>et votre genre (homme ou femme) :
          <pp echo $_GET["genre"];
        </h1> -->
        <h1>
          <?php echo $salutation ; ?>
        </h1>

      </body>
    </html>
