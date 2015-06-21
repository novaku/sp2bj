<?php
if($_SESSION['admin']) {
    $qStr = 'SELECT adminthumbnails FROM admin WHERE admin_id='.$session_id;
} else {
    $qStr = 'SELECT thumbnails AS adminthumbnails FROM client WHERE client_id='.$session_id;
}
$query= mysql_query($qStr)or die(mysql_error());
$row = mysql_fetch_assoc($query);
?>
     <div class="span3" id="sidebar">
	              <img id="admin_avatar" class="img-polaroid" src="<?php echo $row['adminthumbnails']; ?>">
	                 <?php include('count.php'); ?>
					 <?php include('count_damage.php'); ?>
					  <?php include('count_dump.php'); ?>
					 <?php include('count_remain_new_device.php'); ?>
                  <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                           <li class="active"> 
						   <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> 
						   </li>
						 
						 <!------/.* manage device sidebar*------->						
						 <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i><i class="icon-tablet icon-large"></i>&nbsp;Master Data
						    <div class="muted pull-right"><i class="caret"></i></div></a>					
						    <ul id="bs" class="collapse">						
                            <li class="">
                            <a href="all_penyedia.php"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Data Penyedia</a>
                            </li>
                            <li class="">
                            <a href="kode_dpa.php"><i class="icon-chevron-right"></i><i class="icon-folder-open-alt"></i> Tampil Kode DPA</a>
                            </li> 
						    <li>
                            <a href="add_penyedia.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Daftar&nbsp;<span class="label label-success">New</span>&nbsp;Penyedia
							<?php if($not_read_new == '0'){
				            }else{ ?>
					        <span class="badge badge-info"><?php echo $not_read_new; ?></span>
				            <?php } ?>
							</a>
                            </li>						
						    <li>
                            <a href="admin_user.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Administrator
							<?php if($not_read1 == '0'){
				            }else{ ?>
					        <span class="badge badge-important"><?php echo $not_read1; ?></span>
				            <?php } ?>
							</a>
                            </li>
							<li>
                            <a href="area_cetak.php"><i class="icon-chevron-right"></i><i class="icon-remove-sign"></i> Cetak Berita Acara / SPK
							<?php if($not_read_dump == '0'){
				            }else{ ?>
					        <span class="badge badge-important"><?php echo $not_read_dump; ?></span>
				            <?php } ?>
							</a>
                            </li>						   							
						    </ul>
						</li>
						
                         <!------/.* manage location sidebar*------->	
					    <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i>&nbsp;Data Lelang
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs1" class="collapse">						
                            <li class="">
                            <a href="add_lelang.php"><i class="icon-chevron-right"></i><i class="icon-map-marker"></i> Tambah Data Lelang</a>
                            </li>
						    <li class="">
                            <a href="data_lelang.php"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i> Tampil Data Lelang</a>
                            </li>
						    </ul>
						</li>
						
					  <!------/.* manage SP2BJ user sidebar*------->	
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;Managemen System
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs2" class="collapse">						
                            <li class="">
                            <a href="client_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Pokja Staff</a>
                            </li>
						    <li class="">
                            <a href="admin_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Pengaturan Admin</a>
                            </li>
						    </ul>
						</li>
						
						<!------/.* System Log sidebar*------->	
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs3"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;System log
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs3" class="collapse">						
                            <li class="">
                            <a href="activity_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Aktivitas Log</a>
                            </li>
						    <li class="">
                            <a href="user_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Aktivitas User Log</a>
                            </li>
						    </ul>
						</li>
						
					  <!------/.* notification sidebar*------->
					    <li class="">
				           <a href="notification.php"><i class="icon-chevron-right"></i><i class="icon-globe"></i>&nbsp;Daftar Notifikasi
				           <?php if($not_read == '0'){
				           }else{ ?>
					       <span class="badge badge-important"><?php echo $not_read; ?></span>
				           <?php } ?>
				           </a>
			            </li>
						
                         <li class="">
                           <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs4"><i class="icon-chevron-right"></i><i class="icon-search icon-large"></i>&nbsp;Pencarian Data 
						   <div class="muted pull-right"><i class="caret"></i></div></a>
                           </a>
                           <ul id="bs4" class="collapse">
                           <li>
                           <a href="#myModal" data-toggle="modal" tabindex="1"><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Berdasarkan Perusahaan</a>
                           </li>
                          
                           <li>
                           <a href="#myModal1" data-toggle="modal" tabindex="-1" ><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Berdasarkan Id Penyedia</a>
                           </li>
                           </ul>
                        </li>
                  </ul>					
				<?php include('search_form.php'); ?>
				<?php include('search_form1.php'); ?>										
    </div>