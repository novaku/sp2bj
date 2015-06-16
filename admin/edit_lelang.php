<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['kode_kegiatan']; ?>
	    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('newdevice_slidebar.php'); ?>
		
						<div class="span9" id="">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">EDIT DATA LELANG</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click untuk Kembali" href="data_lelang.php"><i class="icon-arrow-left icon-large"></i> Kembali</a></div>
                                        
<script type="text/javascript">
$(document).ready(function(){
$('#return').tooltip('show');
$('#return').tooltip('hide');
});
</script>    		                            
                               </div>
		                       <div class="block-content collapse in">									
									
		<?php
		$hasil = mysql_query("select * from data_lelang where kode_kegiatan = '$get_id'")or die(mysql_error());		
		if($row = mysql_fetch_row($hasil)){
		?>
 		                   <form class="form-horizontal" method="post">
 		                        		<!-- block form--> 
<div class="control-group">
<label class="control-label" for="inputPassword">Id Lelang :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[0]; ?>" name="id_lelang" id="focusedInput" placeholder="id_lelang" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Kode Kegiatan :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[1]; ?>" name="kode_kegiatan" id="focusedInput" placeholder="kode_kegiatan" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Kode Bidang :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[2]; ?>" name="kode_bidang" id="focusedInput" placeholder="kode_bidang" required>
		                                </div>
	                                    </div>
<div class="control-group">
<label class="control-label" for="inputPassword">Nama Perusahaan :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[3]; ?>" name="nama_prsh" id="focusedInput" placeholder="Nama Perusahaan" required>
		                                </div>
	                                    </div> 
                                        
<div class="control-group">
<label class="control-label" for="inputPassword">Nama Kegiatan :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[4]; ?>" name="nama_kegiatan" id="focusedInput" placeholder="Nama Kegiatan" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Undangan :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[5]; ?>" name="tgl_undangan" id="focusedInput" placeholder="tgl_undangan" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hps :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[6]; ?>" name="Hps" id="focusedInput" placeholder="Hps" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang Hps :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[7]; ?>" name="Terbilang_hps" id="focusedInput" placeholder="Terbilang_hps" required> 
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Bapp :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[8]; ?>" name="Hari_bapp" id="focusedInput" placeholder="Hari_bapp" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Bapp :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[9]; ?>" name="Tgl_bapp" id="focusedInput" placeholder="Tgl_bapp" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bulan Bapp :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[10]; ?>" name="Bln_bapp" id="focusedInput" placeholder="Bln_bapp" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Bapp :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[11]; ?>" name="Tgl_angka_bapp" id="focusedInput" placeholder="Tgl_angka_bapp" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Nilai Penawaran :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[12]; ?>" name="Nilai_penawaran" id="focusedInput" placeholder="Nilai_penawaran" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[13]; ?>" name="Terbilang" id="focusedInput" placeholder="Terbilang" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Uang Muka :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[14]; ?>" name="uang_muka" id="focusedInput" placeholder="Uang Muka" required>
		                                </div>
	                                    </div> 

<div class="control-group">
<label class="control-label" for="inputPassword">Hari Bahep :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[15]; ?>" name="Hari_bahep" id="focusedInput" placeholder="Hari_bahep" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Nahep :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[16]; ?>" name="Tgl_nahep" id="focusedInput" placeholder="Tgl_nahep" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bulan Bahep :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[17]; ?>" name="Bln_bahep" id="focusedInput" placeholder="Bln_bahep" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Bahep :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[18]; ?>" name="Tgl_angka_bahep" id="focusedInput" placeholder="Tgl_angka_bahep Format" required> 	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Undangan Kla Nego :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[19]; ?>" name="Tgl_und_kla_nego" id="focusedInput" placeholder="Tgl_und_kla_nego Format (dd-mm-yyyy)" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Kla Nego :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[20]; ?>" name="Hari_kla_nego" id="focusedInput" placeholder="Hari_kla_nego" required> 
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Kla Nego :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[21]; ?>" name="Tgl_kla_nego" id="focusedInput" placeholder="Tgl_kla_nego" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Bakn :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[22]; ?>" name="Hari_bakn" id="focusedInput" placeholder="Hari_bakn" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Bakn :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[23]; ?>" name="Tgl_bakn" id="focusedInput" placeholder="Tgl_bakn" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bulan Bakn :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[24]; ?>" name="Bln_bakn" id="focusedInput" placeholder="Bln_bakn" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Bakn :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[25]; ?>" name="Tgl_angka_bakn" id="focusedInput" placeholder="Tgl_angka_bakn" required> 	
		                                </div>
	                                    </div> 
<div class="control-group"><label class="control-label" for="inputPassword">Harga Nego :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[26]; ?>" name="Harga_nego" id="focusedInput" placeholder="Harga_nego" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang Nego :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[27]; ?>" name="Terbilang_nego" id="focusedInput" placeholder="Terbilang_nego" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Bahpl :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[28]; ?>" name="Hari_bahpl" id="focusedInput" placeholder="Hari_bahpl" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl Bahpl :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[29]; ?>" name="Tgl_bahpl" id="focusedInput" placeholder="Tgl_bahpl" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bln Bahpl :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[30]; ?>" name="Bln_bahpl" id="focusedInput" placeholder="Bln_bahpl" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Bahpl :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[31]; ?>" name="Tgl_angka_bahpl" id="focusedInput" placeholder="Tgl_angka_bahpl" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Bap Pemenang :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[32]; ?>" name="Hari_bap_pemenang" id="focusedInput" placeholder="Hari_bap_pemenang" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Bap Pemenang :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[33]; ?>" name="Tgl_bap_pemenang" id="focusedInput" placeholder="Tgl_bap_pemenang" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bulan Bap Pemenang :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[34]; ?>" name="Bln_bap_pemenang" id="focusedInput" placeholder="Bln_bap_pemenang" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Bap Pemenang :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[35]; ?>" name="Tgl_angka_bap_pemenang" id="focusedInput" placeholder="Tgl_angka_bap_pemenang" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Masa Pemel :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[36]; ?>" name="Masa_pemel" id="focusedInput" placeholder="Masa_pemel" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang Pemel :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[37]; ?>" name="Terbilang_pemel" id="focusedInput" placeholder="Terbilang_pemel" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Kontrak :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[38]; ?>" name="Hari_kontrak" id="focusedInput" placeholder="Hari_kontrak" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Kontrak :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[39]; ?>" name="Tgl_kontrak" id="focusedInput" placeholder="Tgl_kontrak Format (yyyy-mm-dd)" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bulan Kontrak :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[40]; ?>" name="Bln_kontrak" id="focusedInput" placeholder="Bln_kontrak" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Kontrak :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[41]; ?>" name="Tgl_angka_kontrak" id="focusedInput" placeholder="Tgl_angka_kontrak" required>	 
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Masa Pelaksanaan :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[42]; ?>" name="Masa_pelaksanaan" id="focusedInput" placeholder="Masa_pelaksanaan" required> 	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang Masa Pelaksanaan :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[43]; ?>" name="Terbilang_masa_pelaks" id="focusedInput" placeholder="Terbilang_masa_pelaks" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Waktu Pelaksanaan :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[44]; ?>" name="Waktu_pelaksanaan" id="focusedInput" placeholder="Waktu_pelaksanaan" required> 	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Baph :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[45]; ?>" name="Tgl_baph" id="focusedInput" placeholder="Tgl_baph Format (yyyy-mm-dd)" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Splspmk :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[46]; ?>" name="Hari_splspmk" id="focusedInput" placeholder="Hari_splspmk" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Splspmk :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[47]; ?>" name="tgl_splspmk" id="focusedInput" placeholder="tgl_splspmk" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bulan Splspmk :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[48]; ?>" name="bln_splspmk" id="focusedInput" placeholder="Bln_splspmk" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Splspmk :</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[49]; ?>" name="tgl_angka_splspmk" id="focusedInput" placeholder="tgl_angka_splspmk" required> 	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bank Garansi :</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[50]; ?>" name="bank_garansi" id="focusedInput" placeholder="bank_garansi" required>
		                                </div>
	                                    </div> 
                                   
	                        			<!-- block form-->
                                        <div class="control-group">
		                                <div class="controls">
										<button id="update" data-placement="right" title="Click to update" name="update" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Rubah</button> <a href="data_lelang.php" class="btn btn-info"  id="cancel" data-placement="right" title="Click untuk membatalkan data" ><i  class="btn btn-success"></i> Batal</a>
										</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#update').tooltip('show');
										$('#update').tooltip('hide');
										});
										</script>  
										</form>
		                              
									  <?php
if (isset($_POST['update'])){
$id_lelang = $_POST['id_lelang'];
$kode_kegiatan = $_POST['kode_kegiatan'];
$kode_bidang = $_POST['kode_bidang'];
$nama_prsh = $_POST['nama_prsh'];
$nama_kegiatan = $_POST['nama_kegiatan'];
$tgl_undangan = $_POST['tgl_undangan'];
$Hps = $_POST['Hps'];
$Terbilang_hps = $_POST['Terbilang_hps'];
$Hari_bapp = $_POST['Hari_bapp'];
$Tgl_bapp = $_POST['Tgl_bapp'];
$Bln_bapp = $_POST['Bln_bapp'];
$Tgl_angka_bapp = $_POST['Tgl_angka_bapp'];
$Nilai_penawaran = $_POST['Nilai_penawaran'];
$Terbilang = $_POST['Terbilang'];
$uang_muka = $_POST['uang_muka'];
$Hari_bahep = $_POST['Hari_bahep'];
$Tgl_nahep = $_POST['Tgl_nahep'];
$Bln_bahep = $_POST['Bln_bahep'];
$Tgl_angka_bahep = $_POST['Tgl_angka_bahep'];
$Tgl_und_kla_nego = $_POST['Tgl_und_kla_nego'];
$Hari_kla_nego = $_POST['Hari_kla_nego'];
$Tgl_kla_nego = $_POST['Tgl_kla_nego'];
$Hari_bakn = $_POST['Hari_bakn'];
$Tgl_bakn = $_POST['Tgl_bakn'];
$Bln_bakn = $_POST['Bln_bakn'];
$Tgl_angka_bakn = $_POST['Tgl_angka_bakn'];
$Harga_nego = $_POST['Harga_nego'];
$Terbilang_nego = $_POST['Terbilang_nego'];
$Hari_bahpl = $_POST['Hari_bahpl'];
$Tgl_bahpl = $_POST['Tgl_bahpl'];
$Bln_bahpl = $_POST['Bln_bahpl'];
$Tgl_angka_bahpl = $_POST['Tgl_angka_bahpl'];
$Hari_bap_pemenang = $_POST['Hari_bap_pemenang'];
$Tgl_bap_pemenang = $_POST['Tgl_bap_pemenang'];
$Bln_bap_pemenang = $_POST['Bln_bap_pemenang'];
$Tgl_angka_bap_pemenang = $_POST['Tgl_angka_bap_pemenang'];
$Masa_pemel = $_POST['Masa_pemel'];
$Terbilang_pemel = $_POST['Terbilang_pemel'];
$Hari_kontrak = $_POST['Hari_kontrak'];
$Tgl_kontrak = $_POST['Tgl_kontrak'];
$Bln_kontrak = $_POST['Bln_kontrak'];
$Tgl_angka_kontrak = $_POST['Tgl_angka_kontrak'];
$Masa_pelaksanaan = $_POST['Masa_pelaksanaan'];
$Terbilang_masa_pelaks = $_POST['Terbilang_masa_pelaks'];
$Waktu_pelaksanaan = $_POST['Waktu_pelaksanaan'];
$Tgl_baph = $_POST['Tgl_baph'];
$Hari_splspmk = $_POST['Hari_splspmk'];
$tgl_splspmk = $_POST['tgl_splspmk'];
$bln_splspmk = $_POST['bln_splspmk'];
$tgl_angka_splspmk = $_POST['tgl_angka_splspmk'];
$bank_garansi= $_POST['bank_garansi'];
										
$query = mysql_query("select * from data_lelang where kode_kegiatan = '$kode_kegiatan' ")or die(mysql_error());
$count = mysql_num_rows($query);

//if ($count > 0){ ?>
		                              <script>
alert('Data lelang Siap di UPDATE, Segera!');
//window.location = "data_lelang.php";
                                      </script>
		                              <?php
//}else{
mysql_query("update data_lelang set 
id_lelang='$id_lelang',
kode_kegiatan='$kode_kegiatan',
kode_bidang='$kode_bidang',
nama_prsh='$nama_prsh',
nama_kegiatan='$nama_kegiatan',
tgl_undangan='$tgl_undangan',
Hps='$Hps',
Terbilang_hps='$Terbilang_hps',
Hari_bapp='$Hari_bapp',
Tgl_bapp='$Tgl_bapp',
Bln_bapp='$Bln_bapp',
Tgl_angka_bapp='$Tgl_angka_bapp',
Nilai_penawaran='$Nilai_penawaran',
Terbilang='$Terbilang',
uang_muka='$uang_muka',
Hari_bahep='$Hari_bahep',
Tgl_nahep='$Tgl_nahep',
Bln_bahep='$Bln_bahep',
Tgl_angka_bahep='$Tgl_angka_bahep',
Tgl_und_kla_nego='$Tgl_und_kla_nego',
Hari_kla_nego='$Hari_kla_nego',
Tgl_kla_nego='$Tgl_kla_nego',
Hari_bakn='$Hari_bakn',
Tgl_bakn='$Tgl_bakn',
Bln_bakn='$Bln_bakn',
Tgl_angka_bakn='$Tgl_angka_bakn',
Harga_nego='$Harga_nego',
Terbilang_nego='$Terbilang_nego',
Hari_bahpl='$Hari_bahpl',
Tgl_bahpl='$Tgl_bahpl',
Bln_bahpl='$Bln_bahpl',
Tgl_angka_bahpl='$Tgl_angka_bahpl',
Hari_bap_pemenang='$Hari_bap_pemenang',
Tgl_bap_pemenang='$Tgl_bap_pemenang',
Bln_bap_pemenang='$Bln_bap_pemenang',
Tgl_angka_bap_pemenang='$Tgl_angka_bap_pemenang',
Masa_pemel='$Masa_pemel',
Terbilang_pemel='$Terbilang_pemel',
Hari_kontrak='$Hari_kontrak',
Tgl_kontrak='$Tgl_kontrak',
Bln_kontrak='$Bln_kontrak',
Tgl_angka_kontrak='$Tgl_angka_kontrak',
Masa_pelaksanaan='$Masa_pelaksanaan',
Terbilang_masa_pelaks='$Terbilang_masa_pelaks',
Waktu_pelaksanaan='$Waktu_pelaksanaan',
Tgl_baph='$Tgl_baph',
Hari_splspmk='$Hari_splspmk',
tgl_splspmk='$tgl_splspmk',
bln_splspmk='$bln_splspmk',
tgl_angka_splspmk='$tgl_angka_splspmk',
bank_garansi='$bank_garansi'
where kode_kegiatan = '$get_id' ")or die(mysql_error());	
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Pengupdate-an Data Lelang dgn id:'$get_id')")or die(mysql_error());									
?>	

		                              <script>
alert('Data Lelang yakin mau di UPDATE!');
//window.location = "data_lelang.php";
//$.jGrowl("Data lelang Sukses diUPDATE", { header: 'Data diUPDATE' });
                                      </script>
		                              <?php
}
}
		
?>

	                              </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
</body>
