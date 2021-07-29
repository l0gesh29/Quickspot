<?php
require_once('connection.php');
session_start();
if(isset($_POST['login']))
{
    /*if(empty($_POST['regno']) || empty($_POST['password']))
    {

    }*/
    $Regno=$_POST['Regno'];
    $Password=$_POST['Password'];
	if($Regno=="rest" && $Password=="rest"){
			header("location:index1.php");
		}
    else{
		$query="select * from users where regno='".$_POST['Regno']."' and password='".$_POST['Password']."'";
    $_result=mysqli_query($conn,$query);
    if(mysqli_fetch_assoc($_result)){
        $_SESSION['Regno']=$Regno;
        $_SESSION['Password']=$Password;
		
        header("location:FoodPage.php");
    }
    else{
        echo "invalid username or password";
    }
	}

}
else{
    echo "not working";
}

?>


