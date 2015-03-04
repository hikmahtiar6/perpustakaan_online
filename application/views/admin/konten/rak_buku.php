<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : rak_buku.php ,
     All rights reserved.
*/--->

<div id="page-heading" >
    <h1>Daftar Rak Buku</h1>
</div>
<!-- end page-heading -->

<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
    <th rowspan="3" class="sized"><img src="<?php echo base_url()?>plugin/administrator/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
    <th class="topleft"></th>
    <td id="tbl-border-top">&nbsp;</td>
    <th class="topright"></th>
    <th rowspan="3" class="sized"><img src="<?php echo base_url()?>plugin/administrator/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
    <td id="tbl-border-left"></td>
    <td>
    <!--  start content-table-inner ...................................................................... START -->
    <div id="content-table-inner">

            
          
			<!--  start message-yellow -->
            <!--
            <div id="message-yellow">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="yellow-left">You have a new message. <a href="">Go to Inbox.</a></td>
                <td class="yellow-right"><a class="close-yellow"><img src="images/table/icon_close_yellow.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            -->
            <!--  end message-yellow -->
            
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                <div id="table-content">
                <p align="center"></p>
                <div style="line-height:20px;font-size:14px;">
		    
		    <a style="padding: 10px;background: #0a9aff;position: relative;margin-bottom: 10px;border-radius:7px;color: #FFF;font-weight:bold;" id="pancibox3" href="<?php echo base_url()?>administrator/tambah_rak">Tambah Data Rak Buku</a>

                    <div style="padding: 5px 5px 20px 5px;margin-top: 10px;">
			
			
		    </div>
		    
		    
                    <table style="font-family: calibri;border: 1px solid #CCC;" width="100%" cellspacing="0" border="1">
                        <tr style="background:#333;color: #f2f2f2;text-align: center;">
                            <td style="padding: 5px;">No</td>
                            <td>Nama Rak</td>
                            <td>Pengaturan</td>
                        </tr>
                        

			<?php $no=1;foreach($sql as $row) { ?>
			<tr style="background:#f3f3f3;text-align: center;">
                            <td style="padding: 5px;"><?php echo $no;?></td>
                            <td><?php echo $row->nama_rak?></td>
                            <td>
                                <a id="pancibox2" href="<?php echo base_url()?>administrator/edit_rak/<?php echo $row->kode_rak."/".md5($row->nama_rak).".html"?>" title="Edit"><img src="<?php echo base_url()?>plugin/administrator/images/admin/icons/edit.png" width="20"></a>
                                <span style="margin-left: 5px;">&nbsp;</span>
                                <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Ini?')" href="<?php echo base_url()?>administrator/delete_rak/<?php echo $row->kode_rak."/".md5($row->nama_rak).".html"?>" title="Delete"><img src="<?php echo base_url()?>plugin/administrator/images/admin/icons/delete.png" width="20"></a>
                            </td>
                        </tr><?php $no++;} ?>
              </table>
              <div class="paginator"><?php echo $paginator ?></div>
	    
                    
                </div>
                <br />
                
                <p align="center"></p>
            
                <!-- end id-form  -->
              </td>
              <td>
              	<!--  start related-activities include pengumuman--> 
                <!-- end related-activities -->
              </td>
            </tr>
            <tr>
              <td><img src="<?php echo base_url()?>plugin/administrator/images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
              <td></td>
            </tr>
          </table>

      

	<div class="clear"></div>
     
    </div>
    <!--  end content-table-inner ............................................END  -->
    </td>
    <td id="tbl-border-right"></td>
</tr>
<tr>
    <th class="sized bottomleft"></th>
    <td id="tbl-border-bottom">&nbsp;</td>
    <th class="sized bottomright"></th>
</tr>
</table>


