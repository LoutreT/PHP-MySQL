<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  $score=$_POST['score'];
  switch ($score)
{
case ($score<4):
echo "Ce travail est nul.";
break;
case ($score<10):
echo "Ce travail n'est pas terrible.";
break;
case ($score<11):
echo "Tout juste !";
break;
case ($score<15):
echo "C'est pas mal";
break;
case ($score<19):
echo "Bravo";
break;
case ($score<21):
echo "police! Arretez ce tricheur!";
break;
default:
echo "Ce travail est nul.";
}
  ?>


  <br>
  <button onclick="window.location.href='./index.php'">return</button>
</body>
</html>
