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
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$retreat_id = 1;

// Insert into table
$sql = "insert into registration(retreat_id, username,email,create_datetime)  values($retreat_id, '$user_name','$user_email',CURRENT_TIMESTAMP());";

if ($conn -> query($sql) == TRUE) {
    echo 'New record inserted';    
}
  
$conn -> close();

?>