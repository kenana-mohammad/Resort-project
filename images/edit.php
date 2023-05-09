<!DOCTYPE html>
<?php
if(isset($_GET['pid'])){
    $id = $_GET["pid"];
    include 'connection.php';
    $select = mysqli_query($con,"SELECT * FROM `users` WHERE id='$id'");
    $row = mysqli_fetch_array($select);
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="update.php" method="POST">
username:<input type="text"  name="username" value="<?php echo $row["username"] ; ?>">
<br><br>
password:<input type="text" name="password" value="<?php echo $row["password"] ; ?>">
<br><br>
<input type="hidden" name="id" value="<?php echo $row["id"] ; ?>">
<input type="submit">
</form>
</body>
</html>