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
?>

<!Doctype html>
<html>

    <head>

		<link rel="shortcut icon" href="GH.png">
		<title>GameHub</title>

	</head>
    
    <body>

        <h2 style="text-align:center">GameHub</h2>

		<div class="topnav">
            <a href="HomePage.html">Home</a>
            <form action="SignInPage.html">
                <button id="signout" type="submit">Sign out</button>
            </form>
                
        </div>

        <div class="search">
			<form action="QuestionSearch.php" method="GET" name="first">
				<input type="text" name="searchTerm" placeholder="Type your question here">
				<button type="submit" class="searchButton">Search</button>
			</form>
		</div>
        <div class="search">
            <form action="AnswerSearch.php" method="POST" name="third">
                <input type="text" class="searchTerm" placeholder="Type the question id number here" name="searchAnswer">
                <button type="submit" class="searchButton">Locate</button>
            </form>
        </div>
    
    </body>
	
	<body>
		<?php
            echo "<br><br><br><br><br>";
    $value = $_POST['searchAnswer'];
    if(strval($value) != strval(intval($value))) {
        echo "You must enter an integer for searching an answer";
        header('Refresh:3,Url=HomePage.html');
        die;
    } else {
        $raw_results = mysqli_query($conn,"SELECT * FROM Question
				WHERE question_id = '$value'") or die(mysql_error());
        $answer_results = mysqli_query($conn,"SELECT * FROM Answer
				WHERE question_id = '$value'") or die(mysql_error());
				if(mysqli_num_rows($raw_results) > 0){ 
						while($results = mysqli_fetch_array($raw_results)){
							echo "<br><p><h3>".$results['q_title']."(Question ID: ".$results['question_id'].")"."</h3>".$results['q_description']."</p>";
						}
                        echo "------------------------------------------------------------------------------------------------------------------";
                    if(mysqli_num_rows($answer_results) > 0) {
                        while($result = mysqli_fetch_array($answer_results)){
							echo "<br><p>".$result['a_description']."</p>";
                            echo "<br><p>".$result['a_date']."</p>";
                        }
					}
                }
				else{ 
					echo "<br><p><h3>No result matches your question</h3></p>";
				}
    }
			$conn->close();
		?>
		</body>
    <body>
        
        <form action="answer.php" method="post" name="second">
		<textarea name="qID" cols="50" rows="1" placeholder="Type id of the question"></textarea>
            <p></p>
			<textarea name="answer" cols="50" rows="8" placeholder="Type your answer for this question here"></textarea>
        
			<button type="reset">Reset</button>
			<button type="submit">Answer</button>  
        </form>
    </body>
		
    <style>

        body {
            background-color:#ffff;
    	}

		.topnav {
            overflow: hidden;
            background-color: #333;
		}

		.topnav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            font-family: sans-serif;
            border-right: 1px solid #bbb;
		}

		.topnav a:hover {
            background-color: #111;
		}

		.topnav button {
		    float: right;
		    padding: 6px;
		    margin-top: 8px;
		    margin-right: 16px;
		    background: #2196F3;
		    color: white;
		    font-size: 17px;
		    border: none;
		    cursor: pointer;
		}

		@media screen and (max-width: 600px) {
            .topnav a, .topnav input[type=text] {
                float: none;   
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
        }

		.search {
            width: 100%;
            position: relative
		}

		.search input {
            float: left;
            width: 83%;
            border: 3px solid #2196F3;
            padding: 5px;
            height: 30px;
            border-radius: 5px;
            outline: none;
            margin-top: 8px;
            margin-bottom: 8px;
		}

		.search button {
            float: right;
            width: 15%;
            height: 45px;
            border: 1px solid #00B4CC;
            background: #2196F3;
            text-align: center;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            margin-top: 8px;
            margin-bottom: 8px;
            margin-left: .1%;
		}
		
		h3 {
			font-family: sans-serif;
		}
        
		p {
			font-family: sans-serif;
		}
    </style>
    
</html>