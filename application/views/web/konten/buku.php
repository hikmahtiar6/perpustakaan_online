<!---
/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : buku.php ,
     All rights reserved.
*/
--->

					<div class="konten-kanan">
                    	<div class="wadah">
                        	<div class="judul-konten">Daftar Buku-Buku</div>
                            <div class="isi-konten">
                            	<p>
                                	<table width="100%" style="font-family: calibri;border: 1px solid #CCC;" cellspacing="0" border="1">
                        <tr style="background:#333;color: #f2f2f2;text-align: center;">
                            <td style="padding: 5px;">No</td>
                            <td>Kode</td>
                            <td>Judul Buku</td>
                            <td>Pengarang</td>
                            <td>Penerbit</td>
                            <td>Kategori</td>
                            <td>Tanggal Terbit</td>
                        </tr>
                        
                                                
<?php $no=1;foreach($bukufull as $row) { $tgl = substr($row->tanggal,8,2).substr($row->tanggal,4,4).substr($row->tanggal,0,4);?>
			<tr style="background:#f3f3f3;text-align: center;">
                            <td style="padding: 5px;"><?php echo $no ?></td>
                            <td><?php echo $row->kode?></td>
                            <td><?php echo $row->judul_books?></td>
                            <td><?php echo $row->Pengarang?></td>
                            <td><?php echo $row->penerbit?></td>
                            <td><?php echo $row->nama_kategori?></td>
                            <td><?php echo $tgl?></td>
                            
			    
                        </tr><?php $no++; }?>

                    </table>
                               	</p>
                            </div>

                            
                        </div>
                        
                        