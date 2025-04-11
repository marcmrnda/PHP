<?php 

$user_id = $_REQUEST["id"];

echo $user_id;

include("connection.php");

$get_record = mysqli_query($connection,"SELECT * FROM users WHERE user_id='$user_id'");

while ($row_edit = mysqli_fetch_array($get_record)) {
                $db_name = $row_edit["name"];
                $db_email = $row_edit["email"];
                $db_address = $row_edit["address"];
                $db_section = $row_edit["section"];
                $db_contact = $row_edit["contact_no"];
}

?>

<form action="Update_Record.php" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <input type="text" name="new_name" value="<?php echo $db_name; ?>">
    <input type="text" name="new_email" value="<?php echo $db_email; ?>">
    <input type="text" name="new_address" value="<?php echo $db_address; ?>">
    <input type="text" name="new_section" value="<?php echo $db_section; ?>">
    <input type="text" name="new_contact" value="<?php echo $db_contact; ?>">
    <input type="submit" value="Update">
</form>
