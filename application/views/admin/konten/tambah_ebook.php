<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : tambah_ebook.php ,
     All rights reserved.
*/--->


<div id="page-heading">
    <h1>Tambah File E-Book</h1>
</div>
<form method="post" action="<?php echo base_url()?>administrator/add_ebook" enctype="multipart/form-data">
    
    <table>
        <tr height="50">
            <td>Nama File Baru</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="namaf"><font color="red">(*Tidak Perlu Extensi)</font>
            </td>
        </tr>
        <tr height="50">
            <td>File</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" style="padding: 5px;width: 250px;" type="file" name="pdf">
            </td>
        </tr>
        <tr height="50">
            <td>Tanggal</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input value="1996-06-28  *contoh" onblur="if(this.value=='')this.value='1996-06-28  *contoh'"  onfocus="if(this.value=='1996-06-28  *contoh')this.value=''" autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="tanggal"><font color="red">(*Masukan Tahun-Bulan-Tanggal)</font>
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                <input style="background: none;border: none;padding: 5px;background: #0a9aff;position: relative;margin-bottom: 10px;border-radius:7px;color: #FFF;font-weight:bold;" value="Tambah" type="submit" name="saveeb">
            </td>
        </tr>
    </table>

</form>

