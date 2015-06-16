<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="add_lelang.php" class="btn btn-info"  id="add" data-placement="right" title="Click untuk penambahan data" ><i class="icon-plus-sign icon-large"></i> Tambah Data</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script> 
				
				<?php	
	             $hasillelang=mysql_query("select * from data_lelang");
	             $count = mysql_num_rows($hasillelang);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Daftar Profil Lelang</div>
                          <div class="muted pull-right">
								Index lelang: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
					
<div class="container-fluid">
<div class="row-fluid">						 
	<div class="block-content collapse in">
				<?php	
	             $hasil_lelang=mysql_query("select * from data_lelang")or die(mysql_error());
	             $count = mysql_num_rows($hasil_lelang);
                 ?>	 
                       
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
    </div> 
</div>
	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<a data-placement="left" title="Click untuk Hapus Data Lelang"  data-toggle="modal" href="#lelang_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Hapus</i></a>

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
<!-----------------------------------Content------------------------------------>
<?php
	    $hasil = mysql_query("select * from data_lelang order by id_lelang")or die(mysql_error());		
		while($row = mysql_fetch_row($hasil)){
		?>
										
		<tr>
        	<td><?php echo "";		?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
			<td><?php echo $row[5]; ?></td>
			<td><?php echo $row[6]; ?></td>			
            <td><?php echo $row[7]; ?></td>
        </td>
                
			<?php include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80"><a rel="tooltip"  title="Edit lelang" id="<?php echo $row[0]; ?>" href="edit_lelang.php<?php echo '?id_lelang='.$row[0]; ?>" class="btn btn-success"><i class="icon-pencil"> Rubah</i></a></td>
			<?php include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80"><a rel="tooltip"  title="Delete lelang" id="<?php echo $row[0]; ?>" href="delete_lelang.php<?php echo '?id_lelang='.$row[0]; ?>" class="btn btn-success"><i class="icon-pencil"> Hapus</i></a></td>
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