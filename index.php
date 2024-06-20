<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulaire</title>
</head>

<body>
	<h1>INSCRIPTION</h1>
      <form action="inscription.php" method="POST">
          <table width="34%" >
            <tbody>
              <tr>
                <td>NOM</td>
                <td><input type="text" name="nom" required></td>
                </tr>
              <tr>
                <td>PRENOMS</td>
                <td><input type="text" name="prenoms" required></td>
                </tr>
              <tr>
                <td>AGE</td>
                <td><input type="number" name="age" required></td>
                </tr>
              <tr>
                <td></td>
                <td><input type="submit"  value="Valider"></td>
              </tr>
            </tbody>
      </table>
    </form>
</body>
</html>