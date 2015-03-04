<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : edit_rak.php ,
     All rights reserved.
*/---> 


<div id="page-heading">
    <h1>Edit Rak Buku</h1>
</div>
<?php foreach($sql as $row) { ?>
<form method="post" action="<?php echo base_url()?>administrator/update_rak/<?php echo $row->kode_rak?>">
    
    <table>
        <tr height="50">
            <td>Nama Rak Buku</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" value="<?php echo $row->nama_rak ?>" style="padding: 5px;width: 250px;" type="text" name="nm_rak">
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                <input style="background: none;border: none;padding: 5px;background: #0a9aff;position: relative;margin-bottom: 10px;border-radius:7px;color: #FFF;font-weight:bold;" value="Edit" type="submit" name="editrak">
            </td>
        </tr>
    </table>

</form>
<?php }?>