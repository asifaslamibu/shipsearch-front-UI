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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />


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
    <!--     -->
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
    color: #49997d;
    font-weight: 700;

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
    padding: 2px;
    font-size: 12px;
    /* font-family: 'Inter'; */
}

table.dataTable tbody th,
table.dataTable tbody td {
    padding: 2px 2px;
}

p {
    color: #fff;
}

.hamburger--white .hamburger-inner,
.hamburger--white .hamburger-inner::after,
.hamburger--white .hamburger-inner::before {
    color: #000;
}



td {

    width: 151px;
}

.select2-container {
    width: 100% !important;
}

.select2-container--default .select2-selection--multiple {
    min-height: 50px !important;
    border: 1px solid #e2e2e2 !important;
    max-height: max-content !important;


}

.wizard>.content>.body ul>li {
    display: inherit !important;
}

a.button.button--green {
    background: #00997d;
    color: white;
}

/* .modal-backdrop.show {
    opacity: -0.5;
    display: none !important;
} */

.button--light-green {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    color: #414a53;
    height: 40px;
    line-height: 30px;
    min-width: 98px;
    text-align: left;
    border: 2px solid #408588;
    border-radius: 0 0 20px 0;
    padding: 0 20px;
}

.button.button--light-green {
    background: #408588;
    color: white;
}

.button--red {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    color: #414a53;
    height: 40px;
    line-height: 30px;
    min-width: 98px;
    text-align: left;
    border: 2px solid #e65540;
    border-radius: 0 0 20px 0;
    padding: 0 20px;
}

.button.button--red {
    background: #e65540;
    color: white;
}

.label_cl {
    color: #00997d;
    font-weight: 700;
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

$qry = mysqli_query($db,"SELECT cargo_id FROM ship.ss_cargo order by cargo_id desc limit 1;"); // select query

$data = mysqli_fetch_array($qry); 

$country = mysqli_query($db,"SELECT * FROM ship.ss_setup_country order by country_id desc limit 20;");
$city = mysqli_query($db,"SELECT * FROM ship.ss_setup_city limit 20");
$state = mysqli_query($db,"SELECT * FROM ship.ss_setup_state limit 20");
$cargo_type = mysqli_query($db,"SELECT * FROM ship.ss_setup_cargo_type order by cargo_type_id desc limit 20");
$port = mysqli_query($db,"SELECT * FROM ship.ss_setup_port limit 20");
$ss_setup_vessel_type = mysqli_query($db,"SELECT * FROM ship.ss_setup_vessel_type limit 20");
$region = mysqli_query($db,"SELECT * FROM ship.ss_setup_region limit 20");


?>
<script>
var a;
</script>

<body>
    <div class="page-wrapper">

        <!-- header start-->
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
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 mb-3">
                                <button id="myBtn" class="btn text-light top_bt" data-toggle="modal"
                                    style="background-color: #00997d;" data-target="#zoomupModal"><i
                                        class="fas fa-search" aria-hidden="true"></i> New Cargo Search</button>
                            </div>
                            <div class="col-md-2">


                                <button id="add_ser_req" class="btn text-light top_bt  "
                                    style="background-color: #00997d;"><i class="fas fa-plus" aria-hidden="true"></i>
                                    Add New Cargo</button>
                            </div>
                        </div>
                        <!-- onclick="location.href = 'new_cargo.php';" -->
                    </div>
                    <?php
                    $user_id=$_SESSION['user_id'];

                    

                    if ($user_id!='') {?>


                    <?php } else { ?>
                    <script>
                    // document.getElementById("myBtn").disabled = true;
                    // document.getElementById("add_ser_req").disabled = true;
                    </script>
                    <?php } ?>

                    <script>
                    a = '<?php echo $user_id; ?>';
                    //  alert(a)
                    $("#add_ser_req").click(function() {

                        if (a != '') {
                            location.href = 'new_cargo.php';
                        } else {

                            swal({
                                title: 'Access Denied <br> Become a <a href="login.php"> member </a> to access.',
                                animation: false,
                                customClass: 'animated tada',
                                padding: '2em'
                            })
                        }
                    });
                    </script>

                    <div class="row layout-top-spacing" id="cancel-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-container-vertical">

                                        <div class="panel-top">


                                            <div class="container-fluid">
                                                <div class="row " id='load_exam'>
                                                    <div class="col-md-12">


                                                        <table id="example" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th><input type="checkbox" class='checkall'
                                                                            id='checkall'></th>

                                                                    <th>C-ID</th>
                                                                    <th style="width:100px !important">Cargo Type</th>
                                                                    <th>Laycan Date From</th>
                                                                    <th>Laycan Date To</th>
                                                                    <th>Loading Region</th>
                                                                    <th>Loading Country</th>
                                                                    <th>Loading Port</th>
                                                                    <th>Discharge Region</th>
                                                                    <th>Discharge Country</th>
                                                                    <th>Discharge Port</th>
                                                                </tr>
                                                            </thead>

                                                        </table>
                                                    </div>
                                                    <div class="col-md-12 mt-4">
                                                        <input type="button" class='button button--red'
                                                            id='delete_record' style="float: right;" value='Delete'>
                                                    </div>

                                                </div>
                                                <div class="row d-none" id='search_exam'>
                                                    <div class="col-md-12">

                                                        <table id="after_search" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th><input type="checkbox" class='checkall'
                                                                            id='checkall_search'></th>
                                                                    <th>C-ID</th>
                                                                    <th>Cargo Type</th>
                                                                    <th>Laycan Date From</th>
                                                                    <th>Laycan Date To</th>
                                                                    <th>Loading Region</th>
                                                                    <th>Loading Country</th>
                                                                    <th>Loading Port</th>
                                                                    <th>Discharge Region</th>
                                                                    <th>Discharge Country</th>
                                                                    <th>Discharge Port</th>
                                                                </tr>
                                                            </thead>

                                                        </table>
                                                    </div>
                                                    <div class="col-md-12 mt-4">
                                                        <input type="button" class='button button--red'
                                                            id='delete_record_search' style="float: right;"
                                                            value='Delete'>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="splitter-horizontal" style="text-align: center;">

                                        </div>

                                        <div class="panel-bottom">


                                            <div class="container-fluid">
                                                <div class="row d-none" id="example1_row">
                                                    <!-- <h4>load</h4> -->
                                                    <table id="example1" class="display " style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Cargo Type</th>
                                                                <th>Loading Region</th>
                                                                <th>Discharge Region</th>
                                                                <th>Laycan Date From</th>
                                                                <th>Laycan Date To</th>
                                                                <th>Quantity</th>
                                                                <th>Rates</th>
                                                                <th>Posted on</th>
                                                                <th>Details</th>
                                                            </tr>
                                                        </thead>

                                                    </table>
                                                </div>
                                                <div class="row d-none" id='search_row'>
                                                    <div class="col-md-12">
                                                        <!-- <h4>search_data</h4> -->

                                                        <table id="search_data" class="display" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Cargo Type</th>
                                                                    <th>Loading Region</th>
                                                                    <th>Discharge Region</th>
                                                                    <th>Laycan Date From</th>
                                                                    <th>Laycan Date To</th>
                                                                    <th>Quantity</th>
                                                                    <th>Loading Discharge Rates</th>
                                                                    <th>Posted on</th>
                                                                    <th>Details</th>
                                                                </tr>
                                                            </thead>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>

            </div>
            <!--  END CONTENT AREA  -->
            <div id="zoomupModal" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> Search New Cargo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form method="post" id="insert_form" enctype="multipart/form-data">


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-row ">
                                                <label for="inputEmail4">Cargo Type(s)</label>
                                                <select name="v_cargo_type[]" class="js-example-basic-multiple"
                                                    multiple="multiple" required id="v_cargo_type">
                                                    <?php foreach($cargo_type as $key => $value){ ?>
                                                    <option groupid="<?= $value['cargo_type_name']; ?>"
                                                        value="<?= $value['cargo_type_id'];?>">
                                                        <?= $value['cargo_type_name']; ?>
                                                    </option>
                                                    <?php }?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputEmail4">Laycan Date From</label>

                                            <input class="form__field" type="date" name="laycan_from" id='laycan_from'
                                                placeholder="Enter Laycan Date From" />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputEmail4">Laycan Date To</label>

                                            <input class="form__field" type="date" name="laycan_to" id='laycan_to'
                                                placeholder="Enter Laycan Date To" />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputEmail4">Loading Region(s)</label>

                                            <select name="v_region[]" class="js-example-basic-multiple"
                                                multiple="multiple" required id="v_region">
                                                <?php foreach($region as $key => $value){ ?>
                                                <option groupid="<?= $value['region_name']; ?>"
                                                    value="<?= $value['region_id'];?>">
                                                    <?= $value['region_name']; ?>
                                                </option>
                                                <?php }?>
                                            </select>
                                        </div>


                                        <div class="col-md-4">
                                            <label for="inputEmail4">Loading Country(s)</label>

                                            <select name="v_country[]" class="js-example-basic-multiple"
                                                multiple="multiple" required id="v_country">
                                                <?php foreach($country as $key => $value){ ?>
                                                <option groupid="<?= $value['country_name']; ?>"
                                                    value="<?= $value['country_id'];?>">
                                                    <?= $value['country_name']; ?>
                                                </option>
                                                <?php } 
                                                            ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputEmail4">Loading Port(s) <span
                                                    style="color: transparent;">...</span></label>

                                            <select class="js-example-basic-multiple" multiple="multiple"
                                                name="v_ports[]" required id="v_ports">
                                                <?php foreach($port as $key => $value){ ?>
                                                <option groupid="<?= $value['port_name']; ?>"
                                                    value="<?= $value['port_id'];?>">
                                                    <?= $value['port_name']; ?>
                                                </option>
                                                <?php }?>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputEmail4">Discharge Region(s)</label>

                                            <select name="d_region[]" class="js-example-basic-multiple"
                                                multiple="multiple" required id="d_region">
                                                <?php foreach($region as $key => $value){ ?>
                                                <option groupid="<?= $value['region_name']; ?>"
                                                    value="<?= $value['region_id'];?>">
                                                    <?= $value['region_name']; ?>
                                                </option>
                                                <?php }?>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputEmail4">Discharge Country(s)</label>

                                            <select name="d_country[]" class="js-example-basic-multiple"
                                                multiple="multiple" required id="d_country">
                                                <?php foreach($country as $key => $value){ ?>
                                                <option groupid="<?= $value['country_name']; ?>"
                                                    value="<?= $value['country_id'];?>">
                                                    <?= $value['country_name']; ?>
                                                </option>
                                                <?php } 
                                                            ?>


                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputEmail4">Discharge Port(s) <span
                                                    style="color: transparent;">...</span></label>

                                            <select class="js-example-basic-multiple" multiple="multiple"
                                                name="d_ports[]" required id="d_ports">
                                                <?php foreach($port as $key => $value){ ?>
                                                <option groupid="<?= $value['port_name']; ?>"
                                                    value="<?= $value['port_id'];?>">
                                                    <?= $value['port_name']; ?>
                                                </option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <input type="submit" class="button button--light-green" data-dismiss="modal"
                                                name="insert" id="insert" value="Search" style="float:right" />

                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer md-button">
                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                            <!-- <button type="button" class="btn btn-primary">Save</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer start-->
        <?php include("footer.php")?>
        <!-- footer end-->
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>

    <!--     -->
    <script src="js/libs.min.js"></script>
    <script src="js/common.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
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
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
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


    // At some point during the select2 instantation it created the 
    // data object it needs with the source select option.
    // This function, called by the events above to set the current status for the
    // group for which the selected option belongs.
    function disableSel2Group(evt, target, disabled) {
        // Found a note in the Select2 formums on how to get the item to be selected

        var selId = evt.params.args.data.id;
        var group = $("option[value='" + selId + "']").attr("groupid");
        // alert(group)
        if (group === 'Any') {
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

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->



    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
    <script src='https://rawgit.com/RickStrahl/jquery-resizable/master/src/jquery-resizable.js'></script>
    <script src="dist/script.js"></script>
    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>


    <script>
    /* Formatting function for row details - modify as you need */
    // function format(d) {
    //     // `d` is the original data object for the row
    //     return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
    //         '<tr>' +
    //         '<td>Full name:</td>' +
    //         '<td>' + d.charter_type + '</td>' +
    //         '</tr>' +
    //         '<tr>' +
    //         '<td>Extension number:</td>' +
    //         '<td>' + d.laycaon_date_to + '</td>' +
    //         '</tr>' +
    //         '<tr>' +
    //         '<td>Extra info:</td>' +
    //         '<td>And any further details here (images etc)...</td>' +
    //         '</tr>' +
    //         '</table>';
    // }
    var unique_id = '';
    $(document).ready(function() {

        // $('.btn-success').click(function() {
        //     var id = $(this).attr("id");
        //     if (confirm("Are you sure you want to delete this Member?")) {
        //         $.ajax({
        //             type: "POST",
        //             url: "delete_member.php",
        //             data: ({
        //                 id: id
        //             }),
        //             cache: false,
        //             success: function(html) {
        //                 $(".delete_mem" + id).fadeOut('slow');
        //             }
        //         });
        //     } else {
        //         return false;
        //     }
        // });
        $("#insert").on('click', (function(e) {
            e.preventDefault();

            $('#example1_row').addClass('d-none');
            $('#search_row').removeClass('d-none');

            $('#load_exam').addClass('d-none');
            $('#search_exam').removeClass('d-none');

            // $("#zoomupModal").modal('hide');
            // $('body').removeClass( "modal-open" );

            var data_lead = "v_cargo_type=" + $('#v_cargo_type').val() +
                "&laycan_from=" + $('#laycan_from').val() +
                "&laycan_to=" + $('#laycan_to').val() +
                "&v_region=" + $('#v_region').val() +
                "&v_country=" + $('#v_country').val() +
                "&v_ports=" + $('#v_ports').val() +
                "&d_region=" + $('#d_region').val() +
                "&d_country=" + $('#d_country').val() +
                "&d_ports=" + $('#d_ports').val() + "";
            console.log(data_lead);
            var table1 = $('#search_data').DataTable({
                "ajax": "data/get_cargo_data.php?" + data_lead + "",
                "columns": [

                    {
                        "data": "ref_no",
                        "className": 'nr'

                    },
                    // {
                    //     "data": "cargo_type_name"
                    // },
                    {
                        "data": "cargo_type_name",

                        "aTargets": [0],
                        "render": function(data) {
                            // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                            return "<span  class='label_cl' >" + data + "</span>";
                        }
                    },
                    {
                        "data": "loading_region_name"
                    },
                    {
                        "data": "discharge_region_name"
                    },
                    {
                        "data": "laycan_date_from"
                    },
                    {
                        "data": "laycan_date_to"
                    },
                    {
                        "data": "quantity"
                    },
                    // {
                    //     "data": "loading_discharge_rates"
                    // },
                    {
                        "data": "loading_discharge_rates",

                        "aTargets": [0],
                        "render": function(data) {
                            // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                            return "<span  class='label_cl' >" + data + "</span>";
                        }
                    },

                    {
                        "data": "created_at"
                    },

                    {
                        "className": 'dt-control',
                        "orderable": false,
                        "data": 'null',
                        "defaultContent": ''
                    },
                ],
                searching: false,
                "paging": false,
                "ordering": false,
                "info": false,
                stateSave: true,
                "bDestroy": true,
                "order": [
                    [1, 'asc']
                ],
                "pageLength": 10
            });




            function format1(d) {
                // `d` is the original data object for the row
                return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                    '<tr>' +
                    '<td>' +
                    '<div class=""></div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Loading Country: </div>' +
                    '<div class="expend_text">' + d.loading_country_name + '</div>' +

                    '<div class="expend_label">Max LOA: </div>' +
                    '<div class="expend_text">123 ' + d.max_loa + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Loading Port: </div>' +
                    '<div class="expend_text">' + d.loading_port_name + '</div>' +

                    '<div class="expend_label">Stowage Factor: </div>' +
                    '<div class="expend_text">' + d.stowage_factor + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Discharge Country: </div>' +
                    '<div class="expend_text">' + d.discharge_country_name + '</div>' +

                    '<div class="expend_label">Max Height: </div>' +
                    '<div class="expend_text">' + d.max_height + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Discharge Port: </div>' +
                    '<div class="expend_text">' + d.discharge_country_name + '</div>' +

                    '<div class="expend_label">Loading Equipment : </div>' +
                    '<div class="expend_text">' + d.loading_equipment_req + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Over Age: </div>' +
                    '<div class="expend_text">' + d.over_age + '</div>' +

                    '<div class="expend_label">Discharge Equipment : </div>' +
                    '<div class="expend_text">' + d.discharge_equipment_req + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Hazmat: </div>' +
                    '<div class="expend_text">' + d.hazmat + '</div>' +

                    '<div class="expend_label">Combinable: </div>' +
                    '<div class="expend_text">' + d.combinable + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Commission: </div>' +
                    '<div class="expend_text">' + d.commision + '</div>' +

                    '<div class="expend_label">Gear Lifting Capacity: </div>' +
                    '<div class="expend_text">' + d.gear_lifting_capacity + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Additional Info: </div>' +
                    '<div class="expend_text">' + d.additional_info + '</div>' +

                    // '<div class="expend_label">Company Name </div>' +
                    // '<div class="expend_text">' + d.C1name + '</div>' +
                    '<div class="expend_label">Brokerage Name </div>' +
                    '<div class="expend_text">' + d.first_name + '  ' + d.last_name + '</div>' +
                    '<div class="" id="chat_btn_' + d.created_by +
                    '"><a href="broker_chat.php?id=' + d.created_by + '&module_id=' + d.cargo_id +
                    '&module_type=cargo" class="btn  text-light my-2 font-italic font-bold" style="letter-spacing:0;background-color: #00997d;"> Message Directly </a></div>' +

                    // '<div class=""><a href="broker_chat.php?id='+d.created_by+'" class="btn  text-light my-2 font-italic font-bold" style="letter-spacing:0;background-color: #00997d;"> Message Directly </a></div>' +

                    '</td>' +
                    '<td></td>' +




                    '</tr>' +


                    '</table>';

            }

            $('#search_data tbody').on('click', 'td.dt-control', function() {
                var tr = $(this).closest('tr');
                var row = table1.row(tr);
                console.log('row' + row);
                var id = $(this).closest("tr").find(".nr").text();
                // alert(id);

                // unique_id = id;


                var cargo_id = id;
                console.log("cargo id " + cargo_id)
                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row
                    $.ajax({
                        url: 'get_route.php',
                        type: 'POST',
                        data: {
                            cargo: cargo_id,

                        },
                        success: function(data) {

                            data = JSON.parse(data);
                            console.log(data[0][0]);


                            var created_by = data[0][0]['created_by'];




                            row.child(format1(data[0][0]))
                                .show();
                            tr.addClass('shown');
                            if (created_by === a) {
                                // alert("same chat_btn_"+created_by);
                                // $('#chat_btn_'+created_by+'').addClass('d-none')
                                // $().css("display", "none");
                                document.getElementById('chat_btn_' +
                                    created_by + '').style.display = "none";
                            }

                        }
                    });
                    // row.child(format1(row.data())).show();
                    // tr.addClass('shown');
                }
            });


            var table = $('#after_search').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                "ajax": "data/cargo_search.php",
                "columns": [
                    // {
                    //     "className": 'dt-control',
                    //     "orderable": false,
                    //     "data": null,
                    //     "defaultContent": ''
                    // },
                    {
                        "data": "id",

                        "aTargets": [0],
                        "render": function(data) {
                            // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                            return "<input type='checkbox' class='delete_check_search' id='delchecks_" +
                                data +
                                "' onclick='checkcheckbox_search();' value='" +
                                data + "'>";
                        }
                    },
                    {
                        "data": "id",
                        "className": 'nr',
                    },
                    {
                        "data": "cargo_type_name"
                    },
                    {
                        "data": "laycan_date_from"
                    },
                    {
                        "data": "laycan_date_to"
                    },
                    {
                        "data": "load_region_name"
                    },
                    {
                        "data": "load_country_name"
                    },
                    {
                        "data": "load_port_name"
                    },
                    {
                        "data": "dis_region_name"
                    },
                    {
                        "data": "dis_country_name"
                    },
                    {
                        "data": "dis_port_name"
                    }

                ],
                stateSave: true,
                "bDestroy": true,
                searching: false,
                "paging": false,
                "ordering": false,
                "info": false,
                "order": [
                    [1, 'asc']
                ],
                "pageLength": 10
            });
            $('#checkall_search').click(function() {
                if ($(this).is(':checked')) {
                    $('.delete_check_search').prop('checked', true);
                } else {
                    $('.delete_check_search').prop('checked', false);
                }
            });

            // Delete record
            $('#delete_record_search').click(function() {

                var deleteids_arr = [];
                // Read all checked checkboxes
                $("input:checkbox[class=delete_check_search]:checked").each(function() {
                    deleteids_arr.push($(this).val());
                });

                // Check checkbox checked or not
                if (deleteids_arr.length > 0) {

                    // Confirm alert
                    var confirmdelete = confirm("Do you really want to Delete records?");
                    if (confirmdelete == true) {
                        $.ajax({
                            url: 'ajax/delete/delete_cargo_search_log1.php',
                            type: 'post',
                            data: {
                                request: 2,
                                deleteids_arr: deleteids_arr
                            },
                            success: function(response) {
                                console.log(response)
                                table.ajax.reload();
                            }
                        });
                    }
                } else {
                    alert("Please Check atleast one checkbox !")
                }
            });

            var table = $('#after_search').DataTable();

            $('#after_search tbody').on('click', 'tr', function() {

                var id = $(this).closest("tr").find(".nr").text();
                // alert(id);

                // var data = table.row(this).data();
                // alert('You clicked on after_search ' + data['id'] + '\'s row');
                $('#example1_row').addClass('d-none');
                $('#search_row').removeClass('d-none');
                unique_id = id;


                var cargo_id = id;
                console.log(cargo_id)

                var table1 = $('#search_data').DataTable({
                    "ajax": "data/get_cargo_log_data.php?cargo_id=" + cargo_id + "",
                    "columns": [

                        {
                            "data": "ref_no",
                            "className": 'nr'

                        },
                        // {
                        //     "data": "cargo_type_name"
                        // },
                        {
                            "data": "cargo_type_name",

                            "aTargets": [0],
                            "render": function(data) {
                                // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                                return "<span  class='label_cl' >" + data +
                                    "</span>";
                            }
                        },
                        {
                            "data": "loading_region_name"
                        },
                        {
                            "data": "discharge_region_name"
                        },
                        {
                            "data": "laycan_date_from"
                        },
                        {
                            "data": "laycan_date_to"
                        },
                        {
                            "data": "quantity"
                        },
                        // {
                        //     "data": "loading_discharge_rates"
                        // },
                        {
                            "data": "loading_discharge_rates",

                            "aTargets": [0],
                            "render": function(data) {
                                // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                                return "<span  class='label_cl' >" + data +
                                    "</span>";
                            }
                        },

                        {
                            "data": "created_at"
                        },

                        {
                            "className": 'dt-control',
                            "orderable": false,
                            "data": 'null',
                            "defaultContent": ''
                        },
                    ],
                    searching: false,
                    "paging": false,
                    "ordering": false,
                    "info": false,
                    stateSave: true,
                    "bDestroy": true,
                    "order": [
                        [1, 'asc']
                    ],
                    "pageLength": 10
                });

                function format_search(d) {
                    // console.log(d.last_dry_docked);
                    // `d` is the original data object for the row
                    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                        '<tr>' +
                        '<td>' +
                        '<div class=""></div>' +
                        '</td>' +

                        '<td>' +
                        '<div class="expend_label">Loading Country: </div>' +
                        '<div class="expend_text">' + d.loading_country_name + '</div>' +

                        '<div class="expend_label">Max LOA: </div>' +
                        '<div class="expend_text">123 ' + d.max_loa + '</div>' +
                        '</td>' +

                        '<td>' +
                        '<div class="expend_label">Loading Port: </div>' +
                        '<div class="expend_text">' + d.loading_port_name + '</div>' +

                        '<div class="expend_label">Stowage Factor: </div>' +
                        '<div class="expend_text">' + d.stowage_factor + '</div>' +
                        '</td>' +

                        '<td>' +
                        '<div class="expend_label">Discharge Country: </div>' +
                        '<div class="expend_text">' + d.discharge_country_name + '</div>' +

                        '<div class="expend_label">Max Height: </div>' +
                        '<div class="expend_text">' + d.max_height + '</div>' +
                        '</td>' +

                        '<td>' +
                        '<div class="expend_label">Discharge Port: </div>' +
                        '<div class="expend_text">' + d.discharge_country_name + '</div>' +

                        '<div class="expend_label">Loading Equipment : </div>' +
                        '<div class="expend_text">' + d.loading_equipment_req + '</div>' +
                        '</td>' +

                        '<td>' +
                        '<div class="expend_label">Over Age: </div>' +
                        '<div class="expend_text">' + d.over_age + '</div>' +

                        '<div class="expend_label">Discharge Equipment : </div>' +
                        '<div class="expend_text">' + d.discharge_equipment_req + '</div>' +
                        '</td>' +

                        '<td>' +
                        '<div class="expend_label">Hazmat: </div>' +
                        '<div class="expend_text">' + d.hazmat + '</div>' +

                        '<div class="expend_label">Combinable: </div>' +
                        '<div class="expend_text">' + d.combinable + '</div>' +
                        '</td>' +

                        '<td>' +
                        '<div class="expend_label">Commission: </div>' +
                        '<div class="expend_text">' + d.commision + '</div>' +

                        '<div class="expend_label">Gear Lifting Capacity: </div>' +
                        '<div class="expend_text">' + d.gear_lifting_capacity + '</div>' +
                        '</td>' +

                        '<td>' +
                        '<div class="expend_label">Additional Info: </div>' +
                        '<div class="expend_text">' + d.additional_info + '</div>' +

                        // '<div class="expend_label">Company Name </div>' +
                        // '<div class="expend_text">' + d.C1name + '</div>' +
                        '<div class="expend_label">Brokerage Name </div>' +
                        '<div class="expend_text">' + d.first_name + '  ' + d.last_name +
                        '</div>' +
                        // '<div class=""><a href="broker_chat.php?id='+d.created_by+'" class="btn  text-light my-2 font-italic font-bold" style="letter-spacing:0;background-color: #00997d;"> Message Directly </a></div>' +

                        '</td>' +
                        '<td></td>' +




                        '</tr>' +


                        '</table>';

                }

                $('#search_data tbody').on('click', 'td.dt-control', function() {
                    var tr = $(this).closest('tr');
                    // console.log(tr);
                    var row = table1.row(tr);

                    var id = $(this).closest("tr").find(".nr").text();
                    // alert(id);

                    // unique_id = id;


                    var cargo_id = id;
                    console.log("cargo id " + cargo_id)

                    // console.log(row.data())
                    console.log("unique_id " + unique_id)

                    if (row.child.isShown()) {
                        // This row is already open - close it
                        row.child.hide();
                        tr.removeClass('shown');;
                    } else {
                        // Open this row

                        $.ajax({
                            url: 'get_route.php',
                            type: 'POST',
                            data: {
                                unique_id: cargo_id,

                            },
                            success: function(data) {

                                data = JSON.parse(data);
                                console.log(data[0][0]);






                                row.child(format_search(data[0][0]))
                                    .show();
                                tr.addClass('shown');

                            }
                        });
                    }
                });

            });


        }));


        // ---------------------------------------------------------------------------------------------------



        var table = $('#example').DataTable({
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            "ajax": "data/cargo_search.php",
            "columns": [
                // {
                //     "className": 'dt-control',
                //     "orderable": false,
                //     "data": null,
                //     "defaultContent": ''
                // },
                {
                    "data": "id",

                    "aTargets": [0],
                    "render": function(data) {
                        // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                        return "<input type='checkbox' class='delete_check' id='delcheck_" +
                            data + "' onclick='checkcheckbox();' value='" + data + "'>";
                    }
                },
                {
                    "data": "id"
                },
                {
                    "data": "cargo_type_name",
                    "aTargets": [0],
                    "render": function(data) {
                        // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                        return "<span  class='label_cl' >" + data + "</span>";
                    }
                },

                {
                    "data": "laycan_date_from"
                },
                {
                    "data": "laycan_date_to"
                },
                {
                    "data": "load_region_name"
                },
                {
                    "data": "load_country_name"
                },
                {
                    "data": "load_port_name"
                },
                {
                    "data": "dis_region_name"
                },
                {
                    "data": "dis_country_name"
                },
                {
                    "data": "dis_port_name"
                }
                // {
                //             "data": "id",

                //             "aTargets": [0],
                //             "render": function(data) {
                //                 return '<a class="btn btn-info" id='+data+'>Delete</a>';
                //             }
                //         },
                // {
                //             "data": "id",

                //             "aTargets": [0],
                //             "render": function(data) {
                //                 return '<a class="btn btn-info" id='+data+'>Delete</a>';
                //             }
                //         },

            ],
            stateSave: true,
            "bDestroy": true,
            searching: false,
            "paging": false,
            "ordering": false,
            "info": false,
            "order": [
                [1, 'asc']
            ],
            "pageLength": 10
        });
        $('#checkall').click(function() {
            if ($(this).is(':checked')) {
                $('.delete_check').prop('checked', true);
            } else {
                $('.delete_check').prop('checked', false);
            }
        });

        // Delete record
        $('#delete_record').click(function() {

            var deleteids_arr = [];
            // Read all checked checkboxes
            $("input:checkbox[class=delete_check]:checked").each(function() {
                deleteids_arr.push($(this).val());
            });

            // Check checkbox checked or not
            if (deleteids_arr.length > 0) {

                // Confirm alert
                var confirmdelete = confirm("Do you really want to Delete records?");
                if (confirmdelete == true) {
                    $.ajax({
                        url: 'ajax/delete/delete_cargo_search_log1.php',
                        type: 'post',
                        data: {
                            request: 2,
                            deleteids_arr: deleteids_arr
                        },
                        success: function(response) {
                            console.log(response)
                            table.ajax.reload();
                        }
                    });
                }
            } else {
                alert("Please Check atleast one checkbox !")
            }
        });


        var table = $('#example').DataTable();

        $('#example tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            // alert('You clicked on ' + data['id'] + '\'s row');

            // $("#example1_row").css("display", "block");
            $('#example1_row').removeClass('d-none');
            $('#search_row').addClass('d-none');

            unique_id = data['id'];

            var cargo_id = data['id'];
            console.log('cargo id ' + cargo_id);

            var table1 = $('#example1').DataTable({
                "ajax": "data/get_cargo_log_data.php?cargo_id=" + cargo_id + "",
                "columns": [

                    {
                        "data": "ref_no",
                        "className": 'nr'
                    },
                    // {
                    //     "data": "cargo_type_name"
                    // },
                    {
                        "data": "cargo_type_name",

                        "aTargets": [0],
                        "render": function(data) {
                            // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                            return "<span  class='label_cl' >" + data + "</span>";
                        }
                    },
                    {
                        "data": "loading_region_name"
                    },
                    {
                        "data": "discharge_region_name"
                    },
                    {
                        "data": "laycan_date_from"
                    },
                    {
                        "data": "laycan_date_to"
                    },
                    {
                        "data": "quantity"
                    },
                    // {
                    //     "data": "loading_discharge_rates"
                    // },
                    {
                        "data": "loading_discharge_rates",

                        "aTargets": [0],
                        "render": function(data) {
                            // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                            return "<span  class='label_cl' >" + data + "</span>";
                        }
                    },

                    {
                        "data": "created_at"
                    },

                    {
                        "className": 'dt-control',
                        "orderable": false,
                        "data": 'null',
                        "defaultContent": ''
                    },
                ],
                searching: false,
                "paging": false,
                "ordering": false,
                "info": false,
                stateSave: true,
                "bDestroy": true,
                "order": [
                    [1, 'asc']
                ],
                "pageLength": 10
            });

            function format12(d) {
                // console.log(d.last_dry_docked);
                // `d` is the original data object for the row
                return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                    '<tr>' +
                    '<td>' +
                    '<div class=""></div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Loading Country: </div>' +
                    '<div class="expend_text">' + d.loading_country_name + '</div>' +

                    '<div class="expend_label">Max LOA: </div>' +
                    '<div class="expend_text">123 ' + d.max_loa + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Loading Port: </div>' +
                    '<div class="expend_text">' + d.loading_port_name + '</div>' +

                    '<div class="expend_label">Stowage Factor: </div>' +
                    '<div class="expend_text">' + d.stowage_factor + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Discharge Country: </div>' +
                    '<div class="expend_text">' + d.discharge_country_name + '</div>' +

                    '<div class="expend_label">Max Height: </div>' +
                    '<div class="expend_text">' + d.max_height + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Discharge Port: </div>' +
                    '<div class="expend_text">' + d.discharge_country_name + '</div>' +

                    '<div class="expend_label">Loading Equipment : </div>' +
                    '<div class="expend_text">' + d.loading_equipment_req + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Over Age: </div>' +
                    '<div class="expend_text">' + d.over_age + '</div>' +

                    '<div class="expend_label">Discharge Equipment : </div>' +
                    '<div class="expend_text">' + d.discharge_equipment_req + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Hazmat: </div>' +
                    '<div class="expend_text">' + d.hazmat + '</div>' +

                    '<div class="expend_label">Combinable: </div>' +
                    '<div class="expend_text">' + d.combinable + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Commission: </div>' +
                    '<div class="expend_text">' + d.commision + '</div>' +

                    '<div class="expend_label">Gear Lifting Capacity: </div>' +
                    '<div class="expend_text">' + d.gear_lifting_capacity + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Additional Info: </div>' +
                    '<div class="expend_text">' + d.additional_info + '</div>' +

                    // '<div class="expend_label">Company Name </div>' +
                    // '<div class="expend_text">' + d.C1name + '</div>' +
                    '<div class="expend_label">Brokerage Name </div>' +
                    '<div class="expend_text">' + d.first_name + '  ' + d.last_name + '</div>' +
                    // '<div class=""><a href="broker_chat.php?id='+d.created_by+'" class="btn  text-light my-2 font-italic font-bold" style="letter-spacing:0;background-color: #00997d;"> Message Directly </a></div>' +

                    '</td>' +
                    '<td></td>' +




                    '</tr>' +


                    '</table>';
            }

            $('#example1 tbody').on('click', 'td.dt-control', function() {
                var tr = $(this).closest('tr');
                // console.log(tr);
                var row = table1.row(tr);

                var id = $(this).closest("tr").find(".nr").text();
                // alert(id);

                // unique_id = id;


                var cargo_id = id;
                console.log("cargo id " + cargo_id)
                // console.log(row.data())
                // console.log(unique_id)

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row

                    $.ajax({
                        url: 'get_route.php',
                        type: 'POST',
                        data: {
                            unique_id: cargo_id,

                        },
                        success: function(data) {

                            data = JSON.parse(data);
                            console.log(data[0][0]);






                            row.child(format12(data[0][0])).show();
                            tr.addClass('shown');

                        }
                    });
                }
            });

        });


    });

    function checkcheckbox() {

        // Total checkboxes
        var length = $('.delete_check').length;

        // Total checked checkboxes
        var totalchecked = 0;
        $('.delete_check').each(function() {
            if ($(this).is(':checked')) {
                totalchecked += 1;
            }
        });

        // Checked unchecked checkbox
        if (totalchecked == length) {
            $("#checkall").prop('checked', true);
        } else {
            $('#checkall').prop('checked', false);
        }
    }

    function checkcheckbox_search() {

        // Total checkboxes
        var length = $('.delete_check_search').length;

        // Total checked checkboxes
        var totalchecked = 0;
        $('.delete_check_search').each(function() {
            if ($(this).is(':checked')) {
                totalchecked += 1;
            }
        });

        // Checked unchecked checkbox
        if (totalchecked == length) {
            $("#checkall_search").prop('checked', true);
        } else {
            $('#checkall_search').prop('checked', false);
        }
    }
    </script>

    <script>
    function post_data(cargo_type,load_region,dis_region,load_country,dis_country,load_port,dis_port,date_from,date_to) {
        $('#example1_row').addClass('d-none');
        $('#search_row').removeClass('d-none');

        $('#load_exam').addClass('d-none');
        $('#search_exam').removeClass('d-none');

        // $("#zoomupModal").modal('hide');
        // $('body').removeClass( "modal-open" );
        alert(cargo_type);
        var data_lead = "v_cargo_type=" + cargo_type +
            "&laycan_from=" + date_from +
            "&laycan_to=" + date_to +
            "&v_region=" + load_region +
            "&v_country=" + load_country +
            "&v_ports=" + load_port +
            "&d_region=" + dis_region +
            "&d_country=" + dis_country +
            "&d_ports=" + dis_port + "";
        console.log(data_lead);
        var table1 = $('#search_data').DataTable({
            "ajax": "data/get_cargo_data.php?" + data_lead + "",
            "columns": [

                {
                    "data": "ref_no",
                    "className": 'nr'

                },
                // {
                //     "data": "cargo_type_name"
                // },
                {
                    "data": "cargo_type_name",

                    "aTargets": [0],
                    "render": function(data) {
                        // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                        return "<span  class='label_cl' >" + data + "</span>";
                    }
                },
                {
                    "data": "loading_region_name"
                },
                {
                    "data": "discharge_region_name"
                },
                {
                    "data": "laycan_date_from"
                },
                {
                    "data": "laycan_date_to"
                },
                {
                    "data": "quantity"
                },
                // {
                //     "data": "loading_discharge_rates"
                // },
                {
                    "data": "loading_discharge_rates",

                    "aTargets": [0],
                    "render": function(data) {
                        // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                        return "<span  class='label_cl' >" + data + "</span>";
                    }
                },

                {
                    "data": "created_at"
                },

                {
                    "className": 'dt-control',
                    "orderable": false,
                    "data": 'null',
                    "defaultContent": ''
                },
            ],
            searching: false,
            "paging": false,
            "ordering": false,
            "info": false,
            stateSave: true,
            "bDestroy": true,
            "order": [
                [1, 'asc']
            ],
            "pageLength": 10
        });




        function format1(d) {
            // `d` is the original data object for the row
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                '<tr>' +
                '<td>' +
                '<div class=""></div>' +
                '</td>' +

                '<td>' +
                '<div class="expend_label">Loading Country: </div>' +
                '<div class="expend_text">' + d.loading_country_name + '</div>' +

                '<div class="expend_label">Max LOA: </div>' +
                '<div class="expend_text">123 ' + d.max_loa + '</div>' +
                '</td>' +

                '<td>' +
                '<div class="expend_label">Loading Port: </div>' +
                '<div class="expend_text">' + d.loading_port_name + '</div>' +

                '<div class="expend_label">Stowage Factor: </div>' +
                '<div class="expend_text">' + d.stowage_factor + '</div>' +
                '</td>' +

                '<td>' +
                '<div class="expend_label">Discharge Country: </div>' +
                '<div class="expend_text">' + d.discharge_country_name + '</div>' +

                '<div class="expend_label">Max Height: </div>' +
                '<div class="expend_text">' + d.max_height + '</div>' +
                '</td>' +

                '<td>' +
                '<div class="expend_label">Discharge Port: </div>' +
                '<div class="expend_text">' + d.discharge_country_name + '</div>' +

                '<div class="expend_label">Loading Equipment : </div>' +
                '<div class="expend_text">' + d.loading_equipment_req + '</div>' +
                '</td>' +

                '<td>' +
                '<div class="expend_label">Over Age: </div>' +
                '<div class="expend_text">' + d.over_age + '</div>' +

                '<div class="expend_label">Discharge Equipment : </div>' +
                '<div class="expend_text">' + d.discharge_equipment_req + '</div>' +
                '</td>' +

                '<td>' +
                '<div class="expend_label">Hazmat: </div>' +
                '<div class="expend_text">' + d.hazmat + '</div>' +

                '<div class="expend_label">Combinable: </div>' +
                '<div class="expend_text">' + d.combinable + '</div>' +
                '</td>' +

                '<td>' +
                '<div class="expend_label">Commission: </div>' +
                '<div class="expend_text">' + d.commision + '</div>' +

                '<div class="expend_label">Gear Lifting Capacity: </div>' +
                '<div class="expend_text">' + d.gear_lifting_capacity + '</div>' +
                '</td>' +

                '<td>' +
                '<div class="expend_label">Additional Info: </div>' +
                '<div class="expend_text">' + d.additional_info + '</div>' +

                // '<div class="expend_label">Company Name </div>' +
                // '<div class="expend_text">' + d.C1name + '</div>' +
                '<div class="expend_label">Brokerage Name </div>' +
                '<div class="expend_text">' + d.first_name + '  ' + d.last_name + '</div>' +
                '<div class="" id="chat_btn_' + d.created_by + '"><a href="broker_chat.php?id=' + d.created_by +
                '&module_id=' + d.cargo_id +
                '&module_type=cargo" class="btn  text-light my-2 font-italic font-bold" style="letter-spacing:0;background-color: #00997d;"> Message Directly </a></div>' +

                // '<div class=""><a href="broker_chat.php?id='+d.created_by+'" class="btn  text-light my-2 font-italic font-bold" style="letter-spacing:0;background-color: #00997d;"> Message Directly </a></div>' +

                '</td>' +
                '<td></td>' +




                '</tr>' +


                '</table>';

        }

        $('#search_data tbody').on('click', 'td.dt-control', function() {
            var tr = $(this).closest('tr');
            var row = table1.row(tr);
            console.log('row' + row);
            var id = $(this).closest("tr").find(".nr").text();
            // alert(id);

            // unique_id = id;


            var cargo_id = id;
            console.log("cargo id " + cargo_id)
            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row
                $.ajax({
                    url: 'get_route.php',
                    type: 'POST',
                    data: {
                        cargo: cargo_id,

                    },
                    success: function(data) {

                        data = JSON.parse(data);
                        console.log(data[0][0]);


                        var created_by = data[0][0]['created_by'];




                        row.child(format1(data[0][0]))
                            .show();
                        tr.addClass('shown');
                        if (created_by === a) {
                            // alert("same chat_btn_"+created_by);
                            // $('#chat_btn_'+created_by+'').addClass('d-none')
                            // $().css("display", "none");
                            document.getElementById('chat_btn_' + created_by + '').style.display =
                                "none";
                        }

                    }
                });
                // row.child(format1(row.data())).show();
                // tr.addClass('shown');
            }
        });


        var table = $('#after_search').DataTable({
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            "ajax": "data/cargo_search.php",
            "columns": [
                // {
                //     "className": 'dt-control',
                //     "orderable": false,
                //     "data": null,
                //     "defaultContent": ''
                // },
                {
                    "data": "id",

                    "aTargets": [0],
                    "render": function(data) {
                        // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                        return "<input type='checkbox' class='delete_check_search' id='delchecks_" +
                            data +
                            "' onclick='checkcheckbox_search();' value='" +
                            data + "'>";
                    }
                },
                {
                    "data": "id",
                    "className": 'nr',
                },
                {
                    "data": "cargo_type_name"
                },
                {
                    "data": "laycan_date_from"
                },
                {
                    "data": "laycan_date_to"
                },
                {
                    "data": "load_region_name"
                },
                {
                    "data": "load_country_name"
                },
                {
                    "data": "load_port_name"
                },
                {
                    "data": "dis_region_name"
                },
                {
                    "data": "dis_country_name"
                },
                {
                    "data": "dis_port_name"
                }

            ],
            stateSave: true,
            "bDestroy": true,
            searching: false,
            "paging": false,
            "ordering": false,
            "info": false,
            "order": [
                [1, 'asc']
            ],
            "pageLength": 10
        });
        $('#checkall_search').click(function() {
            if ($(this).is(':checked')) {
                $('.delete_check_search').prop('checked', true);
            } else {
                $('.delete_check_search').prop('checked', false);
            }
        });

        // Delete record
        $('#delete_record_search').click(function() {

            var deleteids_arr = [];
            // Read all checked checkboxes
            $("input:checkbox[class=delete_check_search]:checked").each(function() {
                deleteids_arr.push($(this).val());
            });

            // Check checkbox checked or not
            if (deleteids_arr.length > 0) {

                // Confirm alert
                var confirmdelete = confirm("Do you really want to Delete records?");
                if (confirmdelete == true) {
                    $.ajax({
                        url: 'ajax/delete/delete_cargo_search_log1.php',
                        type: 'post',
                        data: {
                            request: 2,
                            deleteids_arr: deleteids_arr
                        },
                        success: function(response) {
                            console.log(response)
                            table.ajax.reload();
                        }
                    });
                }
            } else {
                alert("Please Check atleast one checkbox !")
            }
        });

        var table = $('#after_search').DataTable();

        $('#after_search tbody').on('click', 'tr', function() {

            var id = $(this).closest("tr").find(".nr").text();
            // alert(id);

            // var data = table.row(this).data();
            // alert('You clicked on after_search ' + data['id'] + '\'s row');
            $('#example1_row').addClass('d-none');
            $('#search_row').removeClass('d-none');
            unique_id = id;


            var cargo_id = id;
            console.log(cargo_id)

            var table1 = $('#search_data').DataTable({
                "ajax": "data/get_cargo_log_data.php?cargo_id=" + cargo_id + "",
                "columns": [

                    {
                        "data": "ref_no",
                        "className": 'nr'

                    },
                    // {
                    //     "data": "cargo_type_name"
                    // },
                    {
                        "data": "cargo_type_name",

                        "aTargets": [0],
                        "render": function(data) {
                            // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                            return "<span  class='label_cl' >" + data + "</span>";
                        }
                    },
                    {
                        "data": "loading_region_name"
                    },
                    {
                        "data": "discharge_region_name"
                    },
                    {
                        "data": "laycan_date_from"
                    },
                    {
                        "data": "laycan_date_to"
                    },
                    {
                        "data": "quantity"
                    },
                    // {
                    //     "data": "loading_discharge_rates"
                    // },
                    {
                        "data": "loading_discharge_rates",

                        "aTargets": [0],
                        "render": function(data) {
                            // return '<a class="btn btn-info" id='+data+'>Delete</a>';
                            return "<span  class='label_cl' >" + data + "</span>";
                        }
                    },

                    {
                        "data": "created_at"
                    },

                    {
                        "className": 'dt-control',
                        "orderable": false,
                        "data": 'null',
                        "defaultContent": ''
                    },
                ],
                searching: false,
                "paging": false,
                "ordering": false,
                "info": false,
                stateSave: true,
                "bDestroy": true,
                "order": [
                    [1, 'asc']
                ],
                "pageLength": 10
            });

            function format_search(d) {
                // console.log(d.last_dry_docked);
                // `d` is the original data object for the row
                return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                    '<tr>' +
                    '<td>' +
                    '<div class=""></div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Loading Country: </div>' +
                    '<div class="expend_text">' + d.loading_country_name + '</div>' +

                    '<div class="expend_label">Max LOA: </div>' +
                    '<div class="expend_text">123 ' + d.max_loa + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Loading Port: </div>' +
                    '<div class="expend_text">' + d.loading_port_name + '</div>' +

                    '<div class="expend_label">Stowage Factor: </div>' +
                    '<div class="expend_text">' + d.stowage_factor + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Discharge Country: </div>' +
                    '<div class="expend_text">' + d.discharge_country_name + '</div>' +

                    '<div class="expend_label">Max Height: </div>' +
                    '<div class="expend_text">' + d.max_height + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Discharge Port: </div>' +
                    '<div class="expend_text">' + d.discharge_country_name + '</div>' +

                    '<div class="expend_label">Loading Equipment : </div>' +
                    '<div class="expend_text">' + d.loading_equipment_req + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Over Age: </div>' +
                    '<div class="expend_text">' + d.over_age + '</div>' +

                    '<div class="expend_label">Discharge Equipment : </div>' +
                    '<div class="expend_text">' + d.discharge_equipment_req + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Hazmat: </div>' +
                    '<div class="expend_text">' + d.hazmat + '</div>' +

                    '<div class="expend_label">Combinable: </div>' +
                    '<div class="expend_text">' + d.combinable + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Commission: </div>' +
                    '<div class="expend_text">' + d.commision + '</div>' +

                    '<div class="expend_label">Gear Lifting Capacity: </div>' +
                    '<div class="expend_text">' + d.gear_lifting_capacity + '</div>' +
                    '</td>' +

                    '<td>' +
                    '<div class="expend_label">Additional Info: </div>' +
                    '<div class="expend_text">' + d.additional_info + '</div>' +

                    // '<div class="expend_label">Company Name </div>' +
                    // '<div class="expend_text">' + d.C1name + '</div>' +
                    '<div class="expend_label">Brokerage Name </div>' +
                    '<div class="expend_text">' + d.first_name + '  ' + d.last_name + '</div>' +
                    // '<div class=""><a href="broker_chat.php?id='+d.created_by+'" class="btn  text-light my-2 font-italic font-bold" style="letter-spacing:0;background-color: #00997d;"> Message Directly </a></div>' +

                    '</td>' +
                    '<td></td>' +




                    '</tr>' +


                    '</table>';

            }

            $('#search_data tbody').on('click', 'td.dt-control', function() {
                var tr = $(this).closest('tr');
                // console.log(tr);
                var row = table1.row(tr);

                var id = $(this).closest("tr").find(".nr").text();
                // alert(id);

                // unique_id = id;


                var cargo_id = id;
                console.log("cargo id " + cargo_id)

                // console.log(row.data())
                console.log("unique_id " + unique_id)

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');;
                } else {
                    // Open this row

                    $.ajax({
                        url: 'get_route.php',
                        type: 'POST',
                        data: {
                            unique_id: cargo_id,

                        },
                        success: function(data) {

                            data = JSON.parse(data);
                            console.log(data[0][0]);






                            row.child(format_search(data[0][0]))
                                .show();
                            tr.addClass('shown');

                        }
                    });
                }
            });

        });
    }
    </script>

    <?php
        if (isset($_POST["v_cargo_type"])) {
            $v_cargo_type = $_POST["v_cargo_type"];
            $laycan_from = $_POST["laycan_from"];
            $laycan_to = $_POST["laycan_to"];
            $v_region = $_POST["v_region"];
            $v_country = $_POST["v_country"];
            $v_ports = $_POST["v_ports"];
            $d_region = $_POST["d_region"];
            $d_country = $_POST["d_country"];
            $d_ports = $_POST["d_ports"];

            $v_cargo_type = implode(",",$v_cargo_type);
            $v_region = implode(",",$v_region);
            $d_region = implode(",",$d_region);
            $v_country = implode(",",$v_country);
            $d_country = implode(",",$d_country);
            $v_ports = implode(",",$v_ports);
            $d_ports = implode(",",$d_ports);
            // echo $v_cargo_type ;

            

            echo "<script> post_data('".$v_cargo_type."', '".$v_region."', '".$d_region."', '".$v_country."', '".$d_country."', '".$v_ports."', '".$d_ports."', '".$laycan_from."', '".$laycan_to."');   </script>"; 

        } 
    ?>
</body>
<?php include("svg.php")?>

</html>