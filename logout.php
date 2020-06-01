<?php
session_start();
session_destroy();
header('location:http://indite.herokuapp.com/login.php');
?>