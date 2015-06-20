<?php
@session_start();
//include 'lib/dbcon.php';
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){
    echo '<script type="text/javascript">
       window.location = "'.host().'index.php"
  </script>';
    exit();
}
$session_id=$_SESSION['id'];
$user_query = mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
$admin_username = isset($user_row['username']) ? $user_row['username'] : 'User Client';