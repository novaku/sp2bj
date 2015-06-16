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
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
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
						  
                 <h4 id="sc">Daftar Perusahaan Lelang
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
					<a href="all_lelang.php">Semua</a>
				</li>
					
			  <?php	
	             $count_item=mysql_query("select * from data_lelang");
	             $count = mysql_num_rows($count_item);
               ?>					
				<li class="">
					<a href="all_lelang.php">Jumlah Terdaftar Perusahaan Lelang&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				</ul>
	</div>
</div>
</div>
															
<div class="container-fluid">
  <div class="row-fluid"> 
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
		<thead>		
		        <tr>			        
					<th class="empty"></th>
					<th>Id Lelang</th>
					<th>Nama Kegiatan </th>
					<th>Tgl Undangan </th>
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
			<td><?php echo $row[0]; ?></td>
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
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>