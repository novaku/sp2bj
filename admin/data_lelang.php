<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dev_name_sidebar.php'); ?>
				<div class="span9" id="">
<a href="add_lelang.php" class="btn btn-info"  id="add" data-placement="right" title="Click untuk penambahan data" ><i class="icon-plus-sign icon-large"></i> Tambah Data Lelang</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script> 
                        <!-- block -->
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
 
      	<div class="empty">
	     <div class="pull-right">
		   <a href="print_all_lelang.php" class="btn btn-info" id="print" data-placement="left" title="Click untuk mencetak"><i class="icon-print icon-large"></i> Daftar Cetak</a> 		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	   
         </div>
      </div>
                             
						<form method="post" action="delete_lelang.php">
                       
                        <!---------Pencarian Option------------>
                		<div class="control-group">                                    		    
						<div class="controls">
						<select name="kode_kegiatan" class="" required/>
							<option>&larr;Kode Rekening Kegiatan&rarr;</option>
							<?php
							$hasil_lelang = mysql_query("select * from data_lelang")or die(mysql_error());
							while($row = mysql_fetch_array($hasil_lelang)){			
							?><option><?php echo $row['kode_kegiatan']; ?></option>
		  					<?php }?>
	  					</select>
						</div>
						</div>
 
                        <!---------Pencarian Option------------>
                        <div class="muted pull-right"><i class="icon-search"></i>Kode.Rek. Kegiatan</div>
                     
  						<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<a data-placement="right" title="Click Hapus Data Lelang"  data-toggle="modal" href="#datalelang_hapus" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Hapus</i></a>

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
												<th>KODE BIDANG</th>
                                                <th>NAMA PERUSAHAAN</th>		
                                                <th>NAMA KEGIATAN</th>
                                                <th>TGL UNDANGAN</th>									
                                                <th>HPS</th>									
                                                <th>HARI BAPP</th>									
                                                									
												<th></th>
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
                                                <td><?php echo $row['kode_bidang']; ?></td>
                                                <td><?php echo $row['nama_prsh']; ?></td>
                                                <td><?php echo $row['nama_kegiatan']; ?></td>
                                                <td><?php echo $row['tgl_undangan']; ?></td>
                                                <td><?php echo $row['hps']; ?></td>
                                                <td><?php echo $row['hari_bapp']; ?></td>
                                                
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