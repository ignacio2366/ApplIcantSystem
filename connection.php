<?php 

$ServerName = "localhost";
$UserName = "root";
$password = "";
$DBName = "crud";


$con = mysqli_connect($ServerName, $UserName, $password, $DBName);

if(!$con)
{
    
}
else
{
   echo " <script> console.log('Connected')</script>";
}
?>