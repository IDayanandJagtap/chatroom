<?php 
    include_once 'dbconnect.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($email) && !empty($password)){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $user_pass = $row['password'];
            $enc_pass = md5($password);

            if($user_pass === $enc_pass){
                session_start();
                $_SESSION['unique_id'] = $row['unique_id'];
                echo "success";
            }
            else{
                echo "Incorrect Password";
            }
        }
        else{
            echo "Email not found :(";
        }
    }
    else{
        echo "Please fill all Fields !";
    }





?>