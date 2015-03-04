<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : laporan.php ,
     All rights reserved.
*/--->

<div id="page-heading" >
    <h1>Daftar Laporan Sistem Perpustakaan</h1>
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

            
                    <table style="font-family: calibri;border: 1px solid #CCC;" width="100%" cellspacing="0" border="1">
                        <tr style="background:#333;color: #f2f2f2;text-align: center;">
                            <td style="padding: 5px;">No</td>
                            <td>Laporan</td>
                            <td>Jumlah</td>
                <td>Cetak</td>
                        </tr>
                        

            
            <tr style="background:#f3f3f3;text-align: center;">
                            <td style="padding: 5px;">1</td>
                            <td>Data Rak Buku</td>
                            <td>
                            <?php 
                                $datrak = $this->db->query("select count(kode_rak) as jml from library_rak_buku");
                                foreach($datrak->result() as $jl) 
                                {
                                    echo $jl->jml;
                                }
                            ?>
                            </td>
                <td>
                <a target="_blank" href="<?php echo base_url()?>administrator/pdfrak" title="pdf"><img src="<?php echo base_url()?>plugin/administrator/images/admin/icons/pdf.png" width="20"></a>
                
                </td>
                        </tr>
                        
                        <tr style="background:#f3f3f3;text-align: center;">
                            <td style="padding: 5px;">2</td>
                            <td>Data Kategori Buku</td>
                            <td>
                            <?php 
                                $datrak = $this->db->query("select count(kode_kategori) as jml from library_kategori");
                                foreach($datrak->result() as $jl) 
                                {
                                    echo $jl->jml;
                                }
                            ?>
                            </td>
                <td>
                <a target="_blank" href="<?php echo base_url()?>administrator/pdfkategori" title="pdf"><img src="<?php echo base_url()?>plugin/administrator/images/admin/icons/pdf.png" width="20"></a>
                
                </td>
                        </tr>
                        
                        <tr style="background:#f3f3f3;text-align: center;">
                            <td style="padding: 5px;">3</td>
                            <td>Data Buku</td>
                            <td>
                            <?php 
                                $datrak = $this->db->query("select count(kode) as jml from library_books");
                                foreach($datrak->result() as $jl) 
                                {
                                    echo $jl->jml;
                                }
                            ?>
                            </td>
                <td>
                <a target="_blank" href="<?php echo base_url()?>administrator/pdfbuku" title="pdf"><img src="<?php echo base_url()?>plugin/administrator/images/admin/icons/pdf.png" width="20"></a>
                
                </td>
                        </tr>
                        
                        <tr style="background:#f3f3f3;text-align: center;">
                            <td style="padding: 5px;">4</td>
                            <td>Data E-Book</td>
                            <td>
                            <?php 
                                $datrak = $this->db->query("select count(id) as jml from library_ebooks");
                                foreach($datrak->result() as $jl) 
                                {
                                    echo $jl->jml;
                                }
                            ?>
                            </td>
                <td>
                <a target="_blank" href="<?php echo base_url()?>administrator/pdfebook" title="pdf"><img src="<?php echo base_url()?>plugin/administrator/images/admin/icons/pdf.png" width="20"></a>
                
                </td>
                        </tr>
                        
                        <tr style="background:#f3f3f3;text-align: center;">
                            <td style="padding: 5px;">5</td>
                            <td>Data Pengunjung</td>
                            <td>
                            <?php 
                                $datrak = $this->db->query("select count(id) as jml from library_pengunjung");
                                foreach($datrak->result() as $jl) 
                                {
                                    echo $jl->jml;
                                }
                            ?>
                            </td>
                <td>
                <a target="_blank" href="<?php echo base_url()?>administrator/pdfpengunjung" title="pdf"><img src="<?php echo base_url()?>plugin/administrator/images/admin/icons/pdf.png" width="20"></a>
                
                </td>
                        </tr>
                        
                        <tr style="background:#f3f3f3;text-align: center;">
                            <td style="padding: 5px;">6</td>
                            <td>Data Anggota</td>
                            <td>
                            <?php 
                                $datrak = $this->db->query("select count(id) as jml from library_anggota");
                                foreach($datrak->result() as $jl) 
                                {
                                    echo $jl->jml;
                                }
                            ?>
                            </td>
                <td>
                <a target="_blank" href="<?php echo base_url()?>administrator/pdfanggota" title="pdf"><img src="<?php echo base_url()?>plugin/administrator/images/admin/icons/pdf.png" width="20"></a>
                
                </td>
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
