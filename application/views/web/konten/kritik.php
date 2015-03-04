<!---
/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : kritik.php ,
     All rights reserved.
*/
--->
                    <div class="konten-kanan">
                        <div class="wadah">
                            <div class="judul-konten">Kritik dan Saran</div>
                            <div class="isi-konten">
                                <p>
                                <form method="post" action="<?php echo base_url()?>website/kritik">
                                    <center><table width="550px;">
                                        <tr>
                                            <td><font color="#DD6F00">Nama</td>
                                            <td>:</td>
                                            <td>
                                                <input name="nama" style="width:250px;padding:5px;border:none;border:1px solid #666;" type="text" autocomplete="off" />    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><font color="#DD6F00">E-Mail</td>
                                            <td>:</td>
                                            <td>
                                                <input name="email" required style="width:250px;padding:5px;border:none;border:1px solid #666;" type="email" autocomplete="off" />    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><font color="#DD6F00">Kritikan Anda</td>
                                            <td>:</td>
                                            <td>
                                                <textarea name="kritik" id="text" style="width:250px;padding:5px;border:none;border:1px solid #666;"></textarea>    
                                            </td>
                                            
                                            <script>
                                                CKEDITOR.replace( 'text',
                                                    {
                                                        toolbar : 'Basic', /* this does the magic */
                                                        uiColor : '#9AB8F3',
                                                        height : 100
                                                    });
                                            </script>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <input class="button" required style="padding:5px;border:none;" value="Kritik"  type="submit" />    
                                            </td>
                                        </tr>
                                    </table></center>
                                 </form>
                                 </p>
                            </div>


