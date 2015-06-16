<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=iso-8859-1">
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
	line-height:150%;
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
	{size:8,5in 13in;
	margin:1in 1in 1in 1in;}
div.WordSection1
	{page:WordSection1;}
@page WordSection2
	{size:8,5in 13in;
	margin:1in 1in 1in 1in;}
div.WordSection2
	{page:WordSection2;}
@page WordSection3
	{size:8,5in 13in;
	margin:1in 1in 1in 1in;}
div.WordSection3
	{page:WordSection3;}
div.MsoNormal2 {margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
li.MsoNormal2 {margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
p.MsoNormal2 {margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
body,td,th {
	font-family: calibri, ProximaNova-Light, Helvetica, calibri, sans-serif;
}
-->

</style>
<?php include('print_header.php');?>
<?php include('session.php');?>
</head>
<body lang=EN-US>
<?php
$get_id = $_GET['kode_kegiatan'];
$hasil = mysql_query("select * from data_lelang where kode_kegiatan = '$get_id'")or die(mysql_error());
$count = mysql_num_rows($hasil);
?>
<div class="empty">
<?php include('navbar.php'); ?>
<div class="container">
  <div class="row-fluid">
            <div class="pull-right">
   <div class="empty">
           <p class=MsoNormal style='margin-bottom:0in; margin-left:-110px; margin-top:-30px; margin-bottom:.0001pt;line-height:
           normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>
		   <a href="#" onClick="window.print()" class="btn btn-info" id="print" data-placement="top" title="Click to Print"><i class="icon-print icon-large"></i> Cetak</a></p>		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script> 
            <p class=MsoNormal style='margin-bottom:0in; margin-top:-30px; margin-bottom:.0001pt;line-height:
            normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>
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

<div class="container">
<div class="row-fluid">
<div class="container">
<div class="row-fluid">
<div class="block">
<div class="row-fluid">

<div class=WordSection1>
<p class=MsoNormal><b><span style='font-size:25pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>
<p class=MsoNormal align=center ><b><span style='font-size:14.0pt;
font-family:"Times New Roman","serif"'><img width=626 height=115 id="Picture 1"
src="print-list-inventory_files/logo_karawang.png"></span></b></p>
<p class=MsoNormal >&nbsp;</p>

<p class=MsoNormal align=center ><b><img width=547 height=89 src="SPK-web_files/image005.gif"
alt="SURAT PERINTAH KERJA"></b></p>

<p class=MsoNormal align=center ><b><img width=185 height=70 src="SPK-web_files/image004.gif" alt="(SPK)"></b></p>
<p class=MsoNormal align=center >&nbsp;</p>

<p class=MsoNormal align=center ><b><span style='font-size:24.0pt;
font-family:"Times New Roman","serif"'><img width=623 height=7 src="SPK-web_files/image006.gif"></span></b></p>

<div class="container">
<div class="container-fluid">
<?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
  $row = mysql_fetch_array($query);
?>
<p class=MsoNormal align=center >&nbsp;</p>
   
<p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
style='font-size:20.0pt;font-family:"Calibri","sans-serif";text-transform:uppercase'>NOMOR: 056.2</span></b><b><span lang=IN style='font-size:20.0pt;font-family:"Calibri","sans-serif";
text-transform:uppercase'>/.............</span></b><b><span lang=ES
style='font-size:20.0pt;font-family:"Calibri","sans-serif";text-transform:uppercase'>/</span></b><b><span
lang=ES style='font-size:20.0pt;font-family:"Calibri","sans-serif";text-transform:
uppercase'>30.130</span></b><b><span lang=ES style='font-size:20.0pt;
font-family:"Calibri","sans-serif";text-transform:uppercase'>/</span></b><b><span
lang=IN style='font-size:20.0pt;font-family:"Calibri","sans-serif";text-transform:
uppercase'>3/</span></b><b><span lang=ES style='font-size:20.0pt;font-family:
"Calibri","sans-serif";text-transform:uppercase'>bmp/201</span></b><b><span
lang=IN style='font-size:20.0pt;font-family:"Calibri","sans-serif";text-transform:
uppercase'>4</span></b></p>

<p class=MsoNormal align=center style='margin-top:0in;margin-right:-.1pt;
margin-bottom:0in;margin-left:2.25in;margin-bottom:.0001pt;text-align:center;
text-indent:-2.25in'><b><span
lang=ES style='font-size:20.0pt;font-family:"Calibri","sans-serif";text-transform:
uppercase'>TANGGAL : </span></b><b><span
lang=ES style='font-size:20.0pt;font-family:"Calibri","sans-serif";text-transform:
uppercase'>24 Maret 2014</span></b></p>

<p class=MsoNormal ><b><span style='font-size:12pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>
<table width="640" height="442" border="0" align="center">
  <tr>
    <td width="288" valign=top ><span style="font-size:14.0pt;
  "><b><span style="font-size:14.0pt;font-family:">SUMBER
DANA&nbsp;</span></b>
      <o:p></o:p>
    </span></td>
    <td width="21" valign=top ><span style="font-size: 14.0pt; mso-bidi-font-size: 14.0pt; font-family: "><b>:</b></span></td>
    <td width="377" valign="top"><b>ANGGARAN PENDAPATAN DAN BELANJA DAERAH (APBD) Kabupaten Karawang</b></td>
  </tr>
   <tr>
    <td width="288" valign=top ><span style="font-size:14.0pt;
  "><b><span style="font-size:14.0pt;font-family:">TAHUN
ANGGARAN</span></b>
      <o:p></o:p>
    </span></td>
    <td width="21" valign=top ><span style="font-size: 14.0pt; mso-bidi-font-size: 14.0pt; font-family: "><b>:</b></span></td>
    <td width="377" valign="top"><b>2014</b></td>
  </tr>
   <tr>
    <td width="288" valign=top ><span style="font-size:14.0pt;
  "><b><span style="font-size:14.0pt;font-family:">KEGIATAN&nbsp;</span></b>
      <o:p></o:p>
    </span></td>
    <td width="21" valign=top ><span style="font-size: 14.0pt; mso-bidi-font-size: 14.0pt; font-family: "><b>:</b></span></td>
    <td width="377" valign="top"><b>Pembangunan Infrastruktur Perdesaan Peningkatan Jalan Dusun Kamojing Timur Desa Kamojing Kecamatan Cikampek Pj = 198 M', Lb = 3,00 M' kecamataN Cikampek</b></td>
  </tr>
   <tr>
    <td width="288" valign=top ><span style="font-size:14.0pt;
  "><b><span style="font-size:14.0pt;font-family:">waktu pelaksanaan&nbsp;</span></b>
        <o:p></o:p>
    </span></td>
    <td width="21" valign=top ><span style="font-size: 14.0pt; mso-bidi-font-size: 14.0pt; font-family: "><b>:</b></span></td>
    <td width="377" valign="top"><span style="font-size: 14.0pt; mso-bidi-font-size: 14.0pt; font-family: "><b>90 (Sembilan Puluh) hari kalender 25 Maret 2014 s/d 22 Juni 2014</b></span></td>
  </tr>
   <tr>
    <td width="288" valign=top ><b><span style="font-size:14.0pt;font-family:">HARGA BORONGAN&nbsp;</span></b></td>
    <td width="21" valign=top ><span style="font-size: 14.0pt; mso-bidi-font-size: 14.0pt; font-family: "><b>:</b></span></td>
    <td width="377" valign="top"><span style="font-size: 14.0pt; mso-bidi-font-size: 14.0pt; font-family: "><b>Rp. 194.288.000,00 (Seratus Sembilan Puluh Empat Juta Dua Ratus Delapan Puluh Delapan Ribu Rupiah)</b></span></td>
  </tr>
  <tr>
   <td width="288" valign=top ><b><span style="font-size:14.0pt;font-family:">Penyedia jasa</span></b></td>
    <td width="21" valign=top ><span style="font-size: 14.0pt; mso-bidi-font-size: 14.0pt; font-family: "><b>:</b></span></td>
    <td width="377"><span style="font-size: 14.0pt; mso-bidi-font-size: 14.0pt; font-family: "><b>CV. KARYA CIPTA MANDIRI</b></span></td>
  </tr>
  <tr>
   <td width="288" valign=top ><b><span style="font-size:14.0pt;font-family:">ALAMAT&nbsp;</span></b></td>
    <td width="21" valign=top ><span style="font-size: 14.0pt; mso-bidi-font-size: 14.0pt; font-family: "><b>:</b></span></td>
    <td width="377"><span style="font-size: 14.0pt; mso-bidi-font-size: 14.0pt; font-family: "><b>Jl. Dahlia No.7 Guro II Karawang</b></span></td>
  </tr>
</table>
<p class=MsoNormal align=justify >&nbsp;</p>

<p class=MsoNormal ><b><span style='font-size:14pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=justify >&nbsp;</p>

<p class=MsoNormal ><b><span style='font-size:40.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

    					<!------------------BATAS CETAK HALAMAN HAL 2------------------>

<div class="container">
<div class="row-fluid">
<div class="block">
<div class="row-fluid">

<div class=WordSection1>

<p class=MsoNormal ><b><span style='font-size:40.0pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><b><img
width=488 height=103 src="SPK-web_files/image009.gif"
alt="SURAT PERINTAH KERJA (SPK)"></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:24.0pt;
font-family:"Times New Roman","serif"'><img width=495 height=4
src="SPK-web_files/image008.gif"></span></b></p>

<div class="container">
<div class="container-fluid">
<?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
  $row = mysql_fetch_array($query);
?>

   
<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>Nomor : 056.2/........../30.130/3/BMP/2014</span></b></p>

<p class=MsoNormal ><b><span style='font-size:12pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:14.0pt;font-family:"calibri","serif"'>ANTARA</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:16pt;font-family:"calibri","serif"'>DINAS BINA MARGA DAN PENGAIRAN</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:16pt;font-family:"calibri","serif"'>KABUPATEN KARAWANG</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>DENGAN</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>UNTUK</span></b></p>

<p class=MsoNormal ><b><span style='font-size:14pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>PELAKSANAAN KEGIATAN PEMBANGUNAN INFRASTRUKTUR PERDESAAN PENINGKATAN JALAN DUSUN KAMOJING TIMUR DESA KAMOJING KECAMATAN CIKAMPEK Pj = 198 M', Lb = 3,00 M' DI KECAMATAN CIKAMPEK 
PADA KEGIATAN ANGGARAN PENDAPATAN BELANJA DAERAH (APBD) 
DINAS BINA MARGA DAN PENGAIRAN KABUPATEN KARAWANG TAHUN ANGGARAN 2014
</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:24.0pt;
font-family:"calibri","serif"'><img width=625
height=7 src="SPK-web_files/image010.gif"></span></b></p>

<p class=MsoNormal align=justify ><span style='font-size:14pt;font-family:"calibri","serif"'>Pada hari ini,  Senin tanggal Dua Puluh Empat bulan Maret tahun Dua Ribu Empat Belas (24 Maret 2014), kami yang bertandatangan dibawah ini :</span></p>
<p class=MsoNormal align=justify >&nbsp;</p>
<table align="center" width="613" border="0">
  <tr>
    <td width="209" valign=top ><span style="font-size:14.0pt;
  ">H.WAWAN DISMAWAN,ST.,S.Sos.,MM
        <o:p></o:p>
    </span></td>
    <td width="6" valign=top ><span style="font-size: 14.0pt; mso-bidi-font-size: 14.0pt; font-family: ">:</span></td>
    <td width="418"><span class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal"><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Kuasa Pengguna Anggaran (KPA) Selaku Pejabat Pembuat Komitmen di Lingkungan Dinas Bina Marga dan Pengairan Kabupaten Karawang Tahun Anggaran 2014, berdasarkan Surat Keputusan Bupati Karawang No. 903/KEP.876-Huk/2013 tanggal 30 Desember 2013 bertindak untuk dan atas nama Pemerintah Kabupaten Karawang yang berkedudukan di Jalan Kertabumi No. 31 Karawang selanjutnya disebut PIHAK KESATU.
          <o:p></o:p>
    </span></span></td>
  </tr>
  <tr>
    <td valign=top><span class="MsoNormal" style="margin-bottom:0in valign=top ;margin-bottom:.0001pt;
  text-align:left;line-height:normal"><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif" valign=top '>DARIJAN HARISMAN
          <o:p></o:p>
    </span></span></td>
    <td valign=top ><span style="font-size: 14.0pt; mso-bidi-font-size: 14.0pt; font-family: ">:</span></td>
    <td><span style="font-size:14.0pt;
  ">Direktur CV. KARYA CIPTA MANDIRI  Dalam hal ini bertindak untuk dan atas nama CV. KARYA CIPTA MANDIRI  yang Anggaran Dasarnya dimuat dalam akta tanggal 17 Oktober 1996 Nomor 416 yang dibuat dihadapan Notaris Hj. ROSIDA SURYANA, SH. yang berkedudukan di Jl. Dahlia No.7 Guro II Karawang sebagai pelaksana kegiatan selanjutnya disebut PIHAK KEDUA.
        <o:p></o:p>
    </span></td>
  </tr>
</table>
<p class=MsoNormal align=justify >&nbsp;</p>

<p class=MsoNormal ><b><span style='font-size:14pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=justify ><span style='font-size:14pt;font-family:"calibri","serif"'>Bahwa para pihak telah sepakat untuk mengadakan Perjanjian Kerja dalam rangka pelaksanaan kegiatan Pembangunan Infrastruktur Perdesaan Peningkatan Jalan Dusun Kamojing Timur Desa Kamojing Kecamatan Cikampek Pj = 198 M', Lb = 3,00 M' di Kecamatan Cikampek.</span></p>

 <p class=MsoNormal ><b><span style='font-size:14pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=justify ><span style='font-size:14pt;font-family:"calibri","serif"'>PIHAK KEDUA bertindak sebagaimana tersebut adalah sebagai pelaksana dan bertanggung jawab atas pelaksanaan kegiatan Pembangunan Infrastruktur Perdesaan Peningkatan Jalan Dusun Kamojing Timur Desa Kamojing Kecamatan Cikampek Pj = 198 M', Lb = 3,00 M' di Kecamatan Cikampek.</span></p>

<p class=MsoNormal ><b><span style='font-size:40.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

    					<!------------------BATAS CETAK HALAMAN HAL 3 ------------------>


<div class="container">
<div class="row-fluid">
<div class="block">
<div class="row-fluid">
<div class=WordSection1>

<?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
  $row = mysql_fetch_array($query);
?>

<p class=MsoNormal align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Berhubung dengan segala sesuatu diatas para pihak sepakat untuk mengadakan Perjanjian Kerja sebagai berikut :</span></p>

<p class=MsoNormal ><b><span style='font-size:12pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>
   
<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>Pasal 1</span></b></p>

<p class=MsoNormal ><b><span style='font-size:12pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>PIHAK KESATU, Berdasarkan Hasil Pengadaan Langsung dengan ini  memborongkan kepada PIHAK KEDUA, yang dengan ini menyatakan menerima kegiatan dari dan untuk kepentingan PIHAK KESATU atas pelaksanaan, penyelesaian, dan perbaikan kegiatan Pembangunan Infrastruktur Perdesaan Peningkatan Jalan Dusun Kamojing Timur Desa Kamojing Kecamatan Cikampek, Pj = 198 M' Lb = 3,00 M' di kecamatan Cikampek , sesuai dengan Surat Perintah Kerja ini dan lampirannya.</span></p>

 <p class=MsoNormal ><b><span style='font-size:12pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>Pasal 2</span></b></p>

<p class=MsoNormal ><b><span style='font-size:14pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>a.<o:p></o:p></span></p>
  	</td>
    <td width=0 valign=top style='width:500pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Dokumen Surat Perintah Kerja yang ditentukan di bawah ini harus dibaca serta merupakan bagian yang tidak terpisahkan dari Surat Perintah Kerja (SPK) yaitu :</span></p>
    </td>
 </tr>
  </table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
  <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  	<td width=0 valign=top style='width:15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  	</td>
    <td width=0 valign=top style='width:10pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left ><span style='font-size:14.0pt;font-family:"calibri","serif"'>a.</span></p>
    </td>
  	<td width=0 valign=top style='width:500;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Surat Perintah Kerja;<o:p></o:p></span></p>
  	</td>
 </tr> 
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
  <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  	<td width=0 valign=top style='width:15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:12pt;
  mso-bidi-font-size:12.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  	</td>
    <td width=0 valign=top style='width:10pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left ><span style='font-size:14.0pt;font-family:"calibri","serif"'>b.</span></p>
    </td>
  	<td width=0 valign=top style='width:500;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Surat Penawaran;<o:p></o:p></span></p>
  	</td>
 </tr> 
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
  <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  	<td width=0 valign=top style='width:15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:12pt;
  mso-bidi-font-size:12.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  	</td>
    <td width=0 valign=top style='width:10pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left ><span style='font-size:14.0pt;font-family:"calibri","serif"'>c.</span></p>
    </td>
  	<td width=0 valign=top style='width:500;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Addendum Dokumen Lelang (bila ada);<o:p></o:p></span></p>
  	</td>
 </tr> 
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
  <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  	<td width=0 valign=top style='width:15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:12pt;
  mso-bidi-font-size:12.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  	</td>
    <td width=0 valign=top style='width:10pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left ><span style='font-size:14.0pt;font-family:"calibri","serif"'>d.</span></p>
    </td>
  	<td width=0 valign=top style='width:500;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Syarat-Syarat Khusus Kontrak/SPK;<o:p></o:p></span></p>
  	</td>
 </tr> 
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
  <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  	<td width=0 valign=top style='width:15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:12pt;
  mso-bidi-font-size:12.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  	</td>
    <td width=0 valign=top style='width:10pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left ><span style='font-size:14.0pt;font-family:"calibri","serif"'>e.</span></p>
    </td>
  	<td width=0 valign=top style='width:500;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Syarat-Syarat Umum Kontrak/SPK;<o:p></o:p></span></p>
  	</td>
 </tr> 
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
  <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  	<td width=0 valign=top style='width:15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:12pt;
  mso-bidi-font-size:12.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  	</td>
    <td width=0 valign=top style='width:10pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left ><span style='font-size:14.0pt;font-family:"calibri","serif"'>f.</span></p>
    </td>
  	<td width=0 valign=top style='width:500;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Spesifikasi Teknis;<o:p></o:p></span></p>
  	</td>
 </tr> 
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
  <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  	<td width=0 valign=top style='width:15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:12pt;
  mso-bidi-font-size:12.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  	</td>
    <td width=0 valign=top style='width:10pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left ><span style='font-size:14.0pt;font-family:"calibri","serif"'>g.</span></p>
    </td>
  	<td width=0 valign=top style='width:500;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Gambar-gambar;<o:p></o:p></span></p>
  	</td>
 </tr> 
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
  <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  	<td width=0 valign=top style='width:15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:12pt;
  mso-bidi-font-size:12.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  	</td>
    <td width=0 valign=top style='width:10pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left ><span style='font-size:14.0pt;font-family:"calibri","serif"'>h.</span></p>
    </td>
  	<td width=0 valign=top style='width:500;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Daftar Kuantitas dan Harga;<o:p></o:p></span></p>
  	</td>
 </tr> 
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
  <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  	<td width=0 valign=top style='width:15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:12pt;
  mso-bidi-font-size:12.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  	</td>
    <td width=0 valign=top style='width:10pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left ><span style='font-size:14.0pt;font-family:"calibri","serif"'>i.</span></p>
    </td>
  	<td width=0 valign=top style='width:500;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Dokumen lain yang tercantum dalam SPK.<o:p></o:p></span></p>
  	</td>
 </tr> 
</table>

<p class=MsoNormal ><b><span style='font-size:14pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt; text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>b.<o:p></o:p></span></p>
  	</td>
    <td width=600 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Syarat-syarat Dokumen Perintah Kerja mengikat Kedua Belah Pihak sesuai ketentuan yang berlaku, kecuali diubah dengan kesepakatan bersama.</span></p>
    </td>
 </tr>
  </table>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>Pasal 3</span></b></p>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  	<p class=MsoNormal align=left ><span style='font-size:14pt;mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>a.<o:p></o:p></span></p>
  	</td>
    <td width=600 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>PIHAK KEDUA berkewajiban dan oleh karena itu berjanji serta mengikatkan diri untuk melaksanakan pekerjaannya itu dalam jangka waktu 90 (Sembilan Puluh) hari kalender setelah penandatanganan Surat Perintah Kerja ini, dihitung sejak diterbitkannya SPL dan SPMK dan selanjutnya PIHAK KEDUA akan mengerjakannya secara terus menerus sehingga seluruh pekerjaan tersebut dalam pasal 1 di atas selesai dan dapat diterima dengan baik oleh PIHAK KESATU.</span></p>
    </td>
 </tr>
  </table>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>  

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>b.<o:p></o:p></span></p>
  	</td>
    <td width=600 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Masa pemeliharaan pelaksanaan pekerjaan selama 180 (Seratus Delapan Puluh) hari kalender terhitung sejak penyerahan pertama.</span></p>
    </td>
 </tr>
  </table>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>Pasal 4</span></b></p>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>1.<o:p></o:p></span></p>
  	</td>
    <td width=600 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Harga Penawaran/ Hasil Negosiasi termasuk Pajak Pertambahan Nilai (PPn) diperoleh dari perkiraan kuantitas dan harga satuan kegiatan adalah Rp. 194.288.000,00 (Seratus Sembilan Puluh Empat Juta Dua Ratus Delapan Puluh Delapan Ribu Rupiah).</span></p>
    </td>
 </tr>
  </table>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>
  
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>2.<o:p></o:p></span></p>
  	</td>
    <td width=600 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Harga tersebut di atas akan dibayar oleh  PIHAK KESATU kepada PIHAK KEDUA atas dasar prosedur pembayaran sebagai Belanja Langsung oleh Bendahara Pengeluaran Dinas Bina Marga dan Pengairan Kabupaten Karawang yang dibebankan kepada  Kode Rekening: 1.03.01.01.30.130 disetujui oleh Pengguna Anggaran (PA) kepada PIHAK KEDUA melalui   No. Rekening : 0030010042901 AN CV. KARYA CIPTA MANDIRI pada BJB Cab. Karawang.</span></p>
    </td>
 </tr>
  </table>

<p class=MsoNormal ><b><span style='font-size:40.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

    					<!------------------BATAS CETAK HALAMAN HAL 4 ------------------>

<div class="container">
<div class="row-fluid">
<div class="block">
<div class=WordSection1>

<p class=MsoNormal ><b><span style='font-size:40.0pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<div class="container">
<div class="container-fluid">

<?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
  $row = mysql_fetch_array($query);
?>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>3.<o:p></o:p></span></p>
  	</td>
    <td width=600 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Sistem Pembayaran prestasi pekerjaan dilakukan dengan Penagihan PIHAK KEDUA atas dasar Berita Acara Prestasi Pekerjaan / Penyerahan Pekerjaan  / Berita Acara Masa Pemeliharaan selesai dengan dilampiri Berita Acara Pembayaran. Pembayaran Prestasi pekerjaan dilakukan dengan cara angsuran (termyn) dengan melihat sifat pekerjaan dan diatur sebagai berikut :</span></p>
    </td>
 </tr>
  </table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
  <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  	<td width=0 valign=top style='width:15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:12pt;
  mso-bidi-font-size:12.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  	</td>
    <td width=0 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left ><span style='font-size:14.0pt;font-family:"calibri","serif"'>a.</span></p>
    </td>
  	<td width=0 valign=top style='width:1200;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Sebesar  95% x Rp. 194.288.000,00   =  Rp. 184573600,00 ;  apabila prestasi fisik sekurang-kurangnya mencapai  100%<o:p></o:p></span></p>
  	</td>
 </tr> 
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
  <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  	<td width=0 valign=top style='width:15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:12pt;
  mso-bidi-font-size:12.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  	</td>
    <td width=0 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left ><span style='font-size:14.0pt;font-family:"calibri","serif"'>b.</span></p>
    </td>
  	<td width=0 valign=top style='width:1200;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Retensi sebesar 5% x Rp. 194.288.000,00 = Rp. 9714400,00 ; dibayar setelah masa pemeliharaan berakhir dengan baik dan diterima oleh PIHAK KESATU. Penyerahan kedua (bila pemeliharaan tidak melebihi tahun anggaran) dan atau retensi sebesar 5% dapat dibayarkan setelah PIHAK KEDUA menyerahkan jaminan pemeliharaan sebesar nilai retensi 5%  dari nilai SPK dari Bank Pemerintah kepada PIHAK KESATU.<o:p></o:p></span></p>
  	</td>
 </tr> 
</table>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>4.<o:p></o:p></span></p>
  	</td>
    <td width=600 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Pengajuan Berita Acara Pembayaran dalam Penagihan dapat dilakukan secara diangsur sesuai dengan yang tercantum dalam syarat-syarat khusus Kontrak/ Surat Perintah Kerja.</span></p>
    </td>
 </tr>
  </table>
<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"calibri","serif"'>tes&nbsp;</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>Pasal 5</span></b></p>

<p class=MsoNormal ><b><span style='font-size:14pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Setiap pemberitahuan dan komunikasi sehubungan dengan perintah kerja ini disampaikan ke alamat di bawah ini :</span></p>


<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  <td width=200 valign=top style='width:200pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:0pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>PIHAK KESATU<o:p></o:p></span></p>
  </td>
    <td width=10 valign=top style='width:10pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:0pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=600 valign=top style='width:600pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:0pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>DINAS BINA MARGA DAN PENGAIRAN KAB. KARAWANG</b><o:p></o:p></span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  <td width=200 valign=top style='width:200pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
    <td width=0 valign=top style='width:0pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=600 valign=top style='width:600pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal1 align=justify style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b> Jln. Kertabumi No. 31 Karawang
</b><o:p></o:p></span></p>
  </td>
  </tr>
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  <td width=200 valign=top style='width:200pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:0pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>PIHAK KEDUA<o:p></o:p></span></p>
  </td>
    <td width=10 valign=top style='width:10pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:0pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=600 valign=top style='width:600pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:0pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>CV. KARYA CIPTA MANDIRI</b><o:p></o:p></span></p>
  </td>
  </tr>
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  <td width=200 valign=top style='width:200pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:0pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
    <td width=10 valign=top style='width:10pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:0pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=600 valign=top style='width:600pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:0pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>Jl. Dahlia No.7 Guro II Karawang
</b><o:p></o:p></span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>Pasal 6</span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>Apabila PIHAK KEDUA menguasakan kepada pihak lain harus dibuat di hadapan Notaris.</span></p>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>Pasal 7</span></b></p>

<p class=MsoNormal ><b><span style='font-size:14pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>a.<o:p></o:p></span></p>
  	</td>
    <td width=600 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Apabila terjadi perselisihan dalam melaksanakan perintah kerja ini, maka para pihak akan berusaha untuk menyelesaikan secara musyawarah untuk mufakat.</span></p>
    </td>
 </tr>
  </table>
 
 <p class=MsoNormal ><b><span style='font-size:14pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>b.<o:p></o:p></span></p>
  	</td>
    <td width=600 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Apabila usaha perselisihan melalui musyawarah untuk mufakat tidak menghasilkan keputusan yang disepakati oleh kedua belah pihak maka dengan ini para pihak sepakat untuk menyelesaikan perselisihan melalui Panitera Kantor Pengadilan Negeri Karawang di Karawang.</span></p>
    </td>
 </tr>
  </table>

<p class=MsoNormal ><b><span style='font-size:14pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>c.<o:p></o:p></span></p>
  	</td>
    <td width=600 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Apabila PIHAK KEDUA tidak dapat menyelesaikan kegiatan, PIHAK KESATU dapat memutuskan Perintah Kerja ini secara sepihak, serta memberikan sanksi sesuai dengan peraturan yang berlaku.</span></p>
    </td>
 </tr>
  </table>
  
 <p class=MsoNormal ><b><span style='font-size:40.0pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

    					<!------------------BATAS CETAK HALAMAN HAL 5 ------------------>

<div class="container">
<div class="row-fluid">
<div class="block">
<div class=WordSection1>

<p class=MsoNormal ><b><span style='font-size:40.0pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<div class="container">
<div class="container-fluid">

<?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
  $row = mysql_fetch_array($query);
?>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>Pasal 8</span></b></p>

<p class=MsoNormal align=justify ><span style='font-size:14pt;font-family:"calibri","serif"'>Surat Perintah Kerja ini berlaku dan mengikat Para Pihak sejak ditandatanganinya Perjanjian Kerja ini dan Surat Perintah Mulai Kerja diterbitkan setelah Surat Perjanjian ini ditandatangani Para Pihak.</span></p>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=justify ><span style='font-size:14pt;font-family:"calibri","serif"'>Demikian Surat Perjanjian ini ditandatangani oleh para pihak dengan sebagaimana mestinya tanpa adanya paksaan dari pihak lain.</span></p>

<p class=MsoNormal ><b><span style='font-size:30.0pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:500pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>PIHAK KEDUA</b><o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>&nbsp;</b><o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:300pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>PIHAK KESATU</b><o:p></o:p></span></p>
  </td>
  </tr>
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:500pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>CV. KARYA CIPTA MANDIRI<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:350pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>KUASA PENGGUNA ANGGARAN<o:p></o:p></span></p>
  </td>
  </tr>
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:500pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:90pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Selaku<o:p></o:p></span></p>
  </td>
  </tr>
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:500pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:640pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>PEJABAT PEMBUAT KOMITMEN<o:p></o:p></span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal ><b><span style='font-size:60.0pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>DARIJAN HARISMAN</b><o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>H.WAWAN DISMAWAN,ST.,S.Sos.,MM</b><o:p></o:p></span></p>
  </td>
  </tr>
  <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal align=center ><span style="font-size:14.0pt;
  ">Direktur
      <o:p></o:p>
  </span></p>
  </td>
   <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style="font-size:14.0pt;
  ">NIP. 19590712 198211 1 002</span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal ><span style='font-size:30.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>MENGETAHUI</span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>KEPALA DINAS BINA MARGA DAN PENGAIRAN</span></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>KABUPATEN KARAWANG</span></p>

<p class=MsoNormal ><span style='font-size:60.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'><u>Drs. ACEP JAMHURI. M.Si</u></span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>Pembina Utama Muda</span></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>NIP. 19680419 198603 1 002</span></p>

<p class=MsoNormal ><span style='font-size:200.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

    					<!------------------BATAS CETAK HALAMAN HAL 6 ------------------>

<div class="container">
<div class="row-fluid">
<div class="block">
<div class=WordSection1>

<div class=WordSection1>
<p class=MsoNormal ><b><span style='font-size:40.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:14.0pt;
font-family:"Times New Roman","serif"'><img width=626 height=115 id="Picture 1"
src="print-list-inventory_files/logo_karawang.png"></span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:24.0pt;
font-family:"Times New Roman","serif"'><img width=639 height=4 src="SPK_files/image015.gif"></span></b></p>

<?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
  $row = mysql_fetch_array($query);
?>
   
<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'><u>SURAT PENYERAHAN LAPANGAN (SPL)</u></span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>No. 050.2/.........../30.130/PPK-3/2014</span></p>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>Berdasarkan Surat Perintah Kerja (SPK) Nomor : 056.2/............./30.130/3/BMP/2014 Tanggal 24 Maret 2014.</span></p>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=justify ><span style='font-size:14pt;font-family:"calibri","serif"'>Pada hari ini, Selasa  tanggal Dua Puluh Lima Bulan Maret Tahun Dua Ribu Empat Belas, Pejabat Pembuat Komitmen Dinas Bina Marga dan Pengairan Kabupaten Karawang Tahun Anggaran 2014, menyerahkan  kepada :</span></p>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=justify ><span style='font-size:14pt;font-family:"calibri","serif"'>Pada hari ini, Selasa  tanggal Dua Puluh Lima Bulan Maret Tahun Dua Ribu Empat Belas, Pejabat Pembuat Komitmen Dinas Bina Marga dan Pengairan Kabupaten Karawang Tahun Anggaran 2014, menyerahkan  kepada :</span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Nama<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>DARIJAN HARISMAN</b><o:p></o:p></span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Jabatan<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Direktur<o:p></o:p></span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Alamat<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Jl. Dahlia No.7 Guro II Karawang<o:p></o:p></span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>Sebagai Pelaksana Pekerjaan :</span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:250pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Nama Kegiatan<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>Pembangunan Infrastruktur Perdesaan Peningkatan Jalan Dusun Kamojing Timur Desa Kamojing Kecamatan Cikampek</b><o:p></o:p></span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:250pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Kontruksi<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Konstruksi Rigid (Beton)<o:p></o:p></span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:250pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Kode Rekening<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>1.03.01.01.30.130<o:p></o:p></span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:250pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Volume<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Pj = 198 M', Lb = 3,00 M'<o:p></o:p></span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>Dengan ketentuan  :</span></p>

<p class=MsoNormal align=justify ><span style='font-size:14pt;font-family:"calibri","serif"'>Setelah menerima Surat Penyerahan Lapangan (SPL) ini, lokasi pekerjaan menjadi tanggung jawab pelaksana kegiatan sampai berakhirnya masa pemeliharaan (serah terima kedua).</span></p>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:500pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:330pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>Karawang,    25 Maret 2014</b></</span></p>
  </td>
  </tr>
</table>

</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:500pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:340pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Yang Menyerahkan Lapangan</span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>Yang Menerima Lapangan</b><o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:0pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>&nbsp;</b><o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:550pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>KUASA PENGGUNA ANGGARAN</b><o:p></o:p></span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>CV. KARYA CIPTA MANDIRI<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:0pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Selaku<o:p></o:p></span></p>
  </td>
  </tr>
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:500pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:350pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>PEJABAT PEMBUAT KOMITMEN<o:p></o:p></span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal ><b><span style='font-size:60.0pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:550pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b><u>DARIJAN HARISMAN</u></b><o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b><u>H.WAWAN DISMAWAN,ST.,S.Sos.,MM</u></b><o:p></o:p></span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:500pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Direktur<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:0pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:450pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>NIP. 19590712 198211 1 002</span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal ><span style='font-size:30.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>MENGETAHUI</span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>KEPALA DINAS BINA MARGA DAN PENGAIRAN</span></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>KABUPATEN KARAWANG</span></p>

<p class=MsoNormal ><span style='font-size:60.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'><u>Drs. ACEP JAMHURI. M.Si</u></span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>Pembina Utama Muda</span></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>NIP. 19680419 198603 1 002</span></p>

<p class=MsoNormal ><span style='font-size:20.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=left ><span style='font-size:14pt;font-family:"calibri","serif"'><u>Tembusan :</u></span></p>

<p class=MsoNormal align=left ><span style='font-size:14pt;font-family:"calibri","serif"'>1. Yth. Bupati Karawang</span></p>

<p class=MsoNormal align=left ><span style='font-size:14pt;font-family:"calibri","serif"'>2. Yth. Kabag Pengendalian Program Setda Kab. Karawang</span></p>

<p class=MsoNormal align=left ><span style='font-size:14pt;font-family:"calibri","serif"'>3. Yth. Panitia/Pejabat Penerima Hasil Pekerjaan (PPHP)</span></p>

<p class=MsoNormal align=left ><span style='font-size:14pt;font-family:"calibri","serif"'>4. Yth. Pengawas Lapangan</span></p>

<p class=MsoNormal ><span style='font-size:40.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

    					<!------------------BATAS CETAK HALAMAN HAL 6 ------------------>

<div class="container">
<div class="row-fluid">
<div class="block">
<div class=WordSection1>

<div class=WordSection1>
<p class=MsoNormal ><b><span style='font-size:40.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:14.0pt;
font-family:"Times New Roman","serif"'><img width=626 height=115 id="Picture 1"
src="print-list-inventory_files/logo_karawang.png"></span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:24.0pt;
font-family:"Times New Roman","serif"'><img width=639 height=4 src="SPK_files/image015.gif"></span></b></p>

<?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
  $row = mysql_fetch_array($query);
?>
   
<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'><u>SURAT PERINTAH MULAI KERJA (SPMK)</u></span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>No. 050.2/.........../30.130/PPK-3/2014</span></p>

<p class=MsoNormal ><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=justify ><span style='font-size:14pt;font-family:"calibri","serif"'>Pada hari ini, Selasa tanggal Dua Puluh Lima Bulan Maret Tahun Dua Ribu Empat Belas, Kuasa Pengguna Anggaran Dinas Bina Marga dan Pengairan Kabupaten Karawang Tahun Anggaran 2014 memerintahkan kepada :</span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Nama Penyedia Jasa<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>CV. KARYA CIPTA MANDIRI</b><o:p></o:p></span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Alamat<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Jl. Dahlia No.7 Guro II Karawang<o:p></o:p></span></p>
  </td>
  </tr>
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>No. SPK<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>056.2/................/30.130/3/BMP/2014 tanggal 24 Maret 2014</span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal ><b><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>Untuk mulai pelaksanaan kegiatan : </span></p>

<p class=MsoNormal ><b><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Nama Kegiatan<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Pembangunan Infrastruktur Perdesaan Peningkatan Jalan Dusun Kamojing Timur Desa Kamojing Kecamatan Cikampek</span></p>
  </td>
  </tr>
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Konstruksi<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Konstruksi Rigid (Beton)</span></p>
  </td>
  </tr>
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Kode Rekening<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>1.03.01.01.30.130</span></p>
  </td>
  </tr>
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Volume<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Pj = 198 M', Lb = 3,00 M'</span></p>
  </td>
  </tr>
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Dana<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>APBD Tahun Anggaran 2014</span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Nilai Kontrak<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>Rp. 194.288.000,00</b></span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:250pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Terbilang</span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:600pt;padding:0in 5.4pt 0in 10pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Seratus Sembilan Puluh Empat Juta Dua Ratus Delapan Puluh Delapan Ribu Rupiah)</span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:200pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Waktu Pelaksanaan<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:10;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>90 (Sembilan Puluh) hari kalender</span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal ><b><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>Dengan ketentuan  :</span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>1.<o:p></o:p></span></p>
  	</td>
    <td width=600 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Pekerjaan harus dilaksanakan sesuai dengan kontrak.</span></p>
    </td>
 </tr>
  </table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>2.<o:p></o:p></span></p>
  	</td>
    <td width=600 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Setiap Jenis Material yang akan digunakan harus sesuai dengan sepesifikasi dan mendapat persetujuan dari Seksi Pengujian Material/Bahan dan Laboratorium Dinas Bina Marga dan Pengairan Kab. Karawang.</span></p>
    </td>
 </tr>
  </table>
  
  <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  	<td width=10 valign=top style='width:14pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>3.<o:p></o:p></span></p>
  	</td>
    <td width=600 valign=top style='width:600pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=justify ><span style='font-size:14.0pt;font-family:"calibri","serif"'>Setiap tahapan pekerjaan harus mendapat persetujuan dari Pejabat Pelaksana Teknis Kegiatan (PPTK) baik kualitas maupun kuantitas pekerjaan.</span></p>
    </td>
 </tr>
  </table>

<p class=MsoNormal ><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:500pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:300pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Dikeluarkan di : <b>Karawang</b></span></p>
  </td>
  </tr>
</table>

</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:500pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:300pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal1 align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><u>Tanggal    : <b>25 Maret 2015</b></u></span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal ><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:500pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:350pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=left style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Yang Mengeluarkan Perintah</span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:550pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>Yang Menerima Perintah</b><o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:0pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>&nbsp;</b><o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:550pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b>KUASA PENGGUNA ANGGARAN</b><o:p></o:p></span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>CV. KARYA CIPTA MANDIRI<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:0pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Selaku<o:p></o:p></span></p>
  </td>
  </tr>
</table>
<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:500pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:350pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>PEJABAT PEMBUAT KOMITMEN<o:p></o:p></span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal ><b><span style='font-size:60.0pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:550pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b><u>DARIJAN HARISMAN</u></b><o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:100pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:400pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:justify;line-height:normal'><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'><b><u>H.WAWAN DISMAWAN,ST.,S.Sos.,MM</u></b><o:p></o:p></span></p>
  </td>
  </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=0 valign=top style='width:500pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>Direktur<o:p></o:p></span></p>
  </td>
   <td width=0 valign=top style='width:0pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=0 valign=top style='width:450pt;padding:0in 0pt 0in 0pt'>
  <p class=MsoNormal align=center ><span style='font-size:14.0pt;
  mso-bidi-font-size:14.0pt;font-family:"calibri","serif"'>NIP. 19590712 198211 1 002</span></p>
  </td>
  </tr>
</table>

<p class=MsoNormal ><span style='font-size:30.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>MENGETAHUI</span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>KEPALA DINAS BINA MARGA DAN PENGAIRAN</span></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>KABUPATEN KARAWANG</span></p>

<p class=MsoNormal ><span style='font-size:60.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'><u>Drs. ACEP JAMHURI. M.Si</u></span></b></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>Pembina Utama Muda</span></p>

<p class=MsoNormal align=center ><span style='font-size:14pt;font-family:"calibri","serif"'>NIP. 19680419 198603 1 002</span></p>

<p class=MsoNormal ><span style='font-size:20.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=left ><span style='font-size:14pt;font-family:"calibri","serif"'><u>Tembusan :</u></span></p>

<p class=MsoNormal align=left ><span style='font-size:14pt;font-family:"calibri","serif"'>1. Yth. Bupati Karawang</span></p>

<p class=MsoNormal align=left ><span style='font-size:14pt;font-family:"calibri","serif"'>2. Yth. Kabag Pengendalian Program Setda Kab. Karawang</span></p>

<p class=MsoNormal align=left ><span style='font-size:14pt;font-family:"calibri","serif"'>3. Yth. Panitia/Pejabat Penerima Hasil Pekerjaan (PPHP)</span></p>

<p class=MsoNormal align=left ><span style='font-size:14pt;font-family:"calibri","serif"'>4. Yth. Pengawas Lapangan</span></p>

<p class=MsoNormal ><span style='font-size:40.0pt;font-family:"calibri","serif"'>&nbsp;</span></p>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
<?php include('script.php'); ?>
</html>