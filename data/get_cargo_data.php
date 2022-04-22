<?php
include "../config_indemnifier.php";
session_start();
$user_id = $_SESSION["user_id"];
$email = "A";
$positions = [];

if ($user_id != "") {
    $v_cargo_type = $_GET["v_cargo_type"];
    $laycan_from = $_GET["laycan_from"];
    $laycan_to = $_GET["laycan_to"];
    $v_region = $_GET["v_region"];
    $v_country = $_GET["v_country"];
    $v_ports = $_GET["v_ports"];
    $d_region = $_GET["d_region"];
    $d_country = $_GET["d_country"];
    $d_ports = $_GET["d_ports"];
    // get all category data from category table
    $date = date("Y-m-d H:i:s");
    $query = "INSERT INTO `ship`.`cargo_search_history`(`cargo_type_id`,`laycan_date_from`,`laycan_date_to`,`loading_region_id`,`loading_country_id`,`loading_port_id`,`discharge_region_id`,`discharge_country_id`,`discharge_port_id`,`user_id`,`created_at`,`modified_at`)
            VALUES('$v_cargo_type','$laycan_from','$laycan_to','$v_region','$v_country','$v_ports','$d_region','$d_country','$d_ports','$user_id','$date','$date');";
    if (mysqli_query($db, $query)) {
        $where_id = mysqli_insert_id($db);
    }

    // $sql_query = "SELECT `cg`.*, `ct`.`cargo_type_name`, `R1`.`region_name` as `R1name`, `C1`.`country_name` as `C1name`, `P1`.`port_name` as `P1name`, `DR1`.`region_name` as `DR1name`, `DC1`.`country_name` as `DC1name`, `DP1`.`port_name` as `DP1name`,us.first_name,us.last_name
    // FROM ship.ss_cargo as cg 
    // JOIN `ss_setup_cargo_type` as ct ON `ct`.`cargo_type_id`=`cg`.`cargo_type_id`
    // JOIN `ss_setup_region` `R1` ON `R1`.`region_id`=`cg`.`loading_region_id`
    // JOIN `ss_setup_country` `C1` ON `C1`.`country_id`=`cg`.`loading_country_id`
    // JOIN `ss_setup_port` `P1` ON `P1`.`port_id`=`cg`.`loading_port_id`
    // JOIN `ss_setup_region` `DR1` ON `DR1`.`region_id`=`cg`.`discharge_region_id`
    // JOIN `ss_setup_country` `DC1` ON `DC1`.`country_id`=`cg`.`discharge_country_id`
    // JOIN `ss_setup_port` `DP1` ON `DP1`.`port_id`=`cg`.`discharge_port_id`
    // JOIN ship.ss_user as us on us.user_id = cg.created_by
    // WHERE `cg`.`cargo_type_id` = '$v_cargo_type'  and `cg`.`loading_region_id` = '$v_region'  and `cg`.`discharge_region_id` = '$d_region'  and `cg`.`laycan_date_to` = '$laycan_to'  and `cg`.`laycan_date_from` = '$laycan_from'  
    // and `cg`.`loading_country_id` = '$v_country' and `cg`.`discharge_country_id` = '$d_country'  and `cg`.`loading_port_id` = '$v_ports'  and `cg`.`discharge_port_id` = '$d_ports' 
    // ORDER BY `cg`.`cargo_id` DESC;";

    $sql_query= "SELECT `cg`.*,us.first_name,us.last_name
    FROM ship.ss_cargo as cg 
    JOIN ship.ss_user as us on us.user_id = cg.created_by
    WHERE `cg`.`cargo_type_id` IN ($v_cargo_type)  and `cg`.`loading_region_id` IN ($v_region)  and `cg`.`discharge_region_id` IN ($d_region)  and `cg`.`laycan_date_to` = '$laycan_to'  and `cg`.`laycan_date_from` = '$laycan_from'  
    and `cg`.`loading_country_id` IN ($v_country) and `cg`.`discharge_country_id` IN ($d_country)  and `cg`.`loading_port_id` IN ($v_ports)  and `cg`.`discharge_port_id` IN ($d_ports)
    ORDER BY `cg`.`cargo_id` DESC;";

    // echo $sql_query;
    $query_log =
        'INSERT INTO `ship`.`ss_user_search`(`search_query`,`search`,`user_id`,`module`,`created_at`,`search_html`,`guest_session`,`search_param`,`where_id`)VALUES("' .
        $sql_query .
        '","","' .
        $user_id .
        '","1","' .
        $date .
        '","","","","' .
        $where_id .
        '");';
    if (mysqli_query($db, $query_log)) {
        $result = mysqli_query($db, $sql_query);
    }

    while ($posi = $result->fetch_assoc()) {
        $positions[] = $posi;
    }

    // create json output

    $output = json_encode([
        "data" => $positions,
    ]);
    echo $output;
} else {
    $v_cargo_type = $_GET["v_cargo_type"];
    $laycan_from = $_GET["laycan_from"];
    $laycan_to = $_GET["laycan_to"];
    $v_region = $_GET["v_region"];
    $v_country = $_GET["v_country"];
    $v_ports = $_GET["v_ports"];
    $d_region = $_GET["d_region"];
    $d_country = $_GET["d_country"];
    $d_ports = $_GET["d_ports"];
    $date = date("Y-m-d H:i:s");

    $query = "INSERT INTO `ship`.`cargo_search_history`(`cargo_type_id`,`laycan_date_from`,`laycan_date_to`,`loading_region_id`,`loading_country_id`,`loading_port_id`,`discharge_region_id`,`discharge_country_id`,`discharge_port_id`,`user_id`,`created_at`,`modified_at`)
    VALUES('$v_cargo_type','$laycan_from','$laycan_to','$v_region','$v_country','$v_ports','$d_region','$d_country','$d_ports','0','$date','$date');";
    // echo $query;
    if (mysqli_query($db, $query)) {
        $where_id = mysqli_insert_id($db);
    }

    $sql_query = "SELECT `cg`.*,us.first_name,us.last_name
    FROM ship.ss_cargo as cg 
    JOIN ship.ss_user as us on us.user_id = cg.created_by
    WHERE `cg`.`cargo_type_id` IN ($v_cargo_type)  and `cg`.`loading_region_id` IN ($v_region)  and `cg`.`discharge_region_id` IN ($d_region)  and `cg`.`laycan_date_to` = '$laycan_to'  and `cg`.`laycan_date_from` = '$laycan_from'  
    and `cg`.`loading_country_id` IN ($v_country) and `cg`.`discharge_country_id` IN ($d_country)  and `cg`.`loading_port_id` IN ($v_ports)  and `cg`.`discharge_port_id` IN ($d_ports)
    ORDER BY `cg`.`cargo_id` DESC;";

    $query_log =
        'INSERT INTO `ship`.`ss_user_search`(`search_query`,`search`,`user_id`,`module`,`created_at`,`search_html`,`guest_session`,`search_param`,`where_id`)VALUES("' .
        $sql_query .
        '","","0","1","' .
        $date .
        '","","","","' .
        $where_id .
        '");';
    if (mysqli_query($db, $query_log)) {
        $result = mysqli_query($db, $sql_query);
    }

    while ($posi = $result->fetch_assoc()) {
        $positions[] = $posi;
    }

    // create json output

    $output = json_encode([
        "data" => $positions,
    ]);
    echo $output;
}
//Output the output.
// echo $output;
?>
