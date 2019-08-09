<title>Register</title>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/srv/pdo/includes/header.php";
?>
<div class="wrapper grad">
    <?php if (isset($_GET['message'])): ?>
    <?php if ($_GET['message'] == 'empty') : ?>
        <div class="msg alert alert-warning">Fields are empty!</div>
    <?php elseif ($_GET['message'] == 'firstname') : ?>
        <div class="msg alert alert-warning">First Name must be alphabetical!</div>
    <?php elseif ($_GET['message'] == 'lastname') : ?>
        <div class="msg alert alert-warning">Last Name must be alphabetical!</div>
    <?php elseif ($_GET['message'] == 'email') : ?>
        <div class="msg alert alert-warning">Email not valid!</div>
    <?php elseif ($_GET['message'] == 'password') : ?>
        <div class="msg alert alert-warning">Password must contain at least 8 chars!</div>
        <?php elseif ($_GET['message'] == 'exist') : ?>
        <div class="msg alert alert-danger">Email already in use!</div>
    <?php elseif ($_GET['message'] == 'success') : ?>
        <div class="msg alert alert-success">Registered successfully!</div>
    <?php endif; ?>
<?php endif; ?>

    <div>
        <form action="register_handler.php" method="POST">
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName">

            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName">

            <label for="email">Email:</label>
            <input type="text" name="email">

            <label for="pwd">Password:</label>
            <input type="password" name="pwd">

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