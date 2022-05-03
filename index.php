<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- my style css -->
	<link rel="stylesheet" href="css/main.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Martel:400,700" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg  fixed-top ">
	<div class="container-fluid ">
		<a class="navbar-brand" href="index.php">Football Team</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="navbar-item"><a class="nav-link" href="#about">About</a></li>
				<li class="navbar-item"><a class="nav-link" href="#team">Teams</a></li>
        <li class="navbar-item"><a class="nav-link" href="pelaja_lisaa.php">Lisaa pelaaja</a></li>
			</ul>
		</div>
	</div>
</nav>
<!-- Background img and  text -->
<header class="main-header ">
	<div class="background-overlay py-5">
        <div class="container">
          <div class="row d-flex h-100">
            <!-- text -->
            <div class="col-sm-6 text-center justify-content-center align-self-center">
              <h1>Hake sinun Team</h1>
              <p>Elit reiciendis aspernatur obcaecati accusantium corporis? Mollitia eius ratione excepturi.</p>
              <a href="#" onclick=" window.open('pelaajat_hae.php','_blank')"class="btn btn-outline-info btn-lg text-dark">Korjata teams</a>
            </div>
            <!-- img -->
            <div class="img col-sm-6">
              <img src="img/pixlr-bg-result.png" class="img-fluid d-none d-sm-block">
            </div>
          </div>
        </div>
    </div>
</header>
<!-- ABOUT -->
<section class="m-3 text-center bg-grey" id="about">
	<div class="container">
        <div class="row">
          <div class="p-4">
            <h3>About</h3>
            <p>
              Edit your team as you desire, select in wich team you would like your players to play <br>Lets Play!
            </p>
          </div>
        </div>
	</div>
</section>
<!-- TEAM -->
<section class=" d-flex justify-content-center text-center team" id="team">
	<div class=" wraper container-fuid p-5">
    	<h1 class="text-center text-white">Teams</h1>
        <p class="text-white">
          Edit Your Team
        </p>
        <div class="-m-5 row justify-content-center align-self-center">
          <!-- USER TEAM -->
        	<div class="col-lg-3 py-2">
            	<div class="card">
           			<div class="card-body">
           				<a href="team_a.php">
                			<img src="img/person.png" class="img-fluid rounded-circle w-50">
           				</a>
                			<h3 class="m-1">Team A</h3>
                	</div>
            	</div>
            </div>
            <div class="col-lg-3 py-3">
            	<div class="card">
           			<div class="card-body">
           				<a href="team_b.php">
                			<img src="img/person.png" class="img-fluid rounded-circle w-50">
           				</a>
                			<h3 class="m-1">Team B</h3>
                	</div>
            	</div>
            </div>
            <div class="w-100"></div>
            <div class="col-lg-3 py-3">
            	<div class="card">
           			<div class="card-body">
           				<a href="team_c.php">
	                		<img src="img/person.png" class="img-fluid rounded-circle w-50">
           				</a>
	                		<h3 class="m-1">Team C</h3>
                	</div>
            	</div>
            </div> 
            <div class="col-lg-3 py-3">
            	<div class="card">
           			<div class="card-body">
           				<a href="team_d.php">
                			<img src="img/person.png" class="img-fluid rounded-circle w-50">
           				</a>
                			<h3 class="m-1" >Team D</h3>
                	</div>
            	</div>
            </div>
        </div>      
	</div>
</section>
<!-- Footer -->
 <footer class="mt-4">
	<div class="container-fluid m-auto" >
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