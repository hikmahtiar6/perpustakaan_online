<!---
/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : ebook.php ,
     All rights reserved.
*/
--->

					<div class="konten-kanan">
                    	<div class="wadah">
                        	<div class="judul-konten">Daftar E-Book</div>
                            <div class="isi-konten">
                            	<p>
                                	<table width="100%" style="font-family: calibri;border: 1px solid #CCC;" cellspacing="0" border="1">
                        <tr style="background:#333;color: #f2f2f2;text-align: center;">
                            <td style="padding: 5px;">No</td>
                            <td>Nama File</td>
                            <td>Tanggal</td>
                            <td>Lihat E-Book</td>
                        </tr>
                        
                                                
<?php $no=1;foreach($ebook->result() as $row) { $tgl = substr($row->tanggal,8,2).substr($row->tanggal,4,4).substr($row->tanggal,0,4);?>
			<tr style="background:#f3f3f3;text-align: center;">
                            <td style="padding: 5px;"><?php echo $no ?></td>
                            <td><?php echo $row->nama_file?></td>
                            <td><?php echo $tgl?></td>
                            <td>
                            	<a target="_blank" href="<?php echo base_url()?>plugin/filpdf/<?php echo $row->nama_file?>">
                            		<img src="<?php echo base_url()?>plugin/administrator/images/admin/icons/pdf.png" width="30" />
                            	</a>
                            </td>
                            
			    
                        </tr><?php $no++; }?>

                    </table>
                               	</p>
                            </div>

                            
                        </div>
                        
                        