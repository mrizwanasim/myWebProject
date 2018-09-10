<!--=========================================Head and Libraries START========================================-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="assets\style.css" rel="stylesheet">
		<link 	rel="stylesheet" 
				href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
				integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
				crossorigin="anonymous">
		
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<!--==========================================Head and Libraries END=========================================-->
<!--=============================================BODY START==================================================-->
	<body class="main">
<!--==========================================MAIN CONTAINER START===========================================-->
		<div class="container" style="background: white">
<!--======================================TOP FIRST NAVIGATION BAR START=====================================-->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="https://cit.edu.au/">	
							<img src="image/cit.gif" style="height: 40px; width: 50px; margin-top: 5px">
						</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
        				<li><a href="user.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        				<li><a href="logIn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      				</ul>
				</div>
			</nav>
<!--======================================TOP FIRST NAVIGATION BAR END======================================-->
<!--=======================================MAIN NEME AND BANNER START=======================================-->
			<div class="row">
				<div class="container"> 
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					 <!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>

					<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="image\00.png" alt="Los Angeles" style="width:100%; height: 400px;">
							</div>

							<div class="item">
								<img src="image\00.jpg" alt="Chicago" style="width:100%; height: 400px;">
							</div>

							<div class="item">
								<img src="image\healthyfood_banner.jpg" alt="New york" style="width:100%; height: 400px;">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
<!--========================================MAIN NEME AND BANNER END=========================================-->
<!--=======================================SECOND NAVIGATION BAR START=======================================-->
			<nav class="navbar navbar-inverse homeMargin">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php"><i class="fas fa-home"></i></a>
					</div>
					<ul class="nav navbar-nav menu">
						<li><a href="media.php">Media</a></li>
						<li><a href="recipes.php">Recipes</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="profile.php">Team Profile</a></li>
						<li><a href="voting.php">Voting</a></li>
					</ul>
					<form class="navbar-form navbar-right" action="/action_page.php">
      					<div class="form-group">
        					<input type="text" class="form-control" placeholder="Search" name="search">
      					</div>
      						<button type="submit" class="btn btn-default">Submit</button>
    				</form>
				</div>
			</nav>
<!--========================================SECOND NAVIGATION BAR START=======================================-->
<!--===========================================BODY CONTAINER START===========================================-->
<!--===========================================LEFT SIDE BODY START (WORKING)=================================-->
			<div class="row">
				<div class="col-md-8">

						<div class="side">
							<div class="colorSettingsSideBar">
								<span><center>About Us</center></span>
							</div>
						</div>
			<div class="container-fluid" style="margin: 15px">
				<p style="font-size: 24px; text-align: justify; margin: 10px;">
					<div class="well">
						<h2 style=" text-align: justify;">At Canberra Institute of Technology we have a dedicated Brand and Business Development Division adept at finding training solutions in partnership with industry and community organisations.</h2><br>
					</div>

					<h3 style=" text-align: justify;">We work across CIT to source quality training programs and solutions for industry sectors as diverse as the construction industry to the health sector and government clients.</h3><br>

					<h3 style=" text-align: justify;">CIT we can confidently boast our industry specialist trainers carry current industry expertise into every training situation, keen to work closely with existing and new clients to design niche training options for your company.</h3><br>

					<h3 style=" text-align: justify;">At CIT we take pride in having designed training solutions for local, national and international partners.</h3>	
				</p>		
			</div>	
					
				</div>
<!--===========================================LEFT SIDE BODY START===========================================-->
<!--==========================================RIGHT SIDE BODY START===========================================-->
				<div class="row col-md-4">
<!--=======================================RIGNT SIDE BODY TITLE START========================================-->
					<div class="side">
						<div class="colorSettingsSideBar">
							<span><center>Latest Recipes</center></span>
						</div>
					</div><br>
					
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6" >
								<img src="image\food01.jpg" class="sidePicSize">
							</div>
							<div class="col-md-6">
								<span class="sidePost"><a href="recipes.php"> Recipe 1</a></span>
								<p>Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla 
								Bla Bla Bla Bla Bla Bla Bla Bla Bla </p>
							</div>
						</div><hr>
						
						<div class="row">
							<div class="col-md-6" >
								<img src="image\banner.jpg" class="sidePicSize">
							</div>
							<div class="col-md-6">
								<span class="sidePost"><a href="recipes.php"> Recipe 2</a></span>
								<p>Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla 
								Bla Bla Bla Bla Bla Bla Bla Bla Bla </p>								
							</div>
						</div><hr>
						
						<div class="row">
							<div class="col-md-6" >
								<img src="image\baby-food.jpg" class="sidePicSize">
							</div>
							<div class="col-md-6">
								<span class="sidePost"><a href="recipes.php"> Recipe 3</a></span>
								<p>Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla 
								Bla Bla Bla Bla Bla Bla Bla Bla Bla </p>								
							</div>
						</div><hr>
					</div>
<!--=======================================RIGNT SIDE BODY TITLE 2 START========================================-->	
					<div class="col-md" >
						<div class="side">
							<div class="colorSettingsSideBar">
								<span><center>Categories</center></span>
							</div>
						</div>
						<div class="cat">
							<a href="#">Episodes</a>
						</div>
					</div><br><hr>
<!--=========================================RIGHT SIDE BODY TITLE 2 END=========================================-->	
				</div>
<!--=========================================RIGHT SIDE BODY TITLE END=========================================-->
			</div><br><br>
<!--=============================================BODY CONTAINER END (WORKING)==================================-->
		</div>
<!--=============================================FOOTER START==================================================-->		
		<div class="row footerBoarder">
			<div class="col-md-6">
					<div class="col-md-1">
				<i class="fab fa-android fa-2x" style="color: greenyellow; margin: 5px;"></i>
						</div>
					<div class="col-md-11 footerStyleLeft">
						<a href="#">Android App</a>
					</div>
			</div>
			<div class="col-md-6 footerStyleRight">
				
				<a href="contactUs.php"><span style="margin: 20px">Contact Us</span></a><br>
				<a href="about.php"><span style="margin: 20px">About Us</span></a>	
			</div>
		</div>
<!--=============================================FOOTER END====================================================-->		
<!--=============================================MAIN CONTAINER END============================================-->
	</body>
<!--===============================================BODY START END==============================================-->
</html>