<!---
/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : tambah_peminjaman.php ,
     All rights reserved.
*/
--->
<?php foreach($peminjaman as $row) {?>
<title></title><h2>Form Edit Data Peminjaman</h2>
<form method="post" action="<?php echo base_url()?>administrator/update_peminjaman/<?php echo $row->id_p."/".md5($row->id_p).".html"?>">
<table>
	<tr height="40">
    	<td>Nama</td>
        <td style="padding:5px;">:</td>
        <td>
        	<input autocomplete="off" value="<?php echo $row->nama?>"style="border:none;padding:5px;width:250px;border:1px solid #666;"type="text" name="nama">
        </td>
    </tr>
    <tr height="40">
    	<td>Alamat</td>
        <td style="padding:5px;">:</td>
        <td>
        	<textarea style="border:none;padding:5px;width:250px;border:1px solid #666;" name="alamat" cols="28" rows="5"><?php echo $row->alamat?></textarea>
        </td>
    </tr>
    <tr height="40">
    	<td>Buku</td>
        <td style="padding:5px;">:</td>
        <td>
        	<select style="border:none;padding:5px;width:250px;border:1px solid #666;" name="buku">
            	<option value="<?php echo $row->kode?>">
                	<?php echo $row->judul_books?>
                </option>
                
            	<option value="none" style="padding:5px;">
                	
                </option>
                <?php $sqla = $this->db->get('library_books');
				foreach($sqla->result() as $rowa){?>
                <option value="<?php echo $rowa->kode ?>" style="padding:5px;">
                	<?php echo $rowa->judul_books;?>
                </option>
                <?php } ?>
               
            </select>
        </td>
    </tr>
    
    <tr height="40">
    	<td>Tanggal Kembali</td>
        <td style="padding:5px;">:</td>
        <td>
        	<input autocomplete="off" value="<?php echo $row->kembali?>"style="border:none;padding:5px;width:250px;border:1px solid #666;"type="text" name="kembali">
        </td>
    </tr>
    
    </tr>
     <tr height="40">
    	<td></td>
        <td></td>
        <td>
        	<input style="border:none;padding:5px;border:1px solid #666;" type="submit" value="Update">
        </td>
    </tr>
</table>
</form>
<?php } ?>










<style type="text/css">
h2
{
	padding:0;
	margin:0;
	color:#666;
}
</style>