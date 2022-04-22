<?php
include ("../config_indemnifier.php");
session_start();
$user_id=$_SESSION['user_id'];



$email = 'A';
$output='';

if ($user_id!='')
{
  
  $get_log = "SELECT * FROM ship.cargo_search_history where user_id='$user_id' and loading_region_id!='' and loading_country_id!='' and loading_port_id!='' and discharge_region_id!='' and discharge_country_id!='' and discharge_port_id!='' order by id desc;";

  // echo $sql;
  $result_get_log = mysqli_query($db, $get_log);
  
  $positions = array();
    while ($row = mysqli_fetch_array($result_get_log))
    {
        $id = $row['id'];
        $cargo_type_id = $row['cargo_type_id'];
        // echo $id .'<br>';
        $laycan_date_from = $row['laycan_date_from'];
        $laycan_date_to = $row['laycan_date_to'];
        $loading_region_id = $row['loading_region_id'];
        $loading_country_id = $row['loading_country_id'];
        $loading_port_id = $row['loading_port_id'];
        $discharge_region_id = $row['discharge_region_id'];
        $discharge_port_id = $row['discharge_port_id'];
        $discharge_country_id = $row['discharge_country_id'];

        $date = date('Y-m-d H:i:s');

        $sql_query = "SELECT cs.*,
        
		    (SELECT group_concat(distinct port_name , ' ') from `ss_setup_port` where `ss_setup_port`.`port_id` IN ($loading_port_id)) as load_port_name ,
		    (SELECT group_concat(distinct port_name , ' ') from `ss_setup_port` where `ss_setup_port`.`port_id` IN ($discharge_port_id)) as dis_port_name ,
        (SELECT group_concat(distinct region_name , ' ') from `ss_setup_region` where `ss_setup_region`.`region_id` IN ($loading_region_id)) as load_region_name,
        (SELECT group_concat(distinct region_name , ' ') from `ss_setup_region` where `ss_setup_region`.`region_id` IN ($discharge_region_id)) as dis_region_name,
        (SELECT group_concat(distinct country_name , ' ') from `ss_setup_country` where `ss_setup_country`.`country_id` IN ($loading_country_id)) as load_country_name,
        (SELECT group_concat(distinct country_name , ' ') from `ss_setup_country` where `ss_setup_country`.`country_id` IN ($discharge_country_id)) as dis_country_name,
		    (SELECT group_concat(distinct cargo_type_name , ' ') from `ss_setup_cargo_type` where `ss_setup_cargo_type`.`cargo_type_id` IN ($cargo_type_id)) as cargo_type_name
        FROM ship.cargo_search_history as cs 
        where cs.id='$id'";
  
        // echo $sql_query;
        

        // $result = $db->query($sql_query) or die("Error :" . mysqli_error());
        $result = mysqli_query($db, $sql_query);
        
        while ($posi = $result->fetch_assoc())
        {
          $positions[] = $posi;
          
        }

        
        // create json output
      }
      $output = json_encode(array(
          'data' => $positions
      ));
      echo $output;

    // get all category data from category table
    

    
}
else
{
    echo '{
      "data": [
        
      ]
    }';
}
//Output the output.

?>



