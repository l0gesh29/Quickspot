<!DOCTYPE html>
<html lang='en' dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Quick Spot</title>
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
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
                <li><a class="active" href="main.php">Home</a></li>
                <li><a href="item.php">Items</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="bank.php">Bank</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav><center>
        <div class="container-fluid">
            <br> </br>
              <center><h2>Notification</h2></center>          
              <table class="table">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Specifications</th>
                    <th>Accept</th>
                    <th>Decline</th>
                  </tr>
                </thead>
                <tbody>
                <div>
                  <tr>
                    <td  id="GFG_DIV1">Vivov12</td>
                    <td  id="GFG_DIV2"><center><div id="bt1">Temper change,Front camera not displaying</div></center></td>
                    <td  id="GFG_DIV3"><input type="button" class="btn6 btn" value="accept" id="toggle1" onclick="myFunction1()"></td>
                    <td  id="GFG_DIV4"><button class="btn5 btn" onClick = "GFG_Fun1()">Decline</button></td>
                  </tr>
                </div>
                  <tr>
                    <td id="GFG_DIV1">Samsung F12</td>
                    <td id="GFG_DIV2"><center><div id="bt2">Phone not displaying while calling and sound is very low</div></center></td>
                    <td id="GFG_DIV3"><input type="button" class="btn6 btn" value="accept" id="toggle2" onclick="myFunction2()"></td>
                    <td id="GFG_DIV4"><a href="#"><button class="btn5 btn" onClick = "GFG_Fun2()">Decline</button></a></td>
                  </tr>
                  <tr>
                    <td id="GFG_DIV1">Redmi 9pro</td>
                    <td id="GFG_DIV2"><center><div id="bt1">Phone auto switch-off while using for 2 hours when battery in good life</div></center></td>
                    <td id="GFG_DIV3"><input type="button" class="btn6 btn" value="accept" id="toggle3" onclick="myFunction3()"></td>
                    <td id="GFG_DIV4"><a href="#"><button class="btn5 btn" onClick = "GFG_Fun3()">Decline</button></a></td>
                  </tr>
                </tbody>
              </table>
            </div></center>
        <footer>
            <h3>&copy Copyright Reserveed</h3> 
            <h2>Helpline : 0442-897645</h2>
        </footer>
    
  <script>
    
    function GFG_Fun1() 
  {
    var div1 = document.getElementById('GFG_DIV1');
    var div2 = document.getElementById('GFG_DIV2');
    var div3 = document.getElementById('GFG_DIV3');
    var div4 = document.getElementById('GFG_DIV4');
    div1.remove();
    div2.remove();
    div3.remove();
    div4.remove();
  }
  
  function GFG_Fun2() 
  {
    var div1 = document.getElementById('GFG_DIV1');
    var div2 = document.getElementById('GFG_DIV2');
    var div3 = document.getElementById('GFG_DIV3');
    var div4 = document.getElementById('GFG_DIV4');
    div1.remove();
    div2.remove();
    div3.remove();
    div4.remove();
  }
    function GFG_Fun3() 
  {
    var div1 = document.getElementById('GFG_DIV1');
    var div2 = document.getElementById('GFG_DIV2');
    var div3 = document.getElementById('GFG_DIV3');
    var div4 = document.getElementById('GFG_DIV4');
    div1.remove();
    div2.remove();
    div3.remove();
    div4.remove();
  }
    function myFunction1()
    {
        var change = document.getElementById("toggle1");
        if (change.value=="accepted") change.value = "accept";
        else change.value = "accepted";
    }
    function myFunction2()
    {
        var change = document.getElementById("toggle2");
        if (change.value=="accepted") change.value = "accept";
        else change.value = "accepted";
    }
    function myFunction3()
    {
        var change = document.getElementById("toggle3");
        if (change.value=="accepted") change.value = "accept";
        else change.value = "accepted";
    }
  </Script>
    </body>

</html