<?php
// session_start();
$hae_player=$_POST['player_ID'];
include("funktiot.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pelaajat muokkaa</title>
<link rel="stylesheet" href="tapahtuma.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- my style css -->
  <link rel="stylesheet" href="css/main.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">

<style>
  form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100%;
  }
</style>
</head>
<body>
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Football Team</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="navbar-item"><a class="nav-link" href="index.php">home</a></li>
        <li class="navbar-item"><a class="nav-link" href="pelaajat_hae.php">Pelaajat</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- toka tiedosto kolmesta, tämän jälkeen suoritetaan tiedot päivittävä tapahtuu_update -tietosto-->
<?php

$serveri = knowser($serveri);
$tunnus = knowme($tunnus);
$ssana = knowpass($ssana);
$tkanta = knowtk($tkanta);

$etunimi = "";
$sukunimi="";
$pelaja_nro="";
$peli_paikka="";
$team="";

 $conn = new mysqli($serveri, $tunnus, $ssana, $tkanta);
   // Check connection
    if ($conn->connect_error) {
    die("Yhdistäminen ei onnistunut: " . $conn->connect_error);   
      }

$sql = "SELECT * FROM pelaajat WHERE '$hae_player'=player_ID";
       
  $result = $conn->query($sql);
  //$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $player_ID = $row['player_ID'];
        $etunimi = $row['etunimi'];
        $sukunimi = $row['sukunimi'];
        $pelaja_nro = $row['pelaja_nro'];
        $peli_paikka = $row['peli_paikka'];
        $team = $row['team'];
                 
    }
} else {
    echo "0 results";
}
$conn->close();

// <!-- Form container -->
echo " 
<form method='POST' action='pelaajat_update.php' >
<table border='0' cellspacing='2' cellpadding='0'> 
<tr><td width='100%' colspan='2'><H2>Muokkaa asiakastietoja</h2></td> </tr>

<tr><td width='120'><font face='Arial' size='3'>Asiaskas Nro</td><td><input type='text' name='player_id' value='$player_ID'></td></tr>

<tr><td width=''><font face='Arial' size='3'>Etunimi</td><td><input type='text' name='etunimi' id='etunimi' value='$etunimi'></td></tr>

<tr><td width=''><font face='Arial' size='3'>Sukunimi</td><td><input type='text' name='sukunimi' id='sukunimi' value='$sukunimi'></td></tr>

<tr><td width=''><font face='Arial' size='3'>Pelaja nro</td><td><input type='text' name='pelaja_nro' id='pelaja_nro' value='$pelaja_nro'></td></tr>

<tr><td width=''><font face='Arial' size='3'>Peli paikka</td><td><input type='text' name='peli_paikka' id='peli_paikka' value='$peli_paikka'></td></tr>

<tr><td width=''><font face='Arial' size='3'>Team</td><td><input type='text' name='team' id='team' value='$team'></td></tr>

<tr><td width=''><font face='Arial' size='3'></td>
<td><hr>

<form method='POST' action='pelaajat_update.php' >
<input type='Submit' value='Tallenna'> | </form ><br>
</td></tr>
<tr><td width='90'><font face='Arial' size='3'></td></form >

<td><hr>
<form method='POST' action='pelaajat_hae.php'>
<input type='Submit' value=' Palaa '></form >
</td></tr>
</table>"

?>

<!-- <input type='text' placeholder='Peli paikka' class='form-control' name='peli_paikka' id='peli_paikka' value='$peli_paikka'>paikkaa --> 
 <!-- <input type='text' placeholder='team' class='form-control' name='team' id='team' value='$team'> team-->

 <!-- Echoing -->


<!-- /*echo " 
<form method='POST' action='pelaajat_update.php' >
<table border='0' cellspacing='2' cellpadding='0'> 
<tr><td width='100%' colspan='2'><H2>Muokkaa asiakastietoja</h2></td> </tr>

<tr><td width='120'><font face='Arial' size='3'>Asiaskas Nro</td><td><input type='text' name='player_id' value='$player_ID'></td></tr>

<tr><td width=''><font face='Arial' size='3'>Etunimi</td><td><input type='text' name='etunimi' id='etunimi' value='$etunimi'></td></tr>

<tr><td width=''><font face='Arial' size='3'>Sukunimi</td><td><input type='text' name='sukunimi' id='sukunimi' value='$sukunimi'></td></tr>

<tr><td width=''><font face='Arial' size='3'>Pelaja nro</td><td><input type='text' name='pelaja_nro' id='pelaja_nro' value='$pelaja_nro'></td></tr>

<tr><td width=''><font face='Arial' size='3'>Peli paikka</td><td><input type='text' name='peli_paikka' id='peli_paikka' value='$peli_paikka'></td></tr>

<tr><td width=''><font face='Arial' size='3'>Team</td><td><input type='text' name='team' id='team' value='$team'></td></tr>

<tr><td width=''><font face='Arial' size='3'></td>
<td><hr>

<form method='POST' action='pelaajat_update.php' >
<input type='Submit' value='Tallenna'> | </form ><br>
</td></tr>
<tr><td width='90'><font face='Arial' size='3'></td></form >

<td><hr>
<form method='POST' action='pelaajat_hae.php'>
<input type='Submit' value=' Palaa '></form >
</td></tr>
</table>"*/
 -->
 <!-- echo"<div class='container'>
  <div class='row'>
    <h2>Pelaja muokaaminen</h2>
    <form method='POST' action='pelaajat_update.php' >
      <div class='formgroup col-sm-8'>
        <label for='player_ID'></label>
        <input type='text' class='form-control' name='player_id' id='player_id' value='$player_ID'>
        <label for='etunimi'>Etunimi:</label>
        <input type='text' class='form-control'  name='etunimi' id='etunimi' value='$etunimi'>
        <label for='sukunimi'>Sukunimi:</label>
        <input type='text' placeholder='Sukunimi' class='form-control' name='sukunimi' id='sukunimi ' value='$sukunimi'>
        <label for='pelaja_nro'>Pelaja numero:</label>
        <input type='text'  class='form-control' name='pelaja_nro' id='pelaja_nro' value='$pelaja_nro'>
        <label for='peli_paikka'>Peli paikka:</label>
        
        <div class='col py-2'>
          <select name='peli_paikka' id='peli_paikka' value='$peli_paikka' class='form-select 'aria-label='Default select example'>
              <option selected>$peli_paikka</option>
              <option value='GK'>GoalKeeper</option>
              <option value='DEF'>Defense</option>
              <option value='CM'>Midfielder</option>
              <option value='CF'>Foward</option>
          </select>
        </div>
        <label for='team'>Team:</label>
       
        <div class='col py-2'>
          <select name='team' id='team' value='$team'  class='form-select 'aria-label='Default select example'>
              <option selected>$team</option>
              <option value='1'>Team A = 1</option>
              <option value='2'>Team B = 2</option>
              <option value='3'>Team C = 3</option>
              <option value='4'>Team D = 4</option>
          </select>
        </div>
      </div>  
    </form>
  </div>
  <div class='row'>
    <div class='row-6 py-2'>
      <form class='form' method='POST' action='pelaajat_update.php' >
        <input class='btn btn-outline-success btn-lg' type='Submit' value='Tallenna'> | 
      </form>
      <form class='form' method='POST' action='pelaajat_hae.php'>
        <input class='btn btn-outline-info btn-lg' type='Submit' value=' Palaa'>
      </form >
    </div>
  </div>
</div>"; -->
</body>
</html>
