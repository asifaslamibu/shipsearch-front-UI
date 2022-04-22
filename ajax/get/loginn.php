<?php
include("../../config_indemnifier.php");
session_start();


// username and password sent from form 

$myusername = mysqli_real_escape_string($db, $_POST['username']);
$mypassword = mysqli_real_escape_string($db, $_POST['password']);
// $mypassword = hash('sha256', $mypassword); 
// $mypassword = md5($mypassword);
$sql = "SELECT * FROM ss_user WHERE email = '$myusername' and password = '$mypassword'";

// echo $sql;

$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
 
$count = mysqli_num_rows($result);
// echo $count;

// If result matched $myusername and $mypassword, table row must be 1 row
if($count>0){
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['user_id'];
    echo 1;
}
else{
  echo 0;
}
?>
