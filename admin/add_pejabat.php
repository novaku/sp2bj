  <div class="row-fluid">
  				<?php	
	             $hasil_pejabat=mysql_query("select * from pejabat_kpa")or die(mysql_error());
	             $count = mysql_num_rows($hasil_pejabat);
				 ?>	 

                        <!-- block -->
                                                          
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Tambah Pejabat KPA</i></div>
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
                                            <input class="input focused" value="1.03.1.03.1." name="kode_kegiatan" id="focusedInput" type="text" required>
                                          </div>
                                        </div>
 										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="no_kpa" id="focusedInput" type="text" placeholder = "Nomor KPA" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="nip" id="focusedInput" type="text" placeholder = "N.I.P" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="pejabat_kpa" id="focusedInput" type="text" placeholder = "Nama Pejabat KPA" required>
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
$kode_kegiatan = $_POST['kode_kegiatan'];	
$no_kpa = $_POST['no_kpa'];
$nip = $_POST['nip'];
$pejabat_kpa = $_POST['pejabat_kpa'];

//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan

$hasil = mysql_query("select * from pejabat_kpa where kode_kegiatan = '$kode_kegiatan'")or die(mysql_error());
$count = mysql_num_rows($hasil);

if ($count > 0){ ?>
<script>
alert('Kode KPA ini sdh ada Silahkan Isi dengan benar!');
window.location = "all_pejabat.php";
</script>

<?php
}else{

mysql_query("insert into pejabat_kpa values('$kode_kegiatan','$no_kpa','$nip','$pejabat_kpa')")or die(mysql_error());
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Menambah Data Pejabat: $kode_kegiatan')")or die(mysql_error());
?>
<script>
window.location = "all_pejabat.php";
$.jGrowl("Data Pejabat Kpa telah disimpan", { header: 'Pejabat KPA Simpan' });
</script>
<?php
}
}
?>