<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">email</th>
      <th scope="col">edit</th>
   
    </tr>
  </thead>
  <tbody>
  <?php
include 'connection.php';
$select = "SELECT * FROM `users`";
$query = mysqli_query($con,$select);

while($row = mysqli_fetch_array($query)) {
    echo "<tr>";
echo "<td>" . $row["id"] . "</td>";

echo "<td>" . $row["username"] . "</td>";

echo "<td>" . $row["password"] . "</td>";
echo "<td>" . $row["email"] . "</td>";
      
echo '<td>
<a href="edit.php?pid='.$row["id"].'" class="btn  btn-outline-success" role="button" aria-pressed="true">edit</a>

</td>';

echo "</tr>"; 
}

?>
  </tbody>
</table>
</body>
</html>