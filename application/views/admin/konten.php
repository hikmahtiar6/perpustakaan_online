<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : konten.php ,
     All rights reserved.
*/--->


<?php 
    $sessi = $_SESSION['username'];
    $sql=$this->db->query("select * from library_users where username = '$sessi'");
    foreach($sql->result() as $dat)
    {
        $nama = $dat->nama_lengkap;
        $user = $dat->username;
        $status = $dat->status;
        $email = $dat->email;
        $alamat = $dat->alamat;
        $tlp = $dat->telepon;
    }
?>
<div id="page-heading">
    <h1>Selamat Datang <font color="#BBB"><?php echo $nama?></font> <?php echo '<font color="#FF9933"> ( '.$status.')</font>'?></h1>
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
            
            <div id="message-green">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="green-left" style="font-size:14px;">Terima Kasih Anda Telah Login di Sistem Perpustakaan SMK Negeri 4 Kota Bogor </td>
                <td class="green-right"><a class="close-green"><img src="<?php echo base_url()?>plugin/administrator/images/table/icon_close_green.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
          
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
            <h1 style="margin-left:10px;padding-bottom:10px;padding-top:10px;">Data Diri Anda</h1>
             <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                <div id="table-content">
                <p align="center"></p>
                <div style="line-height:20px;font-size:14px;">
            <table style="line-height:20px;font-size:16px;font-family: calibri;">
            <tr>
                <td style="padding: 5px;">Nama </td>
                <td style="padding: 5px;">:</td>
                <td style="padding: 5px;color: red;"><?php echo $nama?></td>
            </tr>
            <tr>
                <td style="padding: 5px;">Username</td>
                <td style="padding: 5px;">:</td>
                <td style="padding: 5px;color: red;"><?php echo $user?></td>
            </tr>
            <tr>
                <td style="padding: 5px;">Email</td>
                <td style="padding: 5px;">:</td>
                <td style="padding: 5px;color: red;"><?php echo $email?></td>
            </tr>
            <tr>
                <td style="padding: 5px;">Alamat</td>
                <td style="padding: 5px;">:</td>
                <td style="padding: 5px;color: red;"><?php echo $alamat?></td>
            </tr>
            <tr>
                <td style="padding: 5px;">Telepon</td>
                <td style="padding: 5px;">:</td>
                <td style="padding: 5px;color: red;"><?php echo $tlp?></td>
            </tr>
            </table>
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
