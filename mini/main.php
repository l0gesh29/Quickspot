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
            
        }
        #myInput {
            width: 200px;
            height: 30px;
            margin-top: 20px;
            margin-left: 1130px;
        }

        #cont1 {
            margin-top: 130px;
            margin-left: 65px;
        }

        #cont1 h1 {
            color: white;
        }

        #cont1 button {
            background-color: rgb(54, 54, 243);
            width: 170px;
            height: 50px;
            font-size: 20px;
            border: solid 3px black;
            color: white;
            margin-left: 50px;
            margin-top: 20px;
        }

        #cont2 {
            margin-top: -108px;
            margin-left: 550px;
        }

        #cont2 h1 {
            margin-left: 56px;
            color: white;
        }

        #cont2 button {
            background-color: rgb(54, 54, 243);
            width: 170px;
            height: 50px;
            font-size: 20px;
            border: solid 3px black;
            color: white;
            margin-left: 50px;
            margin-top: 20px;
        }

        #cont3 {
            margin-top: -100px;
            margin-left: 1030px;
        }

        #cont3 h1 {
            margin-left: 20px;
            color: white;
        }

        #cont3 button {
            background-color: rgb(54, 54, 243);
            width: 170px;
            height: 50px;
            font-size: 20px;
            border: solid 3px black;
            color: white;
            margin-left: 50px;
            margin-top: 20px;
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
    <body background="photos/ph.jpg">
        <nav>
            <div class ="logo"><img src="photos/mp.jpg" class="logo" alt="logo" height="40" width="60"></a></div>
            <label class="logo">QuickSpot</label>
            <ul>
                <li><a class="active" href="main.php">Home</a></li>
                <li><a href="newphone.php">Newphone</a></li>
                <li><a href="service1.php">Service</a></li>
                <li><a href="used1.php">usedphones</a></li>
                <li><a href="notification.php">Notification</a></li>
                <li><a href="bankdetails.php">BankDetails</a></li>
                <li><a href="mycart.php">Mycart</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
        <input class="form-control" id="myInput" type="text" placeholder="Select Locations..">
        <div id="cont1">
            <h1>
                SEARCH PRODUCT
            </h1>
            <button id="btn1" onclick = "document.location='newphone.php'"><b>GET START</b></button>
        </div>
        <div id="cont2">
            <h1>
                SERVICES
            </h1>
            <button id="btn2" onclick = "document.location='service1.php'"><b>SEARCH</b></button>
        </div>
        <div id="cont3">
            <h1>
                USED PHONES
            </h1>
            <button id="btn3" onclick = "document.location='used1.php'"><b>GET START</b></button>
        </div>
        <footer>
            <h3>&copy Copyright Reserveed</h3> 
            <h2>Helpline : 0442-897645</h2>
        </footer>
    </body>
</html>