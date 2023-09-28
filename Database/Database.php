<?php

 $host = "localhost";
 $dbname = "task";
 $username = "root";
 $password = "";
    
   
$dbConnect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



