<?php

session_start();
include_once('functions.php');
// only if the session exists
if (isset($_SESSION['is_logged_in'])) {
    unset($_SESSION['is_logged_in']);
}
redirect('index.php');
?>
