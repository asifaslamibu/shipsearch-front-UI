<?php
include ("../../config_indemnifier.php");
// session_start();
// $user_id = $_SESSION['userid'];
// $deviceid;
$users_arr = array();

if (!empty($_POST))
{
    $output = '';
    $status='';
    $message = '';

    // ------------------------------------Personal Details------------------
    $first_name = mysqli_real_escape_string($db, $_POST["first_name"]);
    $last_name = mysqli_real_escape_string($db, $_POST["last_name"]);
    $phone = mysqli_real_escape_string($db, $_POST["phone"]);
    $mobile = mysqli_real_escape_string($db, $_POST["mobile"]);
    $date_of_birth = mysqli_real_escape_string($db, $_POST["date_of_birth"]);
    $job_title = mysqli_real_escape_string($db, $_POST["job_title"]);
    $country_id = mysqli_real_escape_string($db, $_POST["country_id"]);
    $state_id = mysqli_real_escape_string($db, $_POST["state_id"]);
    $city_id = mysqli_real_escape_string($db, $_POST["city_id"]);
    $zip_code = mysqli_real_escape_string($db, $_POST["zip_code"]);
    $permanent_address = mysqli_real_escape_string($db, $_POST["permanent_address"]);
    $temporary_address = mysqli_real_escape_string($db, $_POST["temporary_address"]);
    $mail_address = mysqli_real_escape_string($db, $_POST["mail_address"]);
    $fax = mysqli_real_escape_string($db, $_POST["fax"]);
    $Description = mysqli_real_escape_string($db, $_POST["description"]);

    // ------------------------------------Company Details------------------
    $company_name = mysqli_real_escape_string($db, $_POST["company_name"]);
    $company_email = mysqli_real_escape_string($db, $_POST["company_email"]);
    $contact_person_first_name = mysqli_real_escape_string($db, $_POST["contact_person_first_name"]);
    $contact_person_last_name = mysqli_real_escape_string($db, $_POST["contact_person_last_name"]);
    $company_phone = mysqli_real_escape_string($db, $_POST["company_phone"]);
    $c_region_id = mysqli_real_escape_string($db, $_POST["c_region_id"]);
    $c_country_id = mysqli_real_escape_string($db, $_POST["c_country_id"]);
    $c_port_id = mysqli_real_escape_string($db, $_POST["c_port_id"]);
    $c_bussiness_address = mysqli_real_escape_string($db, $_POST["c_bussiness_address"]);
    $c_fax = mysqli_real_escape_string($db, $_POST["c_fax"]);
    $c_website = mysqli_real_escape_string($db, $_POST["c_website"]);

    // ------------------------------------Membership Details------------------
    $c_menbership = mysqli_real_escape_string($db, $_POST["c_menbership"]);

    // ------------------------------------Login Details------------------
    $l_email = mysqli_real_escape_string($db, $_POST["l_email"]);
    $l_name = $first_name . ' ' . $last_name;
    $l_password = mysqli_real_escape_string($db, $_POST["l_password"]);

    $date = date('Y-m-d H:i:s');
    $query = " INSERT INTO `ship`.`users` (`name`,`email`,`password`,`created_at`)VALUES('$l_name','$l_email','$l_password','$date');";
    $message = 'Data Inserted';
    if (mysqli_query($db, $query))
    {
        // $inlist_lastid = mysql_insert_id();
        $last_id = mysqli_insert_id($db);
       

      
        
        $query_company= "INSERT INTO `ship`.`ss_setup_company`(`company_name`,`region_id`,`country_id`,`port_id`,`bussiness_address`,`contact_person_first_name`,`contact_person_last_name`,`phone`,`email`,`fax`,`website`,`user_id`,`is_active`,`created_at`) VALUES('$company_name','$c_region_id','$c_country_id','$c_port_id','$c_bussiness_address','$contact_person_first_name','$contact_person_last_name','$company_phone','$company_email','$c_fax','$c_website','$last_id','1','$date');";
        // $result_company = mysqli_query($db, $query_company);
        if(mysqli_query($db, $query_company)){
            
            $company_id = mysqli_insert_id($db);

            $query_personal= "INSERT INTO `ship`.`ss_user`(`user_id`,`email`,`password`,`first_name`,`last_name`,`date_of_birth`,`company_id`,`job_title`,`permanent_address`,`temporary_address`,`post_number`,`country_id`,`company_name`,`state_id`,`city_id`,`zip_code`,`phone`,`mobile`,`fax`,`mail_address`,`description`,`member_type_id`,`is_active`) VALUES('$last_id','$l_email','$l_password','$first_name ','$last_name ','$date_of_birth','$company_id','$job_title','$permanent_address','$temporary_address','','$country_id','$company_name','$state_id','$city_id','$zip_code','$phone','$mobile','$fax','$mail_address','$Description','$c_menbership ','1');";
            // $result_personal = mysqli_query($db, $query_personal);
            if(mysqli_query($db, $query_personal)){

            }
            else
            {
                $output .= "Error ss_user <br>" . mysqli_error($db);
                $status='0';

            }

            $output .= 'Record Created Successfully !';
        }
        else
            {
                $output .= "Error ss_setup_company <br>" . mysqli_error($db);
                $status='0';
            }

        

        //    $output .= $message;
        
    }
    else
    {
        $output .= "Error users <br>" . mysqli_error($db);
        $status='0';
    }
   
    $users_arr[] = array(
        'db_output'=>$output,
        'status'=>$status
    );

    echo json_encode($users_arr);

    // echo $myJSON;
    // echo $output;
}
?>
