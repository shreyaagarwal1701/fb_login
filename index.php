<?php

session_start();
if(isset($_POST['userID']))
{
	$_SESSION['userID']=$_POST['userID'];
	$_SESSION['email']=$_POST['email'];
	$_SESSION['picture']=$_POST['picture'];
	$_SESSION['name']=$_POST['name'];
	$_SESSION['gender']=$_POST['gender'];
	$_SESSION['link']=$_POST['link'];
	$_SESSION['accessToken']=$_POST['accessToken'];

	exit("success");


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Sparks Era</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>




	
</head>
<style >
body,html
{
	height: 100%;
	margin:0;
	
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
<body>

	<script>

		var person={userID: "",name:"",accessToken: "",picture:"",email:"",gender:"",link:"",first_name:"",last_name:""};

		  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

		function login()
		{
			FB.login(function(response)
			{
			
			
				if(response.status=="connected")
				{

					person.userID=response.authResponse.userID;
					person.accessToken=response.authResponse.accessToken;
					FB.api('/me?fields=id,name,first_name,last_name,gender,locale, email,picture',function(userData)
					{
						//console.log(userData);
						person.name=userData.name;
						//console.log(userData.name);
						person.email=userData.email;
						//console.log(userData.email);
						person.picture=userData.picture.data.url;
						person.first_name=userData.first_name;
						person.last_name=userData.last_name;
						person.gender=userData.gender;
						
					

						
						
						$.ajax({

							url: "index.php",
							method:"POST",
							data: person,
							dataType:'text',
							success:function(serverResponse){
								if(serverResponse=="success")
									console.log(serverResponse);

									window.location="display.php";
							}
						});

//} 
					});

				}
			
			});
		}

	

  window.fbAsyncInit = function() {
    FB.init({
      appId            : '143833459668879',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.8'
    });
  };


</script>




<!--<div id="userData"></div><!-->

<div class="bg">
	<nav >
		<div class="container-fluid">
			<div class="navbar-header">
				
		<img src="http://localhost/internship/Capture.png" style=" height: 53px;width: 200px; margin-left: 5px;margin-right: 60px;margin-top: 3px;margin-bottom: 0px ; " />
	
	        </div>
			<form class="navbar-form navbar-right" action="">
				<div class="form-group">
				  <input  type="text" class="form-control" placeholder="Username" name="uname">
				  <input type="text" class="form-control" placeholder="Password" name="pass">
				  <button type="submit" class="btn btn-success btn-medium"> Sign In</button>

				</div>
				  </form>
				</div>
			</nav>
		
			<div style="font-family: oswald;font-size: 50px;font-weight: bold;color: white ;margin-left:280px;margin-top: 20px;">
				<i> The spark divine dwells in thee:  Let it grow</i><br><br>
			</div>
			<div class="bt">

			<form action="" >
				   <div class="input-group">
                   <span class="input-group-addon " style="background-color:white; "><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" class=" inp" name="" placeholder="First and Last Name"/><br>
			</div>
			 <div class="input-group">
                   <span class="input-group-addon" style="background-color:white; "><i class="glyphicon glyphicon-envelope"></i></span>
				<input type="text" class="inp" name="email" placeholder= "Email"><br>
			</div>
			 <div class="input-group">
                   <span class="input-group-addon" style="background-color:white; "><i class="glyphicon glyphicon-earphone"></i></span>
				<input type="text" class="inp" name="pno" placeholder="Mobile Number"><br>
			</div>
			 <div class="input-group">
                   <span class="input-group-addon" style="background-color:white; "><i class="glyphicon glyphicon-lock"></i></span>
				<input type="Password" class="inp" name="pass" placeholder="Password"><br>
			</div>
				<button type="submit" class="btn btn-success btn-lg" style="margin-top: 20px; margin-left: 143px; background-color: green; opacity:0.8;">Sign Up</button>
			</form>
			<hr style="width:90%;margin-left:0px;margin-bottom: 3px">
			<div style="color: white; text-align: center;font-weight: bold;font-size: 20px;margin-left: -25px;margin-bottom: 7px">Or connect with</div>
   <div class="input-group" style="margin-left: 140px;">
   	          <span class="input-group-addon" style=" background: #3B5998;border:none;"><i class="fa fa-facebook"></i></span><button  onclick="login()" style="background: #476bb8;color: white;border: none;height: 29px;" >Facebook</button>
       
                   
   


</div>
                     


		</div>
	
</div>
</div>
	



</body>





</html>