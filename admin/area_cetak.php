<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
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
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Daftar Cetak Berita Acara dan SPK</div>
                          <div class="muted pull-right">
								<a id="return" data-placement="left" title="Click to Return" href="dashboard.php"><i class="icon-arrow-left icon-large"></i> Kembali Menu Utama</a>
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
			  <?php	
	             $count_item=mysql_query("select * from data_lelang");
	             $count = mysql_num_rows($count_item);
               ?>					
				<li class="">
					<a href="all_lelang.php">Jumlah Daftar Cetak&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				</ul>
	</div>
</div>
</div>
															
<div class="container-fluid">
  <div class="row-fluid"> 
     <div class="empty">

      </div>
    </div> 
</div>
	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
												<th>KODE KEGIATAN</th>
												<th>KODE BIDANG</th>
                                                <th>NAMA PERUSAHAAN</th>		
                                                <th>NAMA KEGIATAN</th>
                                                <th>TGL UNDANGAN</th>									
                                                <th>HPS</th>									
                                                <th>HARI BAPP</th>									
												<th></th>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
	    $hasil = mysql_query("select * from data_lelang order by kode_kegiatan")or die(mysql_error());		
		while($row = mysql_fetch_row($hasil)){
		?>
										
		<tr>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
			<td><?php echo $row[5]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><?php echo $row[8]; ?></td>
        </td>
			<?php include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80"><a rel="tooltip"  title="Cetak SPK" id="<?php print $row[1]; ?>" href="spk.php<?php echo '?kode_kegiatan='.$row[1]; ?>" class="btn btn-success"><i class="icon-print icon-small"> Cetak</i></a>
           <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script> 
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
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>