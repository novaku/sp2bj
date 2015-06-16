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
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="data_penyedia.php"><i class="icon-arrow-left icon-large"></i> Kembali</a></div>
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


		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Id Penyedia</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="id_penyedia" id="inputPassword" placeholder="id_penyedia" required>
		                                  </div>
	                                    </div>                                        
		                                <div class="control-group">
		                                  <label class="control-label" for="inputPassword">Nama Perusahaan</label>
		                                  <div class="controls">
		                                    <input type="text" class="span8" name="nama_prsh" id="inputPassword" placeholder="nama_prsh" required>
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
		                                    <input type="text" class="span8" name="kodepos" id="inputPassword" placeholder="Kodepos" required>
	                                      </div>
	                                    </div>                                       
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
$nama_prsh = $_POST['nama_prsh'];
$nama_direktur = $_POST['nama_direktur'];
$alamat = $_POST['alamat'];
$kecamatan = $_POST['kecamatan'];
$kodepos = $_POST['kodepos'];
										
						
$query = mysql_query("select * from penyedia where id_penyedia = '$id_penyedia' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
		                              <script>
alert('Data Penyedia Siap Preview');
window.location = "data_penyedia.php";
                                      </script>
		                              <?php
}else{
mysql_query("insert into penyedia (id_penyedia,nama_prsh,nama_direktur,alamat,kecamatan,kodepos) values('$id_penyedia','$nama_prsh','$nama_direktur','$alamat','$kecamatan','$kodepos')")or die(mysql_error());
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Penambahan Data Penyedia dgn id $id_penyedia')")or die(mysql_error());											
?>
		                              <script>
window.location = "add_penyedia.php";
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