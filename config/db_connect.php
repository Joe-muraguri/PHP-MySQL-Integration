<?php

    //database connection
$conn = mysqli_connect('localhost', 'joe', 'phptest', 'ninja_pizza');

//check connection
if(!$conn){
    die("Failed to connect") . mysqli_connect_error();
}

?>