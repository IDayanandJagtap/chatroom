<?php 
    session_start();
    if(isset($_SESSION['unique_id']) && isset($_SESSION['room_id'])){
        include_once 'dbconnect.php';
        $room_id = $_SESSION['room_id'];
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";

        $sql = "SELECT * FROM messages WHERE room_id = '$room_id'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            // fetching results from messages
            while($row = mysqli_fetch_assoc($result)){
                $user_id = $row['incoming_msg_id'];
            // selecting users
            $user_select = "SELECT * FROM users WHERE unique_id = '$user_id'";
            $query = mysqli_query($conn, $user_select);

            if($query){
                $info = mysqli_fetch_assoc($query);
            }
            if($row['outgoing_msg_id'] === $outgoing_id){
                $output .='
                    <div class="chat outgoing">
                        <div class="details">
                            <p>You:<br>
                            '.$row['msg'].'</p>
                        </div>
                    </div>';
            }
            else{
                $output .='
                    <div class="chat incoming">
                        <div class= "details">
                            <p>'.$info['fname'].':<br>
                            '.$row['msg'].'</p>
                        </div>
                    </div>';
            }
                

            }
        }
        else{
            $output .= '<div class="text"> No messages available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }
    else{
        echo "fail";
    }
