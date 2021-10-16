<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>DJ - CHATROOM</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .space{
            min-height: 7vh;
        }
        
    </style>
</head>

<body>


<?php
    // session_start();
    if(isset($_SESSION['unique_id'])){
        include_once 'partials/dbconnect.php';
        $id = $_SESSION['unique_id'];
        $sql = "SELECT * FROM users WHERE unique_id = '$id'";
        $result  = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $name = $row['fname'];

            echo '
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand mx-2" href="index.php">DJ CHATROOM</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-current="page" href="#"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"></a>
                                </li>
                            </ul>
                            <div class="d-flex">
                                <button class="btn text-light mx-2" >Hello, '.$name.'</button>
                                <a href="logout.php"><button class="btn btn-outline-light mx-2" >Logout</button></a>
                            </div>
                        </div>
                    </div>
                </nav>';
        }
    }   
    else{
        echo
            '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand mx-2" href="index.php">DJ CHATROOM</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-current="page" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <a href="signup.php"><button class="btn btn-outline-light mx-2" >Sign Up</button></a>
                            <a href="login.php"><button class="btn btn-outline-light mx-2" >Login</button></a>
                        </div>
                    </div>
                </div>
            </nav>';
    }

?>

    

