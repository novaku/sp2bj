<!-----------------------------------------------Advance Search Form Modal --------------------------------------------------->
<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Form Pencarian Id Penyedia</h3>
</div>

<div class="modal-body">
    <form class="form-horizontal" method="post" action="advance_search1.php">
	           
			  <div class="control-group">
		      <label class="control-label" for="inputEmail">Id Penyedia</label>
			  <div class="controls">
			  <select name="id_penyedia" class="" required/>
			  <option>&larr; Pilih Nama Perusahaan &rarr;</option>
			  <?php
				$prsh_query = mysql_query("select * from data_lelang")or die(mysql_error());
				while($row = mysql_fetch_array($prsh_query)){			
				?>
			  <option><?php echo $row['id_penyedia']; ?></option>
			  <?php } ?>
			  </select>
		      </div>
	          </div>
			  			  			
			  <div class="control-group">
		      <label class="control-label" for="inputEmail">Bulan Bapp</label>
			  <div class="controls">
			  <select name="bln_bapp"  class="" required/>
			  <option>&larr; Seleksi Bulan Bapp &rarr;</option>
			  <?php
				$lelang_query = mysql_query("select * from data_lelang")or die(mysql_error());
				while($row = mysql_fetch_array($lelang_query)){			
				?>
			  <option><?php echo $row['bln_bapp']; ?></option>
			  <?php } ?>
			  </select>
		      </div>
	          </div>
			  
                <div class="control-group">
                <div class="controls">
                <button type="submit" id="cari2" data-placement="left" title="Click to Search" class="btn btn-primary"><i class="icon-search"></i> Pencarian</button>
				 <script type="text/javascript">
		        $(document).ready(function(){
		        $('#search1').tooltip('show');
		        $('#search1').tooltip('hide');
		        });
		        </script> 
                </div>
                </div>
    </form>
<?php		
if (isset($_POST['cari2'])){
$id_penyedia= $_POST['id_penyedia'];
$bln_bapp= $_POST['bln_bapp'];
}
?>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Keluar</button>
</div>
</div>