
  <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Tambah Kode DPA</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
								 <!--------------------form------------------->
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="kode_dpa" id="focusedInput" type="text" placeholder = "Kode DPA" required>
                                          </div>
                                        </div>
										
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
$kode_dpa = $_POST['kode_dpa'];

$query = mysql_query("select * from data_kak_rab where kode_dpa = '$kode_dpa'")or die(mysql_error());
$count = mysql_num_rows($query);

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