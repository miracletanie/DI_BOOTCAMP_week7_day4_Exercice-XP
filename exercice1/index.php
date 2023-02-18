<!-- 
Correcteur: Yannick GOUGUIA

Toute cette partie doit faire partie du fichier header.php
===================
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>BIENVENUE SUR MA PAGE ADACI</h1>
==================

il faut bien fornater le code avec les differents fichiers php

-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>BIENVENUE SUR MA PAGE ADACI</h1>

<?php
// appel des differents fichiers  dans le fichier indexin
include ('header.php');

include ('footer.php');
?>
</body>
</html>
