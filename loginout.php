<?php
header("Content-type:application/json;charset=utf-8");
session_start();
session_destroy();
header("Location:login.html");
exit();
?>