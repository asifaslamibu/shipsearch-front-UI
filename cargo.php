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

    width: 151px;
}




a.button.button--green {
    background: #00997d;
    color: white;
}


/* .button--green{
		background: #00997d;
	} */

/* .button--green{
		background: #00997d;
	} */
</style>

</head>

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
                    <div class="container-fluid">
                        <!-- <div class="row">
                            <div class="col-md-2 mb-3">
                                <a id="new_ser_req" class="btn text-light top_bt" data-toggle="modal" style="background-color: #00997d;"
                                    data-target="#zoomupModal"><i class="fas fa-search" aria-hidden="true"></i> New Cargo Search</a>
                            </div>
                            <div class="col-md-2">
                                <a href="new_cargo.html" class="btn text-light top_bt" style="background-color: #00997d;">
                                    <i class="fas fa-plus" aria-hidden="true"></i> Add New Cargo
                                </a>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col-md-2 mb-3">
                                <button id="myBtn" class="btn text-light top_bt" data-toggle="modal"
                                    style="background-color: #00997d;" data-target="#zoomupModal"><i
                                        class="fas fa-search" aria-hidden="true"></i> New Cargo Search</button>
                            </div>
                            <div class="col-md-2">


                                <button id="add_ser_req" class="btn text-light top_bt  "
                                    onclick="location.href = 'new_cargo.php';" style="background-color: #00997d;"><i
                                        class="fas fa-plus" aria-hidden="true"></i>
                                    Add New Cargo</button>
                            </div>
                        </div>

                    </div>
                    <?php
                    $user_id=$_SESSION['user_id'];
                    if ($user_id!='') {?>


                    <?php } else { ?>
                    <script>
                    document.getElementById("myBtn").disabled = true;
                    document.getElementById("add_ser_req").disabled = true;
                    </script>
                    <?php } ?>
                    <div class="row layout-top-spacing" id="cancel-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-container-vertical">

                                        <div class="panel-top">

                                            <table id="example" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                    <tr>
                                                        <!-- <th></th> -->
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
                                                    </tr>
                                                </thead>

                                            </table>

                                        </div>

                                        <div class="splitter-horizontal" style="text-align: center;">
                                            <img src="images/expand-arrows.png" alt="" srcset=""
                                                style="position: relative;top: -12px;">
                                        </div>

                                        <div class="panel-bottom">
                                            <table id="example1" class="display" style="width:100%">
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


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-row ">
                                            <label for="inputEmail4">Cargo Type</label>
                                            <select class="form__select" name="transport">
                                                <option data-display="Choose  Cargo Type">Choose Cargo Type</option>
                                                <option value="11">Any</option>
                                                <option value="1">Fishing Boats
                                                </option>
                                                <option value="2">Tankers
                                                </option>
                                                <option value="3">Ro-Ro
                                                </option>
                                                <option value="4">Reefer
                                                </option>
                                                <option value="5">Passenger Boat
                                                </option>
                                                <option value="6">Other
                                                </option>
                                                <option value="7">Oba
                                                </option>
                                                <option value="8">MPP/TWN
                                                </option>
                                                <option value="9">Hopper Dredgers
                                                </option>
                                                <option value="10">Tug Boat
                                                </option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail4">Laycan Date From</label>

                                        <input class="form__field" tdata-toggle="datepicker" type="date" name="date"
                                            placeholder="Enter DWT From" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail4">Laycan Date To</label>

                                        <input class="form__field" data-toggle="datepicker" type="date" name="date"
                                            placeholder="Enter DWT To" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail4">Loading Region</label>

                                        <select class="form__select" name="transport">
                                            <option data-display="Choose Loading Region">Choose Loading Region</option>
                                            <option value="5">Any</option>
                                            <option value="3">Bare Boat
                                            </option>
                                            <option value="6">Bulk
                                            </option>
                                            <option value="4">COA
                                            </option>
                                            <option value="1">Time
                                            </option>
                                            <option value="2">Voyage
                                            </option>
                                        </select>
                                    </div>


                                    <div class="col-md-4">
                                        <label for="inputEmail4">Loading Country</label>

                                        <select class="form__select" name="transport">
                                            <option data-display="Choose Loading Country">Choose Loading Country
                                            </option>
                                            <option value="197">Any</option>
                                            <option value="2470">Albania
                                            </option>
                                            <option value="131">Algeria
                                            </option>
                                            <option value="3787">American Samoa
                                            </option>
                                            <option value="215">Angola
                                            </option>
                                            <option value="915">Anguilla
                                            </option>


                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail4">Loading Port <span
                                                style="color: transparent;">...</span></label>

                                        <select class="form__select" name="transport">
                                            <option data-display="Choose Loading Port">Choose Loading Port</option>
                                            <option value="5638">Any</option>
                                            <option value="4969">A Coruna</option>
                                            <option value="4970">A Guarda</option>
                                            <option value="4971">A Pasaxe Ferry da Guard</option>
                                            <option value="4972">A Pobra do Caraminal</option>
                                            <option value="3269">Aabenraa</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="inputEmail4">Discharge Region</label>

                                        <select class="form__select" name="transport">
                                            <option data-display="Choose Discharge Region">Discharge Region</option>
                                            <option value="26">Any</option>
                                            <option value="9">Asia, Eastern</option>
                                            <option value="10">Asia, Southeast</option>
                                            <option value="11">Asia, Southern</option>
                                            <option value="12">Asia, Western</option>
                                            <option value="13">Caribbean</option>
                                            <option value="5">Central America</option>

                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="inputEmail4">Discharge Country</label>

                                        <select class="form__select" name="transport">
                                            <option data-display="Choose Discharge Country">Discharge Country</option>
                                            <option value="26">Any</option>
                                            <option value="9">Asia, Eastern</option>
                                            <option value="10">Asia, Southeast</option>
                                            <option value="11">Asia, Southern</option>
                                            <option value="12">Asia, Western</option>
                                            <option value="13">Caribbean</option>
                                            <option value="5">Central America</option>

                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail4">Discharge Port <span
                                                style="color: transparent;">...</span></label>

                                        <select class="form__select" name="transport">
                                            <option data-display="Choose Discharge Port">Choose Discharge Port</option>
                                            <option value="5638">Any</option>
                                            <option value="4969">A Coruna</option>
                                            <option value="4970">A Guarda</option>
                                            <option value="4971">A Pasaxe Ferry da Guard</option>
                                            <option value="4972">A Pobra do Caraminal</option>
                                            <option value="3269">Aabenraa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer md-button">
                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                            <button type="button" class="btn btn-primary">Save</button>
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
    function format(d) {
        // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
            '<tr>' +
            '<td>Full name:</td>' +
            '<td>' + d.charter_type + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Extension number:</td>' +
            '<td>' + d.laycaon_date_to + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Extra info:</td>' +
            '<td>And any further details here (images etc)...</td>' +
            '</tr>' +
            '</table>';
    }

    $(document).ready(function() {
        var table = $('#example').DataTable({
            "ajax": "data/search_cargo.json",
            "columns": [
                // {
                //     "className": 'dt-control',
                //     "orderable": false,
                //     "data": null,
                //     "defaultContent": ''
                // },
                {
                    "data": "id"
                },
                {
                    "data": "vizal_type"
                },
                {
                    "data": "dwt_from"
                },
                {
                    "data": "dwt_to"
                },
                {
                    "data": "charter_type"
                },
                {
                    "data": "laycaon_date_from"
                },
                {
                    "data": "laycaon_date_to"
                },
                {
                    "data": "region"
                },
                {
                    "data": "country"
                },
                {
                    "data": "port"
                }
            ],
            "order": [
                [1, 'asc']
            ],
            "pageLength": 10
        });
        var table1 = $('#example1').DataTable({
            "ajax": "data/detail_cargo.json",
            "columns": [

                {
                    "data": "id"
                },
                {
                    "data": "vizal_name"
                },
                {
                    "data": "vizal_type"
                },
                {
                    "data": "charter_type"
                },
                {
                    "data": "laycaon_date_from"
                },
                {
                    "data": "laycaon_date_to"
                },
                {
                    "data": "region"
                },
                {
                    "data": "country"
                },
                {
                    "data": "Posted_on"
                },
                {
                    "className": 'dt-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                },
            ],
            "order": [
                [1, 'asc']
            ],
            "pageLength": 10
        });

        // Add event listener for opening and closing details
        $('#example tbody').on('click', 'td.dt-control', function() {
            var tr = $(this).closest('tr');
            var row = table.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row
                row.child(format(row.data())).show();
                console.log(row.data());
                tr.addClass('shown');
            }
        });

        function format1(d) {
            // `d` is the original data object for the row
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                '<tr>' +
                '<td>' +
                '<p class="">Max LOA: </p>' +
                '</td>' +

                '<td>' +
                '<p class="expend_label">Loading Country: </p>' +
                '<pclass="expend_text>Pakistan</p>' +

                '<p class="expend_label">Max LOA: </p>' +
                '<pclass="expend_text>123 Meters</p>' +
                '</td>' +

                '<td>' +
                '<p class="expend_label">Loading Port: </p>' +
                '<pclass="expend_text>Gadani Fish Harbour</p>' +

                '<p class="expend_label">Stowage Factor: </p>' +
                '<pclass="expend_text>123 Meters</p>' +
                '</td>' +

                '<td>' +
                '<p class="expend_label">Discharge Country: </p>' +
                '<pclass="expend_text>China</p>' +

                '<p class="expend_label">Max Height: </p>' +
                '<pclass="expend_text>123 Meters</p>' +
                '</td>' +

                '<td>' +
                '<p class="expend_label">Discharge Port: </p>' +
                '<pclass="expend_text>Baoshan</p>' +

                '<p class="expend_label">Loading Equipment Req: </p>' +
                '<pclass="expend_text>Yes</p>' +
                '</td>' +

                '<td>' +
                '<p class="expend_label">Over Age: </p>' +
                '<pclass="expend_text>Yes</p>' +

                '<p class="expend_label">Discharge Equipment Req: </p>' +
                '<pclass="expend_text>Yes</p>' +
                '</td>' +

                '<td>' +
                '<p class="expend_label">Hazmat: </p>' +
                '<pclass="expend_text>Yes</p>' +

                '<p class="expend_label">Combinable: </p>' +
                '<pclass="expend_text>Yes</p>' +
                '</td>' +

                '<td>' +
                '<p class="expend_label">Commission: </p>' +
                '<pclass="expend_text>123</p>' +

                '<p class="expend_label">Gear Lifting Capacity: </p>' +
                '<pclass="expend_text>123</p>' +
                '</td>' +

                '<td>' +
                '<p class="expend_label">Additional Info: </p>' +
                '<pclass="expend_text>lorem ipsum</p>' +

                '<p class="expend_label">Company Name </p>' +
                '<pclass="expend_text>express</p>' +
                '<p class=""><a href="#" class="btn  text-light my-2 font-italic font-bold" style="letter-spacing:0;background-color: #00997d;"> Message Directly </a></p>' +
                '</td>' +
                '<td></td>' +




                '</tr>' +


                '</table>';

        }

        $('#example1 tbody').on('click', 'td.dt-control', function() {
            var tr = $(this).closest('tr');
            var row = table1.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row
                row.child(format1(row.data())).show();
                tr.addClass('shown');
            }
        });
    });
    </script>
</body>
<div style="display: none">
    <?php include("svg.php")?>
    <!-- Mirrored from demo.artureanec.com/html/transx/front_5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Mar 2022 13:08:41 GMT -->

</html>