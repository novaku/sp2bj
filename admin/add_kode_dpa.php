  <div class="row-fluid">
  				<?php	
	             $hasil_rka=mysql_query("select * from rka_skpd")or die(mysql_error());
	             $count = mysql_num_rows($hasil_rka);
                 $urut_idrka=$count+1;
				 ?>	 

                        <!-- block -->
                                                          
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Tambah RKA SKPD</i></div>
                            			<script type="text/javascript">
										$(document).ready(function(){
										$('#return').tooltip('show');
										$('#return').tooltip('hide');
										});
										</script> 
                            
                            </div>
                            
                            <div class="block-content collapse in">
                                <div class="span2">
								
								 <!--------------------form------------------->
								<form enctype="multipart/form-data" method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input type="text" size="12" value=<?php echo $urut_idrka?> readonly name="id_rka" id="focusedInput" required>
                                          </div>
                                        </div>
                                        
			 							<div class="control-group">
										<div class="controls">
			  								<select name="jns_anggaran" class="" required/>
			  							<option>Jenis Anggaran</option>
										<option value="Murni">Anggaran Murni</option>
										<option value="Perubahan">Anggaran Perubahan</option>
			  							</select>
		      							</div>
	          							</div>
                                        
 										<div class="control-group">
                                          <div class="controls">
                                            <input type="text" size="18" value="1.03.1.03.1." name="kode_kegiatan"  required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="kat_program" id="focusedInput" type="text" placeholder = "Kategori Kegiatan" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="nama_kegiatan" id="focusedInput" type="text" placeholder = "Nama Kegiatan" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="sub_kegiatan" id="focusedInput" type="text" placeholder = "Sub Kegiatan/ Blog Grand" required>
                                          </div>
                                        </div>
			 							<div class="control-group">
										<div class="controls">
			  								<select name="lok_kegiatan" class="" required/>
			  							<option>&larr; Lokasi Kegiatan &rarr;</option>
			  								<?php
											$rka_query = mysql_query("select * from rka_skpd")or die(mysql_error());
											while($row = mysql_fetch_array($rka_query)){			
											?>
			  							<option><?php echo $row['lok_kegiatan']; ?></option>
			  									<?php } ?>
			  							</select>
		      							</div>
	          							</div>

										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="tar_kinerja" id="focusedInput" type="text" placeholder = "Target Kinerja" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="panjang" id="focusedInput" type="float" placeholder = "Panjang (m)" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="lebar" id="focusedInput" type="float" placeholder = "Lebar (m)" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="tinggi" id="focusedInput" type="float" placeholder = "Tinggi (m)" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="diameter" id="focusedInput" type="float" placeholder = "Diameter (cm)" required>
                                          </div>
                                        </div>
                                        
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="blj_pegawai" id="focusedInput" type="number"  placeholder = "Belanja Pegawai (Rupiah)" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="brg_jasa" id="focusedInput" type="number"  placeholder = "Barang dan Jasa (Rupiah)" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="modal" id="focusedInput" type="number" placeholder = "Modal (Rupiah)" required>
                                          </div>
                                        </div>
                                        
										<div class="control-group">
                                          <div class="controls">
                                            <label class="control-label" for="inputPassword">DUREF:</label>
                                            <input class="input focused" name="duref" input type="file" id='gambar'>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <label class="control-label" for="inputPassword">DFD:</label>
                                            <input class="input focused" name="dfd" input type="file" id='gambar'>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <label class="control-label" for="inputPassword">FS:</label>
                                            <input class="input focused" name="fs" input type="file" id='gambar'>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <label class="control-label" for="inputPassword">KAK:</label>
                                            <input class="input focused" name="kak" input type="file" id='gambar'>
                                          </div>
                                        </div>

			 							<div class="control-group">
										<div class="controls">
			  							<select name="cek_duref" class="" required/>
			  								<option>Cek File Duref</option>
											<option value="Sudah">Sudah di Upload</option>
											<option value="Belum">Belum di Upload</option>
			  							</select>
		      							</div>
	          							</div>
                                        
			 							<div class="control-group">
										<div class="controls">
			  							<select name="cek_dfd" class="" required/>
			  								<option>Cek File DFD</option>
											<option value="Sudah">Sudah di Upload</option>
											<option value="Belum">Belum di Upload</option>
			  							</select>
		      							</div>
	          							</div>
                                        
			 							<div class="control-group">
										<div class="controls">
			  							<select name="cek_fs" class="" required/>
			  								<option>Cek File FS</option>
											<option value="Sudah">Sudah di Upload</option>
											<option value="Belum">Belum di Upload</option>
			  							</select>
		      							</div>
	          							</div>
                                        
			 							<div class="control-group">
										<div class="controls">
			  							<select name="cek_kak" class="" required/>
			  								<option>Cek File KAK</option>
											<option value="Sudah">Sudah di Upload</option>
											<option value="Belum">Belum di Upload</option>
			  							</select>
		      							</div>
	          							</div>
                                        
								 <!--------------------form------------------->										
										<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info" id="save" data-placement="right" title="Click untuk Simpan"><i class="icon-plus-sign icon-large"> Simpan</i></button>
												<script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
                            
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>	

					<?php
if (isset($_POST['save'])){
$id_rka = $_POST['id_rka'];	
$jns_anggaran = $_POST['jns_anggaran'];	
$kode_kegiatan = $_POST['kode_kegiatan'];
$kat_program = $_POST['kat_program'];
$nama_kegiatan = $_POST['nama_kegiatan'];
$sub_kegiatan = $_POST['sub_kegiatan'];
$lok_kegiatan = $_POST['lok_kegiatan'];
$tar_kinerja = $_POST['tar_kinerja'];
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];
$tinggi = $_POST['tinggi'];
$diameter = $_POST['diameter'];
$blj_pegawai = $_POST['blj_pegawai'];
$brg_jasa = $_POST['brg_jasa'];
$modal = $_POST['modal'];
$file_duref = $_FILES['duref']['name'];
$file_dfd = $_FILES['dfd']['name'];
$file_fs = $_FILES['fs']['name'];
$file_kak = $_FILES['kak']['name'];
$cek_duref = $_POST['cek_duref']; 
$cek_dfd = $_POST['cek_dfd']; 
$cek_fs = $_POST['cek_fs']; 
$cek_kak = $_POST['cek_kak']; 

//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan

$hasil = mysql_query("select * from rka_skpd where kode_kegiatan = '$kode_kegiatan'")or die(mysql_error());
$count = mysql_num_rows($hasil);

if ($count > 0){ ?>
<script>
alert('Kode DPA ini sdh ada Silahkan Isi dengan benar!');
window.location = "kode_dpa.php";
</script>

<?php
}else{
		$uploaddir1='uploads/duref/';
		$uploaddir2='uploads/dfd/';
		$uploaddir3='uploads/fs/';
		$uploaddir4='uploads/kak/';
		$alamatfile1=$uploaddir1.$file_duref;
		$alamatfile2=$uploaddir2.$file_dfd;
		$alamatfile3=$uploaddir3.$file_fs;
		$alamatfile4=$uploaddir4.$file_kak;
						
		//periksa jika proses upload berjalan sukses
		move_uploaded_file($_FILES['duref']['tmp_name'],$alamatfile1);
		move_uploaded_file($_FILES['dfd']['tmp_name'],$alamatfile2);
		move_uploaded_file($_FILES['fs']['tmp_name'],$alamatfile3);
		move_uploaded_file($_FILES['kak']['tmp_name'],$alamatfile4);

mysql_query("insert into rka_skpd values('$id_rka','$jns_anggaran','$kode_kegiatan','$kat_program','$nama_kegiatan','$sub_kegiatan','$lok_kegiatan','$tar_kinerja','$panjang','$lebar','$tinggi','$diameter','$blj_pegawai','$brg_jasa','$modal','$file_duref','$file_dfd','$file_fs','$file_kak','$cek_duref','$cek_dfd','$cek_fs','$cek_kak')")or die(mysql_error());
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Menambah Data RKA SKPD: $kode_kegiatan')")or die(mysql_error());
?>
<script>
window.location = "kode_dpa.php";
$.jGrowl("Kode.Rek Kegiatan telah disimpan", { header: 'Kode RKA SKPD Simpan' });
</script>
<?php
}
}
?>