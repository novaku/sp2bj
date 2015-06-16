<div class="row-fluid">				  
   <a href="add_pejabat.php" class="btn btn-info" id="add" data-placement="right" title="Click untuk tambah Pejabat KPA" ><i class="icon-plus-sign icon-large"></i> Tambah Pejabat KPA</a>
   <script type="text/javascript">
	$(document).ready(function(){
	$('#add').tooltip('show');
	$('#add').tooltip('hide');
	});
	</script> 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Rubah KPA</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from pejabat_kpa where kode_kegiatan = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								
								 <!-- --------------------form ---------------------->						
								<form enctype="multipart/form-data" method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['kode_kegiatan']; ?>" name="kode_kegiatan" id="focusedInput" type="text" placeholder = "kode_kegiatan" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['no_kpa']; ?>" name="no_kpa" id="focusedInput" type="text" placeholder = "no_kpa" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['nip']; ?>" name="nip" id="focusedInput" type="text" placeholder = "nip" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['pejabat_kpa']; ?>" name="pejabat_kpa" id="focusedInput" type="text" placeholder = "pejabat_kpa" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success" id="update" data-placement="right" title="Click untuk Update Pejabat KPA"><i class="icon-save icon-large"> Rubah</i></button>
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
$no_kpa = $_POST['no_kpa'];
$nip = $_POST['nip'];
$pejabat_kpa = $_POST['pejabat_kpa'];
mysql_query("update pejabat_kpa set kode_kegiatan = '$kode_kegiatan', no_kpa = '$no_kpa', nip = '$nip', pejabat_kpa = '$pejabat_kpa' where kode_kegiatan = '$get_id' ")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit Pejabat KPA:$kode_kegiatan')")or die(mysql_error());	
?>
<script>
//  window.location = "all_pejabat.php";
// $.jGrowl("Pejabat KPA Kegiatan sukses diUpdate", { header: 'Pejabat KPA Update' });  
</script>
<?php
}
?>