<?php 
    include_once 'dbconnect.php';

    $room_name = mysqli_real_escape_string($conn, $_POST['room_name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $conf_pass = mysqli_real_escape_string($conn, $_POST['conf_pass']);

    if(!empty($room_name) && !empty($password)){
        $sql = "SELECT * FROM rooms WHERE name = '$room_name'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0){
            echo "Room name already taken !";
        }
        else{
            if($password === $conf_pass){
                
            
            $ran_id = rand(time(), 1000000000);
            $encrypt_pass = md5($password);

            $sql = "INSERT INTO `rooms` ( `room_id`, `name`, `password`) VALUES ( '$ran_id', '$room_name', '$encrypt_pass');";
            $query = mysqli_query($conn, $sql);

            if($query){
                $select_sql = "SELECT * FROM rooms WHERE name = '$room_name'";
                $result = mysqli_query($conn, $select_sql);

                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    session_start();
                    $_SESSION['room_id'] = $row['room_id'];
                    echo "success";
                }
                else{
                    echo "Invalid room name !";
                }
            }
            else{
                echo "Something went wrong, Please try again later...";
            }
        }
        else{
            echo "Passwords do not match !";
        }
        }
    }
    else{
        echo "Please fill all Fields !";
    }

?>



