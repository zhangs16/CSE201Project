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

$query = $_GET['searchTerm']; 
    // gets value sent over search form
     
$min_length = 3;
    // you can set minimum length of the query if you want
     
if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
    $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
    $raw_results = mysqli_query($conn,"SELECT * FROM Question
            WHERE (`q_title` LIKE '%".$query."%') OR (`q_description` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$results['q_title']."</h3>".$results['q_description']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }


$conn->close();
?>