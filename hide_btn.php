    <?php
if ($_SESSION["user_id"]!='') {
    ?>
    <script>
        $('.adding_').addClass('d-none')
        </script>
    <!-- <input type="hidden"> -->

<?php
} else {
    echo "<h1>Please login first .</h1>";
    // header("location: index.php");
}

?>