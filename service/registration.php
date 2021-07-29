<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registration</title>
	<style>
		input{
            color:black;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            border-color: black;
            cursor: pointer;
            width: 150%;
            opacity: 0.9;
		}
		body{
			background-color: lemonchiffon;
		}
		.row{
			background: white;
			border-radius: 28px;
			box-shadow: 12px 12px 22px grey;
		}
		img{
			border-top-left-radius: 30px;
			border-bottom-left-radius: 30px;
            width: 550px;
            height: 1050px;
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
				  <div class="col-lg-5" class="img_">
					  <img src="photos/lg.jpg" class="img-fluid" alt="">
				  </div>
				  <div class="col-lg-7 px-5 pt-5">
					  <h1 class="font-weight-bold-py-2">REGISTERATION</h1>
					  <form>
						  <div class="form-row">
							  <div class="col-lg-7">
								  <input type="text" placeholder="Name" class="form=control my-3 p-2">
							  </div>
						  </div>
						  <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" placeholder="ShopName" class="form=control my-3 p-2">
                            </div>
                        </div>
						  <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" placeholder="MobileNumber" class="form=control my-3 p-2">
                            </div>
                        </div>
						  <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" placeholder="Address" class="form=control my-3 p-2">
                            </div>
                        </div>
                        
						  <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="Password" class="form=control my-3 p-2">
                            </div>
                        </div>
                        <div class="form-row">
                          <div class="col-lg-7">
                              <input type="password" placeholder="Confirm Password" class="form=control my-3 p-2">
                          </div>
                      </div>
						  <div class="form-row">
							<div class="col-lg-7">
								<button type="buton" class="btn1 mt-3 mb-5"><a href="login.php">Register</a></button>
							</div>
						  </div>
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