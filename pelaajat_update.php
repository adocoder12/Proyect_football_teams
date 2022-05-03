<?php
//session_start();  
include("funktiot.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>pelaajat update</title>
<meta http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- my style css -->
	<link rel="stylesheet" href="css/main.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">
</head>
<body>

<?php
//Connect to sql
$serveri = knowser($serveri);
$tunnus = knowme($tunnus);
$ssana = knowpass($ssana);
$tkanta = knowtk($tkanta);

 $conn = new mysqli($serveri, $tunnus, $ssana, $tkanta);
   // Check connection
    if ($conn->connect_error) {
    die("Yhdistaminen ei onnistunut: " . $conn->connect_error);   
      }

$player_ID = $_POST['player_id'];
$etunimi = $_POST['etunimi'];
$sukunimi = $_POST['sukunimi'];
$pelaja_nro = $_POST['pelaja_nro'];
$peli_paikka = $_POST['peli_paikka'];
$team = $_POST['team'];


/*Update table*/

	$sql="UPDATE pelaajat SET  etunimi='$etunimi', sukunimi='$sukunimi', pelaja_nro='$pelaja_nro', peli_paikka='$peli_paikka' ,team='$team'
  WHERE player_ID = '$player_ID'";
  
 	$result = $conn->query($sql);
	$conn->close();
	

header("Location: pelaajat_hae.php");
exit();
?>

</body>
</html>