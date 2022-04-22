<?php
include ("../../config_indemnifier.php");

session_start();
$user_id=$_SESSION['user_id'];

$region_name;
$port_name;
$country_name;
$vessel_type_name;
$charter_type_name;

if (!empty($_POST))
{
    $output = '';
    $message = '';

    // ------------------------------------first ------------------
    $vessel_id = mysqli_real_escape_string($db, $_POST["vessel_id"]);
    $vessel_name = mysqli_real_escape_string($db, $_POST["vessel_name"]);

  

   $laycan_from = mysqli_real_escape_string($db, $_POST["laycan_from"]);
    $laycan_to = mysqli_real_escape_string($db, $_POST["laycan_to"]);

    $v_region = $_POST["v_region"];
    $multi_v_region = implode(",",$v_region);

    $sql_region_name = "SELECT  group_concat(distinct region_name , ' ') as region_name from `ss_setup_region` where `ss_setup_region`.`region_id` IN ($multi_v_region);";

    $result_region_name = mysqli_query($db, $sql_region_name);
  
    while ($row = mysqli_fetch_array($result_region_name))
    {
        $region_name = $row['region_name'];
    }




    $v_country = $_POST["v_country"];
    $multi_country = implode(",",$v_country);

    $sql_v_country_name = "SELECT  group_concat(distinct country_name , ' ') as country_name from `ss_setup_country` where `ss_setup_country`.`country_id` IN ($multi_country);";

    $result_country_name = mysqli_query($db, $sql_v_country_name);
  
    while ($row = mysqli_fetch_array($result_country_name))
    {
        $country_name = $row['country_name'];
    }

    $v_ports =  $_POST["v_ports"];
    $multi_port = implode(",",$v_ports);

    $sql_port_name = "SELECT  group_concat(distinct port_name , ' ') as port_name from `ss_setup_port` where `ss_setup_port`.`port_id` IN ($multi_port);";

    $result_port_name = mysqli_query($db, $sql_port_name);
  
    while ($row = mysqli_fetch_array($result_port_name))
    {
        $port_name = $row['port_name'];
    }


    $v_vessel_type = $_POST["v_vessel_type"];
    $multi_v_vessel_type = implode(",",$v_vessel_type);

    $sql_vessel_type = "SELECT  group_concat(distinct vessel_type_name , ' ') as vessel_type_name from `ss_setup_vessel_type` where `ss_setup_vessel_type`.`vessel_type_id` IN ($multi_v_vessel_type);";
    // echo $sql_region_name;
    $result_vessel_type = mysqli_query($db, $sql_vessel_type);
  
    while ($row = mysqli_fetch_array($result_vessel_type))
    {
        $vessel_type_name = $row['vessel_type_name'];
    }




    $v_charter_type = $_POST["v_charter_type"];
    $multi_v_charter_type = implode(",",$v_charter_type);

    $sql_charter_type = "SELECT  group_concat(distinct charter_type_name , ' ') as charter_type_name from `ss_setup_charter_type` where `ss_setup_charter_type`.`charter_type_id` IN ($multi_v_charter_type);";
    // echo $sql_region_name;
    $result_charter_type = mysqli_query($db, $sql_charter_type);
  
    while ($row = mysqli_fetch_array($result_charter_type))
    {
        $charter_type_name = $row['charter_type_name'];
    }

    // ------------------------------------Second ------------------




   
    
    $build_year = mysqli_real_escape_string($db, $_POST["build_year"]);
    $imo_no = mysqli_real_escape_string($db, $_POST["imo_no"]);
    $call_sign = mysqli_real_escape_string($db, $_POST["call_sign"]);
    $grain_capacity = mysqli_real_escape_string($db, $_POST["grain_capacity"]);
    $bale_capacity = mysqli_real_escape_string($db, $_POST["bale_capacity"]);
    $lane_meter = mysqli_real_escape_string($db, $_POST["lane_meter"]);
    $ifo_empty = mysqli_real_escape_string($db, $_POST["ifo_empty"]);
    $ifo_laden = mysqli_real_escape_string($db, $_POST["ifo_laden"]);
    $ifo_port = mysqli_real_escape_string($db, $_POST["ifo_port"]);
    $mgo_empty = mysqli_real_escape_string($db, $_POST["mgo_empty"]);
    $mgo_laden = mysqli_real_escape_string($db, $_POST["mgo_laden"]);
    $mgo_port = mysqli_real_escape_string($db, $_POST["mgo_port"]);
    $classed_by = mysqli_real_escape_string($db, $_POST["classed_by"]);
    $pi_club = mysqli_real_escape_string($db, $_POST["pi_club"]);

    // ------------------------------------third Details------------------
    

    $dwt = mysqli_real_escape_string($db, $_POST["dwt"]);
    $measure_dwt = mysqli_real_escape_string($db, $_POST["measure_dwt"]);

    $dwcc = mysqli_real_escape_string($db, $_POST["dwcc"]);
    $measure_dwcc = mysqli_real_escape_string($db, $_POST["measure_dwcc"]);

    $speed_bal = mysqli_real_escape_string($db, $_POST["speed_bal"]);
    $measure_speed_bal = mysqli_real_escape_string($db, $_POST["measure_speed_bal"]);

    $speed_laden = mysqli_real_escape_string($db, $_POST["speed_laden"]);
    $measure_speed_laden = mysqli_real_escape_string($db, $_POST["measure_speed_laden"]);

    $gross_tonnage = mysqli_real_escape_string($db, $_POST["gross_tonnage"]);
    $measure_gross_tonnage = mysqli_real_escape_string($db, $_POST["measure_gross_tonnage"]);

    $net_tonnage = mysqli_real_escape_string($db, $_POST["net_tonnage"]);
    $measure_net_tonnage = mysqli_real_escape_string($db, $_POST["measure_net_tonnage"]);

    $loa_max = mysqli_real_escape_string($db, $_POST["loa_max"]);
    $measure_loa_max = mysqli_real_escape_string($db, $_POST["measure_loa_max"]);

    $beam_max = mysqli_real_escape_string($db, $_POST["beam_max"]);
    $measure_beam_max = mysqli_real_escape_string($db, $_POST["measure_beam_max"]);

    $summer_draft = mysqli_real_escape_string($db, $_POST["summer_draft"]);
    $measure_summer_draft = mysqli_real_escape_string($db, $_POST["measure_summer_draft"]);

    $fresh_water = mysqli_real_escape_string($db, $_POST["fresh_water"]);
    $measure_fresh_water = mysqli_real_escape_string($db, $_POST["measure_fresh_water"]);

    $container_cap_20 = mysqli_real_escape_string($db, $_POST["container_cap_20"]);
    $measure_container_cap_20 = mysqli_real_escape_string($db, $_POST["measure_container_cap_20"]);

    $container_cap_40 = mysqli_real_escape_string($db, $_POST["container_cap_40"]);
    $measure_container_cap_40 = mysqli_real_escape_string($db, $_POST["measure_container_cap_40"]);

    $container_cap_40ch = mysqli_real_escape_string($db, $_POST["container_cap_40ch"]);
    $measure_container_cap_40ch = mysqli_real_escape_string($db, $_POST["measure_container_cap_40ch"]);

 
    $additional_info = mysqli_real_escape_string($db, $_POST["additional_info"]);



    $date = date('Y-m-d H:i:s');
    $query = " INSERT INTO `ss_vessel`(`ref_no`,`vessel_name`,`laycan_date_from`,`laycan_date_to`,`region_id`,`country_id`,`port_id`,`vessel_type_id`,`built_year`,`charter_type_id`,`dwt`,`dwcc`,`imo_number`,`call_sign`,`speed_ballast`,`speed_laden`,`gross_tonnage`,`net_tonnage`,`loa_max`,`beam_max`,`summer_draft`,`fresh_water_draft`,`grain_capacity`,`bale_capacity`,`lane_meters`,`container_capacity_20ft`,`container_capacity_40ft`,`container_capacity_40ch`,`ifo_consumption_empty`,`ifo_consumption_laden`,`ifo_consumption_port`,`mgo_consumption_empty`,`mgo_consumption_laden`,`mgo_consumption_port`,`p_i_club`,`classed_by`,`additional_info`,`is_active`,`created_at`,`created_by`,`modified_at`,`modified_by`,`region_name`,`country_name`,`port_name`,`charter_type_name`,`vessel_type_name`)
    VALUES('$vessel_id','$vessel_name','$laycan_from','$laycan_to','$multi_v_region','$multi_country','$multi_port','$multi_v_vessel_type','$build_year','$multi_v_charter_type','$dwt $measure_dwt','$dwcc $measure_dwcc','$imo_no','$call_sign','$speed_bal $measure_speed_bal','$speed_laden $measure_speed_laden','$gross_tonnage $measure_gross_tonnage','$net_tonnage $measure_net_tonnage','$loa_max $measure_loa_max','$beam_max $measure_beam_max','$summer_draft $measure_summer_draft','$fresh_water $measure_fresh_water','$grain_capacity','$bale_capacity','$lane_meter','$container_cap_20 $measure_container_cap_20','$container_cap_40 $measure_container_cap_40','$container_cap_40ch $measure_container_cap_40ch','$ifo_empty','$ifo_laden','$ifo_port','$mgo_empty','$mgo_laden','$mgo_port','$pi_club','$classed_by','$additional_info','1','$date','$user_id','$date','$user_id','$region_name','$country_name','$port_name','$charter_type_name','$vessel_type_name')";
    // echo  $query;
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