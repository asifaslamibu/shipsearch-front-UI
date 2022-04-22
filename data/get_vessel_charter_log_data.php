<?php
include ("../config_indemnifier.php");

$email='A';
$positions = array();

if($email=='A'){
    $search_query='';
    $vessel_c_id = $_GET['vessel_c_id'];
    $get_log = "SELECT * FROM ship.ss_user_search where where_id='$vessel_c_id' and  module=2";
    // echo $get_log;
    $result_get_log = mysqli_query($db, $get_log);

    while ($row = mysqli_fetch_array($result_get_log))
    {
        $search_query = $row['search_query'];
        $sql_query = $search_query;
        $result = mysqli_query($db, $sql_query);
        
        while ($posi = $result->fetch_assoc())
        {
          $positions[] = $posi;
          
        }

        
        // create json output
      
      $output = json_encode(array(
          'data' => $positions
      ));
    //   echo $output;
    }
    

echo $output;

    // echo $sql_query;


    

    
}else{
    echo '{
        "data": [
          
        ]
      }';
}
// echo $output;
	//Output the output.

	
?>