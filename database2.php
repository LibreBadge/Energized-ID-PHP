1
<?php
//this is a test database set up for testing purposes on energized-id-dev.memtech3.com . DO NOT USE THIS IN A PRODUCTION ENVIRONMENT
$servername = "localhost";
$username = "u952595018_ID";
$password = "admin1";
$dbname = "u952595018_ID";
$table = "Cardholders"
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `$table` WHERE `lastName` = 'Doe'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>