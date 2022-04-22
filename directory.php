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
    color: #49997d;
    padding: 2px;
    font-size: 12px;
    font-family: 'Inter';
}
table.dataTable tbody th, table.dataTable tbody td {
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
        <?php include('header.php') ?>

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
                        <div class="container-fluid" id="d_table">
                            <div class="row">
                                <div class="col-md-12" >

                                    <table id="example1" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>company Name</th>
                                                <th>Website</th>
                                                <th>Email</th>
                                                <th>Phone No</th>
                                                <th>Address</th>
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
            <!-- <script>
                         $(document).ready(function() {
                            var a = '<?php echo $user_id; ?>';
                            if(a!=''){
                                $("#d_table").css("display", "block");

                            }else{
                                
                                swal({
                                title: 'Access Denied <br> Become a <a href="login.php"> member </a> to access.',
                                animation: false,
                                customClass: 'animated tada',
                                padding: '2em'
                            })                         }
                        }); 
                    </script> -->
            <!--  END CONTENT AREA  -->
       
        </div>
        <!-- footer start-->
        <?php include('footer.php') ?>

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


    $(document).ready(function() {

        var table1 = $('#example1').DataTable({
            "ajax": "data/detail_directry.php",
            "columns": [

                {
                    "data": "user_id"
                },
                {
                    "data": "company_name"
                },
                {
                    "data": "website"
                },
                {
                    "data": "email"
                },
                {
                    "data": "phone"
                },
                {
                    "data": "permanent_address"
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


        function format1(d) {
            // `d` is the original data object for the row
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                '<tr>' +
                '<td>' +
                '<p class="">Max LOA: </p>' +
                '</td>' +


                '<td>' +
                '<p class="expend_label">Region: </p>' +
                '<p class="expend_text">Europe, Eastern</p>' +


                '</td>' +

                '<td>' +
                '<p class="expend_label">Country:</p>' +
                '<p class="expend_text"> MT</p>' +


                '</td>' +

                '<td>' +
                '<p class="expend_label">Port: </p>' +
                '<p class="expend_text"> Gal/Hr</p>' +

                '</td>' +

                '<td>' +
                '<p class="expend_label">Contact Person Name: </p>' +
                '<p class="expend_text">'+d.contact_person_first_name+'</p>' +


                '</td>' +
                '<td>' +
                '<p class="expend_label">Fax: </p>' +
                '<p class="expend_text">'+d.fax+'</p>' +

                '<p class="expend_label">bussiness_type_id:</p>' +
                '<p class="expend_text">213</p>' +


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
    <?php include('svg.php') ?>


    <!-- Mirrored from demo.artureanec.com/html/transx/front_5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Mar 2022 13:08:41 GMT -->

</html>