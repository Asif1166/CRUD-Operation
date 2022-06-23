<?php


include 'connect.php';

if(isset($_GET['deleteid'])){
$ID = $_GET['deleteid'];

$sql = "delete from `crud` where ID = $ID";
$result = mysqli_query($con, $sql);
if($result){
   // echo "deleted Successfully";
   header('location:display.php');
}else{
    die (mysqli_error($con));
}
}

?>