<?php
include ("../../config_indemnifier.php");
session_start();
$user_id=$_SESSION['user_id'];

// $deviceid;
$region_name;
$port_name;
$country_name;
$vessel_type_name;
$charter_type_name;

$img_arr=array();

if (!empty($_POST))
{
    $output = '';
    $message = '';

    // ------------------------------------first ------------------
    $vessel_id = mysqli_real_escape_string($db, $_POST["vessel_id"]);

    //image uploading
    $userData = count($_FILES['v_image']['name']);
    // echo $userData;

    for ($i=0; $i < $userData; $i++) { 
        if($_FILES['v_image']['name']){
        
            move_uploaded_file($_FILES['v_image']['tmp_name'][$i], "../../uploads/".$_FILES['v_image']['name'][$i]);
        
            $img = "uploads/".$_FILES['v_image']['name'][$i];
            array_push($img_arr,$img);
        
            }

    }

    // print_r($img_arr);
    $multi_img = implode(",",$img_arr);

    $v_region =$_POST["v_region"];
    $multi_region = implode(",",$v_region);

    $sql_region_name = "SELECT  group_concat(distinct region_name , ' ') as region_name from `ss_setup_region` where `ss_setup_region`.`region_id` IN ($multi_region);";

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
    $multi_vessel_type = implode(",",$v_vessel_type);

    $sql_vessel_type = "SELECT  group_concat(distinct vessel_type_name , ' ') as vessel_type_name from `ss_setup_vessel_type` where `ss_setup_vessel_type`.`vessel_type_id` IN ($multi_vessel_type);";
    // echo $sql_region_name;
    $result_vessel_type = mysqli_query($db, $sql_vessel_type);
  
    while ($row = mysqli_fetch_array($result_vessel_type))
    {
        $vessel_type_name = $row['vessel_type_name'];
    }

    $v_date_available = mysqli_real_escape_string($db, $_POST["v_date_available"]);
    $v_last_operation = mysqli_real_escape_string($db, $_POST["v_last_operation"]);
    $v_build_year = mysqli_real_escape_string($db, $_POST["v_build_year"]);
    $v_last_dd = mysqli_real_escape_string($db, $_POST["v_last_dd"]);
    $v_last_ss = mysqli_real_escape_string($db, $_POST["v_last_ss"]);

    // ------------------------------------Second ------------------


    $v_classification = mysqli_real_escape_string($db, $_POST["v_classification"]);
    $v_dwt = mysqli_real_escape_string($db, $_POST["v_dwt"]);
    $v_light_weight = mysqli_real_escape_string($db, $_POST["v_light_weight"]);
    $v_main_engine = mysqli_real_escape_string($db, $_POST["v_main_engine"]);
    $v_aux_engine = mysqli_real_escape_string($db, $_POST["v_aux_engine"]);
    $v_ifo_consumption = mysqli_real_escape_string($db, $_POST["v_ifo_consumption"]);
    $v_bow_thuruster = mysqli_real_escape_string($db, $_POST["v_bow_thuruster"]);
    $v_gears = mysqli_real_escape_string($db, $_POST["v_gears"]);
    $v_propellers = mysqli_real_escape_string($db, $_POST["v_propellers"]);
    $v_cargo_capacity = mysqli_real_escape_string($db, $_POST["v_cargo_capacity"]);
    $v_hold_hatch = mysqli_real_escape_string($db, $_POST["v_hold_hatch"]);
    $v_cargo_type = mysqli_real_escape_string($db, $_POST["v_cargo_type"]);

    // ------------------------------------third Details------------------
    
    $v_grt = mysqli_real_escape_string($db, $_POST["v_grt"]);
    $grt_measure = mysqli_real_escape_string($db, $_POST["grt_measure"]);
    $v_nrt = mysqli_real_escape_string($db, $_POST["v_nrt"]);
    $nrt_measure = mysqli_real_escape_string($db, $_POST["nrt_measure"]);
    $v_speed = mysqli_real_escape_string($db, $_POST["v_speed"]);
    $Speed_measure = mysqli_real_escape_string($db, $_POST["Speed_measure"]);
    $v_comsumption = mysqli_real_escape_string($db, $_POST["v_comsumption"]);
    $consumption_measure = mysqli_real_escape_string($db, $_POST["consumption_measure"]);
    $v_loa = mysqli_real_escape_string($db, $_POST["v_loa"]);
    $loa_measure = mysqli_real_escape_string($db, $_POST["loa_measure"]);
    $v_breath = mysqli_real_escape_string($db, $_POST["v_breath"]);
    $breath_measure = mysqli_real_escape_string($db, $_POST["breath_measure"]);
    $v_draft = mysqli_real_escape_string($db, $_POST["v_draft"]);
    $draft_measure = mysqli_real_escape_string($db, $_POST["draft_measure"]);
    $freah_water = mysqli_real_escape_string($db, $_POST["freah_water"]);
    $freah_water_measure = mysqli_real_escape_string($db, $_POST["freah_water_measure"]);
    $bunker_capacity = mysqli_real_escape_string($db, $_POST["bunker_capacity"]);
    $bunker_capacity_measure = mysqli_real_escape_string($db, $_POST["bunker_capacity_measure"]);
    $v_price = mysqli_real_escape_string($db, $_POST["v_price"]);
    $price_measure = mysqli_real_escape_string($db, $_POST["price_measure"]);
    $in_service = mysqli_real_escape_string($db, $_POST["in_service"]);
    $additional_info = mysqli_real_escape_string($db, $_POST["additional_info"]);



    $date = date('Y-m-d H:i:s');
    $query = " INSERT INTO `ship`.`ss_vessel_sale`
    (`ref_no`,`vessel_img`,`region_id`,`country_id`,`port_id`,`vessel_type_id`,`built_year`,`last_dry_docked`,`last_ss`,`classification`,`grt`,`nrt`,`dwt`,`lightweight`,`speed`,`consumption`,`loa`,`breadth`,`summer_draft`,`fresh_water_draft`,`main_engine`,`aux_engines`,`bow_thruster`,`gears`,`brief_description`,`propellers`,`bunker_capacity`,`in_service`,`date_available`,`price`,`operations_date`,`cargo_capacity`,`holds_hatch`,`cover_type`,`additional_description`,`is_active`,`created_at`,`region_name`,`country_name`,`port_name`,`vessel_type_name`,`created_by`) 
    VALUES('$vessel_id','$multi_img','$multi_region','$multi_country','$multi_port','$multi_vessel_type','$v_build_year','$v_last_dd','$v_last_ss','$v_classification','$v_grt $grt_measure','$v_nrt $nrt_measure','$v_dwt','$v_light_weight','$v_speed','$v_comsumption','$v_loa $loa_measure','$v_breath $breath_measure','$v_draft $draft_measure','$freah_water $freah_water_measure','$v_main_engine','$v_aux_engine','$v_bow_thuruster','$v_gears','','$v_propellers','$bunker_capacity $bunker_capacity_measure','$in_service','$v_date_available','$v_price','$v_last_operation','$v_cargo_capacity','$v_hold_hatch','$v_cargo_type','$additional_info','1','$date','$region_name','$country_name','$port_name','$vessel_type_name','$user_id')";
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
