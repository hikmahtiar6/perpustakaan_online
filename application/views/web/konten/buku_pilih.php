<!---
/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : buku_pilih.php ,
     All rights reserved.
*/
--->


<?php foreach($bukupilih as $row) { $nmbook = $row->judul_books; $tgl = substr($row->tanggal,8,10).substr($row->tanggal,4,4).substr($row->tanggal,0,4);?>
                    <div class="konten-kanan">
                        <div class="wadah">
                            <div class="judul-konten"><?php echo $nmbook ?></div>
                            <div class="isi-konten">
                                <p>
                                <img class="image" src="<?php echo base_url()?>plugin/images/web/buku.jpg" width="100"/>
                                    <center><table width="400">
                                        <tr>
                                            <td width="100">Kode </td>
                                            <td>:</td>
                                            <td><?php echo $row->kode?></td>
                                        </tr>
                                        <tr>
                                            <td width="100">Kategori </td>
                                            <td>:</td>
                                            <td><?php echo $row->nama_kategori?></td>
                                        </tr>
                                        <tr>
                                            <td>Pengarang </td>
                                            <td>:</td>
                                            <td><?php echo $row->Pengarang?></td>
                                        </tr>
                                        <tr>
                                            <td>Penerbit </td>
                                            <td>:</td>
                                            <td><?php echo $row->penerbit?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Terbit </td>
                                            <td>:</td>
                                            <td><?php echo $tgl?></td>
                                        </tr>
                                        <?php } ?> 
                                    </table></center>
                                 </form>
                                 
                                 </p>
                            </div>


