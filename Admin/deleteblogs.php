<?php include 'header.php'; 
$id = $_POST['id'];
$qry = "DELETE from blogs where id = '$id'";
include '../dbconnection.php';
$result=mysqli_query($conn,$qry);
include '../closeconnection.php';
if ($result)
{
    header ('Location: blogs.php');
}
else{
    echo "Failed to Delete blogs";
}
include 'footer.php' ?>