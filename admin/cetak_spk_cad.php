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
	font-size:12.0pt;
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


</body>
<?php include('script.php'); ?>
</html>