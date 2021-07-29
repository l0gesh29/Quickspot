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
            <div class ="logo"><img src="photos/mp.jpg" class="logo" alt="logo" height="40" width="60"></a></div>
            <label class="logo">QuickSpot</label>
            <ul>
                <li><a href="main.php">Home</a></li>
                <li><a href="newphone.php">Newphone</a></li>
                <li><a href="service1.php">Service</a></li>
                <li><a class="active" href="used1.php">Usedphones</a></li>
                <li><a href="notification.php">Notification</a></li>
                <li><a href="bankdetails.php">BankDetails</a></li>
                <li><a href="mycart.php">Mycart</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
        <footer>
            <h3>&copy Copyright Reserveed</h3> 
            <h2>Helpline : 0442-897645</h2>
        </footer>
        <div class="box">
            <div class="imgBx">
                <img src="photos/usedphimg.jpg" alt="tn" height="250" width="240">
                <button class="btn btn1">Add to Cart</button>
                <button class="btn btn2" onclick = "document.location='payments1.php'">Buy Now</button>
            </div>
            <div class="content">
                <p class="text-center"><b>Name:</b> Asus,Vivo,Redmi,oppo,Honor.</p><br>
            <p class="text-center"><b>Strating Price:</b> 6,000</p><br>
            <p class="text-center"></b>Shop:</b> Selvam Service Center</p><br><br>
            <p class="text-center"><b>Location:</b> Eechanaari,coimbatore</p><br><br>
            <p class="text-center"><b>Contact:</b> 9859667897</p><br><br>
            <p class="text-center"><b>Description:</b> All you get here is good and cheap.You can get your phone within few days with 6 months warenty.</p>
            <br><br><right>
            <div style="text-align: right;"><button class="btn btn3"onclick = "document.location='used1.php'" >Back</button></right></div>
            </div>
        </div>
        
    </body>
</html>