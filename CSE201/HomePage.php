


<!Doctype html>

<html>

	<head>

		<link rel="shortcut icon" href="GH.png">
		<title>GameHub</title>

	</head>
    

	<style>

        body {
            background-color:#fffff;
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
            width: 85%;
            border: 3px solid #2196F3;
            padding: 5px;
            height: 40px;
            border-radius: 5px;
            outline: none;
            margin-top: 8px;
            margin-bottom: 8px;
		}

		.search input:focus{
            color: #00B4CC;
		}

		.search button {
            float: left;
            width: 15%;
            height: 40px;
            border: 1px solid #00B4CC;
            background: #2196F3;
            text-align: center;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            margin-top: 8px;
            margin-bottom: 8px;
		}

//image

		div.img {
		    margin: 5px;
		    border: 1px solid #ccc;
		    float: left;
		    width: 180px;
		}

		div.img:hover {
		    border: 1px solid #777;
		}

		div.img img {
		    width: 80%;
		    height: auto;
		}

		div.desc {
		    padding: 15px;
		    text-align: center;
		}

		* {
		    box-sizing: border-box;
		}

		.responsive {
            font-family: sans-serif;
		    padding: 0 6px;
		    float: left;
            text-align: center;
		    width: 24.99999%;
		}

		@media only screen and (max-width: 700px){
 		    .responsive {
 		    width: 49.99999%;
  		    margin: 6px 0;
		    }
		}

		@media only screen and (max-width: 500px){
		    .responsive {
		        width: 100%;
		    }
		}

		.clearfix:after {
		    content: "";
		    display: table;
		    clear: both;
		}
	
    </style>
    
    
    <body>

        <h2 style="text-align:center">GameHub</h2>

		<div class="topnav">
            <a href="HomePage.php">Home</a>
            <a href="#about">About</a>
            <a href="#notifications">Notifications</a>
            <form action="SignInPage.html">
            <button type="submit">Sign in</button>
            </form>
          <form action="SignUpPage.html">
            <button type="submit">Sign up</button>
          </form>
		 </div>
		
		<div class="search">
			<form action="QuestionSearch.php" method="GET">
				<input type="text" name="searchTerm" placeholder="Type your question here">
				<button type="submit" class="searchButton">Search</button>
			</form>
		</div>
		

		<h3 style="text-align:left">Subsections</h3>

		<div class="responsive">
  		    <div class="img">
                <a href="SS_PUBG.html" href="PUBG.jpg">
      		    <img src="http://media.comicbook.com/2017/09/pubg-vs-fornite-battle-royale-mode-1022703.jpg" alt="PUBG" width="300" height="200">
                </a>
                <div class="desc">PlayerUnknown's Battlegrounds</div>
            </div>
		</div>

		<div class="responsive">
            <div class="img">
                <a href="SS_OW.html" href="OW.jpg">
                    <img src="https://assets.vg247.com/current//2017/05/overwatch_anniversary_with_logo.jpg" alt="Overwatch" width="600" height="400">
                </a>
                <div class="desc">Overwatch</div>
            </div>
		</div>

		<div class="responsive">
            <div class="img">
                <a href="SS_MK.html" href="MK.jpg">
                    <img src="http://www.sinaimg.cn/dy/slidenews/21_img/2011_17/1604_344773_603096.jpg" alt="MortalKombat" width="600" height="400">
                </a>
                <div class="desc">Mortal Kombat</div>
            </div>
		</div>

        <div class="responsive">
            <div class="img">
                <a href="SS_LOL.html" href="LOL.jpg">
                    <img src="https://dotesports-cdn-prod-tqgiyve.stackpathdns.com/thumbor/_Kbiab5ieD3xmsroY9mFrVyXBis=/1200x0/filters:no_upscale()/https://dotesports-cdn-prod-tqgiyve.stackpathdns.com/article/a4d5534c-f920-455e-a9e3-031fa52d1ba4.jpg" alt="LoL" width="600" height="400">
                </a>
                <div class="desc">League of Legends</div>
            </div>
        </div>    
    </body>

</html>