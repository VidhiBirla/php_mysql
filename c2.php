<?php
$connection = mysqli_connect('localhost', 'root', 'vid1995','details');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
//$select_db = mysqli_select_db();
//if (!$select_db){
//    die("Database Selection Failed" . mysql_error());
//}
