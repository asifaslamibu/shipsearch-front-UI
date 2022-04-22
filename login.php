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

            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
            wf.type = 'text/javascript'
            wf.async = 'true'

            var s = document.getElementsByTagName('script')[0]

            s.parentNode.insertBefore(wf, s)

        }

        font()
    </script>
       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    a.button.button--green {
        background: #00997d;
        color: white;
    }

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
        width: 360px;
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
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
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
        max-width: 300px;
        margin: 0 auto;
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

        <?php include('header.php') ?>
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">
                    <div class="row layout-top-spacing" id="cancel-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 hamza">

                                    <div class="login-page">
                                        <div class="form">
                                            <div class="login">
                                                <div class="login-header">
                                                    <h3>LOGIN</h3>
                                                    <p id='lav' style="color: #4b968b;">Please enter your credentials to login.</p>
                                                </div>
                                            </div>
                                            <form method="post" action="do_login.php" onsubmit="return do_login();">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="text" name="username" id="username" placeholder="username" class="form__field" />

                                                        </div>

                                                        <div class="col-md-12">
                                                            <input type="password" name="password" id="password" placeholder="password" class="form__field" />

                                                        </div>
                                                    </div>
                                                    <button type="submit" id="login_button"> login</button>
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
        <?php include('footer.php') ?>

        <!-- footer end-->
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>

       
    <script src="js/libs.min.js"></script>
    <script src="js/common.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
    <script type="text/javascript">
        function do_login() {
            var username = $("#username").val();
            var password = $("#password").val();
            if (username != "" && password != "") {
                $("#loading_spinner").css({
                    "display": "block"
                });
                $.ajax({
                    type: 'post',
                    url: 'ajax/get/loginn.php',
                    data: {
                        do_login: "do_login",
                        username: username,
                        password: password
                    },
                    success: function(response) {
                        //    alert(response)
                        if (response == 1) {
                       
                            $('#lav').html('Login Succesfully');
                            window.location.href = "index.php";
                        } else {
                            $('#lav').html('Your Login Name or Password is invalid');

                            // alert('Your Login Name or Password is invalid');

                            $("#loading_spinner").css({
                                "display": "none"
                            });
                        }
                    }
                });
            } else {
                alert("Please Fill All The Details");
            }

            return false;
        }
    </script>
    <!--  BEGIN CUSTOM SCRIPT FILE  -->
    <script src="assets/js/scrollspyNav.js"></script>

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->



    <script src='https://rawgit.com/RickStrahl/jquery-resizable/master/src/jquery-resizable.js'></script>
    <script src="dist/script.js"></script>
    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>


</body>
<?php include('svg.php') ?>

</html>