<?php
 //PDO Connectie: 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "";
 
 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); //Maakt een connectie aan 
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully"; //Echod of de connectie is gelukt.
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();   //Geeft een fout melding wanneer de connectie verkeerd is gegaan.
}
