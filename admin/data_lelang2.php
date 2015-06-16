<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
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
	             $hasil_lelang=mysql_query("select * from data_lelang")or die(mysql_error());
	             $count = mysql_num_rows($hasil_lelang);
                 ?>	 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-folder-open-alt"></i> Daftar Data Lelang</div>
								<div class="muted pull-right">
								Index Data Lelang: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                        <div class="block-content collapse in">
                        <div class="span12">
                        
						<form method="post" action="delete_lelang.php">
                        
                        <div class="muted pull-right"><i class="icon-search"></i>Kode.Rek. Kegiatan</div>
  						<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<a data-placement="right" title="Click untuk Hapus Kode Rek"  data-toggle="modal" href="#lelang_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Hapus</i></a>

									<script type="text/javascript">
									 $(document).ready(function(){
									 $('#delete').tooltip('show');
									 $('#delete').tooltip('hide');
									 });
									</script>
									<?php include('modal_delete.php'); ?>
		<thead>		
		        <tr>			        
					<th class="empty"></th>
					<th>Kode Kegiatan</th>
					<th>Nama Perusahaan </th>
					<th>Nama Kegiatan</th>
			        <th>H P S  </th>
					<th>Terbilang HPS</th>
					<th>Hari BAPP  </th>
                    <th class="empty"></th>					
		    </tr>
		</thead>
									<tbody>
                                        
												<?php
$hasil = mysql_query("select * from data_lelang")or die(mysql_error());
			while($row = mysql_fetch_array($hasil)){
						$kode_kegiatan = $row['kode_kegiatan'];
													?>
									
												<tr>
												<td width="30">
												<input kode_kegiatan="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $kode_kegiatan; ?>">
												</td>												
	                                            
												<td><?php echo $row['kode_kegiatan']; ?></td>
                                                <td><?php echo $row['kat_program']; ?></td>
                                                <td><?php echo $row['nama_kegiatan']; ?></td>
												
											    <?php include('toolttip_edit_delete.php'); ?>															
												<td width="75">
												<a rel="tooltip"  title="Rubah Kode Rek" kode_kegiatan="<?php echo $kode_kegiatan; ?>" href="edit_lelang.php<?php echo '?kode_kegiatan='.$kode_kegiatan; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"> Edit</i></a>
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