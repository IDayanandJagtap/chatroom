<?php
// session_start();
// if (isset($_SESSION['unique_id'])) {
//     header("location: users.php");
// }
?>

<?php include_once "header.php"; ?>
<link rel="stylesheet" href="css/form.css">

<div class="form-container ">
    <h3 class="mt-4">Sign Up to Continue</h3>
    <div class="wrapper my-4">
        <section class="form signup">
            <header>DJ Chatroom</header>
            <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/JPG" required>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>
</div>
<?php include_once 'partials/footer.php' ?>
<script src="Js/pass-show-hide.js"></script>
<script src="Js/signup.js"></script>

</body>

</html>