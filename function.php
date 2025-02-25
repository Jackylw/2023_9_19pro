<?php
function connect_mysql(){
    $connect_mysql=mysqli_connect('localhost','root','root','pinkunrending');
    return $connect_mysql;
}
?>