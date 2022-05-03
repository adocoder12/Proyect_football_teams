<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html;  charset=utf-8" />
<title>Pelajaat</title>
<link rel="stylesheet" href="css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- my style css -->
  <link rel="stylesheet" href="css/main.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Football Team</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="navbar-item"><a class="nav-link" href="index.php">home</a></li>
        <li class="navbar-item"><a class="nav-link" href="pelaja_lisaa.php">Lisaa pelaaja</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
include("funktiot.php");

$serveri = knowser($serveri);
$tunnus = knowme($tunnus);
$ssana = knowpass($ssana);
$tkanta = knowtk($tkanta);

$conn = new mysqli($serveri, $tunnus, $ssana, $tkanta);
   // Check connection
    if ($conn->connect_error) {
    die("Yhdistäminen ei onnistunut: " . $conn->connect_error);   
   }

$sql = "SELECT * FROM pelaajat   
        ORDER by sukunimi, etunimi"; 
      //$result = mysqli_query($conn, $sql);
      $result = $conn->query($sql);

$conn->close();
?>
<div class="container">
  <div class="title mb-3">
     <h2 align="center">Pelaajat</h2>
  </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Etunimi</th>
          <th>Sukunimi</th>
          <th>Pelaja numero</th>
          <th>Peli paikka</th>
          <th>Team</th>
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
             <td>" . $row['team']. "</td>
             </tr>";
        }
      } 
      else {
          echo "Ei tulevia tapahtumia";
      }
        
        ?>
      </tbody>
    </table>
    <br>
    <form class="form-inline" action='pelaajat_muokkaa.php' method='POST' margin='0'>
      <div class="form-group">
        <input name='player_ID' class="form-control" placeholder="Valitse ID" type='text' id='player_ID'>
        <input type='Submit' class="btn btn-success" value=' Muokkaa '> <br> 
          <h4>Kirjoittaa pelaaja numeroa, pääset muokaamaan pelaaja</h4><br>
      </div>
    </form> 
    <hr>  

    <form class="form-inline" action='pelaajat_poista.php' method='POST' margin='0'>
      
        <input name='player_ID' class="form-control" placeholder="Valitse ID" type='text' id='player_ID' value="">
        <input type='Submit' class="btn btn-danger"  value=' Pois '> <br> 
        <h4>Poista pelaaja</h4>

    </form>
</div>

<script src="js/popper.min.js"></script>  
<script src="js/bootstrap.min.js"></script> 
</body>
</html>