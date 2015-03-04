<!---
/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : tambah_admin.php ,
     All rights reserved.
*/
--->

<title></title><h2>Form Tambah Admin</h2>
<form method="post" action="<?php echo base_url()?>administrator/add_admin">
<table>
	<tr height="40">
    	<td>Nama</td>
        <td style="padding:5px;">:</td>
        <td>
        	<input autocomplete="off" style="border:none;padding:5px;width:250px;border:1px solid #666;"type="text" name="nama">
        </td>
    </tr>
    <tr height="40">
    	<td>Username</td>
        <td style="padding:5px;">:</td>
        <td>
        	<input autocomplete="off" style="border:none;padding:5px;width:250px;border:1px solid #666;"type="text" name="username">
        </td>
    </tr>
    <tr height="40">
    	<td>Password</td>
        <td style="padding:5px;">:</td>
        <td>
        	<input autocomplete="off" style="border:none;padding:5px;width:250px;border:1px solid #666;" type="password" name="password">
        </td>
    </tr>
    <tr height="40">
    	<td>Status</td>
        <td style="padding:5px;">:</td>
        <td>
        	<select style="border:none;padding:5px;width:250px;border:1px solid #666;" name="status">
            	<option value="none" style="padding:5px;">
                	- Pilih Status Anda -
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
        	<input autocomplete="off" style="border:none;padding:5px;width:250px;border:1px solid #666;" type="email" name="email" required>
        </td>
    </tr>
    <tr height="40">
    	<td>Alamat</td>
        <td style="padding:5px;">:</td>
        <td>
        	<textarea style="border:none;padding:5px;width:250px;border:1px solid #666;" name="alamat" cols="28" rows="5"></textarea>
        </td>
    </tr>
    <tr height="40">
    	<td>Telepon</td>
        <td style="padding:5px;">:</td>
        <td>
        	<input autocomplete="off" style="border:none;padding:5px;width:250px;border:1px solid #666;" type="text" name="telepon">
        </td>
    </tr>
     <tr height="40">
    	<td></td>
        <td></td>
        <td>
        	<input style="border:none;padding:5px;border:1px solid #666;" type="submit" value="Daftar">
        </td>
    </tr>
</table>
</form>










<style type="text/css">
h2
{
	padding:0;
	margin:0;
	color:#666;
}
</style>