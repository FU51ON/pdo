<title>Register</title>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/srv/pdo/includes/header.php";
?>
<div class="wrapper grad">
    <div class="msg alert alert-warning">
        <?php
            if (!empty($_GET['message'])) {
                $message = $_GET['message'];
                echo "Note: ".$message;
            }
        ?>
    </div>
    <div>
        <form action="register_handler.php" method="POST">
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName" required>

            <label for="email">Email:</label>
            <input type="text" name="email" required>

            <label for="pwd">Password:</label>
            <input type="password" name="pwd" required>

            <button type="submit" name="register">Register</button>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/multiple.js/0.0.1/multiple.min.js" integrity="sha256-4+vj4FcENMARxlfF1mJhD1UoK8TQDUKRoFtJO+Z0TIU=" crossorigin="anonymous"></script>
<script>
    var multiple = new Multiple({
        selector: '.grad',
        background: 'linear-gradient(to bottom, #0072ff, #00c6ff)'
    });
</script>