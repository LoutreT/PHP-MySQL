<!-- PHP Exercice en cours d'execution -->

Dans un fichier "excuse.php", crée un "générateur d'excuses" pour faciliter la vie des parents d'enfants en école primaire.

Il te faut un formulaire avec trois questions:

    nom de l'enfant
    nom de l'institutrice
    une raison de l'absence à choisir parmi des options (input de type "radio"):
        maladie
        décès de l'animal de compagnie (ou d'un membre de la famille)
        activité extra-scolaire importante
        toute autre excuse de ton choix

Pour chaque option, invente une excuse adaptée en fonction de l'option choisie. Utilise une condition pour afficher la bonne excuse.

Génère le mot d'excuse utilisant les trois réponses au formulaire.

Le parent n'aura plus qu'à copier-coller la réponse pour rédiger sa lettre d'excuses.
Critères de perfectionnement

    ajoute la date du jour (format "Day, le dd Month YYYY")
    ajoute la formule de politesse.
    pas de faute d'orthographe.
    UX soignée: en faire un vrai produit? ( CSS + typographie + logo )

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
  </head>
<body>

<?php
    var = "nom_de_l'enfant";
    var = "nom_de_l'institutrice";
    var = "motif_de_l'absence";

    fonction(     ) {     ;}
?>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
  </head>
  <body>
    <div class="user">
      <header class="user__header">
      <h1 class="user__title">votre excuse</h1>
      </header>

      <div class="form">
      <div class='response'>
      Chère <?php echo$_POST["teacher"];?>,

      <br>
      <?php  echo$_POST["child"] ?> ne pourra pas venir en cours aujourd'hui en raison de

      <?php
        $child=$_POST["child"];
        $choice=$_POST["choice"];
        $other=$_POST["other"];
        $phrase=" ne sera donc pas là en classe ";
        $echo;
      switch($choice){
        case "sickness":
        echo "Maladie.".$child.$phrase."aussi au risque de contaminer ses camarades.";
        break;
        case "deadPet":
        echo "La mort de son chien. ".$child.$phrase."dû à un trop gros chagrin.";
        break;
        case "extraActivity":
        echo "La chasse aux champignons familiale annuelle.".$child.$phrase."mais reviendra au prochain cours";
        break;
        case "other":
        echo $other.".".$child.$phrase."mais reviendra dès que possible.";
        default:
        echo "choses inavouables";
      }
      ?>
        <br>Veuillez agréer <?php echo$_POST["teacher"]?>, avec mes sincères excuses.
        <br>
        Envoyé en date du <?php echo date("YY/mm/dd") ?> à <?php echo date("h:i:s") ?>
      </div>
      <div class="btn">
      <button onclick="window.location.href='./index.php'">return</button>

    </div>
  </div>
</div>
</body>
</html>
