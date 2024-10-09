<?php
$server = "localhost";
$user = 'root';
$pass = '';
$db = 'lictblog';


//createconnection
$conn = mysqli_connect($server, $user, $pass, $db);

//check connection
if (!$conn) {
    die("Connection failed :" . mysqli_connect_errno());
}
