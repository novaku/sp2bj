<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['kode_kegiatan'])){
$kode_kegiatan=$_POST['selector'];
$N = count($kode_kegiatan);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM rka_skpd where kode_kegiatan='$kode_kegiatan[$i]'");
}
header("location: kode_dpa.php");
}
?>