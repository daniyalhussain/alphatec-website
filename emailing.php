<?php
$naam = $_POST['naam'];
$email = $_POST['email'];
$onderwerp = $_POST['onderwerp'];
$message = $_POST['message'];

if(isset($naam) ){
  echo "<h1>$naam</h1>";
}
?>
