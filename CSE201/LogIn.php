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

$username = $_POST['username'];

$password = $_POST['password'];

$sql = "Select username, pswd from Users where username = '$username' and pswd = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $conn->close();
    echo "Sign In Successfully!";
    header('Refresh:3,Url=HomePage.html');
    die;
} else {
    $conn->close();
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Refresh:3,Url=SignInPage.html');
    die;
}

$conn->close();
?>