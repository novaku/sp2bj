<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('search_form.php'); ?>
<?php include('search_form1.php'); ?>
 <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="add_penyedia.php" class="btn btn-info"  id="add" data-placement="right" title="Click untuk penambahan data" ><i class="icon-plus-sign icon-large"></i> Tambah Data</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script> 
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				<?php	
	             $count_item=mysql_query("select * from penyedia");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Daftar Profil Penyedia</div>
                          <div class="muted pull-right">
								Index Penyedia: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
                 <h4 id="sc">Daftar Perusahaan Penyedia
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>

							
<div class="container-fluid">
 <div class="row-fluid">						 
 <br/>
	<div class="pull-left">
			    <ul class="nav nav-pills">
				<li class="active">
					<a href="all_penyedia.php">Semua</a>
				</li>
					
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
   	     <div class="pull-left">Kode Validasi 1 = "Perusahaan Layak" dan Kode Validasi 2 = "Perusahaan Tak Layak"</div>
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
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
					<th class="empty"></th>
					<th>Id Penyedia</th>
					<th>Nama Perusahaan </th>
					<th>Nama Direktur </th>
			        <th>Alamat  </th>
					<th>Kecamatan  </th>
					<th>Kode Validasi  </th>
                    <th class="empty"></th>					
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
$nama_prsh= $_POST['nama_prsh'];
$kode_validasi= $_POST['kode_validasi'];
	    $hasil = mysql_query("select * from penyedia where nama_prsh='$nama_prsh' and kode_validasi='$kode_validasi'")or die(mysql_error());		
		while($row = mysql_fetch_row($hasil)){
		?>
										
		<tr>
        	<td><?php echo "";		?></td>
			<td><?php echo $row[0]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>			
            <td><?php echo $row[17]; ?></td>
        </td>
                
			<?php include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80"><a rel="tooltip"  title="Edit Penyedia" id="<?php echo $row[0]; ?>" href="edit_penyedia.php<?php echo '?id_penyedia='.$row[0]; ?>" class="btn btn-success"><i class="icon-pencil"> Rubah</i></a></td>
			<?php include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80"><a rel="tooltip"  title="Delete Penyedia" id="<?php echo $row[0]; ?>" href="delete_penyedia.php<?php echo '?id_penyedia='.$row[0]; ?>" class="btn btn-success"><i class="icon-pencil"> Hapus</i></a></td>
		</tr>
											
	<?php } ?>   

</tbody>
</table>
</form>		
		

<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>