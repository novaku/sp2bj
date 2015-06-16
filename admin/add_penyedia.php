<?php include('header.php'); ?>
<?php include('session.php'); ?>
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
		                                <div class="muted pull-left">TAMBAH DATA PENYEDIA</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="all_penyedia.php"><i class="icon-arrow-left icon-large"></i> Kembali</a></div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#return').tooltip('show');
										$('#return').tooltip('hide');
										});
										</script>                          
		                            </div>
	                              <div class="block-content collapse in">
		                              <div class="alert alert-success"><i class="icon-info-sign"></i>Data Detail...</div>
		                              
                                      <form class="form-horizontal" method="post">
		                        				<!-- Form Isian -->
                                                
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Id Penyedia</label>
		                                  <div class="controls">
		                                    <input type="text" class="span2" name="id_penyedia" id="inputPassword" placeholder="Id Penyedia" required>
		                                  </div>
	                                    	<label class="control-label" for="inputPassword">Misal Id Penyedia (kombinasi singkatan nama perusahaan dan angka) ex: FCS001</label>
                                        </div>                                        
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Tanggal Kontrak</label>
		                                  <div class="controls">
		                                    <input type="text" id="tgl1" name="tgl_kontrak" placeholder="Tanggal Kontrak" required>
		                                  </div>
	                                    </div>                                        
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Nama Perusahaan</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="nama_prsh" id="inputPassword" placeholder="Nama Perusahaan" required>
		                                  </div>
	                                    </div>
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Nama Direktur</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="nama_direktur" id="inputPassword" placeholder="Nama Direktur" required>
	                                      </div>
	                                    </div>
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Alamat</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="alamat" id="inputPassword" placeholder="Alamat" required>
	                                      </div>
	                                    </div>
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Kecamatan</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="kecamatan" id="inputPassword" placeholder="Kecamatan" required>
	                                      </div>
	                                    </div>
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Kodepos</label>
		                                  <div class="controls">
		                                    <input type="text" class="span2" name="kodepos" id="inputPassword" placeholder="Kodepos" required>
	                                      </div>
	                                    </div>    
                                        
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">No.Telphone</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="no_telp" id="inputPassword" placeholder="Nomor Telephone" required>
	                                      </div>
	                                    </div>
                                            
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">No.Handphone</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="no_hp" id="inputPassword" placeholder="Nomon Handphone" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Email</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="email" id="inputPassword" placeholder="Email" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Lingkup Kerja</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="lingkup_kerja" id="inputPassword" placeholder="lingkup Kerja Perusahaan" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">NPWP</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="npwp" id="inputPassword" placeholder="Npwp" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Tanggal Akte</label>
		                                  <div class="controls">
		                                    <input type="text" id="tgl2" name="tgl_akte" placeholder="Tanggal Akte Perusahaan" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Nomor Akte</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="no_akte" id="inputPassword" placeholder="Nomor Akte" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Bank Perusahaan</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="bank" id="inputPassword" placeholder="Nama Bank" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">No. Rekening</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="norek" id="inputPassword" placeholder="No. Rekening" required>
	                                      </div>
	                                    </div>    
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Notaris</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="notaris" id="inputPassword" placeholder="Nama Notaris" required>
	                                      </div>
	                                    </div>    
   
	                        				<!-- Form Isian Data Penyedia-->
		                                <div class="control-group">
		                                  <div class="controls">
		                                    <button name="save" id="save" data-placement="right" title="Click disini untuk menyiman data baru kamu." class="btn btn-primary"><i class="icon-save"></i> Simpan</button>
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
if (isset($_POST['save'])){
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

if ($count > 0){ ?>
		                              <script>
alert('Data Penyedia dgn id ini sudah ada, silahkan isi data lainnya!');
window.location = "add_penyedia.php";
                                      </script>
		                              <?php
}else{
mysql_query("insert into penyedia (id_penyedia,tgl_kontrak,nama_prsh,nama_direktur,alamat,kecamatan,kodepos,no_telp,no_hp, email, lingkup_kerja,npwp, tgl_akte,no_akte,bank,norek,notaris) values('$id_penyedia','$tgl_kontrak','$nama_prsh','$nama_direktur','$alamat','$kecamatan','$kodepos','$no_telp','$no_hp','$email','$lingkup_kerja','$npwp','$tgl_akte','$no_akte','$bank','$norek','$notaris')")or die(mysql_error());
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Penambahan Data Penyedia dgn id: $id_penyedia')")or die(mysql_error());											
?>
		                              <script>
window.location = "all_penyedia.php";
$.jGrowl("Data Penyedia Sukses ditambahkan", { header: 'Data ditambahkan' });
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