<?php
if (isset($_GET['out']) == 1) {
    session_destroy();
    header("Location:http://localhost/avrilfix/sign-up.php");
}
