<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
	<style>
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		body{
			background: rgb(219, 226, 226);
		}
		.row{
			background: white;
			border-radius: 30px;
			box-shadow: 12px 12px 22px grey;
		}
		img{
			border-top-left-radius: 30px;
			border-bottom-left-radius: 30px;
		}
		.btn1{
			border: none;
			outline: none;
			height: 50px;
			width: 50%;
			background-color: black;
			color: white;
			border-radius: 4px;
			font-weight: bold;
		}
		.btn1:hover{
			background: white;
			border: 1px solid;
			color: black;
		}
	</style>
  </head>
  <body>
	  <section class="Form my-4 mx-5">
		  <div class="container">
			  <div class="row no-gutters">
				  <div class="col-lg-5">
					  <img src="photos/lg.jpg" class="img-fluid" alt="">
				  </div>
				  <div class="col-lg-7 px-5 pt-5">
					  <h1 class="font-weight-bold-py-3">LOGIN</h1>
					  <h4>Sign into your account</h4>
					  <form action="" method="">
						  <div class="form-group">
							  <div class="col-lg-7">
								  <input type="email" placeholder="User Name" id="email" class="form=control my-3 p-2">
							  </div>
						  </div>
						  <div class="form-group">
							<div class="col-lg-7">
								<input type="password" placeholder="*********" class="form=control my-3 p-2">
							</div>
						  </div>
						  <div class="form-row">
							<div class="col-lg-7">
								<button type="buton" class="btn1 mt-3 mb-5" name=""><a href="main.php">Login</a></button>
							</div>
						  </div>
						  <a href="#">Forget password</a>
						  <p>Don't have an account? <a href="registration.php">Register</a></p>
					  </form>
				  </div>
			  </div>
		  </div>
	  </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>