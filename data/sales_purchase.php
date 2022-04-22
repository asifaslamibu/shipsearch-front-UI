<?php
include ("../config_indemnifier.php");
session_start();
$user_id=$_SESSION['user_id'];

$email = 'A';
$output='';

if ($user_id!='')
{
  
  $get_log = "SELECT * FROM ship.vessel_sale_search_history where user_id='$user_id' order by id desc";
  // echo $sql;
  $result_get_log = mysqli_query($db, $get_log);
  
  $positions = array();
    while ($row = mysqli_fetch_array($result_get_log))
    {
        $id = $row['id'];
        $country_id = $row['country_id'];
        // echo $country_id .'<br>';
        $port_id = $row['port_id'];
        $region_id = $row['region_id'];
        $vessel_id = $row['vessel_type_id'];
        $date_available = $row['date_available'];
        $last_operation = $row['operations_date'];

        $date = date('Y-m-d H:i:s');

        $sql_query = "SELECT sh.*,
        (SELECT group_concat(distinct port_name , ' ') from `ss_setup_port` where `ss_setup_port`.`port_id` IN ($port_id)) as port_name ,
        (SELECT  group_concat(distinct region_name , ' ') from `ss_setup_region` where `ss_setup_region`.`region_id` IN ($region_id)) as region_name,
        (SELECT  group_concat(distinct country_name , ' ') from `ss_setup_country` where `ss_setup_country`.`country_id` IN ($country_id)) as country_name,
        (SELECT  group_concat(distinct vessel_type_name , ' ') from `ss_setup_vessel_type` where `ss_setup_vessel_type`.`vessel_type_id` IN ($vessel_id)) as vessel_type_name
        FROM ship.vessel_sale_search_history as sh 
        where sh.id='$id' ORDER BY sh.id DESC;";

        // echo $sql_query.'<br> <br>';
        

        // $result = $db->query($sql_query) or die("Error :" . mysqli_error());
        $result = mysqli_query($db, $sql_query);
        
        while ($posi = $result->fetch_assoc())
        {
          $positions[] = $posi;
          
        }

        
      }
      // create json output
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



