<?php
 
include("connection.php");
 
if(empty($_GET["search"])){  
    echo "walang laman";
}
$check = $_GET["search"];
$terms = explode(" ", $check);

foreach($terms as $term){ 
    echo $term . " ";
}

$q = "SELECT * FROM users WHERE ";
$i = 0;
 
foreach($terms as $each) {
$i++;
if($i == 1) {
$q .= "name LIKE '%$each%' ";
} 
else {
$q .= " OR name LIKE '%$each%' ";
}
       
$query = mysqli_query($connection, $q);
$c_q = mysqli_num_rows($query);
 
if($c_q > 0) {
while ($row = mysqli_fetch_assoc($query)) {
    echo $name = $row["name"] . "<br>";
}
} 
else {
     echo "No results found.";
    }
}
 
?>