3. Affiche une salutation différente selon l'âge et le genre de l'utilisateur.

Méthode: GET Affiche un message différent selon la réponse au formulaire.

    Si l'âge est inférieur à 12 ans, affiche "Salut petit!"
    Si l'âge est entre 12 et 18 ans, affiche "Salut l'ado!"
    Si l'âge est entre 18 et 115 ans, affiche "Salut l'adulte!"
    Si l'âge est supérieur à 115 ans, affiche "Wow! Toujours vivant?"

Complète le formulaire de l'exercice précédent en ajoutant une deuxième question :
"Homme ou Femme?" (champ de type Radio).
Si le genre est féminin, adapte la réponse de l'âge correspondant au genre féminin.
Par exemple, si l'âge est entre 12 et 18 ans et le genre féminin, affiche "Salut l'adolescente!" sinon
affiche "Salut l'adolescent!".
Idem pour les autres tranches d'âge.
Astuce: Exploite le fait que l'on puisse mettre des conditions dans des conditions.

<?php
$var = number("age");
$genre = string("homme");
$genre = string("femme");


if($genre="femme"){
  if ($age<12) {
    $salutation = "Salut petite!";
  }elseif ($age>=12||$age<18){
    $salutation = "Salut l'adolescente!";
  }elseif ($age>=18||$age<115){
    $salutation = "Salut l'adulte!";
  }elseif ($age>=115){
    $salutation = "Wow! Toujours vivante?";
  }
}elseif($genre="homme"){
  if ($age<12) {
    $salutation = "Salut petit!";
  }elseif ($age>=12||$age<18){
    $salutation = "Salut l'adolescent!";
  }elseif ($age>=18||$age<115){
    $salutation = "Salut l'adulte!";
  }elseif ($age>=115){
    $salutation = "Wow! Toujours vivant?";
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
    <h1>Bonjour, il faut juste noter votre âge :
      <?php echo $_GET["age"]; ?>
    </h1>
    <h1>et votre genre (homme ou femme) :
      <?php echo $_GET["genre"]; ?>
    </h1>
    <h1>
      <?php echo $salutation ; ?>
    </h1>
  </body>
</html>
