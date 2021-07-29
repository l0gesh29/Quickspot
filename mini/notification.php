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
            <div class ="logo"><img src="photos/mp.jpg" class="logo" alt="logo" height="40" width="60"></div>
            <label class="logo">QuickSpot</label>
            <ul>
                <li><a href="main.php">Home</a></li>
                <li><a  href="newphone.php">Newphone</a></li>
                <li><a href="service1.php">Service</a></li>
                <li><a href="used1.php">Usedphones</a></li>
                <li><a class="active" href="notification.php">Notification</a></li>
                <li><a href="bankdetails.php">BankDetails</a></li>
                <li><a href="mycart.php">Mycart</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
        <footer>
            <h3>&copy Copyright Reserveed</h3> 
            <h2>Helpline : 0442-897645</h2>
        </footer>
    <style>
        .cont img{
            height: auto;
        }
        pre
        {
            width: 100px;
            text-align:right;
            line-height: 50px;

        }
        table, th, td {
      border: 2px solid black;
      border-collapse: collapse;
      
    }
    td {
      padding: 15px;
      text-align: center;
    }
    tr{
        text-align: center;
    }
    #t01 tr:nth-child(even) {
      background-color: white;
    }
    #t01 tr:nth-child(odd) {
     background-color: white;
    }
    </style>
    <br><br>
    
    <center>
    <table id=t01 style="width:75%">
        <br><br>
        <tr>
            <td><b>Your order will reach you within a day</b></td>
        </tr>
        <tr>
            <td><b>your order on VivoV19 has been placed</b></td>
        </tr>
        <tr>
            <td><b>Your request towards selvam service center is Accepted.Give your product within a day</b></td>
        </tr>
        <tr>
            <td><b>Your order will reach you within a day</b></td>
        </tr>
        <tr>
            <td><b>your order on Asus Maxpro 4 has been placed</b></td>
        </tr>
    </table>
</center>
    </body>
</html>