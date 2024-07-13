<?php
// session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="fashionova";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo "connection establish";
}
else{
    echo "connection failed".mysqli_connect_error();
}

?>