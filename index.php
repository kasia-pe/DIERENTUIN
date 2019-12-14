<?php
$host = "localhost";
$dbname = "dierentuin1";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=".$host.";dbname=".$dbname.";",$username, $password); #connecting string
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dierentuin Blijdorp</title>
	<link rel="stylesheet" style="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/00bec71c4e.js" crossorigin="anonymous"></script>
	<script src="dierentuin.js"></script>
</head>
<body>
	<div class="w3-container">
		<div id="header" class="header">
			<div class="navbar">
				<a href="#content">Home</a>
				<a href="#gallery">Dieren</a>
				<a href="#toevoegen">Toevoegen</a>
				<a href="#dieren-verblijf">Verblijf</a>
				<a href="#zoeken">Zoek</a>
			</div>
		</div>
	</div>
	<div id="content">
		<div class="content">
			<h1>Dierentuin</h1>
			<p>e standaard Lorem Ipsum passage, in gebruik sinds de 16e eeuw
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

				Sectie 1.10.32 van "de Finibus Bonorum et Malorum", geschreven door Cicero in 45 v.Chr.
				"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
			</p>
		</div>
		<div class="top"><a href="#header"> <i class="fas fa-angle-double-up fa-3x"></i></a> </div>
		<form method="post">
			<div id="gallery">
				<h1> Soorten </h1>
				<div class="gallery">
					<a href="?filter=zoogdier">
						<img src="images/koty.jpg" name="zoogdier" alt="koty" width="600" height="400">
					</a>
					<input type="button" name="diersort" value="Zoogdieren"/> <!--ssaki-->
				</div>
				<div class="gallery">
					<a href="?filter=vis">
						<image src="images/plazy.jpg" alt="ryby" width="600" height="400">
					</a>
					<input type="button" name="diersort" value="Vissen"/> <!--ryby-->
				</div>
				<div class="gallery">
					<a href="?filter=vogel">
						<image src="images/birds.jpg" alt="birds" width="600" height="400">
					</a>
					<input type="button" name="diersort" value="Vogels"/> <!--ptaki-->
				</div>
				<div class="gallery">
					<a href="images/malpy.jpg">
						<image src="images/malpy.jpg" alt="malpy" width="600" height="400">
					</a>
					<div class="opschrijving"> Hello! </div>
				</div>
				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
				</p>
			</div>
		</form>

		<div id="toevoegen">
			<h1>Dieren toevoegen</h1>
			<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
			<form method="POST">
				<input type="text" name="dierNaam" placeholder="Naam"/></br>
				<input type="text" name="dierSoort" placeholder="Soort"/></br>
				<input type="text" name="kooiId" placeholder="Kooi"/></br>
				<input type="text" name="begindatum" placeholder="Begindatum"/></br>
				<input type="text" name="einddatum" placeholder="Einddatum"/></br>
				<input type="text" name="gedrag" placeholder="Gedrag van een dier"/></br>
				<input type="submit" name="btnOpslaan" value="Opslaan"/></br>
			</form>
		</div>
		<?php
		if(isset($_POST['btnOpslaan'])){
			$dierid = '0';
			$soort = $_POST['dierSoort'];
			$naam = $_POST['dierNaam'];
			$kooiid = $_POST['kooiId'];
			$begindatum = $_POST['begindatum'];
			$einddatum = $_POST['einddatum'];
			$gedrag = $_POST['gedrag'];

			$query = "INSERT INTO dier (soort, naam) VALUES".
					"('$soort', '$naam')";

			$stm = $conn->prepare($query);
			$stm->execute();
			

		}
		?>

		<div id="dieren-verblijf">
			<h1>Verblijf</h1>
			<form method="post">
				<p>Overzicht van alle dieren en hun verblijf</p>
				<input type="submit" name="button" value="Show me">
			</form>
		</div>
		
		<?php

		if(isset($_POST['button'])){
			echo "<div class='verblijftb'>
			<table><tr class='eersterij'>
			<th>Dier ID</th>
			<th>Naam</th>
			<th>Soort</th>
			<th>Begindatum</th>
			<th>Einddatum</th></tr>";
			
			if(isset($_GET['filter'])){
				$fSoort = $_GET['filter'];
				$sQuery = "SELECT * FROM dier WHERE soort = '$fSoort' ORDER BY naam";
			} else {
				$sQuery = "SELECT * FROM dier, verplaats WHERE dier.dierid=verplaats.dierid ORDER BY naam";
			}
				$stm = $conn->prepare($sQuery);
				if($stm->execute()) {
					$result = $stm -> fetchAll(PDO::FETCH_OBJ);
					foreach($result as $prod){
						echo "<tr><td>". $prod->dierid. "</td>".
								"<td>". $prod->naam. "</td>".
								"<td>". $prod->soort. "</td>".
								"<td>". $prod->begindatum. "</td>".
								"<td>". $prod->einddatum. "</td></tr>";
					}
				}
			echo "</table>";
		echo "</div>";
		}
		?>
		<div id="zoeken">
			<h1>Zoeken</h1>
			<p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue;</p>
			<form method="post">
				<input type="search" id="site-search" name="zoek" aria-label="Search through site content" placeholder="Zoeken"></br>
				<input type="submit" name="btnZoek" value="Zoek">
			</form>	
		</div>
		<?php
		if(isset($_POST['btnZoek'])){
			

			
		}
		?>


	</div>
	<div class="footer-container">
		<div class="vert-align">
			<div class="headline">
				<small class="block">Copyright &copy; 2019 - All Rights Reserved. Images: <a href="https://unsplash.com/" class="link">Unsplash</a></small>
			</div>
		</div>
	</div>
	
</body>
</html>