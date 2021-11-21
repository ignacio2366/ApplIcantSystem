<?php 

include_once 'connection.php';

$Select =  mysqli_query($con,"SELECT `Id`, `Firstname`, `Lastname` FROM `name` where id ='" . $_GET['id'] . "' ");
$row = mysqli_fetch_array($Select);


if(isset($_POST['Update']))
{
    mysqli_query($con,"UPDATE `name` SET `Firstname`='". $_POST['Firstname']."',`Lastname`='". $_POST['Lastname']."' WHERE id ='". $_GET['id']."' ");

    echo"alert('Done')";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<a class="control-label" href="./table.php">table</a>

<form action="" method="POST">

  <input type="text" name="Firstname" value="<?php echo $row['Firstname']; ?>" class="form-control w-25" placeholder=""> <br>
  <input type="text" name="Lastname"  value="<?php echo $row['Lastname']; ?>" class="form-control w-25" placeholder=""> <br>
  <input type="submit" class="btn btn-primary bg-danger" name="Update" value="Update">



</form>
</body>
</html>