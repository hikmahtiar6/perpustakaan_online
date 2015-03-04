<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : tambah_kategori.php ,
     All rights reserved.
*/--->


<div id="page-heading">
    <h1>Tambah Kategori Buku</h1>
</div>
<form method="post" action="<?php echo base_url()?>administrator/add_kategori">
    
    <table>
        <tr height="50">
            <td>Kode</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="kode">
            </td>
        </tr>
        <tr height="50">
            <td>Nama Kategori</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="nm_kategori">
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                <input style="background: none;border: none;padding: 5px;background: #0a9aff;position: relative;margin-bottom: 10px;border-radius:7px;color: #FFF;font-weight:bold;" value="Tambah" type="submit" name="savekt">
            </td>
        </tr>
    </table>

</form>
