<?php 
include("connection.php");

$user_id = $_REQUEST["id"];



include("connection.php");

$get_record = mysqli_query($connection,"SELECT * FROM users WHERE user_id='$user_id'");

while ($row_delete = mysqli_fetch_array($get_record)) {
                $db_name = $row_delete["name"];
                $db_email = $row_delete["email"];
                $db_address = $row_delete["address"];
                $db_section = $row_delete["section"];
                $db_contact = $row_delete["contact_no"];
}

?>

<form action="Really_delete.php" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <h1>Wanna delete this? You ain't gonna regret it? Are you really sure?</h1>
    <input type="submit" value="YES"> <a href="index.php">No</a> 
</form>