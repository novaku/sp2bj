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
						
				<?php	
	             $hasil_rka=mysql_query("select * from rka_skpd")or die(mysql_error());
	             $count = mysql_num_rows($hasil_rka);
                 ?>	 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-folder-open-alt"></i> Daftar Kode Rek SKPD</div>
								<div class="muted pull-right">
								Index Kode Rek: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                        <div class="block-content collapse in">
                        <div class="span12">
                        
						<form method="post" action="delete_kode_dpa.php">
                        
                        <!---------Pencarian Option------------>
                		<div class="control-group">                                    		    
						<div class="controls">
						<select name="kode_kegiatan" class="" required/>
							<option>&larr;Kode Rekening Kegiatan&rarr;</option>
							<?php
							//$hasil_rka = mysql_query("select * from rka_skpd")or die(mysql_error());
							while($row = mysql_fetch_array($hasil_rka)){			
							?><option><?php echo $row['kode_kegiatan']; ?></option>
		  					<?php }?>
	  					</select>
						</div>
						</div>
 
                        <!---------Pencarian Option------------>
                        <div class="muted pull-right"><i class="icon-search"></i>Kode.Rek. Kegiatan</div>
                     
  						<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <?php
                            if($_SESSION['admin']) :
                            ?>
                            <a data-placement="right" title="Click untuk Hapus Kode Rek"  data-toggle="modal" href="#kodekegiatan_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Hapus</i></a>
                            <?php
                            endif;
                            ?>

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
												<th>KODE REKENING</th>
												<th>JENIS AGRN</th>
                                                <th>KATEGORI PROGRAM</th>
                                                <th>NAMA KEGIATAN</th>
                                                <th>SUB KEGIATAN</th>
												<th></th>
                                          </tr>
										</thead>
										<tbody>
                                        
												<?php
$hasil = mysql_query("select * from rka_skpd")or die(mysql_error());
			while($row = mysql_fetch_array($hasil)){
						$kode_kegiatan = $row['kode_kegiatan'];
													?>
									
												<tr>
												<td width="100">
												<input kode_kegiatan="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $kode_kegiatan; ?>">
												</td>												
	                                            
												<td><?php echo $row['kode_kegiatan']; ?></td>
                                                <td width="10"><?php echo $row['jns_anggaran']; ?></td>
                                                <td><?php echo $row['kat_program']; ?></td>
                                                <td><?php echo $row['nama_kegiatan']; ?></td>
                                                <td><?php echo $row['sub_kegiatan']; ?></td>

											    <?php include('toolttip_edit_delete.php'); ?>															
												<td width="100">
												<a rel="tooltip"  title="Rubah Kode Rek" kode_kegiatan="<?php echo $kode_kegiatan; ?>" href="edit_kode_dpa.php<?php echo '?kode_kegiatan='.$kode_kegiatan; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"> Edit</i></a>
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