<div class="row-fluid">				  
   <a href="client_user.php" class="btn btn-info" id="add" data-placement="right" title="Click untuk tambah user" ><i class="icon-plus-sign icon-large"></i> Tambah User Pokja</a>
   <script type="text/javascript">
	$(document).ready(function(){
	$('#add').tooltip('show');
	$('#add').tooltip('hide');
	});
	</script> 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Rubah Data User Pokja</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from client where kode_pokja = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								
								 <!-- --------------------form ---------------------->						
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['kode_pokja']; ?>" name="kode_pokja" id="focusedInput" type="text" placeholder = "kode_pokja" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['username']; ?>"  name="username" id="focusedInput" type="text" placeholder = "username" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['password']; ?>"  name="password" id="focusedInput" type="text" placeholder = "password" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success" id="update" data-placement="right" title="Click to Update"><i class="icon-save icon-large"> Rubah</i></button>
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
$kode_pokja = $_POST['kode_pokja'];
$username = $_POST['username'];
$password = $_POST['password'];


mysql_query("update client set kode_pokja = '$kode_pokja' , username = '$username' , password = '$password' where kode_pokja = '$get_id' ")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit Client User $username')")or die(mysql_error());	
?>
<script>
  window.location = "client_user.php";
 $.jGrowl("Client User telah sukses di Update", { header: 'Client User Update' });  
</script>
<?php
}
?>