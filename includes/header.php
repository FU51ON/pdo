<?php
include "dbh.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/srv/pdo/styles/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/multiple.js/0.0.1/multiple.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Yatra+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
  <header class="grad">
    <ul class="header">
      <li class="logo-container">
        <div class="logo">
          <a href="/srv/pdo/index.php">
            <span class="txt-bold">Logo</span><span>Here</span>
          </a>
        </div>
      </li>
      <li class="main-nav">
        <div>
          <ul>
            <a href="/srv/pdo/includes/login.php">
              <li>Login</li>
            </a>
            <a href="/srv/pdo/includes/register.php">
              <li>Register</li>
            </a>
          </ul>
        </div>
      </li>
    </ul>
  </header>
</body>

</html>