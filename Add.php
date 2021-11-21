<?php

include_once 'connection.php';



if(isset($_POST['Add']))

{
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];

    $sql = "INSERT INTO `name`( `Firstname`, `Lastname`) VALUES ('$Firstname ',' $Lastname ')";

    if (mysqli_query($con, $sql)) {
		echo "New record created successfully !";
        header("Location: http://localhost/crud/index.php");

	 } else {
		echo "Error: " . $sql . " " . mysqli_error($con);
	 }
	 mysqli_close($con);
  
}





?>