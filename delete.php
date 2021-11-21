<?php 

include_once 'connection.php';

$Delete = mysqli_query($con,"DELETE FROM name where id = '". $_GET['id']."'");

echo " <script> alert('Deleted')</script>";
header("Location: http://localhost/crud/table.php");

?>