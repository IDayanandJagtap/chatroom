<?php  
    include_once 'dbconnect.php';

    $room_name = mysqli_real_escape_string($conn, $_POST["room_name"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    if(!empty($room_name) && !empty($password)){
        $sql = "SELECT * FROM rooms WHERE name = '$room_name'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $room_pass = $row['password'];
            $enc_pass = md5($password);

            if($room_pass === $enc_pass){
                session_start();
                $_SESSION['room_id'] = $row['room_id'];
                echo "success";
                
            }
            else{
                echo "Invalid Password !";
            }
        }
        else{
            echo "No room found !";
        }
    }
    else{
        echo "Please fill all Fields !";    
    }
    

?>