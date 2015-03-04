<!---
/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : tambah_peminjaman.php ,
     All rights reserved.
*/
--->

<title></title><h2>Form Tambah Data Peminjaman</h2>
<form method="post" action="<?php echo base_url()?>administrator/add_peminjaman">
<table>
    <tr height="40">
        <td>Nama</td>
        <td style="padding:5px;">:</td>
        <td>
            <input autocomplete="off" style="border:none;padding:5px;width:250px;border:1px solid #666;"type="text" name="nama">
        </td>
    </tr>
    <tr height="40">
        <td>Alamat</td>
        <td style="padding:5px;">:</td>
        <td>
            <textarea style="border:none;padding:5px;width:250px;border:1px solid #666;" name="alamat" cols="28" rows="5"></textarea>
        </td>
    </tr>
    <tr height="40">
        <td>Buku</td>
        <td style="padding:5px;">:</td>
        <td>
            <select style="border:none;padding:5px;width:250px;border:1px solid #666;" name="buku">
                <option value="none" style="padding:5px;">
                    - Pilih Buku -
                </option>
                <?php $sql = $this->db->get('library_books');
                foreach($sql->result() as $row){?>
                <option value="<?php echo $row->kode ?>" style="padding:5px;">
                    <?php echo $row->judul_books;?>
                </option>
                <?php } ?>
               
            </select>
        </td>
    </tr>
    
    </tr>
     <tr height="40">
        <td></td>
        <td></td>
        <td>
            <input style="border:none;padding:5px;border:1px solid #666;" type="submit" value="Tambah">
        </td>
    </tr>
</table>
</form>










<style type="text/css">
h2
{
    padding:0;
    margin:0;
    color:#666;
}
</style>