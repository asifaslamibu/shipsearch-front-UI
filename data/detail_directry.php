<?php
include ("../config_indemnifier.php");
session_start();
$user_id = $_SESSION['user_id'];

$email = 'A';
$output = '';

if ($email != '')
{

    $positions = array();

    $sql_query = "SELECT * FROM ship.ss_user as us
    join ship.ss_setup_company as cp on us.company_id=cp.company_id";

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
