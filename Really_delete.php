<?php 

include("connection.php");

$user_id = $_POST["user_id"];

mysqli_query($connection,"DELETE FROM users WHERE user_id='$user_id'");

echo "<script language='javascript'>alert('Record has been deleted! ') </script>";
echo "<script>window.location.href='index.php';</script>";


?>