<?php 

$email = $password = "";
$emailErr = $passwordErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["email"])) {
        $emailErr = "Your Email Address is Required!!";
    }
    else {
        $email = $_POST["email"];
    }


    if(empty($_POST["password"])) {
        $passwordErr = "Your Password is Required!!";
    }
    else {
        $password = $_POST["password"];
    }

    if($email && $password) { 
        include("connection.php");
        $check_email = mysqli_query($connection,"SELECT * FROM users WHERE email='$email'");
        $check_email_row= mysqli_num_rows($check_email);

        if($check_email_row> 0) {
            while($row = mysqli_fetch_array($check_email)) {
            $user_id = $row["user_id"];
             $db_password = $row["password"];
             $db_account_type = $row["account_type"];  

                if($password = $db_password) {
                    session_start();
                    $_SESSION["user_id"] = $user_id;


                    if ($db_account_type == "1") {

                        echo "<script>window.location.href='admin';</script>";
                        
                        }else{
                        
                        echo "<script>window.location.href='user/index.php';</script>";
                        
                        }
                }

                else{
                    $passwordErr = "Passsword is incorrect!";
                }


            }
        } else {
            $emailErr = "Email is not registered!";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST" action="<?php htmlspecialchars("PHP_SELF");?>">

<label for="">Email Address:</label>
<input type="text" name="email" value=" <?php echo $email; ?>"> <br>
<span class="error"> <?php echo $emailErr; ?></span> <br>
<label for="">Password:</label>
<input type="password" name="password" value=""> <br>
<span class="error"> <?php echo $passwordErr; ?></span> <br>

<input type="submit" value="Login">

</form>

</body>
</html>