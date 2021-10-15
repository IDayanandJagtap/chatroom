<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: enter_room.php");
}
?>

<?php include_once "header.php"; ?>
<link rel="stylesheet" href="css/form.css">

<div class="form-container ">
    <h3 class="mt-2">Login to Continue</h3>
    <div class="wrapper my-4">
        <section class="form login">
            <header>DJ Chatroom</header>
            <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Don't have an Account ? <a href="signup.php">Create now</a></div>
        </section>
    </div>
</div>
<?php include_once 'partials/footer.php' ?>
<script src="Js/pass-show-hide.js"></script>
<script src="Js/login.js"></script>

</body>

</html>