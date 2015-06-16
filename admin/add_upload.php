
  <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Tambah Kode DPA</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
								 <!--------------------form------------------->
								 		<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="judul_file" id="focusedInput" type="text" placeholder = "Judul File" required>
                                          </div>
                                        </div>
                                       <h3 align="left">Upload Files</h3>
                     <form enctype="multipart/form-data" action="upload.php" method="post">
 										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="nama_file" id="focusedInput" type="text" placeholder = "Nama File" required>
                                          </div>
                                        </div>
                                          <tr>
								<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="tgl_upload" id="focusedInput" type="date" placeholder = "Tanggal Upload" required>
                                          </div>
                                        </div>
								 <!--------------------form2------------------->										
										<div class="control-group">
                                          <div class="controls">
												<button name="upload" class="btn btn-info" id="upload" data-placement="right" title="Click untuk Simpan"><i class="icon-plus-sign icon-large"> Upload</i></button>
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
$kode_dpa = $_POST['kode_dpa'];

$hasil = mysql_query("select * from data_kak_rab where kode_dpa = '$kode_dpa'")or die(mysql_error());
$count = mysql_num_rows($hasil);

if ($count > 0){ ?>
<script>
alert('Kode DPA benar mau disimpan');
</script>

<?php
}else{

mysql_query("insert into data_kak_rab (kode_dpa) values('$kode_dpa')")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Menambah Kode DPA: $kode_dpa')")or die(mysql_error());
?>
<script>
window.location = "kode_dpa.php";
$.jGrowl("Kode DPA telah disimpan", { header: 'Kode DPA Simpan' });
</script>
<?php
}
}
?>