<?php 
require "connection.php";
// var_dump($_SESSION);
$userId=$_SESSION["loginId"];
if(!isset($userId))
{
  header("location:login.php?message=you must login first");
    exit;
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <?php require "bootstrap.php";?>
</head>
<body>
    <?php require "navbar.php";?>
    <h1 class="text-center text-success">Profile Page</h1>
<?php 
$query="select * from users where id= $userId";
$sqlQuery=$connection->prepare($query);
$sqlQuery->execute();
$result=$sqlQuery->fetch(PDO::FETCH_ASSOC);
?>

    <table class="table w-75 mx-auto my-5 border border-1">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td><?php echo $result["name"] ?></td>
      <td><?php echo $result["email"] ?></td>
      <td>
<button class="btn btn-primary">Edit</button>
<button class="btn btn-danger">Delete</button>


      </td>
    </tr>
  
  </tbody>
</table>




</body>
</html>