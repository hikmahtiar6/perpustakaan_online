<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : data_user.php ,
     All rights reserved.
*/--->


<?php 



?>


<div id="page-heading">
    <h1>Daftar Anggota Sistem Perpustakaan</h1>
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
            
            <a style="padding: 10px;background: #0a9aff;position: relative;margin-bottom: 10px;border-radius:7px;color: #FFF;font-weight:bold;" id="pancibox3" href="<?php echo base_url()?>administrator/tambah_anggota">Tambah Anggota</a>

                    <div style="padding: 5px 5px 20px 5px;margin-top: 10px;">
            
                    </div>
            
            
                    <table style="font-family: calibri;border: 1px solid #CCC;" width="100%" cellspacing="0" border="1">
                        <tr style="background:#333;color: #f2f2f2;text-align: center;">
                            <td style="padding: 5px;">No</td>
                            <td>Nama</td>
                            <td>Username</td>
                            <td>Status</td>
                            <td>E-mail</td>
                            <td>Masa Aktif</td>
                            <td>Telepon</td>
                            <td>Pengaturan</td>
                        </tr>
                        
<?php $no=1;foreach($sql as $row) { ?>
            <tr style="background:#f3f3f3;text-align: center;">
                            <td valign="top" style="padding: 5px;"><?php echo $no ?></td>
                            <td valign="top"><?php echo $row->nama_lengkap?></td>
                            <td valign="top"><?php echo $row->username?></td>
                            <td valign="top"><?php echo '<font color="red">'.$row->status.'</font>'?></td>
                            <td valign="top"><?php echo $row->email?></td>
                            <td valign="top"> 
                            <?php
$tanggal=date('Y-m-d',strtotime(date("$row->waktu")."+30 day"));

$tgldb = substr($row->waktu,8,10);
$thndb = substr($row->waktu,0,4);
$blndb = substr($row->waktu,5,2);

$tgl = substr($tanggal,8,10);
$thn = substr($tanggal,0,4);
$bln = substr($tanggal,5,2);

$daftar = date("d-M-Y", mktime(0, 0, 0, date("$blndb"), date("$tgldb"), date("$thndb") ));
$kadaluarsa = date("d-M-Y", mktime(0, 0, 0, date("$bln"), date("$tgl"), date("$thn") ));



date_default_timezone_set("Asia/Jakarta");

// mencari mktime untuk tanggal 1 Januari 2011 00:00:00 WIB

$selisih1 =  mktime(0, 0, 0, date("$bln"), date("$tgl"), date("$thn"));

// mencari mktime untuk current time

$selisih2 = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));

// mencari selisih detik antara kedua waktu

$delta = $selisih1 - $selisih2;

// proses mencari jumlah hari

$a = floor($delta / 86400);

// proses mencari jumlah jam

$sisa = $delta % 86400;

$b  = floor($sisa / 3600);

// proses mencari jumlah menit

$sisa = $sisa % 3600;

$c = floor($sisa / 60);

// proses mencari jumlah detik

$sisa = $sisa % 60;

$d = floor($sisa / 1);

                            ?>
                            
                            
                            
                            
                            
                            
                            Dari <?php echo "<font color='green'>".$daftar."</font>"?> sampai <?php echo "<font color='red'>".$kadaluarsa." </font>Pukul <font color='blue'>00:00:00</font>"?>
                                <?php 
                                    echo "<br>Sisa Waktu: <font color='red'>".$a."</font> hari , <font color='red'>".$b."</font> jam , <font color='red'>".$c."</font> menit , <font color='red'>".$d."</font> detik lagi";
?>
                                



                                
                            </td>
                            <td valign="top"><?php echo $row->telepon?></td>
                            <td >
                                <!---<a id="pancibox2" href="<?php echo base_url()?>administrator/edit_buku/<?php echo $row->id?>/<?php echo md5($row->id).".html"?>" title="Edit"><img src="<?php echo base_url()?>plugin/administrator/images/admin/icons/edit.png" width="20"></a>
                                <span style="margin-left: 5px;">&nbsp;</span>-->
                                <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Ini?')" href="<?php echo base_url()?>administrator/delete_anggota/<?php echo $row->id?>/<?php echo md5($row->id).".html"?>" title="Delete"><img src="<?php echo base_url()?>plugin/administrator/images/admin/icons/delete.png" width="20"></a>
                            </td>
                
                        </tr><?php  $no++; }?>

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

