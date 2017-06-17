<?php
$servername = "mysql4.gear.host";
$username = "dbphptest";
$password = "Ow8yj82l~?c5";

try {
    $conn = new PDO("mysql:host=$servername;dbname=dbphptest", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
