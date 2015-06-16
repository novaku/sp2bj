<div class="row-fluid">				  
   <a href="kode_dpa.php" class="btn btn-info" id="add" data-placement="right" title="Click untuk tambah Kode.Rek" ><i class="icon-plus-sign icon-large"></i> Tambah Data Kode Rek RKA SKPD</a>
   <script type="text/javascript">
	$(document).ready(function(){
	$('#add').tooltip('show');
	$('#add').tooltip('hide');
	});
	</script> 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Rubah Kode Rek RKA</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from rka_skpd where kode_kegiatan = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								
								 <!-- --------------------form ---------------------->						
								<form enctype="multipart/form-data" method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['id_rka']; ?>" name="id Rka Skpd" id="focusedInput" type="text" placeholder = "id Rka" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['jns_anggaran']; ?>" name="jns_anggaran" id="focusedInput" type="text" placeholder = "Jenis Anggaran" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['kode_kegiatan']; ?>" name="kode_kegiatan" id="focusedInput" type="text" placeholder = "kode_kegiatan" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['kat_program']; ?>" name="kat_program" id="focusedInput" type="text" placeholder = "Kategori Program" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['nama_kegiatan']; ?>" name="nama_kegiatan" id="focusedInput" type="text" placeholder = "Nama Kegiatan" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['sub_kegiatan']; ?>" name="sub_kegiatan" id="focusedInput" type="text" placeholder = "Sub Kegiatan" required>
                                          </div>
                                        </div>
											<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['lok_kegiatan']; ?>" name="lok_kegiatan" id="focusedInput" type="text" placeholder = "Lokasi Kegiatan" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['tar_kinerja']; ?>" name="tar_kinerja" id="focusedInput" type="text" placeholder = "Target Kinerja" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['blj_pegawai']; ?>" name="blj_pegawai" id="focusedInput" type="number" placeholder = "Belanja Pegawai (Rupiah)" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['brg_jasa']; ?>" name="brg_jasa" id="focusedInput" type="number" placeholder = "Barang Jasa (Rupiah)" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['modal']; ?>" name="modal (rupiah)" id="focusedInput" type="number" placeholder = "Modal Kegiatan (Rupiah)" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['file_duref']; ?>" name="file_duref" id="focusedInput" type="text" placeholder = "File Duref" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['file_dfd']; ?>" name="file_dfd" id="focusedInput" type="text" placeholder = "File DFD" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['file_fs']; ?>" name="file_fs" id="focusedInput" type="text" placeholder = "File FS" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['file_kak']; ?>" name="file_kak" id="focusedInput" type="text" placeholder = "File KAK" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['cek_duref']; ?>" name="cek_duref" id="focusedInput" type="text" placeholder = "Cek Upload Duref" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['cek_dfd']; ?>" name="cek_dfd" id="focusedInput" type="text" placeholder = "Cek Upload DFD" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['cek_fs']; ?>" name="cek_fs" id="focusedInput" type="text" placeholder = "Cek Upload FS" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['cek_kak']; ?>" name="cek_kak" id="focusedInput" type="text" placeholder = "Cek Upload KAK" required>
                                          </div>
                                        </div>

											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success" id="update" data-placement="right" title="Click untuk Update Data RKA"><i class="icon-save icon-large"> Rubah</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#update').tooltip('show');
	                                            $('#update').tooltip('hide');
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
if (isset($_POST['update'])){

$kode_kegiatan = $_POST['kode_kegiatan'];

mysql_query("update rka_skpd set kode_kegiatan = '$kode_kegiatan'  where kode_kegiatan = '$get_id' ")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit Kode RKA SKPD:$kode_kegiatan')")or die(mysql_error());	
?>
<script>
  window.location = "kode_dpa.php";
 $.jGrowl("Kode.Rek Kegiatan sukses diUpdate", { header: 'Kode RKA SKPD Update' });  
</script>
<?php
}
?>