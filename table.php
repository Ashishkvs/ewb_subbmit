<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE Registration (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
College_Name VARCHAR(200) NOT NULL,
College_President_Name	VARCHAR(100) NOT NULL,
Chapter_President_email	VARCHAR(100) NOT NULL,
Chapter_Contact_Number VARCHAR(14) NOT NULL,
State	VARCHAR(20) NOT NULL,
Boys VARCHAR(3) NOT NULL,
Girls	VARCHAR(3) NOT NULL,
Accomodation VARCHAR(3) NOT NULL,
Arrival_Date VARCHAR(20) NOT NULL,
Departure_Date VARCHAR(20) NOT NULL,
Departure_Time VARCHAR(20) NOT NULL,
Doc_upload VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Registration created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>