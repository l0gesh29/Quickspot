<!DOCTYPE html>
<html>
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
            #cont2 {
              margin-top: -65px;
              margin-left: -430px;
            }

.box{
    height: 300px;
    width: 40%;
    border: 2px solid rgb(79, 137, 243);
    background-color: white;
}
.product{
    margin-top: 10px;
    margin-left: 5%;
}
.delivery{
    margin-top: 10px;
    margin-left: 5%;
}
.payment{
    text-align: center;
}
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 12px;
  font-size: 14px;
  margin-left: 30%;
  border: none;
  cursor: pointer;
  border-radius: 8%;
  display: inline;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}
.dropbtn1 {
  background-color: #3498DB;
  color: white;
  padding: 12px;
  margin-left: 30px;
  font-size: 14px;
  border:none;
  cursor: pointer;
  border-radius: 8%;
  display: inline;
}
.dropbtn1:hover, .dropbtn1:focus {
  background-color: #2980B9;
}
.dropbtn2 {
  background-color: #3498DB;
  color: white;
  padding: 12px;
  margin-left: 20px;
  font-size: 14px;
  border:none;
  cursor: pointer;
  border-radius: 8%;
  display: inline;
}
.dropbtn3 {
  background-color: #3498DB;
  color: white;
  padding: 12px;
  margin-left: 20px;
  font-size: 14px;
  border:none;
  cursor: pointer;
  border-radius: 8%;
  display: inline;
}
.last_button{
    border-radius:5px;
    border: 1px solid rgb(11, 12, 12);
    padding: 11px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 8px;
    margin-top: 3%;
    margin-left: 430px;
    cursor: pointer;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 330px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content1 a{
  color: black;
  padding: 20px 15px;
  text-align: center;
  text-decoration: none;
  display: block;
}

.dropdown-content1 a:hover {background-color: #ddd;}

.show1 {display: block;}

.dropdown-content2 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 330px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content2 a{
  color: black;
  padding: 20px 15px;
  text-align: center;
  text-decoration: none;
  display: block;
}

.dropdown-content2 a:hover {background-color: #ddd;}

.show2 {
  display: block;
}

.dropdown-content3 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 330px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content3 a{
  color: black;
  padding: 20px 15px;
  text-align: center;
  text-decoration: none;
  display: block;
}

.dropdown-content3 a:hover {background-color: #ddd;}

.show3 {
  display: block;
  }
</style>
</head>
<body>
    <nav>
        <div class ="logo"><img src="photos/mp.jpg" class="logo" alt="logo" height="40" width="60"></a></div>
        <label class="logo">QuickSpot</label>
        <ul>
            <li><a href="main.php">Home</a></li>
            <li><a class="active" href="newphone.php">Newphone</a></li>
            <li><a href="service1.php">Service</a></li>
            <li><a href="used1.php">Usedphones</a></li>
            <li><a href="notification.php">Notification</a></li>
            <li><a href="bankdetails.php">BankDetails</a></li>
            <li><a class="active" href="mycart.php">Mycart</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>
    <footer>
        <h3>Helpline : 0442-897645</h3> 
        <h2>Social Media</h2>
    </footer>
    <div class='box'>
        <div>
    </div>
<form>
    <div class="product">
        <label for="product_q">Product Quantity:</label>
        <input type="number"  id="quantity"  name="name" required data-error="Please enter quantity"></td><br><br>
    </div>
    <div class="delivery">
        <label for="delivery_a">Delivery Address:</label>
        <textarea type="text" id="delivery_a" name="delivery_a" rows="4" cols="50">
            </textarea>
        <p class='payment'>Payments</p>
        <br>
    </div>
<div class="dropdown">
    <button onclick="myFunction()" class="dropbtn" >UPI</button>
    <div id="myDropdown" class="dropdown-content">
        <a href='https://pay.google.com/'>Google Pay<img src="photos/202007300336381.png" alt=""height="20px"width="25px"></a>
    <a href='https://business.paytm.com/payment-link'>Paytm<img src="photos/Paytm.jpeg"alt=""height="20px"width="25px"></a>
    <a href='https://www.phonepe.com/'>Phonepe<img src="photos/Phonepe.png"alt=""height="20px"width="25px"></a>
    </div>
</div>
<div class="dropdown">
    <button onclick="myFunction1()" class="dropbtn1" >Net Banking</button>
    <div id="myDropdown1" class="dropdown-content1">
      <a href='#kvb'>Karur Vysya Bank<img src="photos/kvb.png" alt=""height="20px"width="25px"></a>
      <a href='#axis'>Axis Bank<img src="photos/axis.png"alt=""height="20px"width="25px"></a>
      <a href='#kotak'>Kotak Mahindra Bank<img src="photos/kotak.png"alt=""height="20px"width="25px"></a>
        </div>
</div>
<div class="dropdown">
  <button onclick="myFunction2()" class="dropbtn2" >Cerdit/Debit</button>
  <div id="myDropdown1" class="dropdown-content2">
    <a href='#kvb'>Karur Vysya Bank<img src="payment-icon/download.png" alt=""height="20px"width="25px"></a>
    <a href='#axis'>Axis Bank<img src="payment-icon/download (2).png"alt=""height="20px"width="25px"></a>
    <a href='#kotak'>Kotak Mahindra Bank<img src="payment-icon/download (3).png"alt=""height="20px"width="25px"></a>
      </div>
</div>
<div class="dropdown">
  <button onclick="myFunction3()" class="dropbtn3" >CashonDelivery</button>
  <div id="myDropdown1" class="dropdown-content3">
    <a href='#kvb'>Karur Vysya Bank<img src="payment-icon/download.png" alt=""height="20px"width="25px"></a>
    <a href='#axis'>Axis Bank<img src="payment-icon/download (2).png"alt=""height="20px"width="25px"></a>
    <a href='#kotak'>Kotak Mahindra Bank<img src="payment-icon/download (3).png"alt=""height="20px"width="25px"></a>
      </div>
</div>
<button class="last_button" onclick = "document.location='payments.php'" ><b>Buy now</b></button>
<div id="cont2">
<button class="last_button" onclick = "document.location='newphone1.php'" ><b>Back</b></button>
</div>
</form>

<script>
    function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it.
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show1");
}
// Close the dropdown if the user clicks outside of it.
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show1')) {
        openDropdown.classList.remove('show1');
      }
    }
  }
}
</script>
</body>
</html>
