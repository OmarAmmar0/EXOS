<?php
include_once ('../Database/Database.php');

if (isset($_POST['taskName'])){

  $taskName = $_POST['taskName'];

  $sql = "INSERT INTO `oui`(`nom`) VALUES (:task)";
  $stmt = $dbConnect->prepare($sql);
  $stmt->bindParam(':task', $taskName);

  $response = array();

  if ($stmt->execute()) {
    $response['message'] = "Données insérées avec succès";
  } 
  
}
else {
    $response['message'] = "Erreur lors de l'insertion des données";
}



?>

