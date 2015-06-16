<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dev_name_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_kode_dpa.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
						
				<div class="empty">
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         <i class="icon-info-sign"></i>  <strong>Note!:</strong> Seleksi checbox Jika mau Menghapus!
                    </div>
               </div>
			   								
				<?php	
	             $hasil=mysql_query("select * from data_kak_rab");
	             $count = mysql_num_rows($hasil);
                 ?>	 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-folder-open-alt"></i> Daftar Kode KAK RAB</div>
								<div class="muted pull-right">
								Index Kode DPA: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_kode_dpa.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-placement="right" title="Click untuk Hapus Kode DPA"  data-toggle="modal" href="#device_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Delete</i></a>
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
												<th>KODE DPA</th>	
                                                <th>NOMOR DPA</th>
                                                <th>KEGIATAN PL/LELANG TENDER</th>									
												<th></th>
                                          </tr>
										</thead>
										<tbody>
                                        
												<?php
$hasil = mysql_query("select * from data_kak_rab")or die(mysql_error());
			while($row = mysql_fetch_array($hasil)){
						$kode_dpa = $row['kode_dpa'];
													?>
									
												<tr>
												<td width="30">
												<input kode_dpa="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $kode_dpa; ?>">
												</td>												
	                                            
												<td><?php echo $row['kode_dpa']; ?></td>
                                                <td><?php echo $row['nomor_dpa']; ?></td>
                                                <td><?php echo $row['kegiatan']; ?></td>
												
											    <?php include('toolttip_edit_delete.php'); ?>															
												<td width="75">
												<a rel="tooltip"  title="Rubah Kode DPA" kode_dpa="<?php echo $kode_dpa; ?>" href="add_download.php<?php echo '?kode_dpa='.$kode_dpa; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"> Upload</i></a>
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