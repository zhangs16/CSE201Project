<?php

$servername = "35.193.62.55";
$username = "root";
$password = "23015927qq";
$dbname = "CSE201";

//creating database connection
$conn = new mysqli($servername, $username, $password, $dbname);

//checking database connection
if ($conn->connect_error) {
    die("Fail to connect to database:" . $conn->connect_error);
}

$email = $_POST['email'];

$username = $_POST['username'];

$password = $_POST['password'];

$birthday = $_POST['birthday'];

$sql = "INSERT INTO Users (email, username, pswd, bdate) VALUES ('$email', '$username', '$password', '$birthday')";

if ($conn->query($sql) === TRUE) {
    echo "Adding into database successfully.";
    header('Refresh:3,Url=HomePage.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>