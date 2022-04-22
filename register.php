<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="description" />
    <meta name="keywords" content="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- <link rel="shortcut icon" href="img/favicon.ico" /> -->
    <title>Ship Search</title>
    <!-- styles-->
    <link rel="stylesheet" href="css/styles.min.css" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="dist/style.css">
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="plugins/bootstrap-select/bootstrap-select.min.css"> -->
    <link href="plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- web-font loader-->
    <script>
    WebFontConfig = {
        google: {

            families: ['Inter:300,400,500,700', 'Open+Sans:700'],

        }
    }

    function font() {

        var wf = document.createElement('script')

        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
        wf.type = 'text/javascript'
        wf.async = 'true'

        var s = document.getElementsByTagName('script')[0]

        s.parentNode.insertBefore(wf, s)

    }

    font()
    </script>
       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
/* @media only screen and (min-width: 1200px) */
.page-header_3 .button--filled {
    height: 50px;
    line-height: 50px;
    min-width: 147px;
    border-radius: 40px;
}

.select_input {
    margin-left: -31px !important;
}

.promo-form label {
    position: relative;
    width: 100%;
    margin-bottom: 1%;
}

.st {
    left: 2%;
    width: 2%;
}

.main-menu--white .main-menu__item .main-menu__link {
    color: #000;
}

/* @media only screen and (min-width: 1200px) */
.page-header_3 .button--filled {
    height: 44px;
    line-height: 45px;
    min-width: 125px;
    border-radius: 40px;
    background-color: #00997d;
}


.select_input {
    margin-left: -31px !important;
}

.promo-form label {
    position: relative;
    width: 100%;
    margin-bottom: 1%;
}

table.dataTable thead th,
table.dataTable thead td {
    color: #000;
}

p {
    color: #fff;
}

.hamburger--white .hamburger-inner,
.hamburger--white .hamburger-inner::after,
.hamburger--white .hamburger-inner::before {
    color: #000;
}

.expend_label {
    font-weight: 700;
    color: #000;
    font-size: 12px;
    margin-bottom: 0;
}

.expend_text {
    color: #978e8e;
    font-size: 12px;
}

td {

    width: 217px;
}

@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.hamza header .header {
    background-color: #fff;
    height: 45px;
}

.hamza header a img {
    width: 134px;
    margin-top: 4px;
}

.hamza .login-page {
    width: 100%;
    padding: 8% 0 0;
    margin: auto;
}

.hamza .login-page .form .login {
    margin-top: -31px;
    margin-bottom: 26px;
}

.hamza .form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 100%;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

@media only screen and (max-width: 600px) {
    .hamza .form {
        padding-left: 0 !important;
        padding-right: 0 !important;
        padding-bottom: 0 !important;
    }
}

/* .hamza .form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
} */
.hamza .form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background-color: #00997d;
    /* background-image: linear-gradient(45deg,#328f8a,#08ac4b); */
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
}

.hamza.form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 12px;
}

.hamza .form .message a {
    color: #4CAF50;
    text-decoration: none;
}

.hamza .container {
    position: relative;
    z-index: 1;
    max-width: 80%;
    margin: 0 auto;
}

.select2-container {
    width: 100% !important;
}


.select2-container {
    width: 100% !important;
}

.select2-container--default .select2-selection--multiple {
    height: 50px !important;
    border: 1px solid #e2e2e2 !important;
    /* margin-bottom : 22px !important; */

}
/* .button--green{
		background: #00997d;
	} */

/* .button--green{
		background: #00997d;
	} */
</style>

</head>
<?php
include("config_indemnifier.php");
$country = mysqli_query($db,"SELECT * FROM ship.ss_setup_country order by country_id desc limit 20;");
$city = mysqli_query($db,"SELECT * FROM ship.ss_setup_city limit 20");
$state = mysqli_query($db,"SELECT * FROM ship.ss_setup_state limit 20");
$region = mysqli_query($db,"SELECT * FROM ship.ss_setup_region limit 20");
$port = mysqli_query($db,"SELECT * FROM ship.ss_setup_port limit 20");
$membership = mysqli_query($db,"SELECT * FROM ship.ss_setup_user_member_type limit 20");

?>

<body>
    <div class="page-wrapper">
        <!-- menu dropdown start-->
        <?php include("header.php")?>
        <!-- header end-->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">

                    <!-- <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <div class="title">
                                <h3>HTML5</h3>
                            </div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="javascript:void(0);">HTML5</a></li>
                            </ol>
                        </nav>
    
    
    
                    </div> -->


                    <div class="row layout-top-spacing" id="cancel-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 hamza">

                                    <div class="login-page">
                                        <div class="form">
                                            <div class="login">
                                                <div class="login-header">
                                                    <h2>REGISTER</h2>
                                                    <p>Please enter your credentials to login.</p>
                                                </div>
                                            </div>
                                            <form method="post" id="insert_form" enctype="multipart/form-data">
                                                <div class="container-fluid">
                                                    <h3 style="text-align: left;">Personal Details</h3>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">


                                                            <input class="form__field" type="text" id="first_name"
                                                                name="first_name" placeholder="Enter First Name" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="text" name="last_name"
                                                                placeholder="Enter Last Name" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="number" name="phone"
                                                                placeholder="Enter Phone Number" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="number" name="mobile"
                                                                placeholder="Enter Mobile  Number" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" placeholder="Enter Date of Birth"
                                                                class="textbox-n" type="text"
                                                                onfocus="(this.type='date')" onblur="(this.type='text')"
                                                                name="date_of_birth" id="date_of_birth" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="text" name="job_title"
                                                                placeholder="Enter Job Title" />
                                                        </div>
                                                        <div class="col-md-6">

                                                            <select class="form__select" name="country_id">
                                                                <option data-display="Choose Country">Choose Country
                                                                </option>
                                                                <?php foreach($country as $key => $value){ ?>
                                                                <option value="<?= $value['country_id'];?>">
                                                                    <?= $value['country_name']; ?>
                                                                </option>
                                                                <?php } 
                                                            ?>


                                                            </select>
                                                        </div>

                                                        <div class="col-md-6">

                                                            <select class="form__select" name="state_id">
                                                                <option data-display="Choose State">Choose State
                                                                </option>
                                                                <?php foreach($state as $key => $value){ ?>
                                                                <option value="<?= $value['state_id'];?>">
                                                                    <?= $value['state_name']; ?>
                                                                </option>
                                                                <?php } ?>


                                                            </select>
                                                        </div>

                                                        <div class="col-md-6">

                                                            <select class="form__select" name="city_id">
                                                                <option data-display="Choose City">Choose City</option>
                                                                <?php foreach($city as $key => $value){ ?>
                                                                <option value="<?= $value['cuty_id'];?>">
                                                                    <?= $value['city_name']; ?>
                                                                </option>
                                                                <?php } ?>


                                                            </select>
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="number" name="zip_code"
                                                                placeholder="Enter Zip Code" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="text"
                                                                name="permanent_address"
                                                                placeholder="Enter Permanent Address" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="text"
                                                                name="temporary_address"
                                                                placeholder="Enter Temporary Address" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="email" name="mail_address"
                                                                placeholder="Enter Mail Address" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="text" name="fax"
                                                                placeholder="Enter Fax" />
                                                        </div>
                                                        <div class="col-md-12">

                                                            <textarea name="description" id="description"
                                                                class="form-control" cols="100" rows="5" maxlength="250"
                                                                placeholder="Description"></textarea>
                                                        </div>
                                                    </div>


                                                    <h3 style="text-align: left;">Company Details</h3>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-md-6">


                                                            <input class="form__field" type="text" name="company_name"
                                                                placeholder="Enter Company Name" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="email" name="company_email"
                                                                placeholder="Enter Company Email" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="text"
                                                                name="contact_person_first_name"
                                                                placeholder="Enter Contact Person First Name" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="text"
                                                                name="contact_person_last_name"
                                                                placeholder="Enter Contact Person Last Name" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="number"
                                                                name="company_phone"
                                                                placeholder="Enter Company Phone Number" />
                                                        </div>

                                                        <div class="col-md-6">

                                                            <select class="form__select" name="c_region_id">
                                                                <option data-display="Choose Region">Choose Region
                                                                </option>
                                                                <?php foreach($region as $key => $value){ ?>
                                                                <option value="<?= $value['region_id'];?>">
                                                                    <?= $value['region_name']; ?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                        </div>


                                                        <div class="col-md-6">

                                                            <select class="form__select" name="c_country_id">
                                                                <option data-display="Choose Country">Choose Country
                                                                </option>
                                                                <?php foreach($country as $key => $value){ ?>
                                                                <option value="<?= $value['country_id'];?>">
                                                                    <?= $value['country_name']; ?>
                                                                </option>
                                                                <?php }?>


                                                            </select>

                                                            <!-- <select name="c_country_id[]"
                                                                    class="js-example-basic-multiple "
                                                                    multiple="multiple" required id="c_country_id">
                                                                    <option data-display="Choose Country">Choose Country
                                                                </option>
                                                                    <?php foreach($country as $key => $value){ ?>
                                                                    <option value="<?= $value['country_id'];?>">
                                                                        <?= $value['country_name']; ?>
                                                                    </option>
                                                                    <?php } 
                                                            ?>
                                                                </select> -->
                                                        </div>
                                                        <div class="col-md-6">

                                                            <select class="form__select" name="c_port_id">
                                                                <option data-display="Choose Port">Choose Port</option>
                                                                <?php foreach($port as $key => $value){ ?>
                                                                <option value="<?= $value['port_id'];?>">
                                                                    <?= $value['port_name']; ?>
                                                                </option>
                                                                <?php }?>
                                                            </select>


                                                            <!-- <select name="c_port_id[]"
                                                                    class="js-example-basic-multiple"
                                                                    multiple="multiple" required id="c_port_id">
                                                                    <option data-display="Choose Port">Choose Port
                                                                </option>
                                                                <?php foreach($port as $key => $value){ ?>
                                                                <option value="<?= $value['port_id'];?>">
                                                                    <?= $value['port_name']; ?>
                                                                </option>
                                                                <?php }?>
                                                                </select> -->
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="text"
                                                                name="c_bussiness_address"
                                                                placeholder="Enter business Address" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="number" name="c_fax"
                                                                placeholder="Enter Comapany Fax" />
                                                        </div>

                                                        <div class="col-md-12">


                                                            <input class="form__field" type="text" name="c_website"
                                                                placeholder="Enter Comapany Website" />
                                                        </div>
                                                    </div>

                                                    <h3 style="text-align: left;">Membership Details
                                                    </h3>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <select class="form__select" name="c_menbership">
                                                                <option data-display="Choose Plan">Choose Plan</option>
                                                                <?php foreach($membership as $key => $value){ ?>
                                                                <option value="<?= $value['user_member_type_id'];?>">
                                                                    <?= $value['member_type']; ?>
                                                                    (<?= $value['subscription']; ?>)
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <h3 style="text-align: left;">Login Details
                                                    </h3>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12">


                                                            <input class="form__field" type="email" name="l_email"
                                                                placeholder="Enter Login Email" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="password" id="l_password"
                                                                name="l_password" required
                                                                placeholder="Enter Password" />
                                                        </div>

                                                        <div class="col-md-6">


                                                            <input class="form__field" type="password" id="l_c_password"
                                                                name="l_c_password" required
                                                                placeholder="Enter Confirm Password" />
                                                        </div>

                                                        <script>
                                                        var password = document.getElementById("l_password"),
                                                            confirm_password = document.getElementById("l_c_password");

                                                        function validatePassword() {
                                                            if (password.value != confirm_password.value) {
                                                                confirm_password.setCustomValidity(
                                                                    "Passwords Don't Match");
                                                            } else {
                                                                confirm_password.setCustomValidity('');
                                                            }
                                                        }

                                                        password.onchange = validatePassword;
                                                        confirm_password.onkeyup = validatePassword;
                                                        </script>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <!-- <div class="col-md-12">
                                                        <button>login</button>

                                                    </div> -->
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input type="submit" class="btn btn-primary"
                                                                    name="insert" id="insert" value="Register"
                                                                    style="float:right" />

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>

            </div>
            <!--  END CONTENT AREA  -->

        </div>
        <!-- footer start-->
        <?php include("footer.php")?>
        <!-- footer end-->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script> -->

       
    <!-- <script src="js/libs.min.js"></script>
    <script src="js/common.min.js"></script> -->
       
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- scripts-->
    <script>
    // $(document).ready(function() {
    //     $('#framework').multiselect({
    //         nonSelectedText: 'Select Framework',
    //         enableFiltering: true,
    //         enableCaseInsensitiveFiltering: true,
    //         buttonWidth: '400px'
    //     });

    // });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script>
    $(document).ready(function() {
        App.init();
    });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script src="plugins/highlight/highlight.pack.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM SCRIPT FILE  -->
    <script src="assets/js/scrollspyNav.js"></script>


    <!-- toastr -->
    <script src="plugins/notification/snackbar/snackbar.min.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="assets/js/components/notification/custom-snackbar.js"></script>

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->



    <script src='https://rawgit.com/RickStrahl/jquery-resizable/master/src/jquery-resizable.js'></script>
    <script src="dist/script.js"></script>
    <!-- <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
 -->
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
    //     $(document).ready(function() {
    //     $('.js-example-basic-multiple').select2();

    //     $('#c_country_id').select2({
    //         placeholder: "    Select Country"
    //     });
       

    // });
    $(document).ready(function() {


        $('#insert_form').on("submit", function(event) {
            event.preventDefault();
            if ($('#first_name').val() == "") {
                alert("First Name is required");

            } else {
                $.ajax({
                    url: "ajax/insert/register_api.php",
                    method: "POST",
                    data: $('#insert_form').serialize(),
                    beforeSend: function() {
                        $('#insert').val("Registering");
                    },
                    success: function(data) {
                        data = JSON.parse(data);
                        console.log(data);
                        var status = data[0].status;


                        
                        // alert(status);
                        Snackbar.show({
                            text: '' + data[0].db_output + '.',
                            pos: 'top-right'
                        });

                        if(status!='0'){
                            $("#insert_form")[0].reset();

                        }

                        setTimeout(function() {
                            // window.location.reload();
                        }, 5000);
                        //    $("#html5-extension").load(" #html5-extension");


                    },
                    complete: function(data) {



                        $('#insert').val("Register");
                        // $("#insert_form")[0].reset();

                        $('#title_edit').text("Send Mail");

                        // $('#zoomupModal').modal('hide');
                    }
                });
            }
        });






    })
    </script>


</body>
<?php include("svg.php")?>
</html>