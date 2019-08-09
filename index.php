<title>Home</title>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/srv/pdo/includes/header.php";
?>
<div class="wrapper grad">
    <?php if (isset($_GET['message'])) : ?>
        <?php if ($_GET['message'] == 'success') : ?>
            <div class="msg alert alert-success">Registered successfully!</div>
        <?php endif; ?>
        <?php if ($_GET['message'] == 'logout') : ?>
            <div class="msg alert alert-info">Come back soon!</div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if (isset($_SESSION['user'])) : ?>
        <?php if(isset($_GET['message']) && $_GET['message']=='welcome'): ?>
            <div class="msg alert alert-info">Welcome <?php echo $_SESSION['user']; ?></div>
        <?php endif; ?>
    <?php endif; ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/multiple.js/0.0.1/multiple.min.js" integrity="sha256-4+vj4FcENMARxlfF1mJhD1UoK8TQDUKRoFtJO+Z0TIU=" crossorigin="anonymous"></script>
<script>
    var multiple = new Multiple({
        selector: '.grad',
        background: 'linear-gradient(to bottom, #0072ff, #00c6ff)'
    });
</script>