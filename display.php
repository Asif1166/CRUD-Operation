<?php

include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Crud Operation</title>
    <style>
        body{
            margin: 30px;
        }
    </style>
</head>
<body>
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">SI No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>


  <?php



$sql = "select * from `crud`";
$result = mysqli_query($con, $sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){
        $ID = $row['ID'];
        $Name = $row['Name'];
        $Email = $row['Email'];
        $Mobile = $row['Mobile'];
        $Password = $row['Password'];
        echo '<tr>
        <th scope="row">'.$ID.'</th>
        <td>'.$Name.'</td>
        <td>'.$Email.'</td>
        <td>'.$Mobile.'</td>
        <td>'.$Password.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$ID.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$ID.'" class="text-light">Delete</a></button>
        </td>

        </tr>';

      
    }
}

?>

  
</table>
<div >
<button class="btn btn-primary "> <a href="user.php" class="text-light">Add User</a> </button>
</div>
</body>
</html>