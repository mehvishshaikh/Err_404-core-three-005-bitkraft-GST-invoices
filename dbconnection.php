<?php
$con=mysqli_connect('localhost','root','','err_404');

if(!$con)
{
    die('Please Check Your Connection'.mysqli_error($con));
}
?>