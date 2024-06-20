<h1>LISTE INSCRITS</h1>
 <?php
 include("connexion.php"); 
    // Afficher la liste des étudiants
    $sql2 = "SELECT * FROM t_etudiant ORDER BY id ASC";
	// $i=0;
    echo "<table width='60%' border='1'>
            <tr>
                <th>Nom</th>
                <th>Prénoms</th>
                <th>age</th>
                <th>Date</th>
                <th>Supprimer</th>
                <th>Modifier</th>
            </tr>";
    foreach ($conn->query($sql2) as $result) {
		// $i++;
		echo"<tr>
				<td>$result[1]</td>
				<td>$result[2]</td>
				<td>$result[3]</td>
				<td>$result[4]</td>
				<td><a href='supprimer.php?id=$result[0]'>Supprimer</a></td>
				<td><a href='modifier.php?id=$result[0]'>modifier</a></td>
			</tr>";
    }
?>