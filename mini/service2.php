<!DOCTYPE html>
<html lang='en' dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Quick Spot</title>
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        </style>
    </head>
    <body>
        <nav>
            <div class ="logo"><img src="photos/mp.jpg" class="logo" alt="logo" height="40" width="60"></a></div>
            <label class="logo">QuickSpot</label>
            <ul>
                <li><a href="main.php">Home</a></li>
                <li><a href="newphone.php">Newphone</a></li>
                <li><a class="active" href="service1.php">Service</a></li>
                <li><a href="used1.php">Usedphones</a></li>
                <li><a href="notification.php">Notification</a></li>
                <li><a href="bankdetails.php">BankDetails</a></li>
                <li><a href="mycart.php">Mycart</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
        <footer>
            <h3>Helpline : 0442-897645</h3> 
            <h2>Social Media</h2>
        </footer>
        <div class="container">
        <div class="box">
            <div class="imgBx">
                <img src="photos/tn.jpeg" alt="tn" height="250"><br>
                <button class="btn btn1">Add to Cart</button>
                <button id="btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Request</button>
            </div> 
            <div class="content">
            <p class="text-center"><b>Name:</b> Asus,Realme,Micromax,Honor______________________</p><br>
            <p class="text-center"><b>Starting Price:</b>400___________________________________________</p>
            <p class="text-center"><b>Shop:</b>SmartWay_____________________________________________</p>
            <p class="text-center"><b>Location:</b> Townhall,coimbatore_____________________________</p>
            <p class="text-center"><b>Contact:</b> 9857723533_______________________________________</p>
            <p class="text-center"><b>Specification:</b> The battery capacity of the phone is good also display and performance too.</p>
            <br><right>
            <div style="text-align: right;"><button class="btn btn3" onclick = "document.location='service1.php'">Back</button></right></div>
            </div>
        </div>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h1 class="modal-title">Item Details</h1>
                  <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                <input type="text" name="name1" id="idi1" placeholder="Item Name"><br><br>
                <input type="text" name="Qty" id="idi2" placeholder="Description"><br><br>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Send Request</button>
                </div>
                
                </div>
            </div>
        </div>
    </body>
</html>