<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
			 <?php include('dashboard_slidebar.php'); ?>		
                <div class="span9" id="content">
                    <div class="row-fluid">
         	         <?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
			         $row = mysql_fetch_array($query);			
			         ?>
                    <div class="col-lg-12">
                      <div class="alert alert-success alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <img id="avatar1" class="img-responsive" src="<?php echo $row['adminthumbnails']; ?>"><strong> Selamat Datang! <?php echo $user_row['firstname']." ".$user_row['lastname'];  ?></strong>
                      </div>
                    </div>
     
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard</div>
								<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
									
<div class="block-content collapse in">
<div id="page-wrapper">
		<?php 
	     $xclient = mysql_query("select * from client");
		 $id_client= mysql_num_rows($xclient);
		 ?>			
					<div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                       <i class="fa fa-group fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $id_client;?></div>
                                        <div>Daftar User Pokja</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="client_user.php">
                                <?php
                                if($_SESSION['admin']) :
                                ?>
                                <div class="modal-footer">
                                    <span class="pull-left">Silahkan Click Lebih Detail..</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                                <?php
                                endif;
                                ?>
                            </a>
                        </div>
                    </div>         			  

		<?php 
	     $admin = mysql_query("select * from admin");
	     //LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		 //where dev_status='Repaired'")or die(mysql_error());
		 $id_admin = mysql_num_rows($admin);
		 ?>				
					<div class="span6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                       <i class="fa fa-cogs fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $id_admin;?></div>
                                        <div>Administrator</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <?php
                            if($_SESSION['admin']) :
                            ?>
                            <a href="admin_user.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Silahkan Click Lebih Detail..</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                            <?php
                            endif;
                            ?>
                        </div>
                    </div>   				
              </div>	       
        </div>  
<div class="block-content collapse in">
<div id="page-wrapper">
		<?php 
	     $new = mysql_query("select * from rka_skpd");
	     //LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		 //where dev_status='New'")or die(mysql_error());
		 $jml_koderek = mysql_num_rows($new);
		 ?>			
                     <div class="span6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-sign-in fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $jml_koderek;?></div>
                                        <div>Kode RKA dan Lengkapi Berkas</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="kode_dpa.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Silahkan Click Lebih Detail..</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
                    
		 <?php 
	     $data_lelang = mysql_query("select * from data_lelang");
	     //LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		 //where data_lelang='Damage'")or die(mysql_error());
		 $data_lelang = mysql_num_rows($data_lelang);
		 ?>	
			 <div class="span6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-clipboard fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $data_lelang;?></div>
                                        <div>Data Lelang</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="data_lelang.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Silahkan Click Lebih Detail..</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
              </div>	       
        </div>                      
<div class="block-content collapse in">
<div id="page-wrapper"> 
        <?php 
	     $penyedia = mysql_query("select * from penyedia");
	     //LEFT JOIN device_name ON //stdevice.dev_id=device_name.dev_id")or die(mysql_error());
		 $penyedia = mysql_num_rows($penyedia);
		 ?>
                <div class="row-fluid">				
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                        <i class="fa  fa-retweet fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $penyedia; ?></div>
                                        <div>Data Penyedia dan Pejabat KPA</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="all_penyedia.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Click Input Data Penyedia</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                            <a href="all_pejabat.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Click Input Data Pejabat</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                            
                        </div>
                    </div>

        <?php 
	     $jml_cetak = mysql_query("select * from cetak");
	     //LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		 //where dev_status='Dump'")or die(mysql_error());
		 $id_cetak = mysql_num_rows($jml_cetak);
		 ?>			   
			<div class="span6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                       <i class="fa fa-print fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $data_lelang;?></div>
                                        <div>Cetak Surat Perintak Kerja (SPK)</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="area_cetak.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Cetak Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
               </div>	       
        </div>              
				
			                 </div>
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                 
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>
