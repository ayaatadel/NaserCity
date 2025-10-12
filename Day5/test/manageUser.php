<?php
require "index.php";
require "bootstrap.php";
var_dump($_POST); // id , btn-delete
if (isset($_POST["btn-delete"])) {
    // delete user from db

    $id = $_POST["id"];
    $result = $database->delete("users", $id);
    if ($result) {
        header("Location: allUsers.php?message=User deleted successfully");
    } else {

        header("Location: allUsers.php?error=Error deleting user");
    }
}

    if (isset($_POST["btn-add"])) {

        // var_dump($_POST);
        // // add user to db
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordIncrypted = md5($_POST["password"]);
        // echo $name . " " . $email . " " . $password;
        $data = [
            "name" => $name,
            "email" => $email,
            "password" => $passwordIncrypted
        ];
        $result = $database->create("users", $data);
        if ($result) {
            header("Location: allUsers.php?message=User added successfully");
        } else {

            header("Location: addUser.php?message=Error adding user");
        }


    }

    if (isset($_POST["btn-edit"])) {
        // get user data from db
        $id = $_POST["id"];
          $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        // echo $name . " " . $email . " " . $password;
        $data = [
            "name" => $name,
            "email" => $email,
            "password" => $password
        ];
        $result = $database->update("users", $id, $data);
        if ($result) {
            header("Location: allUsers.php?message=User updated successfully");
        } else {

            header("Location: editUser.php?message=Error updating user");
        }
        
    }

