<!DOCTYPE html>
<html lang='en' dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Quick Spot</title>
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                position: fixed;
                left: 0;
                bottom: 0;
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
                <li><a class="active" href="item.php">Items</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="bank.php">Bank</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
        <div class="container">
            <div class="text-left">
            <button id="btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Products +</button> <br>
            </div>
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h1 class="modal-title">Product Details</h1>
                      <button type="button1" class="close" data-dismiss="modal">×</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    <input type="text" name="name1" id="idi1" placeholder="Product Name">  <br><br>
                    <input type="text" name="Qty" id="idi2" placeholder="Quantity">  <br><br>
                    <input type="text" name="Location" id="idi3" placeholder="Price">  <br><br>
                    <input type="file" name="Location" id="idi3" placeholder=" "><br><br>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn5 btn-danger" data-dismiss="modal">Close</button>
                      <button type="button" class="btn0 btn-primary" data-dismiss="modal">Add</button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
        <style type="text/css">


            *{
             margin: 0px;
             padding: 0px;
            }
            body{
             font-family: arial;
            }
            .main{
            
             margin: 2%;
            }
            
            .card{
                 width: 20%;
                 display: inline-block;
                 box-shadow: 2px 2px 20px black;
                 border-radius: 5px; 
                 margin: 2%;
                 background-color: white;
                }
            
            .image img{
              width: 100%;
              border-top-right-radius: 5px;
              border-top-left-radius: 5px;
              
            
             
             }
            
            .title{
             
              text-align: center;
              padding: 10px;
              
             }
            
            h1{
              font-size: 20px;
             }
            
            .des{
              padding: 3px;
              text-align: center;
             
              padding-top: 10px;
                    border-bottom-right-radius: 5px;
              border-bottom-left-radius: 5px;
            }
            button{
              margin-top: 40px;
              margin-bottom: 10px;
              background-color: white;
              border: 1px solid black;
              border-radius: 5px;
              padding:10px;
            }
            button:hover{
              background-color: black;
              color: white;
              transition: .5s;
              cursor: pointer;
            }
            
            </style>
            <div class="main">
            
             <!--cards -->
            
            <div class="card">
            
            <div class="image">
        
               <img src="photos/vivo-v21.jpg"></a>
            </div>
            <div class="title">
             <h1>Vivo v21<br></h1>
             <p>17,000<br></p>
             <form>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                <input type="number" id="number" value="0" style="width:40px;"/>
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
             </form>
            </div><br>
            <div class="des">
            <label class="switch">
            <input type="checkbox">
                <span class="slider"></span>0    
            </label>
            </div>
            </div>
            <!--cards -->
            
            
            <div class="card">
            
            <div class="image">
                
               <img src="photos/vivo-v20.jpg"></a>
            </div>
            <div class="title">
             <h1>Vivo v20</h1>
             <p>16,000<br></p>
             <form>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                <input type="number" id="number" value="0" style="width:40px;"/>
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
             </form>
            </div>
            <div class="des">
                <label class="switch">
                    <input type="checkbox">
                        <span class="slider"></span>0    
                    </label>
            </div>
            </div>
            <!--cards -->
            
            
            <div class="card">
            
            <div class="image">
               <img src="photos/vivo-x60.jpg"></a>
            </div>
            <div class="title">
             <h1>Vivo x60</h1><br>
             <p>19,000<br></p>
             <form>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                <input type="number" id="number" value="0" style="width:40px;"/>
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
             </form>
            </div>
            <div class="des">
                <label class="switch">
                    <input type="checkbox">
                        <span class="slider"></span>0    
                    </label>
            </div>
            </div>
            <!--cards -->
            
            
            <div class="card">
            
            <div class="image">
               <img src="photos/asus-rog5.jpg"></a>
            </div>
            <div class="title">
             <h1>Asus rog5</h1><br>
             <p>12,000<br></p>
             <form>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                <input type="number" id="number" value="0" style="width:40px;"/>
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
             </form>
             
            </div>
            <div class="des">
                <label class="switch">
                    <input type="checkbox">
                        <span class="slider"></span>0    
                    </label>
            </div>
            </div>
            <!--cards -->
            
            
            <div class="card">
            
            <div class="image">
            <img src="photos/redmi-note10pro.jpg"></a>
            </div>
            <div class="title">
             <h1>Redmi Note 10pro</h1>
             <p>20,000<br></p>
             <form>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                <input type="number" id="number" value="0" style="width:40px;"/>
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
             </form>
            
            </div>
            <div class="des">
                <label class="switch">
                    <input type="checkbox">
                        <span class="slider"></span>0    
                    </label>
            </div>
            </div>
            <!--cards -->
            
            <div class="card">
            
            <div class="image">
               <img src="photos/redmi-note10.jpg"></a>
            </div>
            <div class="title">
             <h1>Redmi Note 10</h1>
             <p>19,000<br></p>
             <form>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                <input type="number" id="number" value="0" style="width:40px;"/>
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
             </form>
            
            </div>
            <div class="des">
                <label class="switch">
                    <input type="checkbox">
                        <span class="slider"></span>0    
                    </label>
            </div>
            </div>
            <!--cards -->
            
            <div class="card">
            
            <div class="image">
               <img src="photos/redmi-note9.jpg"></a>
            </div>
            <div class="title">
             <h1>Redmi Note 9</h1>
             <p>18,000<br></p>
             <form>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                <input type="number" id="number" value="0" style="width:40px;"/>
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
             </form>
             
            </div>
            <div class="des">
                <label class="switch">
                    <input type="checkbox">
                        <span class="slider"></span>0    
                    </label>
            </div>
            </div>
            <!--cards -->
            <div class="card">
            
            <div class="image">
               <img src="photos/redmi-note8.jpg"></a>
            </div>
            <div class="title">
             <h1>Redmi Note 8</h1>
             <p>17,000<br></p>
             <form>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                <input type="number" id="number" value="0" style="width:40px;"/>
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
             </form>
            </div>
            <div class="des">
                <label class="switch">
                    <input type="checkbox">
                        <span class="slider"></span>
                    </label>
            </div>
            </div>
            <!--cards -->
            
            
            <div class="card">
            
            <div class="image">
               <img src="photos/samsung-s21-ultra.jpg"></a>
            </div>
            <div class="title">
             <h1>Samsung S21 Ultra</h1>
             <p>21,000<br></p>
             <form>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                <input type="number" id="number" value="0" style="width:40px;"/>
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
             </form>
            </div>
            <div class="des">
                <label class="switch">
                    <input type="checkbox">
                        <span class="slider"></span>0    
                    </label>
            </div>
            </div>

            <div class="card">
            
            <div class="image">
               <img src="photos/samsung-note20.jpg"></a>
            </div>
            <div class="title">
             <h1>Samsung Note 20</h1>
             <p>23,000<br></p>
             <form>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                <input type="number" id="number" value="0" style="width:40px;"/>
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
             </form>
            </div>
            <div class="des">
                <label class="switch">
                    <input type="checkbox">
                        <span class="slider"></span>0    
                    </label>
            </div>
            </div>

                <div class="card">
            
                    <div class="image">
                       <img src="photos/samsung-galaxyA71.jpg"></a>
                    </div>
                    <div class="title">
                     <h1>Samsung Galaxy a71</h1>
                     <p>19,500<br></p>
                     <form>
                        <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                        <input type="number" id="number" value="0" style="width:40px;"/>
                        <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
                     </form>
                    </div>
                    <div class="des">
                        <label class="switch">
                            <input type="checkbox">
                                <span class="slider"></span>0    
                            </label>
                    </div>
                    </div>

                    <div class="card">
            
                        <div class="image">
                           <img src="photos/samsung-galaxym51.jpg"></a>
                        </div>
                        <div class="title">
                         <h1>Samsung Galaxy m51</h1>
                         <p>15,000<br></p>
                         <form>
                            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                            <input type="number" id="number" value="0" style="width:40px;"/>
                            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
                         </form>
                        </div>
                        <div class="des">
                            <label class="switch">
                                <input type="checkbox">
                                    <span class="slider"></span>0    
                                </label>
                        </div>
                        </div>

                        <div class="card">
            
                            <div class="image">
                               <img src="photos/Poco-X3.jpg"></a>
                            </div>
                            <div class="title">
                             <h1>Poco x3</h1>
                             <p>16,000<br></p>
                             <form>
                                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                                <input type="number" id="number" value="0" style="width:40px;"/>
                                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
                             </form>
                            </div>
                            <div class="des">
                                <label class="switch">
                                    <input type="checkbox">
                                        <span class="slider"></span>0    
                                    </label>
                            </div>
                            </div>

                            <div class="card">
            
                                <div class="image">
                                   <img src="photos/Oneplus-9.jpg"></a>
                                </div>
                                <div class="title">
                                 <h1>Oneplus 9pro</h1>
                                 <p>30,000<br></p>
                                 <form>
                                    <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                                    <input type="number" id="number" value="0" style="width:40px;"/>
                                    <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
                                 </form>
                                </div>
                                <div class="des">
                                    <label class="switch">
                                        <input type="checkbox">
                                            <span class="slider"></span>0    
                                        </label>
                                </div>
                                </div>

                                <div class="card">
            
                                    <div class="image">
                                       <img src="photos/apple-12.jpg"></a>
                                    </div>
                                    <div class="title">
                                     <h1>Apple Iphone12</h1>
                                     <p>40,000<br></p>
                                     <form>
                                        <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                                        <input type="number" id="number" value="0" style="width:40px;"/>
                                        <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
                                     </form>
                                    </div>
                                    <div class="des">
                                        <label class="switch">
                                            <input type="checkbox">
                                                <span class="slider"></span>0    
                                            </label>
                                    </div>
                                    </div>
                                </div>
        <!--<footer>
            <h3>&copy Copyright Reserveed</h3> 
            <h2>Helpline : 0442-897645</h2>
        </footer>-->
    </body>
</html>
