<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chatroom";

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if(!$conn){
        die ("Error".mysqli_connect_error());
    }


?>