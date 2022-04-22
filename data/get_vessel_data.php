<?php
include ("../config_indemnifier.php");
session_start();
$user_id=$_SESSION['user_id'];
if($user_id==''){
    $user_id='0';
}
// echo $user_id;
$email='A';
$positions = array();

if($email=='A'){

    $v_vessel_type=$_GET['v_vessel_type'];
    $dwt_from=$_GET['dwt_from'];
    $dwt_to=$_GET['dwt_to'];
    $v_charter_type=$_GET['v_charter_type'];
    $laycan_from=$_GET['laycan_from'];
    $laycan_to=$_GET['laycan_to'];
    $v_region=$_GET['v_region'];
    $v_country=$_GET['v_country'];
    $v_ports=$_GET['v_ports'];
    // get all category data from category table

    $date = date('Y-m-d H:i:s');
    $query = "INSERT INTO `ship`.`vessel_search_history`(`vessel_type_id`,`charter_type_id`,`laycan_date_from`,`laycan_date_to`,`region_id`,`country_id`,`port_id`,`user_id`,`created_at`,`modified_at`,`dwt_from`,`dwt_to`)
    VALUES('$v_vessel_type','$v_charter_type','$laycan_from','$laycan_to','$v_region','$v_country','$v_ports','$user_id','$date','$date','$dwt_from','$dwt_to');";
    // echo $query;
    if (mysqli_query($db, $query))
    $where_id = mysqli_insert_id($db);
    

    // $sql_query = "SELECT `ss_vessel`.*, `ss_setup_vessel_type`.`vessel_type_name`, `ss_setup_charter_type`.`charter_type_name`, `ss_setup_region`.`region_name`, `ss_setup_country`.`country_name`, `ss_setup_port`.`port_name`,us.first_name,us.last_name
    // FROM `ss_vessel`
    // JOIN `ss_setup_vessel_type` ON `ss_setup_vessel_type`.`vessel_type_id`=`ss_vessel`.`vessel_type_id`
    // JOIN `ss_setup_charter_type` ON `ss_setup_charter_type`.`charter_type_id`=`ss_vessel`.`charter_type_id`
    // JOIN `ss_setup_region` ON `ss_setup_region`.`region_id`=`ss_vessel`.`region_id`
    // JOIN `ss_setup_country` ON `ss_setup_country`.`country_id`=`ss_vessel`.`country_id`
    // JOIN `ss_setup_port` ON `ss_setup_port`.`port_id`=`ss_vessel`.`port_id`
    // JOIN `ss_user` as us on us.user_id=`ss_vessel`.created_by
    // WHERE  `ss_vessel`.`vessel_type_id` = '$v_vessel_type'  and `ss_vessel`.`region_id` = '$v_region'  
    // and `ss_vessel`.`laycan_date_from` = '$laycan_from' and `ss_vessel`.`laycan_date_to` = '$laycan_to' and `ss_vessel`.`country_id` = '$v_country'
    // and `ss_vessel`.`port_id` = '$v_ports' and `ss_vessel`.`dwt` >= '$dwt_from Meters'  and `ss_vessel`.`dwt` <= '$dwt_to Meters'  and `ss_vessel`.`charter_type_id` = '$v_charter_type' 
    // ORDER BY `ss_vessel`.`vessel_id` DESC";

    $sql_query = "SELECT `ss_vessel`.*,us.first_name,us.last_name
    FROM `ss_vessel`JOIN `ss_user` as us on us.user_id=`ss_vessel`.created_by
    WHERE 1=1 and `ss_vessel`.`vessel_type_id` IN ($v_vessel_type) and `ss_vessel`.`region_id` IN ($v_region)
    and `ss_vessel`.`country_id` IN ($v_country) and `ss_vessel`.`port_id` IN ($v_ports)  and `ss_vessel`.`charter_type_id` IN ($v_charter_type)
    and `ss_vessel`.`laycan_date_from` >= '$laycan_from'  and `ss_vessel`.`laycan_date_to` <= '$laycan_to'
    and `ss_vessel`.`dwt` >= '$dwt_from Meters'  and `ss_vessel`.`dwt` <= '$dwt_to Meters';";

    // echo $sql_query;

    $query_log = 'INSERT INTO `ship`.`ss_user_search`(`search_query`,`search`,`user_id`,`module`,`created_at`,`search_html`,`guest_session`,`search_param`,`where_id`)VALUES("'.$sql_query.'","","'.$user_id.'","2","'.$date.'","","","","'.$where_id.'");';
     if (mysqli_query($db, $query_log))
 

    
    $result = mysqli_query($db, $sql_query);
        
        while ($posi = $result->fetch_assoc())
        {
          $positions[] = $posi;
          
        }

        
        // create json output
      
      $output = json_encode(array(
          'data' => $positions
      ));
      echo $output;

    
}else{
    echo '{
        "data": [
          
        ]
      }';
}
	//Output the output.
	// echo $output;

	
?>