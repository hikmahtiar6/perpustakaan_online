<!---/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : tambah_buku.php ,
     All rights reserved.
*/--->


<div id="page-heading">
    <h1>Tambah Buku</h1>
</div>
<form method="post" action="<?php echo base_url()?>administrator/add_buku">
    
    <table>
    	<tr height="50">
            <td>Kategori</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <select  style="padding: 5px 5px 5px 5px;width:250px;" name="kategori">
                	<option style="padding: 5px;" value="none">- Pilih Kategori -</option>
                    <?php foreach($sql->result() as $row) { ?>
                    <option style="padding: 5px;" value="<?php echo $row->kode?>"><?php echo $row->nama_kategori?></option>
                    <?php }?>
                    
                </select>
            </td>
        </tr>
        <tr height="50">
            <td>Judul Buku</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="judul">
            </td>
        </tr>
        <tr height="50">
            <td>Pengarang</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="pengarang">
            </td>
        </tr>
        <tr height="50">
            <td>Penerbit</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="penerbit">
            </td>
        </tr>
        
        <tr height="50">
            <td>Tanggal Buku</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input value="1996-06-28  *contoh" onblur="if(this.value=='')this.value='1996-06-28  *contoh'"  onfocus="if(this.value=='1996-06-28  *contoh')this.value=''" id="tanggal" autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="tgl"><font color="red">(*Masukan Tahun-Bulan-Tanggal)</font>

            </td>
        </tr>
        <tr height="50">
            <td>Jumlah Buku</td>
            <td style="padding: 0 5px 0 5px;"> : </td>
            <td>
                <input autocomplete="off" style="padding: 5px;width: 250px;" type="text" name="jml">
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                <input style="background: none;border: none;padding: 5px;background: #0a9aff;position: relative;margin-bottom: 10px;border-radius:7px;color: #FFF;font-weight:bold;" value="Tambah" type="submit" name="savebuk">
            </td>
        </tr>
        
    </table>

</form>        
        
        
