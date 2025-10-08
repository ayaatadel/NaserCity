<?php
// $_POST;
// var_dump($_GET);
require "bootstrap.php";
require "navbar.php";
require "connection.php";
echo "<h1 class='text-center text-danger'> Server page </h1>";
// var_dump($_POST);  // ===> key , value


// var_dump($connection);
if (isset($_POST["btn-register"])) {
    // var_dump($_POST);
    $userName = $_POST['name'];
    $userEmail = $_POST["email"];
    $userPassword = $_POST["password"];
    $encryptedPassword = md5($userPassword);


    $namePattern = "/^[a-zA-Z]{3,}$/";
    $passwordPattern = '/^[0-9]{6,15}$/';
    if (!preg_match($namePattern, $userName)) {
        header("location:./register.php?message=name must be more than 3 characters");
        exit;
    }
    if (!preg_match($passwordPattern, $userPassword)) {
        header("location:./register.php?message=password must be numbers");
        exit;
    }
    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        header("location:./register.php?message=email must contain @ and . ");
        exit;
    }

    $emailQuery = "SELECT * FROM users WHERE email='$userEmail'";
    $sqlQuery = $connection->prepare($emailQuery);
    $sqlQuery->execute();
    $resultEmail = $sqlQuery->fetch(PDO::FETCH_ASSOC);
    if ($resultEmail) {
        header('location:register.php?message=Email already exist');
        exit;
    }

    $query = "insert into users (name,email,password)
 values ('$userName','$userEmail','$encryptedPassword')";
    $sqlQuery = $connection->prepare($query);
    //  var_dump($sqlQuery);
    $response = $sqlQuery->execute(); {
        if ($response) {
            header('location:login.php?response=register successfully you can login Now !!!');
            exit;
        }
    }
}


if (isset($_POST["btn-login"])) {

    $userEmail = $_POST["email"];
    $userPassword = $_POST["password"];
    $encryptedPassword = md5($userPassword);

    $query = "SELECT * FROM users WHERE email='$userEmail' and password='$encryptedPassword'";
    $sqlQuery = $connection->prepare($query);
    $sqlQuery->execute();
    $user = $sqlQuery->fetch(PDO::FETCH_ASSOC);
    if ($user) {

        $_SESSION["loginId"] = $user['id'];

        header("location:profile.php?message=login successfully");
        exit;
    } else {
        header("location:login.php?message=check your email or password");
        exit;
    }
}
