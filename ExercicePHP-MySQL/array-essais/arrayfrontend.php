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
echo "<pre>";
$web_development=["frontend" => [],"backend" => []];
array_push($web_development["frontend"],"xhtml");
print_r($web_development);
array_push($web_development["backend"],"Ruby on Rails");
print_r($web_development);
array_push($web_development["frontend"],"css");
print_r($web_development);
array_push($web_development["backend"],"flash");
print_r($web_development);
array_push($web_development["frontend"],"Javascript");
array_push($web_development["backend"],"Javascript");
print_r($web_development);
$web_development["frontend"][0]="html";
print_r($web_development);
array_splice($web_development["backend"],1,1);
print_r($web_development);
echo"</pre>";
  ?>

</body>
</html>
