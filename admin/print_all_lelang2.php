<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 14 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Balloon Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-link:"Balloon Text";
	font-family:"Tahoma","sans-serif";}
.MsoChpDefault
	{font-family:"Calibri","sans-serif";}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:8.27in 5.83in;
	margin:48.25pt .5in .5in .75in;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<?php include('print_header.php'); ?>
<?php include('session.php'); ?>
</head>
<body lang=EN-US>
<div class="empty">
<?php include('navbar.php'); ?>
<div class="container">
  <div class="row-fluid">
      <div class="col-lg-12">
            <div class="alert alert-success alert-dismissable">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <i class="icon-check"></i><strong> Laporan Data Lelang</strong>
            </div>
       </div>
    </div>
  </div>
 </div>
</div>

<div class="block">
<div class="row-fluid">

<div class=WordSection1>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
font-family:"Times New Roman","serif"'><img width=356 height=130 id="Picture 1"
src="print-list-inventory_files/image001.png"></span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
font-family:"Times New Roman","serif"'>LAPORAN DATA LELANG BINA MARGA</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
font-family:"Times New Roman","serif"'>Periode : <?php $date = new DateTime(); echo date('Y'); ?></span></b></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<div class="container">
<div class="container-fluid">
<div class="row-fluid">
<div class="pull-left"> 
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"calibri","serif"'>Data Semua Lelang<o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"calibri","serif"'>Hari: <?php
$date = new DateTime();
//echo $date->format('l, jS F, Y');
$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
$hr = $array_hr[date('N')];
 /* script menentukan tanggal */   
$tgl= date('j');

/* script menentukan bulan */
  $array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
  $bln = $array_bln[date('n')];

/* script menentukan tahun */ 
$thn = date('Y');

echo $hr . ", " . $tgl . " " . $bln . " " . $thn; 

 ?>


<div class="pull-right">
   <div class="empty">
           <p class=MsoNormal style='margin-bottom:0in; margin-left:-110px; margin-top:-30px; margin-bottom:.0001pt;line-height:
           normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family: "Times New Roman","serif"'>
		   <a href="#" onClick="window.print()" class="btn btn-info" id="print" data-placement="top" title="Click to Print"><i class="icon-print icon-large"></i> Cetak</a></p>		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script> 
            <p class=MsoNormal style='margin-bottom:0in; margin-top:-30px; margin-bottom:.0001pt;line-height:
            normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family: "Times New Roman","serif"'>
			<a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="data_lelang.php"><i class="icon-arrow-left"></i> Kembali</a></p>		
			<script type="text/javascript">
			$(document).ready(function(){
			$('#return').tooltip('show');
			$('#return').tooltip('hide');
			});
			</script>                    	   

    </div>
</div>
    
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:23.25pt'>
  <td width=50 style='width:50pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#BFBFBF;mso-background-themecolor:background1;
  mso-background-themeshade:191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
  <p class=MsoNormal align="center" style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Calibri","serif"'>ID LELANG<o:p></o:p></span></b></p>
  </td>
  <td width=80 style='width:80pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
  <p class=MsoNormal align="center" style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Calibri","serif"'>KODE KEGIATAN<o:p></o:p></span></b></p>
  </td>
  <td width=80 style='width:80pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
  <p class=MsoNormal align="center" style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"calibri","serif"'>KODE BIDANG<o:p></o:p></span></b></p>
  </td>
  <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
  <p class=MsoNormal align="center" style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"calibri","serif"'>NAMA PERUSAHAAN<o:p></o:p></span></b></p>
  </td>
  <td width=200 style='width:2005pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
  <p class=MsoNormal align="center" style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"calibri","serif"'>NAMA KEGIATAN<o:p></o:p></span></b></p>
  </td>
  <td width=80 style='width:80pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
  <p class=MsoNormal align="center" style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"calibri","serif"'>H P S<o:p></o:p></span></b></p>
  </td>
 </tr>
    
<?php

 
//BAGIAN 1: PAGINASI SETTING
  $batas = 10;
  $halaman = 1;
  if(empty ($halaman)){
        $posisi = 0;
        $halaman = 1;
  }else{
    $posisi = ($halaman-1)* $batas;
  }
 

        //query untuk "menyelect tabel pegawai"
        //dengan "urutan berdasar id secara descend(mundur)".
        //LIMIT menunjukkan posisi Select dan Batas yang berakibat
        //misalkan: batas= 5 posisi=0
        // di hal pertama : akan muncul nama pegawai dari ID 0-4
        // di hal kedua   : akan muncul nama pegawai dari ID 5-9
        // tergantung batas dan posisi pada settingan paginasi di atas
	$tampil = mysql_query("select * from data_lelang ORDER BY kode_kegiatan DESC LIMIT $posisi,$batas")or die(mysql_error());
	$result = mysql_num_rows($tampil);
 
        //Menampilkan data ke layar sejumlah batas halaman yang telah ditentukan
    $no = $posisi+1;
    while($row = mysql_fetch_row($tampil)){

                //Bagian ini mengeset warna baris agar belang-belang
        if(($no % 2 ) == 0)
        {
            $col1="grey";
            $col2="white";
        }
        else
        {
            $col1="white";
            $col2="black";
        }

	
;
        $no++;
        }
 
//BAGIAN 3: menampilkan link-link halaman data yang telah dipaginasi
    echo "
<div align=\"center\">";
        echo "Page: ";
		$tampil2 = mysql_query("select * from data_lelang")or die(mysql_error());
        $jmldata = mysql_num_rows($tampil2);
        $jmlhalaman = ceil($jmldata/$batas);
 
        for($i=1; $i <= $jmlhalaman;$i++)
        {
            if($i != $halaman)
                {
                echo "<u><a href=$_SERVER[PHP_SELF]?halaman=$i>$i</a></u> | ";
            }else{
                echo "<b>$i</b> |";
            }
        }
        echo "</div>
";
 

?>

		<?php
		$hasil = mysql_query("select * from data_lelang LIMIT $posisi,$batas")or die(mysql_error());
		$count = mysql_num_rows($hasil);		
		while($row = mysql_fetch_row($hasil)){
		?>
 <tr style='mso-yfti-irow:1'>
  <td width=50 valign=top style='width:50pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align="center" style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'><?php echo $row[0]; ?><o:p></o:p></span></p>
  </td>
  <td width=80 valign=top style='width:80pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align="center" style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'><?php echo $row[1]; ?><o:p></o:p></span></p>
  </td>
  <td width=80 valign=top style='width:80pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align="center" style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'><?php echo $row[2]; ?><o:p></o:p></span></p>
  </td>
  <td width=188 valign=top style='width:140.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align="center" style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'><?php echo $row[3]; ?><o:p></o:p></span></p>
  </td>
  <td width=200 valign=top style='width:200pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align="left" style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'><?php echo $row[4]; ?><o:p></o:p></span></p>
  </td>
  <td width=80 valign=top style='width:80pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align="center" style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'><?php echo $row[6]; ?><o:p></o:p></span></p>
  </td>

<?php } ?> 

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</body>
</html>