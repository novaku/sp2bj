<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<meta name=Generator content="Microsoft Word 12 (filtered)">
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
<div class="block">
<div class=WordSection1>

<p class=MsoNormal><b><span style='font-size:25pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>
<p class=MsoNormal align=center ><b><span style='font-size:12.0pt;
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
uppercase'>24 Maret 2012</span></b></p>

<p class=MsoNormal ><b><span style='font-size:12pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>
<table width="508" height="442" border="0" align="center" padding="0">
  <tr>
    <td width="147" valign=top ><span style="font-size:12.0pt;
  "><b><span style="font-size:12.0pt;font-family:">SUMBER
DANA&nbsp;</span></b>
      <o:p></o:p>
    </span></td>
    <td width="10" valign=top ><span style="font-size: 12.0pt; mso-bidi-font-size: 12.0pt; font-family: "><b>:</b></span></td>
    <td width="337" valign="top"><b>ANGGARAN PENDAPATAN DAN BELANJA DAERAH (APBD) Kabupaten Karawang</b></td>
  </tr>
   <tr>
    <td width="147" valign=top ><span style="font-size:12.0pt;
  "><b><span style="font-size:12.0pt;font-family:">TAHUN
ANGGARAN</span></b>
      <o:p></o:p>
    </span></td>
    <td width="10" valign=top ><span style="font-size: 12.0pt; mso-bidi-font-size: 12.0pt; font-family: "><b>:</b></span></td>
    <td width="337" valign="top"><b>2012</b></td>
  </tr>
   <tr>
    <td width="147" valign=top ><span style="font-size:12.0pt;
  "><b><span style="font-size:12.0pt;font-family:">KEGIATAN&nbsp;</span></b>
      <o:p></o:p>
    </span></td>
    <td width="10" valign=top ><span style="font-size: 12.0pt; mso-bidi-font-size: 12.0pt; font-family: "><b>:</b></span></td>
    <td width="337" valign="top"><b>Pembangunan Infrastruktur Perdesaan Peningkatan Jalan Dusun Kamojing Timur Desa Kamojing Kecamatan Cikampek Pj = 198 M', Lb = 3,00 M' kecamataN Cikampek</b></td>
  </tr>
   <tr>
    <td width="147" valign=top ><span style="font-size:12.0pt;
  "><b><span style="font-size:12.0pt;font-family:">waktu pelaksanaan&nbsp;</span></b>
        <o:p></o:p>
    </span></td>
    <td width="10" valign=top ><span style="font-size: 12.0pt; mso-bidi-font-size: 12.0pt; font-family: "><b>:</b></span></td>
    <td width="337" valign="top"><span style="font-size: 12.0pt; mso-bidi-font-size: 12.0pt; font-family: "><b>90 (Sembilan Puluh) hari kalender 25 Maret 2012 s/d 22 Juni 2012</b></span></td>
  </tr>
   <tr>
    <td width="147" valign=top ><b><span style="font-size:12.0pt;font-family:">HARGA BORONGAN&nbsp;</span></b></td>
    <td width="10" valign=top ><span style="font-size: 12.0pt; mso-bidi-font-size: 12.0pt; font-family: "><b>:</b></span></td>
    <td width="337" valign="top"><span style="font-size: 12.0pt; mso-bidi-font-size: 12.0pt; font-family: "><b>Rp. 194.288.000,00 (Seratus Sembilan Puluh Empat Juta Dua Ratus Delapan Puluh Delapan Ribu Rupiah)</b></span></td>
  </tr>
  <tr>
   <td width="147" valign=top ><b><span style="font-size:12.0pt;font-family:">Penyedia jasa</span></b></td>
    <td width="10" valign=top ><span style="font-size: 12.0pt; mso-bidi-font-size: 12.0pt; font-family: "><b>:</b></span></td>
    <td width="337"><span style="font-size: 12.0pt; mso-bidi-font-size: 12.0pt; font-family: "><b>CV. KARYA CIPTA MANDIRI</b></span></td>
  </tr>
  <tr>
   <td width="147" valign=top ><b><span style="font-size:12.0pt;font-family:">ALAMAT&nbsp;</span></b></td>
    <td width="10" valign=top ><span style="font-size: 12.0pt; mso-bidi-font-size: 12.0pt; font-family: "><b>:</b></span></td>
    <td width="337"><span style="font-size: 12.0pt; mso-bidi-font-size: 12.0pt; font-family: "><b>Jl. Dahlia No.7 Guro II Karawang</b></span></td>
  </tr>
</table>
<p class=MsoNormal align=justify >&nbsp;</p>

<p class=MsoNormal ><b><span style='font-size:12pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=justify >&nbsp;</p>

<p class=MsoNormal ><b><span style='font-size:40.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

</div>
</div>
</div>
</div>
    					
                        <!------------------BATAS CETAK HALAMAN HAL 2------------------>

<div class="container">
<div class="row-fluid">
<div class="block">
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

<p class=MsoNormal align=center ><b><span style='font-size:14pt;font-family:"calibri","serif"'>Nomor : 056.2/........../30.130/3/BMP/2012</span></b></p>

<p class=MsoNormal ><b><span style='font-size:12pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>
<p class=MsoNormal align=center ><b><span style='font-size:12.0pt;font-family:"calibri","serif"'>ANTARA</span></b></p>
<p class=MsoNormal align=center ><b><span style='font-size:16pt;font-family:"calibri","serif"'>DINAS BINA MARGA DAN PENGAIRAN</span></b></p>
<p class=MsoNormal align=center ><b><span style='font-size:16pt;font-family:"calibri","serif"'>KABUPATEN KARAWANG</span></b></p>
<p class=MsoNormal align=center ><b><span style='font-size:12pt;font-family:"calibri","serif"'>DENGAN</span></b></p>
<p class=MsoNormal align=center ><b><span style='font-size:12pt;font-family:"calibri","serif"'>UNTUK</span></b></p>
<p class=MsoNormal ><b><span style='font-size:12pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>
<p class=MsoNormal align=center ><b><span style='font-size:12pt;font-family:"calibri","serif"'>PELAKSANAAN KEGIATAN PEMBANGUNAN INFRASTRUKTUR PERDESAAN PENINGKATAN JALAN DUSUN KAMOJING TIMUR DESA KAMOJING KECAMATAN CIKAMPEK Pj = 198 M', Lb = 3,00 M' DI KECAMATAN CIKAMPEK 
PADA KEGIATAN ANGGARAN PENDAPATAN BELANJA DAERAH (APBD) 
DINAS BINA MARGA DAN PENGAIRAN KABUPATEN KARAWANG TAHUN ANGGARAN 2012
</span></b></p>

<p class=MsoNormal align=center ><b><span style='font-size:24.0pt;
font-family:"calibri","serif"'><img width=625
height=7 src="SPK-web_files/image010.gif"></span></b></p>

<p class=MsoNormal align=justify ><span style='font-size:12pt;font-family:"calibri","serif"'>Pada hari ini,  Senin tanggal Dua Puluh Empat bulan Maret tahun Dua Ribu Empat Belas (24 Maret 2012), kami yang bertandatangan dibawah ini :</span></p>
<p class=MsoNormal align=justify >&nbsp;</p>
<table align="center" width="511" border="0">
  <tr>
    <td width="178" valign=top ><span style="font-size:12.0pt;
  ">H.WAWAN DISMAWAN,ST.,S.Sos.,MM
        <o:p></o:p>
    </span></td>
    <td width="4" valign=top ><span style="font-size: 12.0pt; mso-bidi-font-size: 12.0pt; font-family: ">:</span></td>
    <td width="371"><span class="MsoNormal" style=";
  text-align:justify;line-height:normal"><span style='font-size:12.0pt;
  mso-bidi-font-size:12.0pt;font-family:"calibri","serif"'>Kuasa Pengguna Anggaran (KPA) Selaku Pejabat Pembuat Komitmen di Lingkungan Dinas Bina Marga dan Pengairan Kabupaten Karawang Tahun Anggaran 2012, berdasarkan Surat Keputusan Bupati Karawang No. 903/KEP.876-Huk/2013 tanggal 30 Desember 2013 bertindak untuk dan atas nama Pemerintah Kabupaten Karawang yang berkedudukan di Jalan Kertabumi No. 31 Karawang selanjutnya disebut PIHAK KESATU.
          <o:p></o:p>
    </span></span></td>
  </tr>
  <tr>
    <td valign=top><span class="MsoNormal" style="margin-bottom:0in valign=top ;margin-bottom:.0001pt;
  text-align:left;line-height:normal"><span style='font-size:12.0pt;
  mso-bidi-font-size:12.0pt;font-family:"calibri","serif" valign=top '>DARIJAN HARISMAN
          <o:p></o:p>
    </span></span></td>
    <td valign=top ><span style="font-size: 12.0pt; mso-bidi-font-size: 12.0pt; font-family: ">:</span></td>
    <td><span style="font-size:12.0pt;
  ">Direktur CV. KARYA CIPTA MANDIRI  Dalam hal ini bertindak untuk dan atas nama CV. KARYA CIPTA MANDIRI  yang Anggaran Dasarnya dimuat dalam akta tanggal 17 Oktober 1996 Nomor 416 yang dibuat dihadapan Notaris Hj. ROSIDA SURYANA, SH. yang berkedudukan di Jl. Dahlia No.7 Guro II Karawang sebagai pelaksana kegiatan selanjutnya disebut PIHAK KEDUA.
        <o:p></o:p>
    </span></td>
  </tr>
</table>
<p class=MsoNormal align=justify >&nbsp;</p>

<p class=MsoNormal ><b><span style='font-size:12pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=justify ><span style='font-size:12pt;font-family:"calibri","serif"'>Bahwa para pihak telah sepakat untuk mengadakan Perjanjian Kerja dalam rangka pelaksanaan kegiatan Pembangunan Infrastruktur Perdesaan Peningkatan Jalan Dusun Kamojing Timur Desa Kamojing Kecamatan Cikampek Pj = 198 M', Lb = 3,00 M' di Kecamatan Cikampek.</span></p>

 <p class=MsoNormal ><b><span style='font-size:12pt;font-family:"calibri","serif"'>&nbsp;</span></b></p>

<p class=MsoNormal align=justify ><span style='font-size:12pt;font-family:"calibri","serif"'>PIHAK KEDUA bertindak sebagaimana tersebut adalah sebagai pelaksana dan bertanggung jawab atas pelaksanaan kegiatan Pembangunan Infrastruktur Perdesaan Peningkatan Jalan Dusun Kamojing Timur Desa Kamojing Kecamatan Cikampek Pj = 198 M', Lb = 3,00 M' di Kecamatan Cikampek.</span></p>

<p class=MsoNormal ><b><span style='font-size:40.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

</div>
</div>
</div>
</div>


    					<!------------------BATAS CETAK HALAMAN HAL 3 ------------------>

<div class="container">
<div class="row-fluid">
<div class="block">
<div class=WordSection1>

<p class=MsoNormal align=justify ><span style='font-size:12pt;font-family:"calibri","serif"'>
</span>Berhubung dengan segala sesuatu diatas para pihak sepakat untuk mengadakan Perjanjian Kerja sebagai berikut :</p>
<p class=MsoNormal align=justify ><span style='font-size:12pt;font-family:"calibri","serif"'>PIHAK KESATU, Berdasarkan Hasil Pengadaan Langsung dengan ini  memborongkan kepada PIHAK KEDUA, yang dengan ini menyatakan menerima kegiatan dari dan untuk kepentingan PIHAK KESATU atas pelaksanaan, penyelesaian, dan perbaikan kegiatan Pembangunan Infrastruktur Perdesaan Peningkatan Jalan Dusun Kamojing Timur Desa Kamojing Kecamatan Cikampek, Pj = 198 M' Lb = 3,00 M' di kecamatan Cikampek , sesuai dengan Surat Perintah Kerja ini dan lampirannya.</span></p>
<p class=MsoNormal align=center ><span style='font-size:12pt;font-family:"calibri","serif"'><b>Pasal 2</b></span></p>
<table class=MsoNormal align="left" width="447" border="0" cellpadding="0">
  <tr>
    <td width="20" valign=top ><span style="font-size:12.0pt;
  ">a.
        <o:p></o:p>
    </span></td>
        <td width="449">Dokumen Surat  Perintah Kerja yang ditentukan di bawah ini harus dibaca serta merupakan bagian  yang tidak terpisahkan dari Surat Perintah Kerja (SPK) yaitu :</td>
  </tr>
  <tr>
    <td width="20" valign=top ><span style="font-size:12.0pt;
  ">
        <o:p></o:p>
    </span></td>
        <td width="449">a.	Surat Perintah Kerja;</td>
  </tr>  
  <tr>
    <td width="20" valign=top ><span style="font-size:12.0pt;
  ">
        <o:p></o:p>
    </span></td>
        <td width="449">b.	Surat Penawaran;</td>
  </tr> 
    <tr>
    <td width="20" valign=top ><span style="font-size:12.0pt;
  ">
        <o:p></o:p>
    </span></td>
        <td width="449">c.	Addendum Dokumen Lelang (bila ada);</td>
  </tr> 
    <tr>
    <td width="20" valign=top ><span style="font-size:12.0pt;
  ">
        <o:p></o:p>
    </span></td>
        <td width="449">d.	Syarat-Syarat Khusus Kontrak/SPK;</td>
  </tr> 
    <tr>
    <td width="20" valign=top ><span style="font-size:12.0pt;
  ">
        <o:p></o:p>
    </span></td>
        <td width="449">e.	Syarat-Syarat Umum Kontrak/SPK;</td>
  </tr> 
    <tr>
    <td width="20" valign=top ><span style="font-size:12.0pt;
  ">
        <o:p></o:p>
    </span></td>
        <td width="449">f.	Spesifikasi Teknis;</td>
  </tr> 
    <tr>
    <td width="20" valign=top ><span style="font-size:12.0pt;
  ">
        <o:p></o:p>
    </span></td>
        <td width="449">g.	Gambar-gambar;</td>
  </tr> 
    <tr>
    <td width="20" valign=top ><span style="font-size:12.0pt;
  ">
        <o:p></o:p>
    </span></td>
        <td width="449">h.	Daftar Kuantitas dan Harga;</td>
  </tr> 
      <tr>
    <td width="20" valign=top ><span style="font-size:12.0pt;
  ">
        <o:p></o:p>
    </span></td>
        <td width="449">h.	Daftar Kuantitas dan Harga;</td>
  </tr>  
      <tr>
    <td width="20" valign=top ><span style="font-size:12.0pt;
  ">
        <o:p></o:p>
    </span></td>
        <td width="449">i.	Dokumen lain yang tercantum dalam SPK.</td>
  </tr>    
</table>

</div>
</div>
</div>
</div>


</body>
<?php include('script.php'); ?>
</html>