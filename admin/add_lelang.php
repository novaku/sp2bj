<?php include('header.php');?>
<?php include('session.php');?>
<script type="text/javascript" src="assets/autoNumeric.js"></script>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
		
						<div class="span9" id="">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">TAMBAH DATA LELANG</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="data_lelang.php"><i class="icon-arrow-left icon-large"></i> Kembali</a></div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#return').tooltip('show');
										$('#return').tooltip('hide');
										});
										</script> 
		                            </div>
                                    
	                              <div class="block-content collapse in">
		                              <div class="alert alert-success"><i class="icon-info-sign"></i>Data Detail...</div>
		                              
                                      
                                      <form enctype="multipart/form-data" method="post">
		                              <!-- ISI FORM -->

				<?php	
	             $hasil_lelang=mysql_query("select * from data_lelang")or die(mysql_error());
	             $count = mysql_num_rows($hasil_lelang);
                 $urutlelang=$count+1;
				 ?>	 
			 							
									<?php include('modal_info.php'); ?>
								    <?php include('toolttip_info.php'); ?>															
<a title="Click Pilih Type Anggaran" class="btn btn-success" id="info" name="pl"> PL</a>    <a title="Click Pilih Type Anggaran" data-toggle="modal" class="btn btn-success" href="#type_anggaran" id="info" name="lpse"> LPSE</a> 
									<script type="text/javascript">
									 $(document).ready(function(){
                                         $('#info').tooltip('show');
                                         $('#info').tooltip('hide');
									 });
									</script>

</br>                 
<div class="control-group">
<label class="control-label" for="inputPassword">Id Lelang :</label>
<div class="controls">
<input type="text" class="span2" value=<?php echo $urutlelang?> readonly name="id_lelang" id="focusedInput" required>
		                                </div>
	                                    </div>
<div class="control-group">
<label class="control-label" for="selectPenyedia">Penyedia :</label>
<div class="controls">
    <select class="form-control" name="id_penyedia">
        <option value="" selected>--tidak ada--</option>
        <?php
        $result = mysql_query("SELECT id_penyedia,nama_prsh FROM penyedia ORDER BY nama_prsh");
        while ($row = mysql_fetch_assoc($result)) {
            echo '<option value="'.$row['id_penyedia'].'">'.$row['nama_prsh'].'</option>';
        }
        ?>
    </select>
		                                </div>
	                                    </div>
<div class="control-group">
<label class="control-label" for="inputPassword">Kode Rekening Kegiatan :</label>
<div class="controls">
<input  type="text" size="18" value="1.03.1.03.1." name="kode_kegiatan" id="focusedInput" placeholder="Kode Kegiatan" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Kode Bidang :</label>
<div class="controls">
<input type="text" size="9" name="kode_bidang" id="focusedInput" placeholder="Kode Bidang" required>
		                                </div>
	                                    </div>
<div class="control-group">
<label class="control-label" for="inputPassword">Nama Kegiatan :</label>
<div class="controls">
<input class="span8" type="text" name="nama_kegiatan" id="focusedInput" placeholder="Nama Kegiatan" required>
		                                </div>
	                                    </div> 

<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Undangan :</label>
<div class="controls">
<input type="text" id="tgl1" name="tgl_undangan" placeholder="tgl_undangan" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hps :</label>
<div class="controls">
<input type="text" class="span5" id="numberHps" placeholder="Hps" name="Hps" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang Hps :</label>
<div class="controls">
<input type="text" class="span8" name="Terbilang_hps" id="focusedInput" placeholder="Terbilang_hps" required> 
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Bapp :</label>
<div class="controls">
<input type="text" size="10" name="Hari_bapp" id="focusedInput" placeholder="Hari_bapp" required>
		                                </div>
	                                    </div> 

<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Bapp :</label>
<div class="controls">
<input type="text" id="tgl2" name="tgl_bapp" placeholder="Tgl_bapp" required>
		                                </div>
	                                    </div> 
                                
<div class="control-group">
<label class="control-label" for="inputPassword">Bulan Bapp :</label>
<div class="controls"><input type="text" size="15" name="Bln_bapp" id="focusedInput" placeholder="Bln_bapp" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Bapp :</label>
<div class="controls">
<input type="text" id="tgl3" name="Tgl_angka_bapp" placeholder="Tgl_angka_bapp" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Nilai Penawaran :</label>
<div class="controls">
<input type="text" class="span5" name="Nilai_penawaran" id="nilai_penawaran" placeholder="Nilai_penawaran" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang :</label>
<div class="controls">
<input type="text" class="span8" name="Terbilang" id="focusedInput" placeholder="Terbilang" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Uang Muka :</label>
<div class="controls">
<input type="text" class="span8" name="uang_muka" id="uang_muka" placeholder="Uang Muka" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Bahep :</label>
<div class="controls">
<input type="text" size="10" name="Hari_bahep" id="focusedInput" placeholder="Hari_bahep" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Nahep :</label>
<div class="controls">
<input type="text" id="tgl4" name="Tgl_nahep" placeholder="Tgl_nahep Format" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bulan Bahep :</label>
<div class="controls">
<input type="text" size="15" name="Bln_bahep" id="focusedInput" placeholder="Bln_bahep" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Bahep :</label>
<div class="controls">
<input type="text" id="tgl5" name="Tgl_angka_bahep" placeholder="Tgl_angka_bahep" required> 	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Undangan Kla Nego :</label>
<div class="controls">
<input type="text" id="tgl6" name="Tgl_und_kla_nego" placeholder="Tgl_und_kla_nego" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Kla Nego :</label>
<div class="controls">
<input type="text" size="10" name="Hari_kla_nego" id="focusedInput" placeholder="Hari_kla_nego" required> 
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Kla Nego :</label>
<div class="controls">
<input type="text" id="tgl7" name="Tgl_kla_nego" placeholder="Tgl_kla_nego" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Bakn :</label>
<div class="controls">
<input type="text" size="10" name="Hari_bakn" id="focusedInput" placeholder="Hari_bakn" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Bakn :</label>
<div class="controls">
<input type="text" id="tgl8" name="Tgl_bakn" placeholder="Tgl_bakn Format" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bulan Bakn :</label>
<div class="controls">
<input type="text" size="15" name="Bln_bakn" id="focusedInput" placeholder="Bln_bakn" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Bakn :</label>
<div class="controls">
<input type="text" id="tgl9" name="Tgl_angka_bakn" placeholder="Tgl_angka_bakn" required> 	
		                                </div>
	                                    </div> 
<div class="control-group"><label class="control-label" for="Harga_nego">Harga Nego :</label>
<div class="controls">
<input type="text" class="span8" name="Harga_nego" id="Harga_nego" placeholder="Harga_nego" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang Nego :</label>
<div class="controls">
<input type="text" class="span8" name="Terbilang_nego" id="focusedInput" placeholder="Terbilang_nego" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Bahpl :</label>
<div class="controls">
<input type="text" size="10" name="Hari_bahpl" id="focusedInput" placeholder="Hari_bahpl" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Bahpl :</label>
<div class="controls">
<input type="text" id="tgl10" name="Tgl_bahpl" placeholder="Tgl_bahpl Format" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bulan Bahpl :</label>
<div class="controls">
<input type="text" size="15" name="Bln_bahpl" id="focusedInput" placeholder="Bln_bahpl" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Bahpl</label>
<div class="controls">
<input type="text" id="tgl11" name="Tgl_angka_bahpl"  placeholder="Tgl_angka_bahpl" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Bap Pemenang :</label>
<div class="controls">
<input type="text" size="10" name="Hari_bap_pemenang" id="focusedInput" placeholder="Hari_bap_pemenang" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Bap Pemenang :</label>
<div class="controls">
<input type="text" id="tgl12" name="Tgl_bap_pemenang"  placeholder="Tgl_bap_pemenang" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bln Bap Pemenang</label>
<div class="controls">
<input type="text" size="15" name="Bln_bap_pemenang" id="focusedInput" placeholder="Bln_bap_pemenang" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Bap Pemenang :</label>
<div class="controls">
<input type="text" id="tgl13" name="Tgl_angka_bap_pemenang"  placeholder="Tgl_angka_bap_pemenang Format (yyyy-mm-dd)" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Masa Pemel :</label>
<div class="controls">
<input type="text" class="span8" name="Masa_pemel" id="Masa_pemel" placeholder="Masa_pemel" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang Pemel :</label>
<div class="controls">
<input type="text" class="span8" name="Terbilang_pemel" id="focusedInput" placeholder="Terbilang_pemel" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Kontrak :</label>
<div class="controls">
<input type="text" size="10" name="Hari_kontrak" id="focusedInput" placeholder="Hari_kontrak" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Kontrak :</label>
<div class="controls">
<input type="text" id="tgl14" name="Tgl_kontrak" placeholder="Tgl_kontrak" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bln Kontrak :</label>
<div class="controls">
<input type="text" size="15" name="Bln_kontrak" id="focusedInput" placeholder="Bln_kontrak" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Kontrak :</label>
<div class="controls">
<input type="text" id="tgl15" name="Tgl_angka_kontrak"  placeholder="Tgl_angka_kontrak" required>	 
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Masa Pelaksanaan :</label>
<div class="controls">
<input type="text" class="span8" name="Masa_pelaksanaan" id="Masa_pelaksanaan" placeholder="Masa_pelaksanaan" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Terbilang Masa Pelaksanaan :</label>
<div class="controls">
<input type="text" class="span8" name="Terbilang_masa_pelaks" id="focusedInput" placeholder="Terbilang_masa_pelaks" required>	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Waktu Pelaksanaan :</label>
<div class="controls">
<input type="text" class="span8" name="Waktu_pelaksanaan" id="focusedInput" placeholder="Waktu_pelaksanaan" required> 	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Baph :</label>
<div class="controls">
<input type="text" id="tgl16" name="Tgl_baph"  placeholder="Tgl_baph" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Hari Splspmk :</label>
<div class="controls">
<input type="text" size="10" name="Hari_splspmk" id="focusedInput" placeholder="Hari_splspmk" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Splspmk :</label>
<div class="controls">
<input type="text" id="tgl17" name="tgl_splspmk" placeholder="Tgl_splspmk" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bulan Splspmk :</label>
<div class="controls">
<input type="text" size="15" name="bln_splspmk" id="focusedInput" placeholder="Bln_splspmk" required>
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Tanggal Angka Splspmk :</label>
<div class="controls">
<input type="text" id="tgl18" name="tgl_angka_splspmk" placeholder="tgl_angka_splspmk" required> 	
		                                </div>
	                                    </div> 
<div class="control-group">
<label class="control-label" for="inputPassword">Bank Garansi :</label>
<div class="controls">
<input type="text" class="span8" name="bank_garansi" id="focusedInput" placeholder="Bank Garansi" required>
		                                </div>
	                                    </div> 
                                                                             
		                              <!-- ISI FORM -->                    		                                                  
		                                <div class="control-group">
		                                  <div class="controls">
		                                    <button name="save" id="save" data-placement="right" title="Click disini untuk menyiman data baru kamu." class="btn btn-primary"><i class="icon-save"></i> Simpan</button>  <a href="data_lelang.php" class="btn btn-info"  id="cancel" data-placement="right" title="Click untuk membatalkan data" ><i  class="btn btn-success"></i> Batal</a>
	                                      </div>
	                                    </div>
		                                <script type="text/javascript">
										$(document).ready(function(){
                                            $('#save').tooltip('show');
                                            $('#save').tooltip('hide');
										});
                                        jQuery(function($) {
                                            $('#numberHps').autoNumeric('init', {aSep: '.', aDec: ',', mDec: '0'});
                                            $('#nilai_penawaran').autoNumeric('init', {aSep: '.', aDec: ',', mDec: '0'});
                                            $('#uang_muka').autoNumeric('init', {aSep: '.', aDec: ',', mDec: '0'});
                                            $('#Harga_nego').autoNumeric('init', {aSep: '.', aDec: ',', mDec: '0'});
                                            $('#Masa_pelaksanaan').autoNumeric('init', {aSep: '.', aDec: ',', mDec: '0'});
                                            $('#Masa_pemel').autoNumeric('init', {aSep: '.', aDec: ',', mDec: '0'});
                                        });
										</script>
	                                </form>
                                    
		                              <?php
if (isset($_POST['save'])){
$id_lelang = $_POST['id_lelang'];
$id_penyedia = $_POST['id_penyedia'];
$kode_kegiatan = $_POST['kode_kegiatan'];
$Kode_bidang = $_POST['kode_bidang'];
$nama_kegiatan = $_POST['nama_kegiatan'];
$tgl_undangan = $_POST['tgl_undangan'];
$Hps = get_numerics($_POST['Hps']);
$Terbilang_hps = $_POST['Terbilang_hps'];
$Hari_bapp = $_POST['Hari_bapp'];
$tgl_bapp = $_POST['tgl_bapp'];
$Bln_bapp = $_POST['Bln_bapp'];
$Tgl_angka_bapp = $_POST['Tgl_angka_bapp'];
$Nilai_penawaran = get_numerics($_POST['Nilai_penawaran']);
$Terbilang = $_POST['Terbilang'];
$uang_muka = get_numerics($_POST['uang_muka']);
$Hari_bahep = $_POST['Hari_bahep'];
$Tgl_nahep = $_POST['Tgl_nahep'];
$Bln_bahep = $_POST['Bln_bahep'];
$Tgl_angka_bahep = $_POST['Tgl_angka_bahep'];
$Tgl_und_kla_nego = $_POST['Tgl_und_kla_nego'];
$Hari_kla_nego = $_POST['Hari_kla_nego'];
$Tgl_kla_nego = $_POST['Tgl_kla_nego'];
$Hari_bakn = $_POST['Hari_bakn'];
$Tgl_bakn = $_POST['Tgl_bakn'];
$Bln_bakn = $_POST['Bln_bakn'];
$Tgl_angka_bakn = $_POST['Tgl_angka_bakn'];
$Harga_nego = get_numerics($_POST['Harga_nego']);
$Terbilang_nego = $_POST['Terbilang_nego'];
$Hari_bahpl = $_POST['Hari_bahpl'];
$Tgl_bahpl = $_POST['Tgl_bahpl'];
$Bln_bahpl = $_POST['Bln_bahpl'];
$Tgl_angka_bahpl = $_POST['Tgl_angka_bahpl'];
$Hari_bap_pemenang = $_POST['Hari_bap_pemenang'];
$Tgl_bap_pemenang = $_POST['Tgl_bap_pemenang'];
$Bln_bap_pemenang = $_POST['Bln_bap_pemenang'];
$Tgl_angka_bap_pemenang = $_POST['Tgl_angka_bap_pemenang'];
$Masa_pemel = $_POST['Masa_pemel'];
$Terbilang_pemel = $_POST['Terbilang_pemel'];
$Hari_kontrak = $_POST['Hari_kontrak'];
$Tgl_kontrak = $_POST['Tgl_kontrak'];
$Bln_kontrak = $_POST['Bln_kontrak'];
$Tgl_angka_kontrak = $_POST['Tgl_angka_kontrak'];
$Masa_pelaksanaan = $_POST['Masa_pelaksanaan'];
$Terbilang_masa_pelaks = $_POST['Terbilang_masa_pelaks'];
$Waktu_pelaksanaan = $_POST['Waktu_pelaksanaan'];
$Tgl_baph = $_POST['Tgl_baph'];
$Hari_splspmk = $_POST['Hari_splspmk'];
$tgl_splspmk = $_POST['tgl_splspmk'];
$bln_splspmk = $_POST['bln_splspmk'];
$tgl_angka_splspmk = $_POST['tgl_angka_splspmk'];
$bank_garansi= $_POST['bank_garansi'];
										
$query = mysql_query("select * from data_lelang where id_lelang = '$id_lelang' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
		                              <script>
alert('Data Lelang dgn id ini sudah ada, silahkan isi data lainnya!');
window.location = "add_lelang.php";
             	                      </script>
		                              <?php
}else{
mysql_query("insert into data_lelang (id_lelang,id_penyedia,kode_kegiatan,kode_bidang,nama_kegiatan,tgl_undangan,Hps,Terbilang_hps,Hari_bapp,tgl_bapp,Bln_bapp,Tgl_angka_bapp,Nilai_penawaran,Terbilang,uang_muka,Hari_bahep,Tgl_nahep,Bln_bahep,Tgl_angka_bahep,Tgl_und_kla_nego,Hari_kla_nego,Tgl_kla_nego,Hari_bakn,Tgl_bakn,Bln_bakn,Tgl_angka_bakn,Harga_nego,Terbilang_nego,Hari_bahpl,Tgl_bahpl,Bln_bahpl,Tgl_angka_bahpl,Hari_bap_pemenang,Tgl_bap_pemenang,Bln_bap_pemenang,Tgl_angka_bap_pemenang,Masa_pemel,Terbilang_pemel,Hari_kontrak,Tgl_kontrak,Bln_kontrak,Tgl_angka_kontrak,Masa_pelaksanaan,Terbilang_masa_pelaks,Waktu_pelaksanaan,Tgl_baph,Hari_splspmk,tgl_splspmk,bln_splspmk,tgl_angka_splspmk,bank_garansi) values('$id_lelang','$id_penyedia','$kode_kegiatan','$Kode_bidang','$nama_kegiatan','$tgl_undangan','$Hps','$Terbilang_hps','$Hari_bapp','$tgl_bapp','$Bln_bapp','$Tgl_angka_bapp','$Nilai_penawaran','$Terbilang','$uang_muka','$Hari_bahep','$Tgl_nahep','$Bln_bahep','$Tgl_angka_bahep','$Tgl_und_kla_nego','$Hari_kla_nego','$Tgl_kla_nego','$Hari_bakn','$Tgl_bakn','$Bln_bakn','$Tgl_angka_bakn','$Harga_nego','$Terbilang_nego','$Hari_bahpl','$Tgl_bahpl','$Bln_bahpl','$Tgl_angka_bahpl','$Hari_bap_pemenang','$Tgl_bap_pemenang','$Bln_bap_pemenang','$Tgl_angka_bap_pemenang','$Masa_pemel','$Terbilang_pemel','$Hari_kontrak','$Tgl_kontrak','$Bln_kontrak','$Tgl_angka_kontrak','$Masa_pelaksanaan','$Terbilang_masa_pelaks','$Waktu_pelaksanaan','$Tgl_baph','$Hari_splspmk','$tgl_splspmk','$bln_splspmk','$tgl_angka_splspmk','$bank_garansi')")or die(mysql_error());
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Penambahan Data lelang dgn id $id_lelang')")or die(mysql_error());											
?>
		                              <script>
//window.location = "data_lelang.php";
//$.jGrowl("Data lelang Sukses ditambahkan", { header: 'Data ditambahkan' });
                                      </script>
		                              <?php
}
}
	
?>
	                              </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
        <!–javascript here–>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
    </body>