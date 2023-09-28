<?php

include_once '../Database/Database.php';

$sql = "SELECT * FROM oui";
$stmt = $dbConnect->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('ontent-Type: applicatio/json');
echo json_encode($data);