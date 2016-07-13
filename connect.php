
<?php
$connection = mysql_connect('localhost', 'root', 'qaz');
$select_db = mysql_select_db('details');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

