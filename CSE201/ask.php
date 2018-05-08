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

$description = $_POST['question'];

$date = date("Y-m-d");

$title = $_POST['title'];


$sql = "INSERT INTO Question (q_description, q_date, q_title) VALUES ('$description', '$date', '$title')";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    echo "Adding into database successfully.";
    header('Refresh:3,Url=HomePage.html');
    die;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>