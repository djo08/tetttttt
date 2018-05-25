<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/exercice.css">
    <title>exercice</title>
  </head>
<body>
  <?php include("header.php") ?>
  <?php

if(isset($_POST)) {
  if (isset($_POST["genre"])) {
    $genre = $_POST["genre"];
  }
  if (isset($_POST["prenom"])) {
    $prenom =$_POST["prenom"];
  }
  if (isset($_POST["nom"])) {
    $nom =$_POST["nom"];
  }
  if (isset($_POST["e-mail"])) {
    $email =$_POST["e-mail"];
  }
  if (isset($_POST["moi"])) {
    $moi =$_POST["moi"];
  }
  if (isset($genre) && isset($prenom) && isset($nom)) {

echo '<div id="megabloc">';
echo '<div id="blochaut">';
echo '<span id="demande">demande prise en compte</span>';
echo '</div>';

echo '<div id="fixcontour">';
echo '<div id="contourfixe">';

echo '<div id="prefix">';
echo '<p>titre : </p>';
echo '<p>prenom : </p>';
echo '<p>nom : </p>';
if (isset($email)){
  echo '<p>email:</p>';
}
echo '</div>';

echo '<div id="sufix">';
echo "<p>".$genre."</p>";
echo "<p>".$prenom."</p>";
echo "<p>".$nom."</p>";
if (isset($email)){
  echo "<p>".$email."</p>";
}
echo '</div>';
echo '</div>';
echo '</div>';
if(isset($moi)){

  echo '<div id="blocbas">';

  echo 'la case se souvenir de moi est bien coché';
echo '</div>';
}
echo '</div>';





$message = 'titre: '.$genre.'<br>';
$message .= 'prenom: '.$prenom.'<br>';
$message .= 'nom: '.$nom.'<br>';
if (isset($email)){
  $message .= 'email: '.$email.'<br>';
}
if(isset($moi)){
  $message .= 'la case se souvenir de moi est bien coché';
}
$headers = "Content-type:text/html;charset=UTF-8";
$to = "djoandco@gmail.com";
$objet = "mail";
mail($to,$objet,$message,$headers);
  }
}
else {
  echo 'erreur';
}
  ?>

</body>
</html>
