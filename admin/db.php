<?php 
//$conn =mysqli_connect("localhost","icloudcs_5ktime","icloudcs_5ktime","icloudcs_5ktime");
$conn =mysqli_connect("localhost","root","","invicts");
date_default_timezone_set('Asia/Kolkata');
define("ADMINSESSION","admin_session_");
define("EMPLOYEESESSION","emp_session_");
define("SUBADMINSESSION","subadmin_session_");
define("IMGPATH","assets/images/users/");
?>