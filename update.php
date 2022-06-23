<?php

include 'connect.php';

$ID=$_GET['updateid'];

$sql="select * from `crud` where ID=$ID";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$email=$row['Email'];
$mobile=$row['Mobile'];
$password=$row['Password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

$sql= "update `crud` set ID=$ID, name='$name' , email='$email' , mobile='$mobile', password='$password' where ID=$ID";

$result = mysqli_query($con, $sql);

if($result){
    header('location:display.php');
}else{
    die (mysqli_error($con));
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>crud</title>
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                
                <form method="POST">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value="<?php echo $name; ?>">

                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off" value="<?php echo $email; ?>" >

                    <label>Mobile</label>
                    <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="mobile" autocomplete="off" value="<?php echo $mobile; ?>" >

                    <label>Password</label>
                    <input type="text" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off" value="<?php echo $password; ?>" >
                    


                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
                </div>
        </div>
    </div>
</body>
</html>