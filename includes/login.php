<?php
    include "dbh.php";

    if (isset($_POST['login'])) {
        try {

            $email = $_POST['email'];
            $pwd = $_POST['pwd'];

            $query = $conn->prepare("SELECT * FROM user WHERE email='$email' ");

            $query->execute();

            while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
                $pwd_db = $result['pwd'];
                $name_db =$result['firstName'];
            }

            if ($query->rowCount() > 0 && password_verify($_POST['pwd'], $pwd_db) ) {
                echo "welcome ". $result['firstName'];
            }else {
                echo "error somewhere";
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
?>
<div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="email">Email :</label>
        <input type="text" name="email">

        <label for="pwd">Password :</label>
        <input type="password" name="pwd">

        <button type="submit" name="login">Login</button>
    </form>
    <a href="../index.php">homepage</a>
</div>