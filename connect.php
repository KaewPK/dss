
<?php
 //   session_start();
    $conn = new mysqli('localhost','root','','dss');
    $conn->set_charset("utf8");
    if($conn->connect_errno){
        die("Connect Database Failed". $conn->connect_error);
    }
?>