<?php
$configs = include('config.php');

$servername = $configs['servername'];
$username = $configs['username'];
$password = $configs['password'];
$db = $configs['db'];

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get values from request
$retreat_id = 1;

// Insert into table
$sql = "insert into registration_log(retreat_id, create_datetime)  values($retreat_id,CURRENT_TIMESTAMP());";

if ($conn -> query($sql) == TRUE) {
    echo 'New record inserted';    
}
  
$conn -> close();

?>