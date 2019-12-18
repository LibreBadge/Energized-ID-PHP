<?php
//this is a test database set up for testing purposes on energized-id-dev.memtech3.com . DO NOT USE THIS IN A PRODUCTION ENVIRONMENT
$servername = "localhost";
$username = "u952595018_ID";
$password = "admin1";
$dbname = "u952595018_ID";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    $sql = "SELECT id, firstName, lastName FROM Cardholders WHERE lastName='Doe'";
    $result = $conn->query($sql);
    echo $result;
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


?>
