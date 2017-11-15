2. Affiche une salutation différente selon l'âge de l'utilisateur.

Crée un petit formulaire contenant une seule question: "Quel est votre âge ?" (champ de type Number).
Méthode: GET Affiche un message différent selon la réponse au formulaire.

    Si l'âge est inférieur à 12 ans, affiche "Salut petit!"
    Si l'âge est entre 12 et 18 ans, affiche "Salut l'ado!"
    Si l'âge est entre 18 et 115 ans, affiche "Salut l'adulte!"
    Si l'âge est supérieur à 115 ans, affiche "Wow! Toujours vivant?"

<?php
$var = "age";


if ($age<12) {
  echo "Salut petit!";
}elseif ($age>=12||$age<18){
  echo "Salut l'ado!";
}elseif ($age>=18||$age<115){
  echo "Salut l'adulte!";
}elseif ($age>=115){
  echo "Wow! Toujours vivant?";
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>Salutation</title>
  </head>
  <body>
    <h1>Bonjour, quel est votre âge ? <?php echo $_GET['age']; ?>!</h1>
    <h1><?php =echo $age; ?></h1>
  </body>
</html>
