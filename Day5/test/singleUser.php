<?php
require "index.php";
require "bootstrap.php";
// var_dump($database);
$id=$_GET["id"];
$user = $database->show("users",$id );
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
  <table class="table w-75 mx-auto my-5 border border-1">
    <thead>
      <tr>

        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>


      <?php 
        echo "<tr>";
        echo "<td>" . $user["name"] . "</td>";
        echo "<td>" . $user["email"] . "</td>";
        echo "<td>";
        echo " <button class='btn btn-primary mx-1'>Edit</button>";
        echo "<button class='btn btn-danger'>Delete</button>";
        echo "<a href='allUsers.php' class='text-decoration-none'> <button class='btn btn-secondary mx-1'>Back</button> </a>";
        echo "</td>";
        echo "</tr>";
    ?>





    </tbody>
  </table>
</body>

</html>