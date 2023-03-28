<?php
$conn = mysqli_connect("localhost", "root", "","demo");
if($conn -> connect_error){
    die("connection failed".$conn -> connect_error);
}
?>