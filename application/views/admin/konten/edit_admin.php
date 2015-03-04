<!---
/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : edit_admin.php ,
     All rights reserved.
*/
--->

<?php foreach($sql as $edit) {?>

<title></title><h2>Form Edit Admin</h2>
<form method="post" action="<?php echo base_url()?>administrator/update_admin/<?php echo $edit->id."/".md5($edit->id).".html"?>">
<table>
    <tr height="40">
        <td>Nama</td>
        <td style="padding:5px;">:</td>
        <td>
            <input value="<?php echo $edit->nama_lengkap?>" autocomplete="off" style="border:none;padding:5px;width:250px;border:1px solid #666;"type="text" name="nama">
        </td>
    </tr>
    <tr height="40">
        <td>Username</td>
        <td style="padding:5px;">:</td>
        <td>
            <input value="<?php echo $edit->username?>" autocomplete="off" style="border:none;padding:5px;width:250px;border:1px solid #666;"type="text" name="username">
        </td>
    </tr>
    <tr height="40">
        <td>Password</td>
        <td style="padding:5px;">:</td>
        <td>
            <input autocomplete="off" style="border:none;padding:5px;width:250px;border:1px solid #666;" placeholder="Masukan Password Baru" type="password" name="password"> <font color="red">* Jika Perlu</font>
        </td>
    </tr>
    <tr height="40">
        <td>Status</td>
        <td style="padding:5px;">:</td>
        <td>
            <select style="border:none;padding:5px;width:250px;border:1px solid #666;" name="status">
                <option style="padding:5px;">
                    <?php echo $edit->status?>
                </option>
            
                <option value="none" style="padding:5px;">
                    
                </option>
                <option style="padding:5px;">
                    Super Admin
                </option>
                <option style="padding:5px;">
                    Admin
                </option>
                
            </select>
        </td>
    </tr>
    <tr height="40">
        <td>E-mail</td>
        <td style="padding:5px;"> : </td>
        <td>
            <input autocomplete="off" style="border:none;padding:5px;width:250px;border:1px solid #666;" type="email" value="<?php echo $edit->email?>" name="email" required>
        </td>
    </tr>
    <tr height="40">
        <td>Alamat</td>
        <td style="padding:5px;">:</td>
        <td>
            <textarea style="border:none;padding:5px;width:250px;border:1px solid #666;" name="alamat" cols="28" rows="5"><?php echo $edit->alamat?></textarea>
        </td>
    </tr>
    <tr height="40">
        <td>Telepon</td>
        <td style="padding:5px;">:</td>
        <td>
            <input autocomplete="off" style="border:none;padding:5px;width:250px;border:1px solid #666;" type="text" value="<?php echo $edit->telepon?>" name="telepon">
        </td>
    </tr>
     <tr height="40">
        <td></td>
        <td></td>
        <td>
            <input style="border:none;padding:5px;border:1px solid #666;" type="submit" value="Update">
        </td>
    </tr>
</table>
</form>
<?php } ?>










<style type="text/css">
h2
{
    padding:0;
    margin:0;
    color:#666;
}
</style>