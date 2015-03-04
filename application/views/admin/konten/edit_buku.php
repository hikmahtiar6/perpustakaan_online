<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : edit_kategori.php ,
     All rights reserved.
*/--->
<?php foreach($sql as $rw) { $kod = $rw->kode?>
<div id="page-heading">
    <h1>Edit Kategori Buku</h1>
</div>
<form method="post" action="<?php echo base_url()?>administrator/update_buku/<?php echo $rw->id."/".md5($rw->id).".html"?>">
   
    <table>
        <tr height="50">
            <td>Kategori</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <select  style="padding: 5px 5px 5px 5px;width:250px;" name="kategori">
                <?php 
                    $s = $this->db->query("select * from library_kategori where kode = '$kod'");
                    foreach($s->result() as $riw){ $ktg = $riw->nama_kategori;}
                ?>
                    <option style="padding: 5px;" value="none"><?php echo $ktg?></option>
                    <option value="none"></option>
                    <?php foreach($kategori->result() as $row) {?>
                    <option style="padding: 5px;" value="<?php echo $row->kode?>"><?php echo $row->nama_kategori?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr height="50">
            <td>Judul Buku</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input value="<?php echo $rw->judul_books?>" autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="judul">
            </td>
        </tr>
        <tr height="50">
            <td>Pengarang</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input value="<?php echo $rw->Pengarang?>" autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="pengarang">
            </td>
        </tr>
        <tr height="50">
            <td>Penerbit</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input value="<?php echo $rw->penerbit?>" autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="penerbit">
            </td>
        </tr>
        
        <tr height="50">
            <td>Tanggal Buku</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input value="<?php echo $rw->tanggal?>" id="tanggal" autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="tgl">

            </td>
        </tr>
        <tr height="50">
            <td>Jumlah Buku</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input value="<?php echo $rw->jumlah?>" autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="jml">
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                <input style="background: none;border: none;padding: 5px;background: #0a9aff;position: relative;margin-bottom: 10px;border-radius:7px;color: #FFF;font-weight:bold;" value="Update" type="submit">
            </td>
        </tr>
        
    </table>

</form> 
<?php } ?>
