<?php
// session_start();
// if (isset($_SESSION['unique_id'])) {
//     header("location: users.php");
// }
?>

<?php include_once "header.php"; ?>
<link rel="stylesheet" href="css/form.css">

<div class="form-container ">
    <h3 class="mt-2">Create Room</h3>
    <div class="wrapper my-4">
        <section class="form croom">
            <header>DJ Chatroom</header>
            <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="field input">
                    <label>Room Name</label>
                    <input type="text" name="room_name" placeholder="Enter room name" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field input">
                    <label>Confirm Password</label>
                    <input type="password" name="conf_pass" placeholder="Enter password again" required>
                    <!-- <i class="fas fa-eye"></i> -->
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already have a room ? <a href="enter_room.php">Enter now</a></div>
        </section>
    </div>
</div>
<?php include_once 'partials/footer.php' ?>
<script src="Js/pass-show-hide.js"></script>
<script src="Js/create_room.js"></script>

</body>

</html>