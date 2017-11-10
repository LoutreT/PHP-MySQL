<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <p>exo</p>
  </head>
  <body>


<!--Exercices ARRAY

Voici un array:
$pays = array( 'Belgique', 'France' , 'Allemagne', 'Pays-Bas', 'Ukraine' );
Que va retourner ceci ?
echo $pays[2];
-> echo $pays[2]=Allemagne;



    -Crée un array représentant ta famille.
    -Affiche son contenu avec la fonction print_r
    Crée un array décrivant tes plats préférés.
    Affiche son contenu avec la fonction print_r
    Crée un array listant tes films et séries préférés.
    En utilisant cet array, affiche uniquement ton film/série préféré -->

<?php

$famille = array ('labrador', 'loup', 'loutre', 'lapin', 'raton-laveur', 'renard');
  print_r ($famille);

echo "<br>";

$platspréférés = array ("poulet", 'frites', 'choux de brexelles', 'champignons', 'Saint-Emilion 1GCC');
  print_r ($platspréférés);

echo "<br>"; // pour mettre à la ligne

$filmspréférés = array ('comédies', 'Oscar', 'Silicon Valey', 'Back To The Futur', 'aventures');
  print_r ($filmspéférés[1]);


/*Exercices

    Rajoute tes hobbies sous forme de tableau dans ton tableau $moi
    Crée un deuxième tableau similaire au tien, qui décrive ton papa (ou une personne de ta famille): $papa.
    Assure-toi d'y avoir également décrit ses hobbies
    Ensuite, à ton tableau $moi, ajoute un élément dont la clef est 'papa' et la valeur équivaut à $papa.
    Affiche le contenu de $moi via la fonction print_r(). (Utilise la balises html <pre> pour rendre cela plus lisible).
    Relis ton code pour t'assurer de comprendre ce qui se passe à chaque ligne.*/

    $moi = array('classic-cars', 'dessin 3D', 'mécatronique-project', 'vins de Bordeaux', 'bières belges', 'programmations');
    $papa = array('directeur marketing 3M Europe', 'BMW', 'musique classique', 'philosophie', 'dessins');

    array_push($moi['papa']);

    echo '<pre>';
    print_r ($moi);
    echo '</pre>';

/*Manipuler des arrays
    Compter

    Tu veux savoir combien de hobbies a ton père. Trouve la fonction PHP qui permette de compter le nombre d'éléments d'un tableau.
    Compte tes propres hobbies
    Additionne les deux et affiche le résultat*/

    print_r = (echo count($papa)+echo count($moi));


    /*Ajouter

    /*Un ami t'a fait découvrir les joies de la taxidermie. Trouve la bonne syntaxe pour ajouter le hobby "Taxidermie" à ton tableau de "hobbies".
    Remplacer*/
    // array_push ($moi['taxidermie']);


    /*Tu te disputes avec ton père et tu décides de changer de nom de famille.
    Ta contestation n'a d'autre objet que de faire chier le système et de faire parler de toi dans les médias. Tu choisis donc de porter le nom de Dieudonné.
    Comment mettre à jour ton tableau pour refléter ce changement de nom de famille?*/

    // $moi [$papa]= 'Dieudonné';


?>

  </body>
</html>
