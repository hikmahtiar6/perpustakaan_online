<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : tambah_kategori.php ,
     All rights reserved.
*/--->


<div id="page-heading">
    <h1>Tambah Berita</h1>
</div>
<form method="post" action="<?php echo base_url()?>administrator/add_berita">
    
    <table width="700">
        <tr height="50">
            <td>Judul</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="judul">
            </td>
        </tr>
        <tr height="50">
            <td>Link</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="link"> <font color="red">*contoh : berita-1-terbaru.html</font>
            </td>
        </tr>
        <tr height="50">
            <td>Isi Berita</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <textarea id="isi" style="padding: 5px;width: 250px;" name="isi">
                </textarea>
                 <script>
                    CKEDITOR.replace( 'isi',
                        {
                            height : 100
                        });
                </script>
            </td>
        </tr>
        <tr height="50">
            <td></td>
            <td colspan="2">
                <input style="background: none;border: none;padding: 5px;background: #0a9aff;position: relative;margin-bottom: 10px;border-radius:7px;color: #FFF;font-weight:bold;" value="Tambah" type="submit">
            </td>
        </tr>
    </table>

</form>
