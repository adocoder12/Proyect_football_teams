<?php
session_start();  
include("funktiot.php");
?>
<head>
<title>Asiakas lisaa</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- my style css -->
	<link rel="stylesheet" href="css/main.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">
</head>
<html>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
	<div class="container-fluid ">
		<a class="navbar-brand" href="index.php">Football Team</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="navbar-item"><a class="nav-link" href="index.php">Home</a></li>
				<li class="navbar-item"><a class="nav-link" href="pelaajat_hae.php">Pelaajat</a></li>
			</ul>
		</div>
	</div>
</nav>

<?php
$serveri = knowser($serveri);
$tunnus = knowme($tunnus);
$ssana = knowpass($ssana);
$tkanta = knowtk($tkanta);

// Tähän tullaan, jos on painettu Tallenna-painiketta
if(isset($_POST['submit'])){   
     $conn = new mysqli($serveri, $tunnus, $ssana,$tkanta);
    // Check connection
 if ($conn->connect_error) {
      die("Yhdistäminen ei onnistunut: " . $conn->connect_error);   
     }

$sql="INSERT INTO pelaajat (etunimi, sukunimi, pelaja_nro, peli_paikka,team) VALUES (
	'".$_POST['etunimi']."' ,	
	'".$_POST['sukunimi']."',	
	'".$_POST['pelaja_nro']."',
	'".$_POST['peli_paikka']."',
	'".$_POST['team']."')";
$result = $conn->query($sql);
$conn->close();

 }
 ?>
<div class="container-fluid">
	<div class="row ">
		<div class="titulo text-center">
			<h2>Lisaa Pelaja</h2>
		</div>
		<form action ='pelaja_lisaa.php' method='post'>
			<div class="formgroup">
				<label for="etunimi">Etunimi:</label>
				<input type='text' class="form-control" placeholder="Etunimi" NAME='etunimi'>
				<label for="sukunimi">Sukunimi:</label>
				<input type="text" placeholder="Sukunimi" class="form-control" name="sukunimi">
				<label for="pelaja_nro">Pelaja numero:</label>
				<input type="text" placeholder="Pelaja numeroa" class="form-control" name="pelaja_nro">
				<label for="peli_paikka">Peli paikka:</label>
				<div class="col py-2">
					<select name="peli_paikka" id="peli_paikka" class="form-select " aria-label="Default select example">
	  					<option selected>Valita peli paikka</option>
	  					<option value="GK">GoalKeeper</option>
	  					<option value="DEF">Defense</option>
	  					<option value="CM">Midfielder</option>
	  					<option value="CF">Foward</option>
					</select>
				</div>
				<label for="team">Team:</label>
				<div class="col py-2">
					<select name="team" id="team" class="form-select " aria-label="Default select example">
	  					<option selected>Valita Team</option>
	  					<option value="1">Team A</option>
	  					<option value="2">Team B</option>
	  					<option value="3">Team C</option>
	  					<option value="4">Team D</option>
					</select>
				</div>
				<div class="col-6 py-2">
					<button class="btn btn-outline-success btn-lg " type='submit' NAME='submit' VALUE='Tallenna'>Tallena</button>
					<button type='reset' class="btn btn-outline-danger btn-lg" VALUE='Tyhjenn&auml'>Tyhennä</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Footer -->
 <footer class=" fixed-bottom">
	<div class="container-fluid m-auto " >
        <div class="row text-center text-white">
          	<div class="col ml-auto p-3">
            	<p>Copyright &copy; 2021</p>
          </div>
        </div>
     </div>       
</footer>
<script src="js/popper.min.js"></script>	
<script src="js/bootstrap.min.js"></script>	
</body>
</html>
