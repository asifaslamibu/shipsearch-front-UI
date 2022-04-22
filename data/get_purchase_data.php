<?php
include ("../config_indemnifier.php");
session_start();
$user_id=$_SESSION['user_id'];
$email='A';
if($user_id==''){
    $user_id='0';
}
$positions = array();

if($email=='A'){

    $country_id=$_GET['country_id'];
    $port_id=$_GET['port_id'];
    $region_id=$_GET['region_id'];
    $vessel_id=$_GET['vessel_id'];
    $dwt_from=$_GET['dwt_from'];
    $dwt_to=$_GET['dwt_to'];
    $date_available=$_GET['date_available'];
    $last_operation=$_GET['last_operation'];
    // get all category data from category table

    $date = date('Y-m-d H:i:s');
    $query = "INSERT INTO `ship`.`vessel_sale_search_history`(`vessel_type_id`,`date_available`,`operations_date`,`region_id`,`country_id`,`port_id`,`user_id`,`created_at`) VALUES('$vessel_id','$date_available','$last_operation','$region_id','$country_id','$port_id','$user_id','$date');";
    // echo $query;
    if (mysqli_query($db, $query))
    $where_id = mysqli_insert_id($db);
    

    // $sql_query = "SELECT `ss_vessel_sale`.*, `ss_setup_vessel_type`.`vessel_type_name`, `ss_setup_region`.`region_name`, `ss_setup_country`.`country_name`, `ss_setup_port`.`port_name`, `ss_vessel_sale_upload`.`upload`,us.first_name,us.last_name
    // FROM `ss_vessel_sale`
    // JOIN `ss_setup_vessel_type` ON `ss_setup_vessel_type`.`vessel_type_id`=`ss_vessel_sale`.`vessel_type_id`
    // JOIN `ss_setup_region` ON `ss_setup_region`.`region_id`=`ss_vessel_sale`.`region_id`
    // JOIN `ss_setup_country` ON `ss_setup_country`.`country_id`=`ss_vessel_sale`.`country_id`
    // JOIN `ss_setup_port` ON `ss_setup_port`.`port_id`=`ss_vessel_sale`.`port_id`
    // LEFT JOIN `ss_vessel_sale_upload` ON `ss_vessel_sale_upload`.`vessel_sale_id`=`ss_vessel_sale`.`vessel_sale_id`
    // JOIN `ss_user` as us on us.user_id=`ss_vessel_sale`.created_by
    // WHERE `ss_vessel_sale`.`country_id` = '$country_id' and `ss_vessel_sale`.`port_id` = '$port_id' and `ss_vessel_sale`.`region_id` = '$region_id' 
    // and `ss_vessel_sale`.`vessel_type_id` = '$vessel_id' and `ss_vessel_sale`.`dwt` >= '$dwt_from' and `ss_vessel_sale`.`dwt` <= '$dwt_to' and  `ss_vessel_sale`.`date_available` = '$date_available' 
    // and `ss_vessel_sale`.`operations_date` = '$last_operation' 
    // ORDER BY `vessel_sale_id` DESC";

    $sql_query ="SELECT `ss_vessel_sale`.*,us.first_name,us.last_name
    FROM `ss_vessel_sale`
    JOIN `ss_user` as us on us.user_id=`ss_vessel_sale`.created_by
    WHERE `ss_vessel_sale`.`country_id` IN ($country_id) and `ss_vessel_sale`.`port_id` IN ($port_id) and `ss_vessel_sale`.`region_id` IN ($region_id)
    and `ss_vessel_sale`.`vessel_type_id` IN ($vessel_id) and `ss_vessel_sale`.`dwt` >= '$dwt_from' and `ss_vessel_sale`.`dwt` <= '$dwt_to' 
    and  `ss_vessel_sale`.`date_available` = '$date_available' 
    and `ss_vessel_sale`.`operations_date` = '$last_operation'
    ORDER BY `vessel_sale_id` DESC";

    // echo $sql_query;

    $query_log = 'INSERT INTO `ship`.`ss_user_search`(`search_query`,`search`,`user_id`,`module`,`created_at`,`search_html`,`guest_session`,`search_param`,`where_id`)VALUES("'.$sql_query.'","","'.$user_id.'","3","'.$date.'","","","","'.$where_id.'");';
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