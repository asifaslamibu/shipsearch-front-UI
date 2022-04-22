<?php
session_start();
?>

<?php
$user_id=$_SESSION["user_id"];
if($user_id!='') {
?>

    <!-- <input type="hidden"> -->
<?php
}else {
    // echo '<script>alert('.$user_id.')</script>';
    $_SESSION["user_id"]='';
    header("location: login.php");
}

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

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="dist/style.css">
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/apps/mailing-chat.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elements/tooltip.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elements/popover.css" rel="stylesheet" type="text/css" />


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

        <link href="assets/css/elements/popover.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components/tabs-accordian/custom-accordions.css" rel="stylesheet" type="text/css" />
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
.chat-system .user-list-box .search svg{
    top : 18px !important;
}
.chat-system .chat-box .chat-input svg{
    top : 7px !important;

}
.chat-system .user-list-box .people .person .user-info .f-head img{
    margin-right: 50px !important;

}
.help-tip {
  position: absolute;
  top: 30%;
  left: 80%;
  text-align: center;
  background-color: #BCDBEA;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  font-size: 14px;
  line-height: 26px;
  cursor: default;
}

.help-tip:before {
  content: '!';
  font-weight: bold;
  color: #fff;
}

.help-tip:hover span {
  display: block;
  transform-origin: 100% 0%;
  -webkit-animation: fadeIn 0.3s ease-in-out;
  animation: fadeIn 0.3s ease-in-out;
}

.help-tip span {
  display: none;
  text-align: left;
  background-color: #1E2021;
  padding: 5px;
  width: 200px;
  position: absolute;
  border-radius: 3px;
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
  left: -135px;
  top: 35px;
  color: #FFF;
  font-size: 13px;
  line-height: 1.4;
}

.help-tip span:before {
  position: absolute;
  content: '';
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-bottom-color: #1E2021;
  left: 70%;
  top: -12px;
}

.help-tip span:after {
  width: 100%;
  height: 40px;
  content: '';
  position: absolute;
  top: -40px;
  left: 0;
}
svg{
    width: 20px;    
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

                    <div class="row layout-top-spacing" id="cancel-row">
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="chat-section layout-top-spacing">
                                        <div class="row">

                                            <div class="col-xl-12 col-lg-12 col-md-12">

                                                <div class="chat-system">
                                                    <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-menu mail-menu d-lg-none">
                                                            <line x1="3" y1="12" x2="21" y2="12"></line>
                                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                                            <line x1="3" y1="18" x2="21" y2="18"></line>
                                                        </svg></div>
                                                    <div class="user-list-box">
                                                        <div class="search">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-search">
                                                                <circle cx="11" cy="11" r="8"></circle>
                                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                            </svg>
                                                            <input type="text" class="form-control"
                                                                placeholder="Search" />
                                                        </div>
                                                        <div class="people">
                                                            <?php
                                                                    include("config_indemnifier.php");
                                                                    $outgoing_id=$_SESSION['user_id'];  
                                                                    // $sql = "SELECT * FROM ss_user WHERE NOT user_id = {$outgoing_id} ORDER BY user_id DESC";
                                                                    $sql = "SELECT * FROM ship.chat_log as cl 
                                                                    join ss_user as us on us.user_id=cl.owner_id WHERE NOT us.user_id = {$outgoing_id} group by us.user_id ORDER BY us.user_id DESC";
                                                                    // echo $sql;
                                                                    $query = mysqli_query($db, $sql);
                                                                    $output = "";
                                                                    if(mysqli_num_rows($query) == 0){
                                                                        $output .= "No users are available to chat";
                                                                    }elseif(mysqli_num_rows($query) > 0){

                                                                        while($row = mysqli_fetch_assoc($query)){
                                                                            $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['user_id']}
                                                                                    OR outgoing_msg_id = {$row['user_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                                                                                    OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
                                                                            $query2 = mysqli_query($db, $sql2);
                                                                            $row2 = mysqli_fetch_assoc($query2);
                                                                            (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
                                                                            (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
                                                                            if(isset($row2['outgoing_msg_id'])){
                                                                                ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
                                                                            }else{
                                                                                $you = "";
                                                                            }
                                                                            $log_html='';

                                                                            $log_sql= "SELECT * FROM ship.chat_log where owner_id=". $row['user_id']."";
                                                                            $log_result = mysqli_query($db, $log_sql);
                                                                            while($row_log = mysqli_fetch_assoc($log_result)){
                                                                                $log_html .='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> ' .$row_log['modeule_id'] .'<br> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>'. $row_log['module_type'] ."<br>";
                                                                            }

                                                                           echo '<div class="person" data-chat="'.$row['user_id'].'" onclick="getData('. $row['user_id'].')">
                                                                                    <div class="user-info">
                                                                                         <div class="f-head">
                                                                                            <img src="images/programmer.png" alt="avatar">
                                                                                        </div>
                                                                                        <div class="f-body">
                                                                                            <div class="meta-info">
                                                                                                <span class="user-name">'.$row['first_name'].'</span>
                                                                                                
                                                                                            </div>
                                                                                            <span class="preview">'. $you .$msg .'</span>
                                                                                           

                                                                                        <span class="help-tip">
                                                                                        <span > '. $log_html .' </span>
                                                                                </span>
                                                                                
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>';
                                                                        }
                                                                        
                                                                    }
                                                            ?>




                                                        </div>
                                                    </div>
                                                    <div class="chat-box">

                                                        <div class="chat-not-selected">
                                                            <p> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-message-square">
                                                                    <path
                                                                        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                                    </path>
                                                                </svg> Click User To Chat</p>
                                                        </div>

                                                        <div class="chat-box-inner">
                                                            <div class="chat-meta-user">
                                                                <div class="current-chat-user-name"><span>
                                                                        <img src="assets/img/90x90.jpg"
                                                                            alt="dynamic-image"><span
                                                                            class="name"></span></span></div>

                                                            </div>
                                                            <div class="chat-conversation-box">
                                                                <div id="chat-conversation-box-scroll"
                                                                    class="chat-conversation-box-scroll">






                                                                </div>
                                                            </div>
                                                            <div class="chat-footer">
                                                                <div class="chat-input">
                                                                    <form class="chat-form" id="insert_form"
                                                                        action="javascript:void(0);">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-message-square">
                                                                            <path
                                                                                d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                                            </path>
                                                                        </svg>
                                                                        <input type="text" class="incoming_id"
                                                                            id="incoming_id" name="incoming_id"
                                                                            value="<?php echo $_SESSION['user_id']; ?>"
                                                                            hidden>
                                                                        <input type="text" name="message" id="message" onkeyup="myFunction()"
                                                                            class="mail-write-box form-control"
                                                                            placeholder="Message" />
                                                                            

                                                                    </form>
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




                    </div>

                </div>

            </div>
            <!--  END CONTENT AREA  -->

        </div>
        <script>
            var g_message;
function myFunction() {
  var x = document.getElementById("message");
    g_message = x.value;
}
</script>
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
    setInterval(() =>{
        $.ajax({
            url: "php/get-chat1.php",
            method: "POST",
            data: {
                incoming_id: $('#chatbox').data("chat")
            },
            beforeSend: function() {
                //  $('#insert').val("Inserting");
            },
            success: function(data) {
                console.log(data);
                document.getElementById("chat-conversation-box-scroll").innerHTML = data;
                //   document.getElementById("incoming_id").value = userId;

                // if (!chatBox.classList.contains("active")) {
                    // scrollToBottom();
                // }
            }
        });
}, 10000);
    document.getElementById('message').addEventListener('keypress', function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            //    alert('samad');
            form = document.querySelector(".chat-form");
            
            var text = document.getElementById('message').value;
            // alert($('#chatbox').data("chat"));
            $.ajax({
                url: "php/insert-chat.php",
                method: "POST",
                data: {
                    message:g_message,
                    incoming_id:$('#chatbox').data("chat"),
                },
                beforeSend: function() {
                    //  $('#insert').val("Inserting");
                },
                success: function(data) {
                    console.log(data);
                    // document.getElementById("chat-conversation-box-scroll").innerHTML = data;
                    //   document.getElementById("incoming_id").value = userId;

                    // if (!chatBox.classList.contains("active")) {
                    //     scrollToBottom();
                    // }
                }
            });
           
        }

    });

    function getData(userId) {
        $.ajax({
            url: "php/get-chat1.php",
            method: "POST",
            data: {
                incoming_id: userId
            },
            beforeSend: function() {
                //  $('#insert').val("Inserting");
            },
            success: function(data) {
                console.log(data);
                document.getElementById("chat-conversation-box-scroll").innerHTML = data;
                //   document.getElementById("incoming_id").value = userId;

                // if (!chatBox.classList.contains("active")) {
                //     scrollToBottom();
                // }
            }
        });
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/js/elements/tooltip.js"></script>
    <script src="assets/js/elements/popovers.js"></script>

    <script>
    $(document).ready(function() {
        App.init();
    });
    </script>
    <script src="assets/js/custom.js"></script>
    <script src="dist/script.js"></script>
    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script src="plugins/highlight/highlight.pack.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM SCRIPT FILE  -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="assets/js/apps/mailbox-chat.js"></script>

  
    <script src="assets/js/components/ui-accordions.js"></script>

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->







</body>
<?php include("svg.php")?>

</html>