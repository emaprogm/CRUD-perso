
<?php
include("connexion.php");
$id = $_GET["id"];

// selection étudiant si un id est fourni
$sql = "SELECT * FROM t_etudiant WHERE id='$id'";

foreach ($conn->query($sql)as $rep){
    // Traitement des données POST
    $nom = $rep[1];
    $prenoms = $rep[2];
    $age = $rep[3];
  }
?>
<html>
<head>	
	<title>Modifier la donnees</title>
</head>
<body>
<form action="scriptmodifier.php" method="POST">
          <table width="34%">
            <tbody>
              <tr>
                <!-- <td>id</td> -->
                <td><input type="hidden" name="id"  value=<?php echo $id; ?>></td>
            </tr>
              <tr>
                <td>NOM</td>
                <td><input type="text" name="nom" required value=<?php echo $nom; ?>></td>
            </tr>
            <tr>
                <td>PRENOMS</td>
                <td><input type="text" name="prenoms" required value=<?php echo $prenoms; ?>></td>
            </tr>
            <tr>
                <td>AGE</td>
                <td><input type="number" name="age" required value=<?php echo $age; ?>></td>
            </tr>
            <tr>
                <td></td>                
                <td><input type="submit" name="modifier" value="Modifier"></td>
              </tr>
            </tbody>
      </table>
    </form>
</body>
</html>