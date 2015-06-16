<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Tambah Staf User Pokja</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
								 <!--------------------form------------------->
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="kode_pokja" id="focusedInput" type="text" placeholder = "Kode Pokja" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="username" id="focusedInput" type="text" placeholder = "Nama User" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="password" id="focusedInput" type="password" placeholder = "Kata Kunci" required>
                                          </div>
                                        </div>
										
										
										<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info" id="save" data-placement="right" title="Click to Save"><i class="icon-plus-sign icon-large"> Simpan</i></button>
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
$kode_pokja = $_POST['kode_pokja'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysql_query("select * from client where kode_pokja = '$kode_pokja' and username = '$username' and password = '$password'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysql_query("insert into client (kode_pokja,username,password) values('$kode_pokja','$username','$password')")or die(mysql_error());
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$kode_pokja','Add Client User $username')")or die(mysql_error());
?>
<script>
window.location = "client_user.php";
$.jGrowl("Client User Successfully added", { header: 'Client User add' });
</script>
<?php
}
}
?>