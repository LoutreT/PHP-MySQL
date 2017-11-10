<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>boucle php</title>
  </head>
  <body>

    <?php

//example 1)
    foreach ($names as $n){
      echo ucfirst($n);
    };

//example 2)
    foreach ($names as $index => $n){
    	echo "Prénom numéro $index : ";
    	echo ucfirst($n); //ucfirst = uppercase first = premiere lettre d'un mot ou d'une chaîne de caractère "string"
    };


//Exercices
//Voici un array :

$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');

//Construis une boucle qui affiche chaque élément de l'array à l'aide de foreach
$pronoms_personnels = array('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
$sousTableau = array_slice($tab,2);
print_r($sousTableau);
$tab = array('daniel','isabelle','david','robert', 'antoine');
$sousTableau = array_slice($tab,1,-2);
print_r($sousTableau);

//Ensuite, dans ta boucle, conjuge le verbe "coder" en fonction du pronom. (utilise une condition pour cela)















//boucle foreach
$verbe = "cod";
$conjuguaisonER=["e","es","e","ons","ez","ent"];
$pronoms_personnels=[
  'je','tu','elle/il','nous','vous','elles/ils'
];
foreach ($pronoms_personnels as $index => $n) {
  echo $n," ",$verbe,$conjuguaisonER[$index],"<br>";
};
$num = 1;
//boucle while
echo "<h3>boucle while</h3><br>";
while ($num <= 120){
  echo $num;
  $num++;
};

//boucle for
echo "<h3>boucle for</h3><br>";
for ($num2 = 1; $num2<=120;$num2++){
  echo $num2;
};

//boucler les gens
$classe = [
  "Gaetan","Syl","Valérian","Mehdi","Weich","Ornella","Marie-Ange","Axel","Laureen","Vincent","Ilias","Marvin","Thomas","Kevin","Kevin S","Antoine","Nico B","Caro","Steve","Delphine","les autres"
];
$classelen = count($classe);
for ($i=0;$i<$classelen;$i++){
  echo $classe[$i],"<br>";
}
//select box c nul!


    ?>
  </body>
</html>
