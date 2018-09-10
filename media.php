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
						<li class="myPageStyle disabled"><a href="media.php">Media</a></li>
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
							<span><center>Media</center></span>
						</div>
					</div><br>
					
					<div class="row">
						<center><h3 style="font-weight: bold">Episode 01</h3></center>
						<div class="col-md-6">
							<div class="embed-responsive embed-responsive-4by3"  style="border-radius: 5px">
  								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZJy1ajvMU1k"></iframe>
							</div>
						</div>
						
						<div class="col-md-6">
							
							<h6 style="float:right">Date:12/12/2018</h6>
							<br><br>
							<p style="text-align: justify;">An increasing number of CIT's courses include subjects or components that can be studied fully or partially online. Check the course details to find out whether the course you are interested in has online or off-campus components. An increasing number of CIT's courses include subjects or components that can be studied fully or partially online. Check the course details to find out whether the course you are interested in has online or off-campus components</p>
						</div>
					</div><hr>
					
					
					<div class="row">
						<center><h3 style="font-weight: bold">Episode 02</h3></center>
						<div class="col-md-6">
							<div class="embed-responsive embed-responsive-4by3"  style="border-radius: 5px">
  								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/T_oE5e7-Pow"></iframe>
							</div>
						</div>
						
						<div class="col-md-6">
							
							<h6 style="float:right">Date:12/12/2018</h6>
							<br><br>
							<p style="text-align: justify;">An increasing number of CIT's courses include subjects or components that can be studied fully or partially online. Check the course details to find out whether the course you are interested in has online or off-campus components. An increasing number of CIT's courses include subjects or components that can be studied fully or partially online. Check the course details to find out whether the course you are interested in has online or off-campus components</p>
						</div>
					</div><hr>					
					

					<div class="row">
						<center><h3 style="font-weight: bold">Episode 03</h3></center>
						<div class="col-md-6">
							<div class="embed-responsive embed-responsive-4by3"  style="border-radius: 5px">
  								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iM_KMYulI_s"></iframe>
							</div>
						</div>
						
						<div class="col-md-6">
							
							<h6 style="float:right">Date:12/12/2018</h6>
							<br><br>
							<p style="text-align: justify;">An increasing number of CIT's courses include subjects or components that can be studied fully or partially online. Check the course details to find out whether the course you are interested in has online or off-campus components. An increasing number of CIT's courses include subjects or components that can be studied fully or partially online. Check the course details to find out whether the course you are interested in has online or off-campus components</p>
						</div>
					</div><hr>					
					
					<div class="row">
						<center><h3 style="font-weight: bold">Episode 04</h3></center>
						<div class="col-md-6">
							<div class="embed-responsive embed-responsive-4by3"  style="border-radius: 5px">
  								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EdxXZZ2x0dw"></iframe>
							</div>
						</div>
						
						<div class="col-md-6">
							
							<h6 style="float:right">Date:12/12/2018</h6>
							<br><br>
							<p style="text-align: justify;">An increasing number of CIT's courses include subjects or components that can be studied fully or partially online. Check the course details to find out whether the course you are interested in has online or off-campus components. An increasing number of CIT's courses include subjects or components that can be studied fully or partially online. Check the course details to find out whether the course you are interested in has online or off-campus components</p>
						</div>
					</div><hr>					
					
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