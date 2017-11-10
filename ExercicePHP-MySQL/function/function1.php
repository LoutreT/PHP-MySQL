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
$list=["caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"];
$list2=[];
 function randomWords(){
   $list3=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x"];
   $word1="";
   $word2="";
   for($i=0;$i=5;$i++){
     $word1.=$list3[rand(0,23)];
   }echo $word1."<br>";
   for($ii=0;$ii=7;$ii++){
     $word2.=$list3[rand(0,23)];
   }echo $word2."<br>";
 }
function sum($a,$b){
  if(is_int($a) && is_int($b)){
    return $a+$b;
  }
  return "Erreur, argument non numérique";
}
function letters($string){
  if(is_string($string)){
  $word=explode(" ",$string);
  $Letter="";
  foreach ($word as $n) {
    $Letter.=$n[0];
    }
    echo $Letter;
  }
  return "Error:not a string";
}
for($i=0;$i<count($list);$i++){
$h=str_replace("ae","æ",$list[0]);
array_push($list2,$h);
}
function feedback($message,$error = "info"){
  return "<div class=".$error.">".$message."</div>";
}
function coneVolume($rayon,$hauteur){
  $volume=floatval($rayon^2*pi()*$hauteur*(1/3));
  echo 'Le volume du cône de rayon '.$rayon.' cm et de hauteur '.$hauteur.' cm est : ' . $volume . ' cm<sup>3</sup><br />';
}
$substitutions = array( "E","I", "O", "U", "OU", "É", "È", 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN');
function wala($n){
  $sing="Buvons un coup ma serpette est perdue,
  Mais le manche, mais le manche,
  Buvons un coup ma serpette est perdue
  Mais le manche est revenu.";
  for($i=0;$i<strlen($sing);$i++){
    if($sing[$i]=="a" || $sing[$i]=="e" || $sing[$i]== "i" || $sing[$i]== "o" || $sing[$i]=="u"){
      $sing[$i]=$n;
    }
  }echo strtolower($sing);
}
echo ucfirst("emilie");
echo "<br>";
echo date("Y");
echo "<br>";
echo date("Y/m/d/h:i:sa");
echo "<br>";
echo sum(3,"dss");
echo "<br>";
echo sum(6,15);
echo "<br>";
letters("Better eat and stay tall");
echo "<br>";
print_r($list2);
echo "<br>";
echo feedback("adresse email incorrecte");
echo "<br>";
echo feedback("adresse email incorrecte","error");
echo "<br>";
echo strtolower("ARRETE DE CRIER JE N'ENTENDS PLUS RIEN!!!");
echo "<br>";
coneVolume(65,12);
echo "<br>";
echo strrev("hello");
echo "<br>";
foreach($substitutions as $letter) {
  wala($letter);
}
   ?>
</body>
</html>
