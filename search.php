<?php

$search = $searchErr ="";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["search"])) {
        $searchErr = "Required!!";
    } else {
        $search = $_POST["search"];
    }

    if($search) {
        echo "<script>window.location.href='result.php?search=$search';</script>";
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
<form action="<?php htmlspecialchars("PHP_SELF"); ?>" method="POST">
    <label for="search">Search Here:</label>
    <input type="text" name="search" id="search" value="<?php echo $search ?>">
    <span class="error"><?php echo $searchErr; ?></span>
    <input type="submit" value="Search">
</form>
</body>
</html>