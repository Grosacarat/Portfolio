<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="traitement.php" method="post">
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom">
  <input type="submit" value="Envoyer">
</form>

<?php

session_start();
$participants = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = $_POST['nom'];

  $participants[] = $nom;

  $_SESSION['participants'] = $participants;


$participants = $_SESSION['participants']; 

if (isset($participants) && count($participants) > 0) {
  echo "<ul>";
  foreach ($participants as $nom) {
    echo "<li>$nom</li>";
  }
  echo "</ul>";
} else {
  echo "Aucun participant enregistré.";
}
}
?>








    
</body>
</html>