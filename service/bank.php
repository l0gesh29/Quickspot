<!DOCTYPE html>
<html lang='en' dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Quick Spot</title>
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <style>
            body{
            margin:0;
            padding:0; 
            background-color: rgb(252, 243, 191);
        }
        .contain {
            max-width: 1100px;
            height: 400px;
            margin: 8vh auto 5vh 20vh;
            background-color: white;
        }
            .logo img{
                position: absolute;
                margin-top: 19px;
                margin-left: 10px;
            }
            footer{
                position: absolute;
                background-color: #0082e6;
                width:100%;
                color:white;
            }
            footer{
                height: 9vh;
                bottom:0;
            }
            footer h2{
                position: absolute;
                padding: 12px 10px;
                margin-bottom: 19px;
                left:70%;
            }
            footer h3{
                position: absolute;
                padding: 15px 10px;
                margin-bottom: 19px;
                left:1%;
            }
            .btn{
            color:black;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 10px;
            background-color: white;
            cursor: pointer;
            width: 30%;
		}
        .btn1{
			border: none;
			outline: none;
			height: 50px;
			width: 10%;
			background-color: #0082e6;
			color: white;
			border-radius: 10px;
			font-weight: bold;
		}
		.btn1:hover{
			background: #0082e6;
			border: 1px solid;
			color: black;
		}
        </style>
    </head>
    <body>
        <nav>
            <div class ="logo"><img src="photos/mp.jpg" class="logo" alt="logo" height="40" width="70"></a></div>
            <label class="logo">QuickSpot</label>
            <ul>
                <li><a href="main.php">Home</a></li>
                <li><a href="item.php">Items</a></li>
                <li><a href="history.php">History</a></li>
                <li><a class="active" href="bank.php">Bank</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
        </body>                <!-- /.navbar-collapse -->
                <form method="POST" action="process.php">
                    <div class="containr">
                        <b><div class="title ">BANK DETAILS </div></b>
                        <center>
                        <div class="row pt-3" id="row-1">
                            <div class="col-11 col-xl-10">
                                <input class='btn'class="form-control" type="text" name="bankname" id="bankName" placeholder="Enter Bank Name" required data-error="Please enter your Bank name">
                                <div class="help-block with-errors"></div> 
                            </div>
                        </div><br>
                
                        <div class="row pt-3 " id="row-2">
                            <div class="col-11 col-xl-10">
                                <input class='btn' class="form-control" type="text" name="ifsc" id="ifsc" placeholder="Enter IFSC Number"required data-error="Please enter your IFSC number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div><br>
                
                        <div class="row pt-3" id="row-3">
                            <div class="col-11 col-xl-10">
                                <input class='btn'  class="form-control" type="text" name="accno" id="accno" placeholder="Enter Account Number"required data-error="Please enter your Account number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div><br>
                
                        <div class="row pt-3" id="row-4">
                            <div class="col-11 col-xl-10">
                                <input class='btn' class="form-control" type="text" name="holdername" id="holdername" placeholder="Enter Account holder name"required data-error="Please enter Account holder name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div><br>
                
                        <div class="row pt-3" id="row-5">
                            <div class="col-11 col-xl-10">
                                <input class='btn' class="form-control" type="text" name="panno" id="panno" placeholder="Enter your PAN number"required data-error="Please enter your PAN number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div><br>
                        <div class="row pt-3" id="row-8">
                            <div class="col-8 ">
                                <a href="bank.php"><input class="btn1" type="button" name="submit" class="btn btn-primary"  value="Submit"></a>
                            </div>
                        </div><br>
                    </center>
                    </div>
                    </form>
                
</body>
</html>