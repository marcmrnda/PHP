<?php 

include("connection.php");

$user_id = $_POST["user_id"];
$new_name = $_POST["new_name"];
$new_email = $_POST["new_email"];
$new_address = $_POST["new_address"];
$new_section = $_POST["new_section"];
$new_contact = $_POST["new_contact"];


mysqli_query($connection,"UPDATE users SET name='$new_name', address='$new_address', email='$new_email', section='$new_section', contact_no='$new_contact'
WHERE user_id='$user_id'");

echo "<script language='javascript'>alert('Record has been updated! ') </script>";
echo "<script>window.location.href='index.php';</script>";


?>