<?php
session_start();
session_unset();//remove sesstion variable
session_destroy();
header('LOCATION:login.php');
?>