<?php
include ("../../config_indemnifier.php");

session_start();
$user_id=$_SESSION['user_id'];

$load_region_name;
$load_port_name;
$load_country_name;

$dis_region_name;
$dis_port_name;
$dis_country_name;

$cargo_type_name;

if (!empty($_POST))
{
    $output = '';
    $message = '';

    // ------------------------------------first ------------------
    $cargo_id = mysqli_real_escape_string($db, $_POST["cargo_id"]);
    $cargo_name = '';
    // $cargo_name = mysqli_real_escape_string($db, $_POST["cargo_name"]);

  
    

    $v_cargo_type =$_POST["v_cargo_type"];
    $multi_v_cargo_type = implode(",",$v_cargo_type);

    $sql_cargo = "SELECT  group_concat(distinct cargo_type_name , ' ') as cargo_type_name from `ss_setup_cargo_type` where `ss_setup_cargo_type`.`cargo_type_id` IN ($multi_v_cargo_type);";

    $result_cargo = mysqli_query($db, $sql_cargo);
  
    while ($row = mysqli_fetch_array($result_cargo))
    {
        $cargo_type_name = $row['cargo_type_name'];
    }

   $laycan_from = mysqli_real_escape_string($db, $_POST["laycan_from"]);
    $laycan_from = mysqli_real_escape_string($db, $_POST["laycan_to"]);

    // ------------------------------------Second ------------------

    $v_region = $_POST["v_region"];
    $multi_v_region = implode(",",$v_region);

    $sql_region_name_l = "SELECT  group_concat(distinct region_name , ' ') as region_name from `ss_setup_region` where `ss_setup_region`.`region_id` IN ($multi_v_region);";

    $result_region_name_l = mysqli_query($db, $sql_region_name_l);
  
    while ($row = mysqli_fetch_array($result_region_name_l))
    {
        $load_region_name = $row['region_name'];
    }

    $v_country = $_POST["v_country"];
    $multi_country = implode(",",$v_country);

    $sql_v_country_name_l = "SELECT  group_concat(distinct country_name , ' ') as country_name from `ss_setup_country` where `ss_setup_country`.`country_id` IN ($multi_country);";

    $result_country_name_l = mysqli_query($db, $sql_v_country_name_l);
  
    while ($row = mysqli_fetch_array($result_country_name_l))
    {
        $load_country_name = $row['country_name'];
    }

    $v_ports =  $_POST["v_ports"];
    $multi_port = implode(",",$v_ports);

    $sql_port_name_l = "SELECT  group_concat(distinct port_name , ' ') as port_name from `ss_setup_port` where `ss_setup_port`.`port_id` IN ($multi_port);";

    $result_port_name_l = mysqli_query($db, $sql_port_name_l);
  
    while ($row = mysqli_fetch_array($result_port_name_l))
    {
        $load_port_name = $row['port_name'];
    }

    $d_region = $_POST["d_region"];
    $multi_d_region = implode(",",$d_region);

    $sql_region_name_d = "SELECT  group_concat(distinct region_name , ' ') as region_name from `ss_setup_region` where `ss_setup_region`.`region_id` IN ($multi_d_region);";

    $result_region_name_d = mysqli_query($db, $sql_region_name_d);
  
    while ($row = mysqli_fetch_array($result_region_name_d))
    {
        $dis_region_name = $row['region_name'];
    }

    $d_country = $_POST["d_country"];
    $multi_d_country = implode(",",$d_country);

    $sql_v_country_name_d = "SELECT  group_concat(distinct country_name , ' ') as country_name from `ss_setup_country` where `ss_setup_country`.`country_id` IN ($multi_d_country);";

    $result_country_name_d = mysqli_query($db, $sql_v_country_name_d);
  
    while ($row = mysqli_fetch_array($result_country_name_d))
    {
        $dis_country_name = $row['country_name'];
    }

    $d_ports = $_POST["d_ports"];
    $multi_d_ports = implode(",",$d_ports);

    $sql_port_name_d = "SELECT  group_concat(distinct port_name , ' ') as port_name from `ss_setup_port` where `ss_setup_port`.`port_id` IN ($multi_d_ports);";

    $result_port_name_d = mysqli_query($db, $sql_port_name_d);
  
    while ($row = mysqli_fetch_array($result_port_name_d))
    {
        $dis_port_name = $row['port_name'];
    }

   
    
    $commission = mysqli_real_escape_string($db, $_POST["commission"]);
    $gear_lift = mysqli_real_escape_string($db, $_POST["gear_lift"]);

    // ------------------------------------third Details------------------
    

    $m_height = mysqli_real_escape_string($db, $_POST["m_height"]);
    $measure_height = mysqli_real_escape_string($db, $_POST["measure_height"]);

    $max_lao = mysqli_real_escape_string($db, $_POST["max_lao"]);
    $measure_max_lao = mysqli_real_escape_string($db, $_POST["measure_max_lao"]);

    $stowage_factor = mysqli_real_escape_string($db, $_POST["stowage_factor"]);
    $measure_stowage_factor = mysqli_real_escape_string($db, $_POST["measure_stowage_factor"]);

    $quantity = mysqli_real_escape_string($db, $_POST["quantity"]);
    $measure_quantity = mysqli_real_escape_string($db, $_POST["measure_quantity"]);

    $loading_dis_rate = mysqli_real_escape_string($db, $_POST["loading_dis_rate"]);
    $measure_loading_dis_rate = mysqli_real_escape_string($db, $_POST["measure_loading_dis_rate"]);

  
    $over_age = mysqli_real_escape_string($db, $_POST["over_age"]);
    $loading_equipment = mysqli_real_escape_string($db, $_POST["loading_equipment"]);
    $discharge_equipment = mysqli_real_escape_string($db, $_POST["discharge_equipment"]);
    $combinable = mysqli_real_escape_string($db, $_POST["combinable"]);
    $hazmat = mysqli_real_escape_string($db, $_POST["hazmat"]);
    $additional_info = mysqli_real_escape_string($db, $_POST["additional_info"]);



    $date = date('Y-m-d H:i:s');
    $query = " INSERT INTO `ship`.`ss_cargo`(`ref_no`,`cargo_name`,`cargo_type_id`,`loading_region_id`,`discharge_region_id`,`loading_country_id`,`discharge_country_id`,`loading_port_id`,`discharge_port_id`,`laycan_date_from`,`laycan_date_to`,`quantity`,`unit_id`,`max_loa`,`stowage_factor`,`max_height`,`commision`,`combinable`,`over_age`,`hazmat`,`loading_discharge_rates`,`loading_discharge_unit_id`,`loading_equipment_req`,`discharge_equipment_req`,`gear_lifting_capacity`,`additional_info`,`is_active`,`created_by`,`modified_by`,`created_at`,`modified_at`,`loading_region_name`,`loading_country_name`,`loading_port_name`,`discharge_region_name`,`discharge_country_name`,`discharge_port_name`,`cargo_type_name`)
    VALUES('$cargo_id','$cargo_name','$multi_v_cargo_type','$multi_v_region','$multi_d_region','$multi_country','$multi_d_country','$multi_port','$multi_d_ports','$laycan_from','$laycan_from','$quantity $measure_quantity','','$max_lao $measure_max_lao','$stowage_factor $measure_stowage_factor','$m_height $measure_height','$commission','$combinable','$over_age','$hazmat','$loading_dis_rate $measure_loading_dis_rate','','$loading_equipment','$discharge_equipment','$gear_lift','$additional_info','1','$user_id','$user_id','$date','$date','$load_region_name','$load_country_name','$load_port_name','$dis_region_name','$dis_country_name','$dis_port_name','$cargo_type_name')";
    $message = 'Data Inserted';
    if (mysqli_query($db, $query))
    {
        // $inlist_lastid = mysql_insert_id();
        $output .= 'Record Created Successfully !';

        
    }
    else
    {
        $output .= "Error <br>" . mysqli_error($db);

    }
    echo $output;
}
?>
