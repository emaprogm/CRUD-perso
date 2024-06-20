<?php

include("connexion.php");

$id = $_GET['id'];

// Supprimer l'étudiant si un id est fourni
  $sql = "DELETE FROM t_etudiant WHERE id=$id";
  $req=$conn->exec($sql);
  
// Redirect to the main display page (index.php in our case)
header("Location:listeInscrit.php");
?>