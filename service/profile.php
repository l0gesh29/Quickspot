<!DOCTYPE html>
<html lang='en' dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Quick Spot</title>
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/profile.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
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
                position: fixed;
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
                padding: 19px 10px;
                margin-bottom: 19px;
                left:74%;
            }
            footer h3{
                position: absolute;
                padding: 17px 10px;
                margin-bottom: 19px;
                left:3%;
            }
        </style>
    </head>
    <body>
        <nav>
            <div class ="logo"><img src="photos/mp.jpg" class="logo" alt="logo" height="40" width="60"></div>
            <label class="logo">QuickSpot</label>
            <ul>
                <li><a href="main.php">Home</a></li>
                <li><a href="item.php">Items</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="bank.php">Bank</a></li>
                <li><a class="active" href="profile.php">Profile</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
        <div class="container">
        <div class="row">
            <div class="col-md-4 mt-1">
                <div class="card1 text-center slidebar">
                    <div class="card1-body">
                        <img src="photos/pr.jpg" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <h3>DHINESH</h3>
                            <a href="main.php">Home</a>
                            <a href="item.php">Items</a>
                            <a href="history.php">History</a>
                            <a href="registration1.php">Edit</a>
                            <a href="login.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
            <div calss="col-md-8 mt-1">
                <div class="card mb-3 content">
                    <h1 class="m-3 pt-3">About</h1>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Full Name</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                Dhinesh S
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Shop Name</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                Hometown Mobiles
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Phone</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                9994752821
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Address</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                Palani Street,Ram Nagar,Coimbatore
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>password</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                ********
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Location</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                Near Townhall
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
        <footer>
            <h3>&copy Copyright Reserveed</h3> 
            <h2>Helpline : 0442-897645</h2>
        </footer>
    </body>
</html>