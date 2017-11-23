<?php
try
{
    // On se connecte à MySQL
    $pdo = new PDO('pgsql:host=ec2-46-137-174-67.eu-west-1.compute.amazonaws.com;dbname=dd76qk94md6on7;', 'nflgkofauvtovx', 'd1c8a82598d9fa7cdf92926e70ca55596ddc799b85b16a14f4d30003f427d790');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$query = 'INSERT INTO employees (employee_id, title) VALUES (1, super);';
$query='SELECT* FROM classes;';
$prep = $pdo->prepare($query);
 
$prep->bindValue(1, 'bertand', PDO::PARAM_STR);
$prep->bindValue(2, 'ceci est un test pour desc', PDO::PARAM_STR);
$prep->execute();
$resultat = $pdo->query('SELECT * FROM employees');
while ($donnees = $resultat->fetch())
{
  echo '<br/>';
  echo $donnees['employee_id'];
  echo ' : ';
  echo $donnees['description'];
}
 var_dump($donnees);

?>
