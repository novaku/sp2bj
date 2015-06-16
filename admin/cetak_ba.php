<html>
<head>
  <link href="css/bootstrap-print.css" rel="stylesheet">
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
	margin-right:0.5in;
	margin-bottom:8.0pt;
	margin-left:0.5in;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
 p.MsoNormal1, li.MsoNormal1, div.MsoNormal1
	{margin-top:0in;
	margin-right:0.5in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:100%;
	font-size:12.0pt;
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
	{size:8.27in 11.69 in;
	margin:0.75pt .5in .5in .75in;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<?php include('print_header.php'); ?>
<?php include('session.php'); ?>
</head>
<body lang=EN-US>
    					<!------------------BATAS CETAK HALAMAN HAL 1------------------>

<div class="empty">
<?php include('navbar.php'); ?>
<div class="container">
  <div class="row-fluid">
      <div class="col-lg-12">
            <div class="alert alert-success alert-dismissable">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <i class="icon-check"></i><strong> DAFTAR CETAK BERITA ACARA / SPK</strong>
            </div>
            <div class="pull-right">
   <div class="empty">
           <p class=MsoNormal style='margin-bottom:0in; margin-left:-110px; margin-top:-30px; margin-bottom:.0001pt;line-height:
           normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
           "Times New Roman","serif"'>
		   <a href="#" onClick="window.print()" class="btn btn-info" id="print" data-placement="top" title="Click to Print"><i class="icon-print icon-large"></i> Cetak</a></p>		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script> 
            <p class=MsoNormal style='margin-bottom:0in; margin-top:-30px; margin-bottom:.0001pt;line-height:
            normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
           "Times New Roman","serif"'>
			<a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="area_cetak.php"><i class="icon-arrow-left"></i> Kembali</a></p>		
			<script type="text/javascript">
			$(document).ready(function(){
			$('#return').tooltip('show');
			$('#return').tooltip('hide');
			});
			</script>       	   
    </div>
</div>
       </div>
    </div>
  </div>
 </div>
</div>

 <div class="container">
 <div class="row-fluid">
 <div class="block">
<div class="row-fluid">

<div class=WordSection1>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:40.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>


    					<!------------------BATAS CETAK HALAMAN HAL 1 ------------------>

<div class="container">
<div class="row-fluid">
<div class="block">
<div class=WordSection1>

<div class=WordSection1>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
font-family:"Times New Roman","serif"'><img width=626 height=115 id="Picture 1"
src="print-list-inventory_files/logo_karawang.png"></span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:24.0pt;
font-family:"Times New Roman","serif"'>===========================================================</span></b></p>

<?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
  $row = mysql_fetch_array($query);
?>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:140pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Nomor<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:500;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>: 602.21/30.130/Und.PL/2014</span></p>
  </td>
  <td width=0 valign=top style='width:900pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Karawang,  12 Maret 2014</span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Lampiran<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:500;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>: 1 (satu) berkas</span></p>
  </td>
  <td width=0 valign=top style='width:900pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'>Kepada Yth.</span></p>
   
<p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'>Direktur</span></p>

<p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'>CV. KARYA CIPTA MANDIRI</span></p>

<p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'>di</span></p>

<p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'>&nbsp;&nbsp;<u>Tempat</u></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:20.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:150pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Perihal :</span></p>
  </td>
   <td width=0 valign=top style='width:1000;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Pengadaan Langsung untuk Paket Pekerjaan Konstruksi pada Dinas Bina Marga dan Pengairan Kabupaten Karawang Tahun Anggaran 2014
  </tr>
</table>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:20.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=justify style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'>Dengan ini CV. KARYA CIPTA MANDIRI kami undang untuk mengikuti proses Pengadaan Langsung paket Pekerjaan Konstruksi sebagai berikut:</span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'><b>1. Paket Pekerjaan</b></span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:300pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Nama paket pekerjaan<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:900pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Pembangunan Infrastruktur Perdesaan Peningkatan Jalan Dusun Kamojing Timur Desa Kamojing Kecamatan Cikampek</span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:300pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Lingkup pekerjaan<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:900pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Konstruksi Rigid (Beton)</span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:330pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Nilai total HPS<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:900pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Rp 195.200.000,00 (Seratus Sembilan Puluh Lima Juta Dua Ratus Ribu Rupiah)</span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:300pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Sumber pendanaan<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:900pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>APBD Kab. Karawang Tahun Anggaran 2014</span></p>
  </td>
  </tr>
</table>


<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'><b>2. Pelaksanaan Pengadaan</b></span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:300pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Tempat dan alamat<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:900pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Kantor Dinas Bina Marga Dan Pengairan Kab. Karawang Jalan Kertabumi No. 31 Karawang</span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>


<p class=MsoNormal align=justify style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'>Saudara diminta untuk memasukkan dokumen penawaran administrasi, teknis dan harga, secara langsung sesuai dengan jadwal pelaksanaan sebagai berikut:</span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

<table class=MsoTableGrid align=center border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:23.25pt'>
  <td width=100 style='width:100pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#BFBFBF;mso-background-themecolor:background1;
  mso-background-themeshade:191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>NO.<o:p></o:p></span></b></p>
  </td>
  <td width=250 style='width:250pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>KEGIATAN<o:p></o:p></span></b></p>
  </td>
  <td width=200 style='width:200pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>HARI/TANGGAL<o:p></o:p></span></b></p>
  </td>
  <td width=200 style='width:200pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>WAKTU<o:p></o:p></span></b></p>
  </td>

<tr style='mso-yfti-irow:1'>
  <td width=100 valign=top style='width:100pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'>a.<o:p></o:p></span></p>
  </td>
  <td width=250 valign=top style='width:250pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'>Pemasukan Dokumen Kualifikasi<o:p></o:p></span></p>
  </td>
  <td width=200 valign=top style='width:200pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'>Rabu, 12 Maret 2014><o:p></o:p></span></p>
  </td>
  <td width=200 valign=top style='width:200pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Times New Roman","serif"'>Jam 10.00 – 14.30 BBWI<o:p></o:p></span></p>
  </td>
  </tr>
  <tr style='mso-yfti-irow:1'>
  <td width=100 valign=top style='width:100pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'>b.<o:p></o:p></span></p>
  </td>
  <td width=250 valign=top style='width:250pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'>Pemasukan Dokumen Penawaran<o:p></o:p></span></p>
  </td>
  <td width=200 valign=top style='width:200pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'>Kamis, 13 Maret 2014 s/d Jumat, 14 Maret 2014 
<o:p></o:p></span></p>
  </td>
  <td width=200 valign=top style='width:200pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Times New Roman","serif"'>Jam 09.00 – 11.30 BBWI<o:p></o:p></span></p>
  </td>
  </tr>
  <tr style='mso-yfti-irow:1'>
  <td width=100 valign=top style='width:100pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'>c.<o:p></o:p></span></p>
  </td>
  <td width=250 valign=top style='width:250pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'>Pembukaan Dokumen Penawaran, Evaluasi, Klarifikasi Teknis dan Negosiasi Harga<o:p></o:p></span></p>
  </td>
  <td width=200 valign=top style='width:200pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'>Jumat, 14 Maret 2014<o:p></o:p></span></p>
  </td>
  <td width=200 valign=top style='width:200pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Times New Roman","serif"'>Jam 13.00 BBWI<o:p></o:p></span></p>
  </td>
  </tr>
  <tr style='mso-yfti-irow:1'>
  <td width=100 valign=top style='width:100pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'>d.<o:p></o:p></span></p>
  </td>
  <td width=250 valign=top style='width:250pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'>Penandatanganan SPK<o:p></o:p></span></p>
  </td>
  <td width=200 valign=top style='width:200pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"calibri","serif"'>Senin, 24 Maret 2014<o:p></o:p></span></p>
  </td>
  <td width=200 valign=top style='width:200pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Times New Roman","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  </tr>
  </table>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=justify style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'>Apabila Saudara membutuhkan keterangan dan penjelasan lebih lanjut, dapat menghubungi Pejabat Pengadaan Barang dan Jasa sesuai dengan alamat tersebut di atas sampai dengan batas akhir pemasukan Dokumen Penawaran.</span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'>Demikian disampaikan untuk diketahui.<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:20.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'>Pejabat Pengadaan Barang dan Jasa pada<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'>
<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'>Dinas Bina Marga dan Pengairan Kabupaten Karawang<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'>
<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'>Tahun Anggaran 2014<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:30.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14pt;font-family:"calibri","serif"'>Maulan Winandhi, ST.<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'>

<span style='font-size:50.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
<?php include('script.php'); ?>
<div class="empty">
<center>
<hr>
		<footer>
           <p>All Right Reserved Fauzan Cipta Solusi Coding™ 2015</p>
        <footer>
</center>
</div>
</html>