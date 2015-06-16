<!-----------------------------------------------Advance Search Form Modal --------------------------------------------------->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Form Pencarian Berdasark Perusahaan</h3>
</div>

<div class="modal-body">
    <form class="form-horizontal" method="post" action="advance_search.php">
	
	          <div class="control-group">
		      <label class="control-label" for="inputEmail">Nama Perusahaan</label>
			  <div class="controls">
			  <select name="nama_prsh" class="" required/>
			  <option>&larr; Seleksi Nama Perusahaan &rarr;</option>
			  <?php
				$hasil_prsh = mysql_query("select * from penyedia")or die(mysql_error());
				while($prsh_row = mysql_fetch_array($hasil_prsh)){			
				?>
			  <option><?php echo $prsh_row['nama_prsh']; ?></option>
			  <?php }?>
			  </select>
		      </div>
	          </div>
							
			  <div class="control-group">
		      <label class="control-label" for="inputEmail">Kode Validasi</label>
			  <div class="controls">
			  <select name="kode_validasi" class="" required/>
			  <option>&larr; Seleksi Kode Validasi &rarr;</option>
			  <?php
				$hasil_norek = mysql_query("select * from penyedia")or die(mysql_error());
				while($device_row = mysql_fetch_array($hasil_norek)){			
				?>
			  <option><?php echo $device_row['kode_validasi']; ?></option>
			  <?php } ?>
			  </select>
		      </div>
	          </div>

                <div class="control-group">
                <div class="controls">
                <button type="submit" id="cari1" data-placement="left" title="Click to Search" class="btn btn-primary"><i class="icon-search"></i> Pencarian Dimulai</button>
				 <script type="text/javascript">
		        $(document).ready(function(){
		        $('#search').tooltip('show');
		        $('#search').tooltip('hide');
		        });
		        </script> 
                </div>
                </div>
				
    </form>
<?php		
if (isset($_POST['cari1'])){
$nama_prsh= $_POST['nama_prsh'];
$kode_validasi= $_POST['kode_validasi'];
}
?>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Keluar</button>
</div>
</div>