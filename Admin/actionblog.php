<?php
if (isset($_POST['create'])) {
    $date = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $photopath = $_POST['photopath'];

    // include /dbconnection.php; 

    //upload image
    $target_dir = '../uploads/';
    $filename = time().$_FILES['photopath']['name'];
    $tmpname = $_FILES['photopath']['tmp_name'];
    //move upload files
    move_uploaded_file($tmpname, $target_dir.$filename);
    $photopath = $filename;

    $query = "INSERT into blogs (blog_date,title, description, photopath) values ('$date','$title','$description','$photopath')";

    //execute query
    include "../dbconnection.php";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('Location: blogs.php');
    } else {
        echo "Failed to create blogs";
    }
    // echo $query;
    include "../closeconnection.php";
}


if (isset($_POST['update']))
{
    $id = $_POST['id'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $oldpath = $_POST['oldpath'];

//upload image
if ($_FILES['photopath']['name'] != "")
{


$target_dir = '../uploads/';
$filename = time().$_FILES['photopath']['name'];
$tmpname = $_FILES['photopath']['tmp_name'];
//move upload files
move_uploaded_file($tmpname, $target_dir.$filename);
$photopath = $filename;

unlink($target_dir.$oldpath);

$query = "INSERT into blogs (blog_date,title, description, photopath) values ('$date','$title','$description','$photopath')";

//delete old image

}


else 
{
    $photopath = $oldpath;
} 
//query 
$qry = "UPDATE blogs SET blog_date = '$date', title = '$title', description = '$description', photopath = '$photopath' WHERE id = '$id' ";
include '../dbconnection.php';
$result=mysqli_query($conn,$qry);
include '../closeconnection.php';
if ($result)
{
    header ('Location: blogs.php');
}
else{
    echo "Failed to update blogs";
}
}


if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $qry = "DELETE FROM blogs WHERE id = $id";
    include '../dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include'../closeconnection.php';
    if($result){
        header('Location:blogs.php');
    }
    else{
        echo "Failed to delete blogs";
    }
}

?>