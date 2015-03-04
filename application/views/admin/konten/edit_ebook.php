<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : edit_ebook.php ,
     All rights reserved.
*/--->

<?php foreach($sql as $row) { $fil = explode(".",$row->nama_file);?>

<div id="page-heading">
    <h1>Edit File E-Book</h1>
</div>
<form method="post" action="<?php echo base_url()?>administrator/update_ebook/<?php echo $row->id."/".md5($row->id).".html"?>" enctype="multipart/form-data">
    
    <table>
        <tr height="50">
            <td>Nama File Baru</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input value="<?php echo $fil[0]?>" autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="namaf"><font color="red">(*Tidak Perlu Extensi)</font>
            </td>
        </tr>
        <tr height="50">
            <td>File</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" style="padding: 5px;width: 250px;" type="file" name="pdf"><font color="red">(*Upload jika perlu)</font>
            </td>
        </tr>
        <tr height="50">
            <td>Tanggal</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input value="<?php echo $row->tanggal?>"  autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="tanggal">
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                <input style="background: none;border: none;padding: 5px;background: #0a9aff;position: relative;margin-bottom: 10px;border-radius:7px;color: #FFF;font-weight:bold;" value="Edit" type="submit" name="saveeb">
            </td>
        </tr>
    </table>

</form>
<?php } ?>
