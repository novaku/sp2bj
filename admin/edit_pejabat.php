<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['kode_kegiatan']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dev_name_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_pejabat_form.php'); ?>		   			
				</div>
				<?php	
	             $hasil=mysql_query("select * from pejabat_kpa");
	             $count = mysql_num_rows($hasil);
                 ?>	
                <div class="span6" kode_kegiatan="">
                     <div class="row-fluid">
                        <!-- block -->
					<div class="empty">
                          <div class="alert alert-success alert-dismissable">
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             <i class="icon-info-sign"></i>  <strong>Note!:</strong> Seleksi checbox jika mau menghapus?
                          </div>
                    </div>
					 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-folder-open-alt"></i> Daftar Pejabat Kpa</div>
								<div class="muted pull-right">
								Index Pejabat Kpa: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_pejabat.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-placement="right" title="Click jika mau Menghapus Kode.Rek Kegiatan"  data-toggle="modal" href="#pejabat_hapus" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Hapus</i></a>
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
                                                <th>KODE KEGIATAN</th>
                                                <th>NO. KPA</th>
												<th>N.I.P</th>
												<th>PEJABAT KPA</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
	$device_name_query = mysql_query("select * from pejabat_kpa")or die(mysql_error());
				while($row = mysql_fetch_array($device_name_query)){
										$kode_kegiatan = $row['kode_kegiatan'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>

												<td><?php echo $row['kode_kegiatan']; ?></td>
                                                <td><?php echo $row['no_kpa']; ?></td>
                                                <td><?php echo $row['nip']; ?></td>
                                                <td><?php echo $row['pejabat_kpa']; ?></td>
										
												<?php include('toolttip_edit_delete.php'); ?>															
												<td width="75">
												<a rel="tooltip"  title="Edit Kode Kegiatan" id="e<?php echo $kode_kegiatan; ?>" href="edit_pejabat.php<?php echo '?kode_kegiatan='.$kode_kegiatan; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"> Edit</i></a>
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