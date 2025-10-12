<?php
require "index.php";
require "bootstrap.php";
// var_dump($database);

$allUsers = $database->index("users");
// var_dump($allUsers);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php 
  require "navbar.php";
  if(isset($_GET["message"])){
    echo "<div class='alert alert-success w-50 mx-auto my-3'>".$_GET["message"]."</div>";
  }
  if(isset($_GET["error"])){
    echo "<div class='alert alert-danger w-50 mx-auto my-3'>".$_GET["error"]."</div>";
  }
  ?>

<!-- add user button -->
  <div class="d-flex justify-content-between align-items-center w-50 mx-auto">
    <form action="addUser.php" method="POST" class="text-decoration-none w-30 mx-5 d-block">
    <button class="btn btn-success  mx-auto my-3" type="submit" name="btn-add">Add New User</button>
  </form>
  </div>
  <table class="table w-75 mx-auto my-5 border border-1">
    <thead>
      <tr>

        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>


      <?php foreach ($allUsers as $user) {
        echo "<tr>";
        echo "<td>" . $user["name"] . "</td>";
        echo "<td>" . $user["email"] . "</td>";
        echo "<td class='d-flex justify-content-around p-1' >";

        // edit user
 echo "
       <form action='editUser.php' method='POST'>
       <input type='hidden' name='id' value='" . $user["id"] . "'>
       <button class='btn btn-secondary' type='submit' name='btn-edit'>Edit</button>
       </form>";
        // show user
        echo " <a href='singleUser.php?id=" . $user["id"] . "' class='text-decoration-none'> <button class='btn btn-warning mx-1'>Show</button> </a>";

        // delete user
        echo "
       <form action='manageUser.php' method='POST'>
       <input type='hidden' name='id' value='" . $user["id"] . "'>
       <button class='btn btn-danger' type='submit' name='btn-delete'>Delete</button>
       </form>";
        echo "</td>";
        echo "</tr>";
      } ?>






    </tbody>
  </table>
</body>

</html>