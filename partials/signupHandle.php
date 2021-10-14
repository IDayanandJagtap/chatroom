<?php 
    include_once 'dbconnect.php';
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                echo "This email already exists.";
            }
            else{
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];

                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);

                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            if(move_uploaded_file($tmp_name, "Images/".$new_img_name)){
                                $ran_id = rand(time(), 100000000);
                                $encrypt_pass = md5($password);
                                $insert_sql = "INSERT INTO `users` ( `unique_id`, `fname`, `lname`, `email`, `password`, `img`) VALUES ('$ran_id', '$fname', '$lname', '$email', '$encrypt_pass', '$new_img_name');";
                                $result = mysqli_query($conn, $insert_sql);

                                if($result){
                                    $select_sql = "SELECT * FROM users WHERE email = '$email'";
                                    $result = mysqli_query($conn, $select_sql);

                                    if(mysqli_num_rows($result) > 0){
                                        $row = mysqli_fetch_assoc($result);
                                        session_start();
                                        $_SESSION['unique_id'] = $row['unique_id'];
                                        echo "success";
                                    }
                                    else{
                                        echo "This email does not Exist !";
                                    }
                                }
                                else{
                                    echo "Something went wrong, Please try again.";
                                }
                            }

                        }
                        else{
                            echo "Please upload an image file - jpeg, png, jpg";
                        }
                    }
                    else{
                        echo "Please upload an image file - jpeg, png, jpg";
                    }
                }
            }
        }
        else{
            echo "This is not valide email.";
        }
    }
    else{
        echo "Please field all fields.";
    }



?>