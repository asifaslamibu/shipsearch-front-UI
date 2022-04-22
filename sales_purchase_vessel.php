<?php
	include('session_input.php')
	?>
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
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/jquery-step/jquery.steps.css">
    <link href="plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />


    <!-- web-font loader-->
    <!-- <script>
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
    </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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

    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
    <!-- <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css"> -->
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

    width: 151px;
}

.input-group-addon {
    padding: 0;
}

.input-group-lg>.form-control,
.input-group-lg>.input-group-addon,
.input-group-lg>.input-group-btn>.btn {

    padding: 0;
}

.combine_box {
    height: 50px;
    width: 100px !important;
    position: relative;
    top: -10px;
}

.input-group-addon {
    border: none;
    background-color: transparent;
}

@import 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300';



.input-switch {
    display: inline-block;
}

.input-switch .input {
    position: absolute;
    visibility: hidden;
}

.input-switch .input+.switch {
    position: relative;
    height: 10px;
    width: 45px;
    margin-right: 15px;
    margin-left: 15px;
    border-radius: 10px;
    background-color: #e4ecfa;
    vertical-align: middle;
    display: inline-block;
    cursor: pointer;
    transition: 0.3s 0.05s;
}

.input-switch .input+.switch::before,
.input-switch .input+.switch::after {
    content: "";
    position: absolute;
    transition: 0.35s;
}

.input-switch .input+.switch::before {
    top: 0;
    left: 0;
    height: 100%;
    width: 20%;
    border-radius: 10px;
    background-color: #739ce6;
}

.input-switch .input+.switch::after {
    left: 5px;
    top: 50%;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    border: none;
    background-color: #cad9f5;
    transform: translateY(-50%);
    opacity: 1;
}

.input-switch .input+.switch:hover::after {
    transform: translateY(-50%) scale(1.1);
}

.input-switch .input:checked+.switch {
    background-color: #fadfe0;
}

.input-switch .input:checked+.switch::before {
    width: calc(100% - 5px);
    background-color: #00997d;
}

.input-switch .input:checked+.switch::after {
    left: calc(100% - (20px + 5px));
    background-color: #5dd4be;
}

.select2-container {
    width: 100% !important;
}

.select2-container--default .select2-selection--multiple {
    height: 50px !important;
    border: 1px solid #e2e2e2 !important;
    overflow: auto !important;

}

.wizard>.content>.body ul>li {
    display: inherit !important;
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

$qry = mysqli_query($db,"SELECT vessel_sale_id FROM ship.ss_vessel_sale order by vessel_sale_id desc limit 1;"); // select query

$data = mysqli_fetch_array($qry); 

$country = mysqli_query($db,"SELECT * FROM ship.ss_setup_country order by country_id desc limit 20;");
$city = mysqli_query($db,"SELECT * FROM ship.ss_setup_city limit 20");
$state = mysqli_query($db,"SELECT * FROM ship.ss_setup_state limit 20");
$region = mysqli_query($db,"SELECT * FROM ship.ss_setup_region limit 20");
$port = mysqli_query($db,"SELECT * FROM ship.ss_setup_port limit 20");
$ss_setup_vessel_type = mysqli_query($db,"SELECT * FROM ship.ss_setup_vessel_type limit 20");

?>


<body>
    <div class="page-wrapper">
        <!-- menu dropdown start-->
        <?php include('header.php') ?>
        <!-- header end-->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">



                    <div class="row layout-top-spacing" id="cancel-row">
                        <div class="container-fluid" style="">
                            <form method="post" id="insert_form" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="container-fluid my-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Vessel Sale ID</label>

                                                    <input class="form__field" type="text" name="vessel_id"
                                                        id="vessel_id"
                                                        value="<?php echo 'VSA'.($data['vessel_sale_id']+1) ?>" readonly
                                                        placeholder="Enter Vessel ID" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Image</label>

                                                    <input class="form__field" type="file" name="v_image[]" id="v_image"
                                                        multiple placeholder="Add Image" />
                                                </div>
                                                <div class="col-md-4" style="display: flex;align-items: center;">
                                                    <!-- <button class="btn btn-success px-5">+</button> -->
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Region(s)</label>



                                                    <select name="v_region[]" class="js-example-basic-multiple"
                                                        multiple="multiple" required id="v_region">
                                                        <?php foreach($region as $key => $value){ ?>
                                                        <option groupid="<?= $value['region_name']; ?>" value="<?= $value['region_id'];?>">
                                                            <?= $value['region_name']; ?>
                                                        </option>
                                                        <?php }?>
                                                    </select>


                                                </div>
                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Country(s)</label>

                                                    <select name="v_country[]" class="js-example-basic-multiple"
                                                        multiple="multiple" required id="v_country">
                                                        <?php foreach($country as $key => $value){ ?>
                                                        <option groupid="<?= $value['country_name']; ?>" value="<?= $value['country_id'];?>">
                                                            <?= $value['country_name']; ?>
                                                        </option>
                                                        <?php } 
                                                            ?>


                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Ports(s) </label>

                                                    <select class="js-example-basic-multiple" multiple="multiple"
                                                        name="v_ports[]" required id="v_ports">
                                                        <?php foreach($port as $key => $value){ ?>
                                                        <option groupid="<?= $value['port_name']; ?>" value="<?= $value['port_id'];?>">
                                                            <?= $value['port_name']; ?>
                                                        </option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-row mb-4">
                                                        <label for="inputEmail4">Vessel Type(s)</label>
                                                        <div class="form-group col-md-12">


                                                            <select class="js-example-basic-multiple"
                                                                multiple="multiple" name="v_vessel_type[]"
                                                                id="v_vessel_type">
                                                                <?php foreach($ss_setup_vessel_type as $key => $value){ ?>
                                                                <option groupid="<?= $value['vessel_type_name']; ?>" value="<?= $value['vessel_type_id'];?>">
                                                                    <?= $value['vessel_type_name']; ?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>



                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Date Available</label>

                                                    <input class="form__field" type="date" name="v_date_available"
                                                        id="v_date_available" placeholder="Enter Laycan Date From" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Last Operations Date</label>

                                                    <input class="form__field" type="date" name="v_last_operation"
                                                        id="v_last_operation" placeholder="Enter Laycan Date To" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Built Year</label>

                                                    <input class="form__field" type="number" name="v_build_year"
                                                        id="v_build_year" placeholder="Enter Built Year" />
                                                </div>


                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Last DD</label>

                                                    <input class="form__field" type="date" name="v_last_dd"
                                                        id="v_last_dd" placeholder="Enter Built Year" />
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Last SS</label>

                                                    <input class="form__field" type="date" name="v_last_ss"
                                                        id="v_last_ss" placeholder="Enter Built Year" />
                                                </div>








                                            </div>

                                            <div class="row">

                                                <div class="col-md-3">
                                                    <label for="inputEmail4">Classification</label>

                                                    <input class="form__field" type="number" name="v_classification"
                                                        id="v_classification" placeholder="Enter Classification" />
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="inputEmail4">DWT</label>

                                                    <input class="form__field" type="number" name="v_dwt" step="5000"
                                                        id="v_dwt" placeholder="Enter DWT" />
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="inputEmail4">Light Weight</label>

                                                    <input class="form__field" type="text" name="v_light_weight"
                                                        id="v_light_weight" placeholder="Enter Light Weight" />
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="inputEmail4">Main Engine</label>

                                                    <input class="form__field" type="text" name="v_main_engine"
                                                        id="v_main_engine" placeholder="Enter Main Engine" />
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="inputEmail4">AUX Engines</label>

                                                    <input class="form__field" type="text" name="v_aux_engine"
                                                        id="v_aux_engine" placeholder="Enter AUX Engines" />
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="inputEmail4">IFO Consumption Empty</label>

                                                    <input class="form__field" type="text" name="v_ifo_consumption"
                                                        id="v_ifo_consumption"
                                                        placeholder="Enter IFO Consumption Empty" />
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="inputEmail4">Bow Thruster</label>

                                                    <input class="form__field" type="text" name="v_bow_thuruster"
                                                        id="v_bow_thuruster" placeholder="Enter Bow Thruster" />
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="inputEmail4">Gears</label>

                                                    <input class="form__field" type="text" name="v_gears" id="v_gears"
                                                        placeholder="Enter Gears" />
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="inputEmail4">Propellers</label>

                                                    <input class="form__field" type="text" name="v_propellers"
                                                        id="v_propellers" placeholder="Enter Propellers" />
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="inputEmail4">Cargo Capacity</label>

                                                    <input class="form__field" type="text" name="v_cargo_capacity"
                                                        id="v_cargo_capacity" placeholder="Enter Cargo Capacity" />
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="inputEmail4">Holds Hatch</label>

                                                    <input class="form__field" type="text" name="v_hold_hatch"
                                                        id="v_hold_hatch" placeholder="Enter Holds Hatch" />
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="inputEmail4">Cover Type</label>

                                                    <input class="form__field" type="text" name="v_cargo_type"
                                                        id="v_cargo_type" placeholder="Enter Cover Type" />
                                                </div>








                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="inputEmail4">
                                                        GRT</label>

                                                    <div class="input-group input-group-lg">
                                                        <input type="number" class="form__field" id="v_grt"
                                                            name="v_grt">
                                                        <span class="input-group-addon">
                                                            <select class="form-control combine_box" id="grt_measure"
                                                                name="grt_measure">
                                                                <option value="Meters">MT</option>


                                                            </select>
                                                        </span>
                                                    </div>

                                                </div>

                                                <div class="col-md-4">
                                                    <label for="inputEmail4">NRT</label>

                                                    <div class="input-group input-group-lg">
                                                        <input type="number" class="form__field" id="v_nrt"
                                                            name="v_nrt">
                                                        <span class="input-group-addon">
                                                            <select class="form-control combine_box" id="nrt_measure"
                                                                name="nrt_measure">
                                                                <option value="Meters">MT</option>


                                                            </select>
                                                        </span>
                                                    </div>

                                                </div>

                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Speed</label>

                                                    <div class="input-group input-group-lg">
                                                        <input type="number" class="form__field" id="v_speed"
                                                            name="v_speed">
                                                        <span class="input-group-addon">
                                                            <select class="form-control combine_box" id="Speed_measure"
                                                                name="Speed_measure">
                                                                <option value="Knots">Knots</option>



                                                            </select>
                                                        </span>
                                                    </div>

                                                </div>

                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Consumption</label>

                                                    <div class="input-group input-group-lg">
                                                        <input type="number" class="form__field" id="v_comsumption"
                                                            name="v_comsumption">
                                                        <span class="input-group-addon">
                                                            <select class="form-control combine_box"
                                                                id="consumption_measure" name="consumption_measure">
                                                                <option value="Gal/Hr">Gal/Hr</option>
                                                                <option value="Ltrs/Hr">Ltrs/Hr</option>


                                                            </select>
                                                        </span>
                                                    </div>

                                                </div>

                                                <div class="col-md-4">
                                                    <label for="inputEmail4">LOA</label>

                                                    <div class="input-group input-group-lg">
                                                        <input type="number" class="form__field" id="v_loa"
                                                            name="v_loa">
                                                        <span class="input-group-addon">
                                                            <select class="form-control combine_box" name="loa_measure"
                                                                id="loa_measure">
                                                                <option value="Meters">Meters</option>



                                                            </select>
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Breadth</label>

                                                    <div class="input-group input-group-lg">
                                                        <input type="number" class="form__field" id="v_breath"
                                                            name="v_breath">
                                                        <span class="input-group-addon">
                                                            <select class="form-control combine_box" id="breath_measure"
                                                                name="breath_measure">
                                                                <option value="Meters">Meters</option>




                                                            </select>
                                                        </span>
                                                    </div>

                                                </div>

                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Summer Draft</label>

                                                    <div class="input-group input-group-lg">
                                                        <input type="number" class="form__field" id="v_draft"
                                                            name="v_draft">
                                                        <span class="input-group-addon">
                                                            <select class="form-control combine_box" id="draft_measure"
                                                                name="draft_measure">
                                                                <option value="Meters">Meters</option>


                                                            </select>
                                                        </span>
                                                    </div>

                                                </div>

                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Fresh Water Draft</label>

                                                    <div class="input-group input-group-lg">
                                                        <input type="number" class="form__field" id="freah_water"
                                                            name="freah_water">
                                                        <span class="input-group-addon">
                                                            <select class="form-control combine_box"
                                                                id="freah_water_measure" name="freah_water_measure">
                                                                <option value="Meters">Meters</option>



                                                            </select>
                                                        </span>
                                                    </div>

                                                </div>

                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Bunker Capacity</label>

                                                    <div class="input-group input-group-lg">
                                                        <input type="number" class="form__field" id="bunker_capacity"
                                                            name="bunker_capacity">
                                                        <span class="input-group-addon">
                                                            <select class="form-control combine_box"
                                                                id="bunker_capacity_measure"
                                                                name="bunker_capacity_measure">
                                                                <option value="Gal/Litres">Gal/Litres
                                                                </option>


                                                            </select>
                                                        </span>
                                                    </div>

                                                </div>

                                                <div class="col-md-4">
                                                    <label for="inputEmail4">Price</label>

                                                    <div class="input-group input-group-lg">
                                                        <input type="number" class="form__field" id="v_price"
                                                            name="v_price">
                                                        <span class="input-group-addon">
                                                            <select class="form-control combine_box" id="price_measure"
                                                                name="price_measure">
                                                                <option value="USD">USD</option>
                                                                <option value="EURO">EURO</option>
                                                                <option value="GBP">GBP</option>

                                                            </select>
                                                        </span>
                                                    </div>

                                                </div>



                                                <div class="col-md-4">
                                                    <label class="switch_text" for="inputEmail4">In Service</label>
                                                    <br>
                                                    <div class="input-switch">
                                                        <label for="switchy">NO</label>
                                                        <input type="checkbox" id="switchy5" checked="" value="Yes"
                                                            onchange="set_value(this,'id_check')" class="input">
                                                        <label for="switchy5" class="switch"></label>
                                                        <label for="switchy5">YES</label>
                                                    </div>
                                                    <input type="hidden" value="1" id="id_check" name="in_service">

                                                    <script>
                                                    function set_value(val, idea) {
                                                        // alert();
                                                        var id = val.id;
                                                        var mode = $(val).prop('checked');
                                                        console.log("hamza " + mode)
                                                        if (mode === false) {
                                                            document.getElementById(idea).value = 'N0';
                                                        } else {
                                                            document.getElementById(idea).value = 'Yes';



                                                        }
                                                    }
                                                    </script>

                                                </div>


                                                <div class="col-md-12">
                                                    <label for="inputEmail4">Additional Notes</label>

                                                    <textarea name="additional_info" id="additional_info"
                                                        class="form-control" cols="100" rows="5"
                                                        maxlength="250"></textarea>
                                                </div>




                                                <div class="container-fluid my-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="submit" class="button button--light-green" name="insert"
                                                                id="insert" value="Save" style="float:right" />

                                                        </div>

                                                    </div>
                                                </div>

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
        <!-- footer start-->
        <?php include('footer.php') ?>
        <!-- footer end-->
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>

    <!-- <script src="../../../ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
    <script src="js/libs.min.js"></script>
    <script src="js/common.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"> -->
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- scripts-->
    <script>
    $(document).ready(function() {
        $('#framework').multiselect({
            nonSelectedText: 'Select Framework',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '400px'
        });

    });
    document.getElementById('switchy1').addEventListener('click', function() {
        if (document.getElementById('switchy1').checked) {
            document.body.classList.add('active');
        } else {
            document.body.classList.remove('active');
        }
    });

    document.getElementById('switchy2').addEventListener('click', function() {
        if (document.getElementById('switchy2').checked) {
            document.body.classList.add('active');
        } else {
            document.body.classList.remove('active');
        }
    });
    document.getElementById('switchy3').addEventListener('click', function() {
        if (document.getElementById('switchy3').checked) {
            document.body.classList.add('active');
        } else {
            document.body.classList.remove('active');
        }
    });
    document.getElementById('switchy4').addEventListener('click', function() {
        if (document.getElementById('switchy4').checked) {
            document.body.classList.add('active');
        } else {
            document.body.classList.remove('active');
        }
    });
    document.getElementById('switchy5').addEventListener('click', function() {
        if (document.getElementById('switchy5').checked) {
            document.body.classList.add('active');
        } else {
            document.body.classList.remove('active');
        }
    });
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

    <!-- <script src="plugins/select2/select2.min.js"></script>
    <script src="plugins/select2/custom-select2.js"></script> -->


    <!-- toastr -->
    <script src="plugins/notification/snackbar/snackbar.min.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="assets/js/components/notification/custom-snackbar.js"></script>

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->


    <script src="dist/script.js"></script>
    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="plugins/jquery-step/jquery.steps.min.js"></script>
    <script src="plugins/jquery-step/custom-jquery.steps.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script>
    // $(document).ready(function() {
    //     $('.js-example-basic-multiple').select2();
    // });

    $(function() {
        
        $('.js-example-basic-multiple').select2();

        //Select2 Event handler for selecting an item
        $('.js-example-basic-multiple').on("select2:selecting", function(evt, f, g) {
            /* alert(evt.value) */
            disableSel2Group(evt, this, true);
        });

        // Select2 Event handler for unselecting an item
        $('.js-example-basic-multiple').on("select2:unselecting", function(evt) {
            disableSel2Group(evt, this, false);
        });
    });

    function disableSel2Group(evt, target, disabled) {
        // Found a note in the Select2 formums on how to get the item to be selected

        var selId = evt.params.args.data.id;
        var group = $("option[value='" + selId + "']").attr("groupid");
        // alert(group)
        if (group==='Any') {
            var aaList = $("option", target);
            $.each(aaList, function(idx, item) {
                var data = $(item).data("data");
        


                var itemGroupId = $("option[value='" + data.id + "']").attr("groupid");
                // alert(itemGroupId)
                if (itemGroupId != group) {
                    data.disabled = disabled;
                }
            })
        } else {
            var aaList = $("option", target);
            $.each(aaList, function(idx, item) {
                var data = $(item).data("data");

                var itemGroupId = $("option[value='" + data.id + "']").attr("groupid");
                if (itemGroupId === 'Any') {
                    data.disabled = disabled;
                }
            })
        }


    }
    </script>
    <script type="text/javascript">
    $(document).ready(function(e) {
        $("#insert_form").on('submit', (function(e) {
            e.preventDefault();
            $.ajax({
                url: "ajax/insert/insert_sale_vessel.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#insert').val("Saving");
                },
                success: function(data) {
                    console.log(data);
                    // alert("Data inserted successfully");
                    Snackbar.show({
                        text: '' + data + '.',
                        pos: 'top-right'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 5000);

                },
                complete: function(data) {



                    $('#insert').val("Save");
                    $("#insert_form")[0].reset();


                    // $('#zoomupModal').modal('hide');
                },
                error: function() {

                }
            });
        }));
    });
    </script>
    <script>
    $(document).ready(function() {


        // $('#insert_form').on("submit", function(event) {
        //     event.preventDefault();
        //     if ($('#vessel_id').val() == "") {
        //         alert("vessel id is required");

        //     } else {
        //         $.ajax({
        //             url: "ajax/insert/insert_sale_vessel.php",
        //             method: "POST",
        //             data: $('#insert_form').serialize(),
        //             beforeSend: function() {
        //                 $('#insert').val("Saving");
        //             },
        //             success: function(data) {


        //                 Snackbar.show({
        //                     text: '' + data + '.',
        //                     pos: 'top-right'
        //                 });

        //                 setTimeout(function() {
        //                     // window.location.reload();
        //                 }, 5000);
        //                 //    $("#html5-extension").load(" #html5-extension");


        //             },
        //             complete: function(data) {



        //                 $('#insert').val("Save");
        //                 $("#insert_form")[0].reset();


        //                 // $('#zoomupModal').modal('hide');
        //             }
        //         });
        //     }
        // });






    })

    //     $(".tagging").select2({
    //     tags: true
    // });
    </script>



</body>
<div style="display: none">
    <?php include('svg.php') ?>
    <!-- Mirrored from demo.artureanec.com/html/transx/front_5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Mar 2022 13:08:41 GMT -->

</html>