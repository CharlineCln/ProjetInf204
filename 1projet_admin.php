<html>
	<head>
		<meta charset="utf-8" />
		<title>Admin</title>
    <link rel="stylesheet" type="text/css" media="screen" href="1projet.css"/>
		<link rel="stylesheet" type="text/css" media="screen"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	</head>
	<body>
		<img class=image src="logo.png" onclick="window.location.href='1projet_Acc.html'" alt="Logo"/>
    <h1> Compte Administrateur</h1>

		<div class="scrollmenu">
		  <a href=1projet_Acc.html>Home</a>
		  <a href="#news">News</a>
		  <a href="#contact">Contact</a>
		  <a href="1About.html">About</a>
			<a class="boutonStation" href="1projet_admin.php">Ajouter une Station</a>
			<a href="1projet_Acc.html">Déconnexion</a>
		</div>

		<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=ATMO2', 'root', '', 	array(PDO::ATTR_ERRMODE => 	PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
						die('Erreur : ' . $e->getMessage());
		};

		if (isset($_POST['BTN']))
		 { 	$requete= "insert into mesure values ('".$_POST['nom_polluant']."','".$_POST['num_station']."','".$_POST['mesure']."' ,'".$_POST['unite']."','".$_POST['date']."' ,'".$_POST['heure']."');";
			 $resultat=$bdd->query($requete);
			 echo "<h4> Ajouté </h4>";}

		 ?>

	 </br>
	 					<form method="POST" action="1projet_admin.php">
		          <fieldset class="fieldset"><legend><h3>Saisie d'une mesure</h3></legend></br>

		            <label for="nom_polluant"><i class="fa fa-fire"></i> Nom du Polluant</label> &nbsp

								<?php
								try
								{
									$bdd = new PDO('mysql:host=localhost;dbname=ATMO2', 'root', '', 	array(PDO::ATTR_ERRMODE => 	PDO::ERRMODE_EXCEPTION));
								}
								catch (Exception $e)
								{
								        die('Erreur : ' . $e->getMessage());
								};

								$requete= "select id_polluant,nom_polluant from polluant";
								$resultat=$bdd->query($requete);

								while ($ligne = $resultat->fetch())
								{extract ($ligne);
								echo " <label><input type='radio' name ='nom_polluant' value=".$id_polluant." /> ",$nom_polluant,"</label> <br /> \n ";}

								?>

		            <label for="num_station"><i class="fa fa-map-marker"></i> Numéro de la station </label>&nbsp
		            <input type="text" id="num_station" name="num_station" placeholder="numéro ?"></br>  </br>

								<label for="mesure"><i class="fa fa-thermometer-0"></i> Mesure </label>&nbsp
		            <input type="text" id="mesure" name="mesure" placeholder="valeur?"></br>  </br>

								<label for="unite"><i class="fa fa-flask"></i> Unité de la mesure</label>&nbsp
		            <input type="text" id="unite" name="unite" placeholder="µg/m3"></br>  </br>

								<label for="date"><i class="fa fa-calendar-o"></i> Date de la mesure </label>&nbsp
		            <input type="date" id="date" name="date" placeholder="AAAA-MM-JJ"></br>  </br>

								<label for="heure"><i class="fa fa-clock-o"></i> Heure de la mesure </label>&nbsp
								<input type="time" id="heure" name="heure" placeholder="HH:MM:SS"></br>  </br>
		        <input type="submit" name="BTN" value="Valider les informations" class="btn" id="bouton">
					</fieldset>
				</form>
</body>
</html>


	</body>
</html>
