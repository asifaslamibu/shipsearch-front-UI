

<?php
session_start();
?>

<?php
$user_id=$_SESSION["user_id"];
if($user_id!='') {
?>

    <!-- <input type="hidden"> -->
<?php
}else {
    // echo '<script>alert('.$user_id.')</script>';
    $_SESSION["user_id"]='';
}

?>