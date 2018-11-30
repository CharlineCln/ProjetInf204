<html>
	<head>
		<meta charset="utf-8" />
		<title>Visualisation Mesures</title>
    <link rel="stylesheet" type="text/css" media="screen" href="1projet.css"/>
		<link rel="stylesheet" type="text/css" media="screen"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	</head>
	<body>
		<img class=image src="logo.png" onclick="window.location.href='1projet_Acc.html'" alt="Logo"/>
    <h1> Visualisation Mesures</h1>

		<div class="scrollmenu">
		  <a href=1projet_Acc.html>Home</a>
		  <a href="#news">News</a>
		  <a href="#contact">Contact</a>
		  <a href="1About.html">About</a>
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
    ?>


	 </br>


        <?php
    		 { 	echo "OKOK";
           $requete1= "select num_polluant, num_station, mesure, unite_mesure, date_mesure, heure_mesure from mesure as m, station as s where (m.num_station = s.id_station and (s.num_dept ='".$_POST['choice']."'));";
    			 $resultat1=$bdd->query($requete1);
    			 echo "<h4> Résultat </h4>";
           while ($ligne = $resultat1->fetch())
           {extract ($ligne);
           echo " <label>$mesure </label> \n ";}
          }
    		 ?>


</body>
</html>
