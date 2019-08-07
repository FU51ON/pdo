<?php
include $_SERVER['DOCUMENT_ROOT'] . "/srv/pdo/includes/header.php";
?>
<div class="wrapper grad">
  <div>
    <form action="login.php" method="POST">
      <label for="email">Email :</label>
      <input type="text" name="email">

      <label for="pwd">Password :</label>
      <input type="password" name="pwd">

      <button type="submit" name="login">Login</button>
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