<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('client_user_slidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_client_form.php'); ?>		   			
				</div>
				<?php	
	             $count_user=mysql_query("select * from client");
	             $count = mysql_num_rows($count_user);
                 ?>	
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
					<div class="empty">
                          <div class="alert alert-success alert-dismissable">
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             <i class="icon-info-sign"></i>  <strong>Catatan!:</strong> Seleksi checbox jika anda mau menghapus!
                          </div>
                    </div>
					 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-user"></i> Daftar Tupoksi User</div>
								<div class="muted pull-right">
								Jumlah Tupoksi User: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_client.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-placement="right" title="Click to Delete check item"  data-toggle="modal" href="#client_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Hapus</i></a>
									<script type="text/javascript">
									 $(document).ready(function(){
									 $('#delete').tooltip('show');
									 $('#delete').tooltip('hide');
									 });
									</script>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>Client Id</th>
												<th>Username</th>
												<th>Password</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysql_query("select * from client")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['kode_pokja'];
													?>
									
												<tr>
												<td width="10">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td width="30"><?php echo $row['kode_pokja']; ?></td>
                                                 
												<td width="30"><?php echo $row['username']; ?></td>
                                                
												<td width="30"><?php echo $row['password']; ?></td>
                                                
												<?php include('toolttip_edit_delete.php'); ?>															
												<td width="120">
												<a rel="tooltip"  title="Edit Client" id="e<?php echo $id; ?>" href="edit_client_form.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"> Rubah User</i></a>
												</td>
		
									
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
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

</html>