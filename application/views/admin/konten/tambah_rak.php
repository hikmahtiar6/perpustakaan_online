<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : tambah_rak.php ,
     All rights reserved.
*/--->

<div id="page-heading">
    <h1>Tambah Rak Buku</h1>
</div>

<form method="post" action="<?php echo base_url()?>administrator/add_rak">
    
    <table>
        <tr height="50">
            <td>Nama Rak Buku</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="nm_rak">
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                <input style="background: none;border: none;padding: 5px;background: #0a9aff;position: relative;margin-bottom: 10px;border-radius:7px;color: #FFF;font-weight:bold;" value="Tambah" type="submit" name="saverak">
            </td>
        </tr>
    </table>

</form>
