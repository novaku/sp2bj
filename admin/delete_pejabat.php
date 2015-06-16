<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['hapus_pejabat'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM pejabat_kpa where kode_kegiatan='$id[$i]'");
}
header("location: all_pejabat.php");
}
?>