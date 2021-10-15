<?php  
    session_start();
    include_once 'partials/dbconnect.php';
    if(!isset($_SESSION['room_id']) && !isset($_SESSION['unique_id'])){
        header("location: enter_room.php");
    }

?>
<?php include_once 'header.php' ?>
<link rel="stylesheet" href="Css/chat.css">

<div class="chat-container">
    <div class="wrapper my-4">
        <section class="chat-area">
            <header>
                <?php
                    // session_start();
                    $room_id = $_SESSION['room_id'];
                    $sql = "SELECT * FROM rooms WHERE room_id ='$room_id'";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_assoc($result);
                    }
                    else{
                        header("location: enter_room.php");
                    }
                ?>
                <a href="enter_room.php" class="back=icon mx-3 "><i class="fas fa-arrow-left"></i></a>
                <div class="details">
                    <span><?php echo $row['name']?> </span>
                </div>
            </header>
            <div class="chat-box">

            </div>
            <form action="" class="typing-area">
                <input type="text" name="incoming_id" class="incoming_id" value="<?php echo $_SESSION['unique_id'] ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
</div>

<?php include_once 'partials/footer.php' ?>

<script src="Js/chatroom.js"></script>
</body>
</html>
