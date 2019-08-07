<?php

    include "dbh.php";
    /*password_hash("rasmuslerdorf", PASSWORD_DEFAULT);*/

    if (isset($_POST['register'])) {
        try {
            $STH = $conn->prepare("INSERT INTO user (firstName,lastName,email,pwd) VALUES (:firstName, :lastName, :email, :pwd)");

            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);


            $STH->bindParam(':firstName', $firstName);
            $STH->bindParam(':lastName', $lastName);
            $STH->bindParam(':email', $email);
            $STH->bindParam(':pwd', $hashed_pwd);

            $STH->execute();
            echo "yeet";

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
?>
<div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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
<a href="../index.php">homepage</a>

<?php
    #close connection
    $conn = null;
?>