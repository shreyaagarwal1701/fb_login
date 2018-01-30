<?php

session_start();
if (!isset($_SESSION['userID'])) {

	header("location:index.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Members Dashboard</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

	
</head>
<style >
body
{
	font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      background-color:aliceblue;
	
}
.bg
{
	background-image: url("https://ak2.picdn.net/shutterstock/videos/27972832/thumb/1.jpg");
	height: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;

}

nav
{
	
	overflow: hidden;
	margin: 0;
	padding:5px;
	background-color: darkgreen;

}	
.navbar{
	border-radius: 0;
	border:0;

}
.bt
{
	border: none;
	height: 70%;
	width:40%;
	margin-left: 380px;
	margin-bottom: 70px;
	margin-top: -70px;
	padding-top: 46px;
	padding-left: 90px;

}
.inp
{
	box-sizing: border-box;
	width:90%;
	height: 52px;
}
.fa-facebook {
  
  color: white;
}
.fa-linkedin {

  color: white;
}

.fa-twitter {
 
  color: white;
}

</style>
<body >
	<script >
		



	</script>

	<nav class="navbar ">
		<div class="container-fluid">
			<div class="navbar-header">
				
		<img src="http://localhost/internship/Capture.png" style=" height: 53px;width: 200px; margin-left: 5px;margin-right: 60px;margin-top: 5px;margin-bottom: 5px ; " />
	
	        </div>
			<a href="media.php"><button  class="navbar-form navbar-right" style="margin-right: 20px;margin-top: 15px; background-color:firebrick;border-radius: 3px; color: white;font-weight: bold; " >Home</button></a>
				
				</div>
			</nav>
<div class="container-fluid bg-1 text-center">
  <h3 class="margin" style="font-weight: bold;"><?php echo $_SESSION["name"] ;?></h3>
  <img src="<?php echo $_SESSION["picture"]; ?>" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="150" height="150">
  <h3 style="font-weight: bold">
  <br><br>	User Id: <div style="display: inline-block; padding: 5px; border : 2px black;"><?php echo $_SESSION["userID"];?></div> <br><br>
				<!--Name: <?php //echo $_SESSION["name"];?><br> !-->
				<?php if(isset($_SESSION["email"]))
				{
                    ?> Email:<div style="display: inline-block; padding: 5px; border : 2px black;"><?php echo $_SESSION["email"];?></div> <br><br>
				 <?php } ?>
				Gender: <div style="display: inline-block; border : 2px black; padding: 5px;"><?php echo $_SESSION["gender"];?></div> <br><br>
   </h3>
</div>	
</body>
</html>