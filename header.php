<script src="plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<style>
    .active>span {
        /* border-bottom: 2px solid #00997d; */
        color : #408588;
        font-size:14px;
        font-weight:700;

    }
    a.button.button--green {
        background: #00997d;
        color: white;
    }
</style>

<div class="menu-dropdown">
    <div class="menu-dropdown__inner" data-value="start">
        <div class="screen screen--start">
            <div class="menu-dropdown__close">
                <svg class="icon">
                    <use xlink:href="#close"></use>
                </svg>
            </div>

            <div class="screen__item"><a class="screen__link" href="manage_cargo.php">CARGO</a></div>
            <div class="screen__item"><a class="screen__link" href="manage_vessel.php">VESSEL CHARTER</a></div>
            <div class="screen__item"><a class="screen__link" href="sales_purchase.php">SALE & PURCHASE</a>
            </div>
            <div class="screen__item"><a class="screen__link" href="directory.php">DIRECTORY</a></div>
            <div class="screen__item"><a class="screen__link" href="messenger.php">MESSENGER</a></div>

            <div class="menu-dropdown__block top-50"><span class="block__title">Email</span><a class="screen__link" href="mailto:support@helpo.org">support@helpo.org</a></div>
            <div class="menu-dropdown__block top-20"><span class="block__title">Phone numbers</span><a class="screen__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="screen__link" href="tel:+18009756511">+ 1800 - 975 65 11</a></div>

            <div class="menu-dropdown__block top-50">
            <?php
                $user_id=$_SESSION['user_id'];
                // echo '<script>alert('.$user_id.')</script>';
                if ($user_id!='') {  ?>
                    <a class="button button--green" href="logout.php">LOGOUT</a>
                    

                <?php } else { ?>
                    <a class="button button--green" href="login.php">LOGIN</a>
                     &nbsp;
                     <a class="button button--green" href="register.php">REGISTER</a>
                <?php } ?>
            </div>
        </div>
    </div>

</div>
<!-- menu dropdown end-->
<!-- header start-->
<header class="page-header_3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6 col-md-6 col-lg-3 d-flex align-items-center">
                <div class="hamburger d-none d-md-inline-block hamburger--white">
                    <div class="hamburger-inner"></div>
                </div>
                <div class="page-header__logo logo--white"><a href="index.php"><img src="images/final_logo.png" alt="logo" /></a></div>
                <div class="page-header__logo logo--dark"><a href="" id='hat'><img src="images/final_logo.png" alt="logo" /></a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-flex justify-content-center">
                <!-- main menu start-->
                <ul class="main-menu main-menu--white">
                    <li class="main-menu__item main-menu__item"><a class="main-menu__link" href="manage_cargo.php"><span>Cargo</span></a>

                    </li>
                    <li class="main-menu__item main-menu__item"><a class="main-menu__link" href="manage_vessel.php"><span>Vessel
                                Charter</span></a>

                    </li>
                    <li class="main-menu__item main-menu__item"><a class="main-menu__link" href="sales_purchase.php"><span>Sale & Purchase</span></a>

                    </li>
                    <li class="main-menu__item main-menu__item"><a class="main-menu__link"  href="directory.php"><span>Directory</span></a>

                    </li>
                    <li class="main-menu__item main-menu__item"><a class="main-menu__link" href="messenger.php"><span>Messenger</span></a>

                    </li>
                </ul>
                <!-- main menu end-->
            </div>
            <div class="col-4 col-md-6 col-lg-3 d-flex justify-content-end align-items-center">

            <?php
              
                if ($user_id!='') {  ?>
                    <a class="button button--green" href="logout.php">LOGOUT</a>
                    

                <?php } else { ?>
                    <a class="button button--green" href="login.php">LOGIN</a>
                     &nbsp;
                     <a class="button button--green" href="register.php">REGISTER</a>
                <?php } ?>
                <!-- menu-trigger start-->
                <div class="hamburger d-inline-block d-md-none hamburger--dark">
                    <div class="hamburger-inner"></div>
                </div>
                <!-- menu-trigger end-->
            </div>
        </div>
    </div>
</header>

<script>
  
 

        var path = window.location.href; 
        // alert(path)
        $('div a').each(function() {
            if (this.href === path) {
                $(this).addClass('active');
                // alert("asf")
            }
        });
 
</script>
<script src="plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="plugins/sweetalerts/custom-sweetalert.js"></script>
<!-- header end-->