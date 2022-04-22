<?php
session_start();
if (isset($_SESSION["user_id"])) {
    include_once "config.php";
    $outgoing_id = $_SESSION["user_id"];
    $incoming_id = mysqli_real_escape_string($conn, $_POST["incoming_id"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    $owner_id = mysqli_real_escape_string($conn, $_POST["owner_id"]);
    $module_id = mysqli_real_escape_string($conn, $_POST["module_id"]);
    $module_type = mysqli_real_escape_string($conn, $_POST["module_type"]);

    $sql_check_user = "SELECT * FROM ship.chat_log where owner_id='$owner_id' and sender_id='$outgoing_id' and modeule_id='$module_id' and module_type='$module_type';";
    // echo $sql_check_user;
    $result_check_user = mysqli_query($conn, $sql_check_user);
    $count_check_user = mysqli_num_rows($result_check_user);
    echo $count_check_user;
    if ($count_check_user > 0) {
        // echo "<br/>";
        // echo "Already IN";
        // echo "<br/>";
    } else {
        $sql_insert = "INSERT INTO `ship`.`chat_log`(`owner_id`,`sender_id`,`modeule_id`,`module_type`) VALUES ('$owner_id','$outgoing_id','$module_id','$module_type')";
        // echo $sql_insert;
        if (mysqli_query($conn, $sql_insert)) {
            echo "LOG created successfully !";
        } else {
            echo "Error: " .
                $sql_insert .
                "
               " .
                mysqli_error($conn);
        }
    }
    // echo $message;
    echo $outgoing_id;
    if (!empty($message)) {
        ($sql = mysqli_query(
            $conn,
            "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')"
        )) or die();
    }
    echo "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')";
    // echo "saamaaad";
} else {
    header("location: ../login.php");
}

?>
