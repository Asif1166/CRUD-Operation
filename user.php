<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

$sql= "insert into `crud`(name, email, mobile, password)
values('$name', '$email', '$mobile', '$password')";

$result = mysqli_query($con, $sql);

if($result){
   //echo "Data Inserted Successfully";
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
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">

                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">

                    <label>Mobile</label>
                    <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="mobile" autocomplete="off">

                    <label>Password</label>
                    <input type="text" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off">
                    


                    <div >
                    <button type="submit" class="btn btn-primary " name="submit">Submit</button>
                    </div>
                </form>
                </div>
        </div>
    </div>
</body>
</html>