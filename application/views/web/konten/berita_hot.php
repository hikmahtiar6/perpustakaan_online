<!---
/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : berita_hot.php ,
     All rights reserved.
*/
--->


<?php foreach($berita_hot as $row) { ?>
					<div class="konten-kanan">
                    	<div class="wadah">
                        	<div class="judul-konten"><?php echo $row->judul ?></div>
                            <div class="isi-konten">
                            	<p>
                                	<?php echo $row->isi?>
                                	
                                        <?php } ?>                                  
                                 </p>
                                 <hr />
                                 <font color="#0673CC"><?php echo $row->identitas?></font>
                                 <hr />
                            </div>


