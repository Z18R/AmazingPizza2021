<?php
//connect to database
$conn = mysqli_connect('localhost', 'joezer', 'test1234', 'ninja_pizza');

if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}

?>