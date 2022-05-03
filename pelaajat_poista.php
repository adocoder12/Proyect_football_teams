<?php 
session_start();
include("funktiot.php");


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pelaajat poistamisen</title>
		<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- my style css -->
	<link rel="stylesheet" href="css/main.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">
</head>
<body>

<?php

$hae_player=$_POST['player_ID'];
$serveri = knowser($serveri);
$tunnus = knowme($tunnus);
$ssana = knowpass($ssana);
$tkanta = knowtk($tkanta);

$conn = new mysqli($serveri, $tunnus, $ssana, $tkanta);

if ($conn->connect_error) {
	die("conection failed {$conn->connect_error}");
}

//Sql delete asiakas

$sql = "DELETE FROM pelaajat WHERE player_ID = '$hae_player'";

if ($conn->query($sql)=== true) {
	echo "<h2>Tiedosto poistettu</h2>";

}else{
	echo "<h2>Tiedoston poisto ei onnistunut {$conn->error}</h2>";
}

$conn->close();
 ?>	
<button onclick="document.location='pelaajat_hae.php'">pelaajat hae</button>
</body>
</html>