<?php 

    $conn = mysqli_connect( 'localhost' , 'root' , '' , 'php demo');
    if(!$conn){
        die('Connection Failed');
    }