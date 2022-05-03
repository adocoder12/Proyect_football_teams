<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Team B</title>
		<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- my style css -->
	<link rel="stylesheet" href="css/main.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">
</head>
<body>
	<!-- Navbar -->
<nav class="navbar navbar-expand-lg  ">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.php">Football Team</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="navbar-item"><a class="nav-link" href="index.php">Home</a></li>
				<li class="navbar-item"><a class="nav-link" href="index.php#about">About Us</a></li>
				<li class="navbar-item"><a class="nav-link" href="index.php#team">Teams</a></li>
			</ul>
		</div>
	</div>
</nav>
<!-- table -->
<?php
		include("funktiot.php");

		$serveri = knowser($serveri);
		$tunnus = knowme($tunnus);
		$ssana = knowpass($ssana);
		$tkanta = knowtk($tkanta);

		$conn = new mysqli($serveri, $tunnus, $ssana, $tkanta);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);}

		$sql = "SELECT * FROM  pelaajat 	
				where team=2
				ORDER by sukunimi, etunimi"; 
				
				$result = mysqli_query($conn, $sql);
		$conn->close();
?>
<div class="container-fluid">
	<div class="row py-3">
		<div class="col">
			<h2 class="text-center">Team B</h2>
		</div>
		<table class="table table-striped py-2">
			<thead>
				<tr>
					<th>ID</th>
					<th>Etunimi</th>
					<th>Sukunimi</th>
					<th>Pelaja numeroa</th>
					<th>Peli paikka</th>					
					</tr>
			</thead>
			<tbody>
	<?php
		if ($result->num_rows > 0 ) {
	    // output data of each row
		    while($row = $result->fetch_assoc()) {
				echo "<tr>
		      		<td>". $row['player_ID']. "</td>
			    	<td>" . $row['etunimi']. "</td>
					<td>" . $row['sukunimi']. "</td>
					<td>" . $row['pelaja_nro']. "</td>
					<td>" . $row['peli_paikka']. "</td>
			       	</tr>";
				}
			} 
			else {
			    echo "Ei pelaaja ";
			}
	?>
			</tbody>
			</table>
			<div class="row">
				<div class="col-6">
				</div>
				<div class="col-6 d-flex flex-row-reverse">
							<button class="btn btn-primary m-3" onclick="document.location='pelaja_lisaa.php'">Pelaja lisaaminen</button>

				</div>
				
			</div>
		
	</div>
</div>
<!-- Footer -->
 <footer class="fixed-bottom">
	<div class="container-fluid p-3" >
        <div class="row text-center text-white">
          	<div class="col ml-auto">
            	<p>Copyright &copy; 2021</p>
          </div>
        </div>
     </div>       
</footer>
<script src="js/popper.min.js"></script>	
<script src="js/bootstrap.min.js"></script>	
	
</body>
</html>