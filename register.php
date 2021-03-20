<?php
include 'dbconnection.php';

$name=$_POST['username'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$query="SELECT * FROM register WHERE Email='$email' OR Username='$name'";
$result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        echo'<script type="text/javascript">alert("user already exists");</script>';
        header("refresh:2; url=index.html");
    }
    else{
        $sql="INSERT INTO register(Username,Password,Email) VALUE ('$name','$pass','$email')";
        if(!mysqli_query($con,$sql)){
            echo '<script type="text/javascript">alert("data not inserted");
            window.location="index.html";
            </script>';
        }
        else{
            echo '<script type="text/javascript">alert("data inserted");
            window.location="index.html";
            </script>';
        }  
}

?>
