<!DOCTYPE html>
<html lang='en' dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Quick Spot</title>
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
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
    table {
      border-collapse: separate;
      border-spacing: 0 15px;
    }

    th {
      width: 150px;
      background-color: steelblue;
      text-align: center;
    }
    
    td {
      width: 150px;
      background-color: white;
      text-align: center;
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
                top:700px;
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
                <li><a href="profile.php">Profile</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
        <footer>
            <h3>&copy Copyright Reserveed</h3> 
            <h2>Helpline : 0442-897645</h2>
        </footer>
    </body>
</html>