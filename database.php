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
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


?>
