<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
				<div class="span9" id="">
                     <div class="row-fluid">
					 <a href="add_penyedia.php" class="btn btn-info"  id="add" data-placement="right" title="Click untuk penambahan data" ><i class="icon-plus-sign icon-large"></i> Tambah Data Penyedia</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script> 
				<?php	
	             $count_item=mysql_query("select * from penyedia");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Daftar Profil Data Perusahaan Penyedia</div>
                          <div class="muted pull-right">
								Index Penyedia: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
<div class="container-fluid">
 <div class="row-fluid">						 
 <br/>
	<div class="pull-left">
			    <ul class="nav nav-pills">
				<li class="active">
					<a href="all_penyedia.php">Semua</a>
				</li>
					
			  <?php	
	             $count_item=mysql_query("select * from penyedia");
	             $count = mysql_num_rows($count_item);
               ?>					
				<li class="">
					<a href="all_penyedia.php">Jumlah Terdaftar Perusahaan Penyedia&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				</ul>
	</div>
</div>
</div>
															
<div class="container-fluid">
  <div class="row-fluid"> 
     <div class="empty">
	     <div class="pull-right">
		   <a href="print_all_penyedia.php" class="btn btn-info" id="print" data-placement="left" title="Click untuk mencetak"><i class="icon-print icon-large"></i> Daftar Cetak</a> 		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	   
         </div>
      </div>
    </div> 
</div>
	
                        <div class="block-content collapse in">
                        <div class="span12">
                        
						<form method="post" action="delete_penyedia.php">
                        
                        <div class="muted pull-right"><i class="icon-search"></i> Id Penyedia</div>
                     
  						<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                            <?php
                            if($_SESSION['admin']) :
                            ?>
                            <a data-placement="right" title="Click untuk Hapus Data Penyedia"  data-toggle="modal" href="#penyedia_hapus" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Hapus</i></a>
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
												<th>ID PENYEDIA</th>
												<th>NAMA PERUSAHAAN</th>
                                                <th>NAMA DIREKTUR</th>									
                                                <th>ALAMAT</th>									
                                                <th>TGL KONTRAK</th>
                                                <th>NO. TELP</th>
                                                <th>EMAIL</th>
                                                <th>LINGKUP KERJA</th>
                                                									
												<th></th>
                                          </tr>
										</thead>
										<tbody>
                                        
												<?php
$hasil = mysql_query("select * from penyedia")or die(mysql_error());
			while($row = mysql_fetch_array($hasil)){
						$id = $row['id_penyedia'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>												
	                                            
												<td><?php echo $row['id_penyedia']; ?></td>
                                                <td><?php echo $row['nama_prsh']; ?></td>
                                                <td><?php echo $row['nama_direktur']; ?></td>
                                                <td><?php echo $row['alamat']; ?></td>
                                                <td><?php echo $row['tgl_kontrak']; ?></td>
                                                <td><?php echo $row['no_telp']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['lingkup_kerja']; ?></td>
                                                
											    <?php include('toolttip_edit_delete.php'); ?>															
												<td width="70">
												<a rel="tooltip"  title="Edit Data Penyedia" id="e<?php echo $id; ?>" href="edit_penyedia.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"> Rubah</i></a>
												</td>
		
									
												</tr>
												<?php } ?>
										</tbody>
									</table>
</form>		
		  		
</div>
</div>
</div>
</div>
</div>
</div>	
</div>


<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>