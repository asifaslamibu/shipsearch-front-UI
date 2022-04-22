<?php
include ("../config_indemnifier.php");
session_start();
$user_id=$_SESSION['user_id'];



$email = 'A';
$output='';

if ($user_id!='')
{
  
  $get_log = "SELECT * FROM ship.vessel_search_history order by id desc";
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

        $sql_query = "SELECT cs.*,ct.cargo_type_name,r1.region_name as load_region_name,ssc.country_name as load_country_name,ssp.port_name as load_port_name,dr2.region_name as dis_region_name,dc2.country_name as dis_country_name,dp2.port_name as dis_port_name FROM ship.cargo_search_history as cs 
        join ship.ss_setup_cargo_type as ct on ct.cargo_type_id=cs.cargo_type_id
        join ship.ss_setup_region as r1 on r1.region_id=cs.loading_region_id
        join ship.ss_setup_country as ssc on ssc.country_id=cs.loading_country_id
        join ship.ss_setup_port as ssp on ssp.port_id=cs.loading_port_id
        join ship.ss_setup_region as dr2 on dr2.region_id=cs.discharge_region_id
        join ship.ss_setup_country as dc2 on dc2.country_id=cs.discharge_country_id
        join ship.ss_setup_port as dp2 on dp2.port_id=cs.discharge_port_id
        where  cs.id='$id' and cs.cargo_type_id='$cargo_type_id'and cs.laycan_date_from='$laycan_date_from' and cs.laycan_date_to='$laycan_date_to' 
        and cs.loading_region_id='$loading_region_id' and cs.loading_country_id='$loading_country_id' and cs.loading_port_id='$loading_port_id' 
        and cs.discharge_region_id='$discharge_region_id' and cs.discharge_country_id='$discharge_country_id' and cs.discharge_port_id='$discharge_port_id';";

        // echo $sql_query.'<br> <br>';
        

        // $result = $db->query($sql_query) or die("Error :" . mysqli_error());
        $result = mysqli_query($db, $sql_query);
        
        while ($posi = $result->fetch_assoc())
        {
          $positions[] = $posi;
          
        }

        
        // create json output
        $output = json_encode(array(
            'data' => $positions
        ));
      }
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



