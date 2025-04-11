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
<form method="POST" action=" <?php htmlspecialchars($SERVER["PHP SELF"]); ?>">

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