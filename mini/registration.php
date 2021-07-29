<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Site Metas -->
        <title>Quickspot</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <!-- Site Icons -->
        <link rel="shortcut icon" href="images/photos/logo.jpeg" type="image/photos/Logo1">
        <link rel="Logo1" href="images/photos/Logo1.png">
    
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        
    </script>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            background-image: linear-gradient(to right,rgb(252, 423, 191), rgb(252, 423, 191));
        }
        
        .title{
            text-align: center;
            font-size: 20px;
            width: 200px;
            margin-left: auto;
            margin-right: auto;
            padding:5px;
        }
        .form-control{
            border-radius: 10px;
            box-shadow: 10px 10px 10px rgba(36, 35, 35, 0.24);
        }
        @media (min-width: 360px){
            .container{
                background-color: rgb(142, 196, 233);
                width: 260px;
                height: 550px;
                margin-left: 10px;
                margin-right: 100px;
                margin-top: 50px;
                border-radius: 15px;
            }
            #row-7{
                margin-left: 90px;
            }
            #row-8{
                margin-top: -80px;
                margin-left: 65px;
                color: white;
            }
            #row-1,#row-2,#row-3,#row-4,#row-5,#row-6,#row-8,#row-9{
                margin-left: 12px;
            }
            
        }
        @media (min-width: 576px){

        }
        @media (min-width: 768px) {

        }
        @media (min-width: 992px) {

        }
        @media (min-width: 1200px) {
            .container{
                background-color: rgba(0, 255, 221, 0.842);
                width: 500px;
                height: 500px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 80px;
                border-radius: 15px;
            }
            #row-10{
                margin-left: 100px;
                color: white;
            }
        }
    </style>
</head>
<body>
    <form method="POST" action="process.php">
        <center>
    <div class="container" style="height: 150%; width: 40%;" >
        <b><div class="title ">REGISTRATION </div></b>

        <div class="row pt-3" id="row-2">
            <div class="col-11 col-xl-12">
                <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name" required data-error="Please enter your first name">
                <div class="help-block with-errors"></div> 
            </div>
        </div>   

        <div class="row pt-3 " id="row-2">
            <div class="col-11 col-xl-12">
                <input class="form-control" type="number" name="mobile" id="mobile" placeholder="Mobile Number"required data-error="Please enter your mobile number">
                <div class="help-block with-errors"></div>
            </div>
        </div>

       

        <div class="row pt-3" id="row-4">
            <div class="col-11 col-xl-12">
                <input class="form-control" type="text" name="email" id="mailId" placeholder="Mail-Id">
            </div>
        </div>

        <div class="row pt-3" id="row-5">
            <div class="col-11 col-xl-12">
                <input class="form-control" type="text" name="Address" id="Address" placeholder="Address"required data-error="Please enter your address">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="row pt-3" id="row-6">
            <div class="col-11 col-xl-12">
                <input class="form-control" type="text" name="location" idate="location" placeholder="Enter your Location"required data-error="Please enter your location">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <!--div class="row pt-3" id="row-7">
            <div class="col-11 col-xl-12">
                <div class="mapouter mt-3"><div class="gmap_canvas"><iframe width="450" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=karpagam%20institute%20of%20technology&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:center;height:500px;width:500px;margin-left: -150px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            </div>
        </div>-->

        <div class="row pt-3" id="row-9">
            <div class="col-11 col-xl-12">
                <input class="form-control" type="text" name="password" idate="password" placeholder="Password"required data-error="Please enter your password">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="row pt-3" id="row-9">
            <div class="col-11 col-xl-12">
                <input class="form-control" type="text" name="password1" idate="password1" placeholder="Re-Enter Password"required data-error="Please enter your password">
                <div class="help-block with-errors"></div>
            </div>
        </div><br>
    
        <div class="row pt-3" id="row-10">
            <div class="col-8 ">
                <a href="login.php"><input type="button" name="Submit" class="btn btn-primary"  value="Submit"></a>
                <br>
            </div>
        </div>
    </center>
    </div>
    </form>
</body>
</html>