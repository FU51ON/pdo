<?php
    include $_SERVER['DOCUMENT_ROOT']."/srv/pdo/includes/header.php";

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
                $_SESSION['user']=$name_db;
            }else {
                echo "error somewhere";
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
?>
