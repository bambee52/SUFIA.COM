<?php
$db_host = "localhost";
$db_user = "sufia"; // 원래 root
$db_password = "tnvldk11!!"; // 원래 ""
$db_name = "sufia"; // 원래 pythondb

$con = new mysqli($db_host, $db_user, $db_password, $db_name); //데이터베이스 접속

mysqli_query($con, "set session character_set_connection=utf8;");

mysqli_query($con, "set session character_set_results=utf8;");

mysqli_query($con, "set session character_set_client=utf8;");

function mq($sql)
{
      global $con;
      return $con->query($sql);
}


if($con->connect_errno){
    die('Connection Error : '.$con->connect_error);
}


?>
