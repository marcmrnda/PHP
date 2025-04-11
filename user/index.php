<?php 
session_start();

if (isset($_SESSION["user_id"])) {

    $user_id = $_SESSION["user_id"];
    include("../connection.php");
    $get_record = mysqli_query ($connection, "SELECT * FROM users WHERE user_id='$user_id'");
    while ($row_edit = mysqli_fetch_assoc ($get_record) ) {
    $db_name = $row_edit["name"];
    $db_address = $row_edit["address"];
    $db_email = $row_edit["email"];
    }

    echo"Welcome, $db_name! <a href='logout.php'>Login Out</a>";
} else {
    echo "You must login first! <a href='../login.php'>Login Now!</a>";

}


?>