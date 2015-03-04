<!---
/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : konten-kiri.php ,
     All rights reserved.
*/
--->

            <div id="konten">
                <div class="konten-jaga">
                    <div class="konten-kiri">
                        <div class="wadah">
                            <h2>Form Login Anggota</h2>
                            <div class="isi">
                            <form method="post" action="<?php echo base_url()?>website/masuk_anggota">
                                <table>
                                    <tr height="50">
                                        <td><font color="#DD6F00">Username</td>
                                        <td>:</td>
                                        <td>
                                            <input autocomplete="off" style="border:none;border:1px solid #666;padding:5px;" type="text" name="username">
                                        </td>
                                    </tr>
                                    <tr height="50">
                                        <td><font color="#DD6F00">Password</td>
                                        <td>:</td>
                                        <td>
                                            <input autocomplete="off" style="border:none;border:1px solid #666;padding:5px;" type="password" name="password">
                                        </td>
                                    </tr>
                                    <tr height="20">
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <input class="button" style="padding:5px;" type="submit" value="Login">
                                            <input class="button" style="padding:5px;" type="reset" value="Reset">
                                        </td>
                                    </tr>
                                </table>
                                <a id="pancibox3" class="ahref" title="Daftar Sebagai Anggota" href="<?php echo base_url()?>website/tambah_anggota">Daftar Anggota</a> | 
                                <a id="pancibox2" class="ahref" title="" href="<?php echo base_url()?>website/lupa">Lupa Password ?</a>


                            </form>
                            </div>
                        </div>
                        
                        <br>
                        
                                                
                        <div class="wadah">
                            <h2>Buku Terbaru</h2>
                            <div class="isi">
                            <?php foreach($buku as $book) { ?>
                                <li><a href="<?php echo base_url()?>website/buku_terbaru/<?php echo $book->id.'/'. md5($book->id).'.html'?>"><?php echo $book->judul_books?></a></li>
                            <?php } ?>
                            </div>
                        </div>
                        
                        <br>
                        
                        <div class="wadah">
                            <div class="demo">
                                <h2>Kalender</h2>
                                <div class="isi">
                                    <center><div id="datepicker"></div></center>
                                </div>
    
                            </div>
                        </div>
                        
                        <br>
                        
                        <div class="wadah">
                            <h2>Berita Perpustakaan</h2>
                            <div class="isi">
                            <?php foreach($berita as $kiw) {?>
                                <li><a href="<?php echo base_url()?>website/berita_hot/<?php echo $kiw->link.'/'.md5($kiw->id_berita).".html"?>"><?php echo $kiw->judul?></a></li>
                            <?php } ?>
                            </div>
                        </div>
                        
                        <br />
                        
                        <div class="wadah">
                            <h2>Visitor</h2>
                            <div class="isi">
                            
                            
                            
<?php 
$ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
$tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
$waktu   = time(); //
 
// Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
$s = mysql_query("SELECT * FROM library_visit WHERE ip='$ip' AND tanggal='$tanggal'");

// Kalau belum ada, simpan data user tersebut ke database
if(mysql_num_rows($s) == 0){
    mysql_query("INSERT INTO library_visit(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
}
// Jika sudah ada, update
else{
    mysql_query("UPDATE library_visit SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
}

$pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM library_visit WHERE tanggal='$tanggal' GROUP BY ip")); // Hitung jumlah pengunjung
$totalpengunjung  = mysql_query("SELECT COUNT(hits) as jum FROM library_visit"); // hitung total pengunjung
while ($tot = mysql_fetch_object($totalpengunjung))
{
    $totaa = $tot->jum;
}
$bataswaktu       = time() - 300;
$pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM library_visit WHERE online > '$bataswaktu'")); // hitung pengunjung online
?>&nbsp;&nbsp;
&bull;
Hari ini : <?php echo $pengunjung; ?> <br>&nbsp;&nbsp;
&bull;
Total : <?php echo $totaa; ?><br>&nbsp;&nbsp;
&bull;
Pengunjung Online : <?php echo $pengunjungonline; ?><br>&nbsp;&nbsp;                      
                                
                                
                                
                                
                                
                                
                            </div>
                        </div>
                        
                        <br>
                        
                                                
                    </div>