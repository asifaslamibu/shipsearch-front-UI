<?php
include ("../../config_indemnifier.php");

$request = $_POST['request'];


if($request == 2){
    $deleteids_arr = $_POST['deleteids_arr'];

    foreach($deleteids_arr as $deleteid){
        mysqli_query($db,"DELETE FROM ship.vessel_sale_search_history WHERE id=".$deleteid);
    }

    echo 1;
    exit;
}

