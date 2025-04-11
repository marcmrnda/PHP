<?php
include("connection.php");
 
$name = $address = $email = $section = $contact = $password = $cpassword = "";
$nameErr = $addressErr = $emailErr = $sectionErr = $contactErr = $passwordErr = $cpasswordErr = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if(empty($_POST["name"])) {
        $nameErr = "Your Name is Required!";
    }
    else {
        $name = $_POST["name"];
    }
 
 
    if(empty($_POST["address"])) {
        $addressErr = "Your Address is Required!!";
    }
    else {
        $address = $_POST["address"];
    }
   
 
    if(empty($_POST["email"])) {
        $emailErr = "Your Email Address is Required!!";
    }
    else {
        $email = $_POST["email"];
    }

    if(empty($_POST["section"])) {
        $sectionErr = "Your Section is Required!!";
    }
    else {
        $section = $_POST["section"];
    }

    if(empty($_POST["contact"])) {
        $contactErr = "Your Contact Number is Required!!";
    }
    else {
        $contact = $_POST["contact"];
    }
    if(empty($_POST["password"])) {
        $passwordErr = "Your Password is Required!!";
    }
    else {
        $password = $_POST["password"];
    }
    if(empty($_POST["cpassword"])) {
        $cpasswordErr = "Your Confirm Password is Required!!";
    }
    else {
        $cpassword = $_POST["cpassword"];
    }

    include("connection.php");
    if($name && $address && $email && $section && $contact && $password && $cpassword) {
        $check_email = mysqli_query($connection, "SELECT * FROM users WHERE email='$email'");
        $check_email_row = mysqli_num_rows($check_email);
        
        if($check_email_row > 0) {
            $emailErr = "Email is already registered!";
        } 
        else {
            $query = mysqli_query($connection,"INSERT INTO users (name,email,address,section,contact_no,password,account_type) VALUES('$name','$email','$address','$section','$contact','$cpassword','2')");

            echo "<script language='javascript'>alert('New Record has been inserted!') </script>";
            echo "<script>window.location.href-'index.php';</script>";
        }
    }
   
}
 
?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("nav.php"); ?>

    <div class="all">
    <div class="container">
        <h1>Register Students</h1>
    <form class="register" action="<?php htmlspecialchars("PHP_SELF"); ?>" method="post">
    
    <label for="name">Full Name:</label>
    <input type="text" name="name" value="<?php echo $name; ?>" >
    <span class="error"><?php echo $nameErr; ?></span>
    <label for="address">Full Address:</label>
    <input type="text" name="address" value="<?php echo $address; ?>">
    <span class="error"><?php echo $addressErr; ?></span>
    <label for="email">Email Address:</label>
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>
    <label for="email">Section:</label>
    <input type="text" name="section" value="<?php echo $section; ?>">
    <span class="error"><?php echo $sectionErr; ?></span>
    <label for="email">Contact Number:</label>
    <input type="text" name="contact" value="<?php echo $contact; ?>">
    <span class="error"><?php echo $contactErr; ?></span>
    <label for="email">Password:</label>
    <input type="password" name="password" value="<?php echo $password; ?>">
    <span class="error"><?php echo $passwordErr; ?></span>
    <label for="email">Confirm Password:</label>
    <input type="password" name="cpassword" value="<?php echo $cpassword; ?>">
    <span class="error"><?php echo $cpasswordErr; ?></span>
    <input type="submit" value="Submit">
 
    
   
    </form>
    </div>

    <div class="secContainer">
        <?php 
        
        ?>

        <h1>Students</h1>
        <table>
            <tr>
                <th>Name </th>
                <th>Email </th>
                <th>Address </th>
                <th>Section </th>
                <th>Contact No. </th>    
                <th>Option</th>
            </tr>

            <?php 

            
           $view = mysqli_query($connection ,"SELECT * FROM users");

            while($row = mysqli_fetch_assoc($view) ) {
                
                $db_id = $row["user_id"];
                $db_name = $row["name"];
                $db_email = $row["email"];
                $db_address = $row["address"];
                $db_section = $row["section"];
                $db_contact = $row["contact_no"];


                echo "<tr>
                <td>$db_name</td>
                <td>$db_email</td>
                <td>$db_address</td>
                <td>$db_section</td>
                <td>$db_contact</td>
                <td><a href='Edit.php?id=$db_id'>Update</a> <a href='Delete.php?id=$db_id'>Delete</a></td>
                </tr>";

            }
            ?>
        </table>
    </div>
    </div>
    

   
</body>
</html>