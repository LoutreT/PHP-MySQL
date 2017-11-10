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
          <?php echo$_POST["child"] ?> ne pourra pas venir en cours aujourd'hui en raison de
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
  <br>
  Veuillez agréer <?php echo$_POST["teacher"]?>, avec mes sincères excuses.
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
