<?php include('header.php');?>
<?php include('session.php');?>
<?php $get_id = $_GET['kode_kegiatan];?>
	    <body>
		<?php include('navbar.php');?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
						<div class="span9" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">DELETE DATA LELANG</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="data_lelang.php"><i class="icon-arrow-left icon-large"></i> Kembali</a></div>
<script type="text/javascript">
	$(document).ready(function(){
	$('#return').tooltip('show');
	$('#return').tooltip('hide');
	});
</script>    		                            
                               </div>
		                       <div class="block-content collapse in">									

							<?php include('toolttip_edit_delete.php'); ?>									
		<?php
		$hasil = mysql_query("select * from data_lelang where id_lelang = '$get_id'")or die(mysql_error());		
		if($row = mysql_fetch_row($hasil)){
		?>
 
		                         	<form class="form-horizontal" method="post">
												<!-- block form-->

<div class="control-group">
<label class="control-label" for="inputPassword">id_lelang</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[0]; ?>" name="id_lelang" id="focusedInput" placeholder="id_lelang" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Kegiatan</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[3]; ?>" name="Kegiatan" id="focusedInput" placeholder="Kegiatan" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_undangan</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[4]; ?>" name="Tgl_undangan" id="focusedInput" placeholder="Tgl_undangan Format (yyyy-mm-dd)" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hps</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[5]; ?>" name="Hps" id="focusedInput" placeholder="Hps" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang_hps</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[6]; ?>" name="Terbilang_hps" id="focusedInput" placeholder="Terbilang_hps" required> 
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari_bapp</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[7]; ?>" name="Hari_bapp" id="focusedInput" placeholder="Hari_bapp" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_bapp</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[8]; ?>" name="Tgl_bapp" id="focusedInput" placeholder="Tgl_bapp Format (yyyy-mm-dd)" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bln_bapp</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[9]; ?>" name="Bln_bapp" id="focusedInput" placeholder="Bln_bapp" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_angka_bapp</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[10]; ?>" name="Tgl_angka_bapp" id="focusedInput" placeholder="Tgl_angka_bapp Format (yyyy-mm-dd)" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Nilai_penawaran</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[11]; ?>" name="Nilai_penawaran" id="focusedInput" placeholder="Nilai_penawaran" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[12]; ?>" name="Terbilang" id="focusedInput" placeholder="Terbilang" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari_bahep</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[13]; ?>" name="Hari_bahep" id="focusedInput" placeholder="Hari_bahep" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_nahep</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[14]; ?>" name="Tgl_nahep" id="focusedInput" placeholder="Tgl_nahep Format (yyyy-mm-dd)" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bln_bahep</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[15]; ?>" name="Bln_bahep" id="focusedInput" placeholder="Bln_bahep" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_angka_bahep</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[16]; ?>" name="Tgl_angka_bahep" id="focusedInput" placeholder="Tgl_angka_bahep Format (yyyy-mm-dd)" required> 	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_und_kla_nego</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[17]; ?>" name="Tgl_und_kla_nego" id="focusedInput" placeholder="Tgl_und_kla_nego Format (yyyy-mm-dd)" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari_kla_nego</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[18]; ?>" name="Hari_kla_nego" id="focusedInput" placeholder="Hari_kla_nego" required> 
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_kla_nego</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[19]; ?>" name="Tgl_kla_nego" id="focusedInput" placeholder="Tgl_kla_nego Format (yyyy-mm-dd)" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari_bakn</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[20]; ?>" name="Hari_bakn" id="focusedInput" placeholder="Hari_bakn" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_bakn</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[21]; ?>" name="Tgl_bakn" id="focusedInput" placeholder="Tgl_bakn Format (yyyy-mm-dd)" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bln_bakn</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[22]; ?>" name="Bln_bakn" id="focusedInput" placeholder="Bln_bakn" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_angka_bakn</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[23]; ?>" name="Tgl_angka_bakn" id="focusedInput" placeholder="Tgl_angka_bakn Format (yyyy-mm-dd)" required> 	
		                                </div>
	                                    </div> 
<div class="control-group"><label class="control-label" for="inputPassword">Harga_nego</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[24]; ?>" name="Harga_nego" id="focusedInput" placeholder="Harga_nego" required>
		                                </div>
	                                    </div> 

<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang_nego</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[25]; ?>" name="Terbilang_nego" id="focusedInput" placeholder="Terbilang_nego" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari_bahpl</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[26]; ?>" name="Hari_bahpl" id="focusedInput" placeholder="Hari_bahpl" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_bahpl</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[27]; ?>" name="Tgl_bahpl" id="focusedInput" placeholder="Tgl_bahpl Format (yyyy-mm-dd)" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bln_bahpl</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[28]; ?>" name="Bln_bahpl" id="focusedInput" placeholder="Bln_bahpl" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_angka_bahpl</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[29]; ?>" name="Tgl_angka_bahpl" id="focusedInput" placeholder="Tgl_angka_bahpl Format (yyyy-mm-dd)" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari_bap_pemenang</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[30]; ?>" name="Hari_bap_pemenang" id="focusedInput" placeholder="Hari_bap_pemenang" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_bap_pemenang</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[31]; ?>" name="Tgl_bap_pemenang" id="focusedInput" placeholder="Tgl_bap_pemenang Format (yyyy-mm-dd)" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bln_bap_pemenang</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[32]; ?>" name="Bln_bap_pemenang" id="focusedInput" placeholder="Bln_bap_pemenang" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_angka_bap_pemenang</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[33]; ?>" name="Tgl_angka_bap_pemenang" id="focusedInput" placeholder="Tgl_angka_bap_pemenang Format (yyyy-mm-dd)" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Masa_pemel</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[34]; ?>" name="Masa_pemel" id="focusedInput" placeholder="Masa_pemel" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang_pemel</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[35]; ?>" name="Terbilang_pemel" id="focusedInput" placeholder="Terbilang_pemel" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Pj</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[36]; ?>" name="Pj" id="focusedInput" placeholder="Pj" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Lb</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[37]; ?>" name="Lb" id="focusedInput" placeholder="Lb" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari_kontrak</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[38]; ?>" name="Hari_kontrak" id="focusedInput" placeholder="Hari_kontrak" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_kontrak</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[39]; ?>" name="Tgl_kontrak" id="focusedInput" placeholder="Tgl_kontrak Format (yyyy-mm-dd)" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bln_kontrak</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[40]; ?>" name="Bln_kontrak" id="focusedInput" placeholder="Bln_kontrak" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_angka_kontrak</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[41]; ?>" name="Tgl_angka_kontrak" id="focusedInput" placeholder="Tgl_angka_kontrak Format (yyyy-mm-dd)" required>	 
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Masa_pelaksanaan</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[42]; ?>" name="Masa_pelaksanaan" id="focusedInput" placeholder="Masa_pelaksanaan" required> 	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang_masa_pelaks</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[43]; ?>" name="Terbilang_masa_pelaks" id="focusedInput" placeholder="Terbilang_masa_pelaks" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Waktu_pelaksanaan</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[44]; ?>" name="Waktu_pelaksanaan" id="focusedInput" placeholder="Waktu_pelaksanaan" required> 	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_baph</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[45]; ?>" name="Tgl_baph" id="focusedInput" placeholder="Tgl_baph Format (yyyy-mm-dd)" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari_splspmk</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[46]; ?>" name="Hari_splspmk" id="focusedInput" placeholder="Hari_splspmk" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_splspmk</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[47]; ?>" name="Tgl_splspmk" id="focusedInput" placeholder="Tgl_splspmk Format (yyyy-mm-dd)" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bln_splspmk</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[48]; ?>" name="Bln_splspmk" id="focusedInput" placeholder="Bln_splspmk" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tgl_angka_splspmk</label>
<div class="controls">
<input type="date" class="span8" value="<?php echo $row[49]; ?>" name="Tgl_angka_splspmk" id="focusedInput" placeholder="Tgl_angka_splspmk Format (yyyy-mm-dd)" required> 	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Kpa_ppk</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[50]; ?>" name="Kpa_ppk" id="focusedInput" placeholder="Kpa_ppk" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Nip_kpa_ppk</label>
<div class="controls">
<input type="text" class="span8" value="<?php echo $row[51]; ?>" name="Nip_kpa_ppk" id="focusedInput" placeholder="Nip_kpa_ppk" required>		                        </div>
	                                    </div>
                                        <div class="control-group">
		                                  <div class="controls">
		                                    <button name="delete" id="delete" data-placement="right" title="Click disini untuk menghapus data anda." class="btn btn-danger"><i class="icon-trash icon-large"></i> Hapus</button> <a href="data_lelang.php" class="btn btn-info"  id="cancel" data-placement="right" title="Click untuk membatalkan data" ><i  class="btn btn-success"></i> Batal</a>
	                                      </div>
	                                    </div> 
		                                
												<!-- block form-->
										<script type="text/javascript">
										$(document).ready(function(){
										$('#save').tooltip('show');
										$('#save').tooltip('hide');
										});
										</script>
	                                </form>
		                              <?php

if (isset($_POST['delete'])){
$id_lelang = $_POST['id_lelang'];
$Kegiatan = $_POST['Kegiatan'];
$Tgl_undangan = $_POST['Tgl_undangan'];
$Hps = $_POST['Hps'];
$Terbilang_hps = $_POST['Terbilang_hps'];
$Hari_bapp = $_POST['Hari_bapp'];
$Tgl_bapp = $_POST['Tgl_bapp'];
$Bln_bapp = $_POST['Bln_bapp'];
$Tgl_angka_bapp = $_POST['Tgl_angka_bapp'];
$Nilai_penawaran = $_POST['Nilai_penawaran'];
$Terbilang = $_POST['Terbilang'];
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
$Pj = $_POST['Pj'];
$Lb = $_POST['Lb'];
$Hari_kontrak = $_POST['Hari_kontrak'];
$Tgl_kontrak = $_POST['Tgl_kontrak'];
$Bln_kontrak = $_POST['Bln_kontrak'];
$Tgl_angka_kontrak = $_POST['Tgl_angka_kontrak'];
$Masa_pelaksanaan = $_POST['Masa_pelaksanaan'];
$Terbilang_masa_pelaks = $_POST['Terbilang_masa_pelaks'];
$Waktu_pelaksanaan = $_POST['Waktu_pelaksanaan'];
$Tgl_baph = $_POST['Tgl_baph'];
$Hari_splspmk = $_POST['Hari_splspmk'];
$Tgl_splspmk = $_POST['Tgl_splspmk'];
$Bln_splspmk = $_POST['Bln_splspmk'];
$Tgl_angka_splspmk = $_POST['Tgl_angka_splspmk'];
$Kpa_ppk= $_POST['Kpa_ppk'];
$Nip_kpa_ppk = $_POST['Nip_kpa_ppk'];
										
$query = mysql_query("select * from data_lelang where id_lelang = '$id_lelang' ")or die(mysql_error());
$count = mysql_num_rows($query);

mysql_query("DELETE FROM data_lelang where id_lelang = '$get_id'")or die(mysql_error());

if ($count > 0){ ?>
		                              <script>
alert('Yakin Data lelang akan diHapus! Jika ya clik Oke');
//window.location = "data_lelang.php";
                                      </script>
		                            <?php
//}else{
mysql_query("DELETE FROM data_lelang where id_lelang = '$get_id'")or die(mysql_error());	
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Penghapusan Data lelang dgn id $id_lelang')")or die(mysql_error()); 										
									?>
		                              <script>
window.location = "data_lelang.php";
$.jGrowl("Data lelang Sukses dihapus", { header: 'Data dihapus' });
                                      </script>
		                              <?php
}
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