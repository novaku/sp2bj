<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['hapus_penyedia'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM penyedia where id_penyedia='$id[$i]'");
}
header("location: all_penyedia.php");
}
?>