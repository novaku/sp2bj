<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['kode_kegiatan'])){
$kode_kegiatan=$_POST['selector'];
$N = count($kode_kegiatan);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM data_lelang where kode_kegiatan='$kode_kegiatan[$i]'");
}
header("location: data_lelang.php");
}
?>