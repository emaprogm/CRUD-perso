<?php 
include("connexion.php");
    // code pour modifier et retourner a la liste
if(isset($_POST['modifier'])){
    $id=$_POST['id'];
    $nom= $_POST["nom"];
    $prenoms= $_POST["prenoms"];
    $age= $_POST["age"];

    $sql2 = "UPDATE  t_etudiant SET nom='$nom', prenom='$prenoms', age='$age' WHERE id='$id' ";
    $req1=$conn->exec($sql2);

    var_dump(exec($sql2));

    // Redirect to the main display page (index.php in our case)
    // header("Location:listeInscrit.php");
}

?>