<?php
@ob_start();
unset($_SESSION['name']);
@session_start();
@session_destroy();
header('Location:login.php');
?>