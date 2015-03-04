<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : edit_kategori.php ,
     All rights reserved.
*/---> 
<?php foreach ($sql as $row) { ?>
<div id="page-heading">
    <h1>Edit Kategori Buku</h1>
</div>
<form method="post" action="<?php echo base_url()?>administrator/update_kategori/<?php echo $row->kode_kategori?>/<?php echo md5($row->kode).".html"?>">
    
    <table>
        <tr height="50">
            <td>Kode</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" value="<?php echo $row->kode ?>" style="padding: 5px;width: 250px;" type="text" name="kode">
            </td>
        </tr>
        <tr height="50">
            <td>Nama Kategori</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" value="<?php echo $row->nama_kategori ?>" style="padding: 5px;width: 250px;" type="text" name="nm_kategori">
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                <input style="background: none;border: none;padding: 5px;background: #0a9aff;position: relative;margin-bottom: 10px;border-radius:7px;color: #FFF;font-weight:bold;" value="Edit" type="submit" name="editkt">
            </td>
        </tr>
    </table>

</form>
<?php } ?>
