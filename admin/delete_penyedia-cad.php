<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
	    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">DELETE DATA PENYEDIA</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="all_penyedia.php"><i class="icon-arrow-left icon-large"></i> Kembali</a></div>
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
		$hasil = mysql_query("select * from penyedia where id_penyedia = '$get_id'")or die(mysql_error());		
		if($row = mysql_fetch_row($hasil)){
		?>
 
		                   <form class="form-horizontal" method="post">
		                        				<!-- Form Keluaran -->

		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Id Penyedia</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[0]; ?>" name="id_penyedia" id="inputPassword" placeholder="id_penyedia" required>
		                                  </div>
	                                    </div>                                        
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Tanggal Kontrak</label>
		                                  <div class="controls">
		                                    <input type="date" class="span2" value="<?php echo $row[1]; ?>" name="tgl_kontrak" id="inputPassword" placeholder="id_penyedia" required>
		                                  </div>
	                                    </div>                                        

		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Nama Perusahaan</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[2]; ?>" name="nama_prsh" id="inputPassword" placeholder="nama_prsh" required>
		                                  </div>
	                                    </div>
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Nama Direktur</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[3]; ?>" name="nama_direktur" id="inputPassword" placeholder="Nama Direktur" required>
	                                      </div>
	                                    </div>
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Alamat</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[4]; ?>" name="alamat" id="inputPassword" placeholder="Alamat" required>
	                                      </div>
	                                    </div>
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Kecamatan</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[5]; ?>" name="kecamatan" id="inputPassword" placeholder="Kecamatan" required>
	                                      </div>
	                                    </div>
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Kodepos</label>
		                                  <div class="controls">
		                                    <input type="text" class="span2" value="<?php echo $row[6]; ?>" name="kodepos" id="inputPassword" placeholder="Kodepos" required>
	                                      </div>
	                                    </div>
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">No. Telephone</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[7]; ?>" name="no_telp" id="inputPassword" placeholder="no_telp" required>
	                                      </div>
	                                    </div>
                                            
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">No. Handphone</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[8]; ?>" name="no_hp" id="inputPassword" placeholder="no_hp" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Email</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[9]; ?>" name="email" id="inputPassword" placeholder="email" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Lingkup Kerja</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[10]; ?>" name="lingkup_kerja" id="inputPassword" placeholder="lingkup kerja" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">NPWP</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[11]; ?>" name="npwp" id="inputPassword" placeholder="Npwp" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Tanggal Akte</label>
		                                  <div class="controls">
		                                    <input type="date" class="span8" value="<?php echo $row[12]; ?>" name="tgl_akte" id="inputPassword" placeholder="Tanggal Akte" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Nomor Akte</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[13]; ?>" name="no_akte" id="inputPassword" placeholder="Nomor Akte" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Nama Bank</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[14]; ?>" name="bank" id="inputPassword" placeholder="Bank" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">No.Rekening Perusahaan</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[15]; ?>" name="norek" id="inputPassword" placeholder="No. Rekening" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Nama Notaris</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" value="<?php echo $row[16]; ?>" name="notaris" id="inputPassword" placeholder="Nama Notaris" required>
	                                      </div>
	                                    </div>    
                                                                                
		                        				<!-- Form Keluaran -->                       
		                                <div class="control-group">
		                                  <div class="controls">
		                                    <button name="delete" id="delete" data-placement="right" title="Click disini untuk menghapus data anda." class="btn btn-danger"><i class="icon-trash icon-large"></i> Hapus</button>
	                                      </div>
	                                    </div>
		                                <script type="text/javascript">
										$(document).ready(function(){
										$('#save').tooltip('show');
										$('#save').tooltip('hide');
										});
										</script>
	                                </form>
		                              <?php
if (isset($_POST['delete'])){
$id_penyedia = $_POST['id_penyedia'];
$tgl_kontrak = $_POST['tgl_kontrak'];
$nama_prsh = $_POST['nama_prsh'];
$nama_direktur = $_POST['nama_direktur'];
$alamat = $_POST['alamat'];
$kecamatan = $_POST['kecamatan'];
$kodepos = $_POST['kodepos'];
$no_telp = $_POST['no_telp'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$lingkup_kerja = $_POST['lingkup_kerja'];
$npwp = $_POST['npwp'];
$tgl_akte = $_POST['tgl_akte'];										
$no_akte = $_POST['no_akte'];
$bank = $_POST['bank'];
$norek = $_POST['norek'];
$notaris = $_POST['notaris'];
							
$query = mysql_query("select * from penyedia where id_penyedia = '$id_penyedia' ")or die(mysql_error());
$count = mysql_num_rows($query);

mysql_query("DELETE FROM penyedia where id_penyedia = '$get_id'")or die(mysql_error());

if ($count > 0){ ?>
		                              <script>
alert('Yakin Data Penyedia akan diHapus! Jika ya clik Oke');
window.location = "data_penyedia.php";
                                      </script>
		                            <?php
}else{
mysql_query("DELETE FROM penyedia where id_penyedia = '$get_id'")or die(mysql_error());	
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Penghapusan Data Penyedia dgn id $id_penyedia')")or die(mysql_error()); 										
									?>
		                              <script>
window.location = "add_penyedia.php";
$.jGrowl("Data Penyedia Sukses dihapus", { header: 'Data dihapus' });
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