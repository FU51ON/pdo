<?php

    include $_SERVER['DOCUMENT_ROOT']."/srv/pdo/includes/header.php";
    /*password_hash("rasmuslerdorf", PASSWORD_DEFAULT);*/

    if (isset($_POST['register'])) {
        try {
            $STH = $conn->prepare("INSERT INTO user (firstName,lastName,email,pwd) VALUES (:firstName, :lastName, :email, :pwd)");

            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

            $em_ex = $conn->prepare("SELECT `email` FROM user WHERE `email`='$email'");
            $em_ex->execute();

            $STH->bindParam(':firstName', $firstName);
            $STH->bindParam(':lastName', $lastName);
            $STH->bindParam(':email', $email);
            $STH->bindParam(':pwd', $hashed_pwd);
            
            /*if ($firstName != '' && $lastName != '' && $email != '' && $pwd != '') {
                $STH->execute();
                echo "registered successfully!";
            } else {
                header("Location: register.php?message=error");
                echo "All fields are required!";
            }*/
            if(empty($firstName) || empty($lastName) || empty($email) || empty($pwd)){
                exit(header("Location: register.php?message=empty"));

            }else if (!preg_match("/^[a-zA-Z']+$/", $firstName)) {
                exit(header("Location: register.php?message=firstname"));

            }else if (!preg_match("/^[a-zA-Z']+$/", $lastName)) {
                exit(header("Location: register.php?message=lastname"));

            }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                exit(header("Location: register.php?message=email"));

            }else if($em_ex->rowCount() > 0){
                exit(header("Location: register.php?message=exist"));
                
            }else if(strlen($pwd) <= '8'){
                exit(header("Location: register.php?message=password"));
                
            }else {
                $STH->execute();
                exit(header("Location: ../index.php?message=success"));
            }

            /*$STH->execute();
            echo "yeet";*/

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    #close connection
    $conn = null;
