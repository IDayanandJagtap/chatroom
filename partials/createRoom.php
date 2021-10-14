<?php 
    include_once 'dbconnect.php';

    $room_name = mysqli_real_escape_string($conn, $_POST["room_name"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirm_pass = mysqli_real_escape_string($conn, $_POST["conf_pass"]);


    if(!empty($room_name) && !empty($password) && !empty($confirm_pass)){
        $sql = "SELECT * FROM rooms WHERE name = '$room_name'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo "Room name already taken !";
        }
        else{
            $ran_id = rand(time(), 100000000);
            $enc_pass = md5($password);

            $insert_sql = "INSERT INTO `rooms` (`room_id`, `name`, `password`) VALUES ('$ran_id', '$room_name', '$enc_pass');";
            $query = mysqli_query($conn, $insert_sql);

            if($query){
                $sql = "SELECT * FROM rooms WHERE name = '$room_name'";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    session_start();
                    $_SESSION['room_id'] = $row['room_id'];
                    echo "success";
                }
            }
            else{
                echo "Something went wrong, Please try again...";
            }
        }
    }
    else{
        echo "Please fill all Fields !";
    }


?>