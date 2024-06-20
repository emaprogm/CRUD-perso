<!doctype html>
<html>
	<head>
		<meta charset="utf-8"> 
		<title>Inscription</title>
	</head> 
	<body>
		<h1></h1>
		<?php
			$nom= $_POST["nom"];
			$prenoms= $_POST["prenoms"];
			$age= $_POST["age"];

			include("connexion.php"); 

			$date=gmdate("Y-m-d");
			$sql="INSERT INTO t_etudiant(nom, prenom, age, date) VALUES ('$nom', '$prenoms', '$age', '$date')";
			$rep= $conn->exec($sql);

			if($rep){
				echo"
					<script language='javascript'>
						alert('Inscription réussie');
					</script>
				   ";
				}
			?>	
			<a href="index.php">Retour a Inscription</a><br>
			<a href="listeInscrit.php">ALLER a la liste des Inscris</a>
	</body>
</html> 