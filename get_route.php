<?php
    session_start();
    include("config_indemnifier.php");
    if(!empty($_POST['unique_id'])){
        $unique_id = $_POST['unique_id'];
        
        $positions = array();
        if($unique_id!=""){

            $search_query='';
            // $get_log = "SELECT * FROM ship.ss_user_search where where_id='$unique_id'";
            // // echo $get_log;
            // $result_get_log = mysqli_query($db, $get_log);

            // while ($row = mysqli_fetch_array($result_get_log))
            // {
                $search_query = "SELECT `cg`.*,us.first_name,us.last_name
                FROM ship.ss_cargo as cg 
                JOIN ship.ss_user as us on us.user_id = cg.created_by
                WHERE ref_no='$unique_id'";
                $sql_query = $search_query;
                $result = $db->query("$search_query") or die ("Error :".mysqli_error());
                
                        while($posi = $result->fetch_assoc()) {
                            $positions[] = array($posi);
                        }
                        
                        // create json output
                        // $output = json_encode($positions);
            // }

           
            // echo 'True '.$data;
            
                echo json_encode($positions);
                
        }else{
            echo 'False';
        }
    }

    if(!empty($_POST['sale_id'])){
        $sale_id = $_POST['sale_id'];
        
        $positions = array();
        if($sale_id!=""){

            $search_query='';
            // $get_log = "SELECT * FROM ship.ss_user_search where where_id='$unique_id'";
            // // echo $get_log;
            // $result_get_log = mysqli_query($db, $get_log);

            // while ($row = mysqli_fetch_array($result_get_log))
            // {
                $search_query = "SELECT `cg`.*,us.first_name,us.last_name
                FROM ship.ss_vessel_sale as cg 
                JOIN ship.ss_user as us on us.user_id = cg.created_by
                WHERE ref_no='$sale_id'";
                $sql_query = $search_query;
                $result = $db->query("$search_query") or die ("Error :".mysqli_error());
                
                        while($posi = $result->fetch_assoc()) {
                            $positions[] = array($posi);
                        }
                        
                        // create json output
                        // $output = json_encode($positions);
            // }

           
            // echo 'True '.$data;
            
                echo json_encode($positions);
                
        }else{
            echo 'False';
        }
    }
    if(!empty($_POST['vessel_id'])){
        $vessel_id = $_POST['vessel_id'];
        
        $positions = array();
        if($vessel_id!=""){

            $search_query='';
            // $get_log = "SELECT * FROM ship.ss_user_search where where_id='$unique_id'";
            // // echo $get_log;
            // $result_get_log = mysqli_query($db, $get_log);

            // while ($row = mysqli_fetch_array($result_get_log))
            // {
                $search_query = " SELECT `cg`.*,us.first_name,us.last_name
                FROM ship.ss_vessel as cg 
                JOIN ship.ss_user as us on us.user_id = cg.created_by
                WHERE ref_no='$vessel_id'";
                $sql_query = $search_query;
                $result = $db->query("$search_query") or die ("Error :".mysqli_error());
                
                        while($posi = $result->fetch_assoc()) {
                            $positions[] = array($posi);
                        }
                        
                        // create json output
                        // $output = json_encode($positions);
            // }

           
            // echo 'True '.$data;
            
                echo json_encode($positions);
                
        }else{
            echo 'False';
        }
    }


    if(!empty($_POST['last'])){
        $last = $_POST['last'];
        
        $positions = array();
        if($last!=""){

            $search_query='';
            // $get_log = "SELECT * FROM ship.ss_user_search order by user_search_id desc limit 1";
            // // echo $get_log;
            // $result_get_log = mysqli_query($db, $get_log);

            // while ($row = mysqli_fetch_array($result_get_log))
            // {
                $search_query = "SELECT `cg`.*,us.first_name,us.last_name
                FROM ship.ss_vessel_sale as cg 
                JOIN ship.ss_user as us on us.user_id = cg.created_by
                WHERE ref_no='$last'";
                $sql_query = $search_query;
                $result = $db->query("$search_query") or die ("Error :".mysqli_error());
                
                        while($posi = $result->fetch_assoc()) {
                            $positions[] = array($posi);
                        }
                        
                        // create json output
                        // $output = json_encode($positions);
            // }

           
            // echo 'True '.$data;
            
                echo json_encode($positions);
                
        }else{
            echo 'False';
        }
    }


    if(!empty($_POST['cargo'])){
        $cargo = $_POST['cargo'];
        
        $positions = array();
        if($cargo!=""){

            $search_query='';
            // $get_log = "SELECT * FROM ship.ss_user_search where module=1 order by user_search_id desc limit 1;";
            // // echo $get_log;
            // $result_get_log = mysqli_query($db, $get_log);

            // while ($row = mysqli_fetch_array($result_get_log))
            // {
                $search_query = "SELECT `cg`.*,us.first_name,us.last_name
                FROM ship.ss_cargo as cg 
                JOIN ship.ss_user as us on us.user_id = cg.created_by
                WHERE ref_no='$cargo'";
                $sql_query = $search_query;
                $result = $db->query("$search_query") or die ("Error :".mysqli_error());
                
                        while($posi = $result->fetch_assoc()) {
                            $positions[] = array($posi);
                        }
                        
                        // create json output
                        // $output = json_encode($positions);
            // }

           
            // echo 'True '.$data;
            
                echo json_encode($positions);
                
        }else{
            echo 'False';
        }
    }

    if(!empty($_POST['vessel_carter'])){
        $vessel_carter = $_POST['vessel_carter'];
        
        $positions = array();
        if($vessel_carter!=""){

            
            $search_query = " SELECT `cg`.*,us.first_name,us.last_name
            FROM ship.ss_vessel as cg 
            JOIN ship.ss_user as us on us.user_id = cg.created_by
            WHERE ref_no='$vessel_carter'";
            $sql_query = $search_query;
            $result = $db->query("$search_query") or die ("Error :".mysqli_error());
            
                    while($posi = $result->fetch_assoc()) {
                        $positions[] = array($posi);
                    }
            

           
            // echo 'True '.$data;
            
                echo json_encode($positions);
                
        }else{
            echo 'False';
        }
    }
?>