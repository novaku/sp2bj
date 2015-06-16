<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dev_name_sidebar.php'); ?>
				<div class="span3" id="addpejabat">
				<?php include('add_pejabat.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
						
				<?php	
	             $hasil_pejabat=mysql_query("select * from pejabat_kpa")or die(mysql_error());
	             $count = mysql_num_rows($hasil_pejabat);
                 ?>	 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-folder-open-alt"></i> Daftar Pejabat KPA</div>
								<div class="muted pull-right">
								Index Pejabat Kpa: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                        <div class="block-content collapse in">
                        <div class="span12">
                        
						<form method="post" action="delete_pejabat.php">
                        
                        <div class="muted pull-right"><i class="icon-search"></i> Nomor Induk Pegawai</div>
                     
  						<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						<a data-placement="right" title="Click untuk Hapus Kode Rek"  data-toggle="modal" href="#pejabat_hapus" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Hapus</i></a>

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
                                                <th>NIP</th>									
                                                <th>PEJABAT KPA</th>									
												<th></th>
                                          </tr>
										</thead>
										<tbody>
                                        
												<?php
										$hasil = mysql_query("select * from pejabat_kpa")or die(mysql_error());
										while($row = mysql_fetch_array($hasil)){
										$id = $row['kode_kegiatan'];
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
												<a rel="tooltip"  title="Rubah Data Pejabat KPA" id="e<?php echo $id; ?>" href="edit_pejabat.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"> Edit</i></a>

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