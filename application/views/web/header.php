<!---
/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : header.php ,
     All rights reserved.
*/
--->
<?php ob_start(); 
error_reporting(E_ALL^E_NOTICE)
?>
<html>
    <head>
        <title></title><?php date_default_timezone_set("Asia/Jakarta");?>
        <!--<script src="<?php echo base_url()?>plugin/js/ckeditor/ckeditor.js"></script>-->
        <script src="<?php echo base_url()?>plugin/js/ckeditorsimple/ckeditor.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugin/js/slide/engine1/style.css" />
        <script type="text/javascript" src="<?php echo base_url()?>plugin/js/slide/engine1/jquery.js"></script>
        <script type="application/x-javascript" src="<?php echo base_url()?>plugin/js/jam/jam.js"></script>
        <link rel="stylesheet" href="<?php echo base_url()?>plugin/js/uitanggal/themes/base/jquery.ui.all.css">
		<script src="<?php echo base_url()?>plugin/js/uitanggal/jquery-1.5.1.js"></script>
        <script src="<?php echo base_url()?>plugin/js/uitanggal/ui/jquery.ui.core.js"></script>
        <script src="<?php echo base_url()?>plugin/js/uitanggal/ui/jquery.ui.widget.js"></script>
        <script src="<?php echo base_url()?>plugin/js/uitanggal/ui/jquery.ui.datepicker.js"></script>
        <script>
			$(function() {
				$( "#datepicker" ).datepicker();
			});
		</script>
        <style type='text/css'>
			.demo #datepicker{
				font-size:10px;
				margin:auto;
				padding:10px;
			}
		</style>
        
    
        
    </head>
    <body>
        
        <div id="up">
            <div class="up-two">
                <span class="img"><a title="Logo SMKN 4 BOGOR" href="#logosmk"><img src="<?php echo base_url()?>plugin/images/web/logosmk.png" width="40"></a></span>
                <span class="smk">Sistem Perpustakaan </span><br>
                <span class="smk"><a title="SMK NEGERI 4 BOGOR" href="<?php echo base_url() ?>">SMK NEGERI 4 KOTA BOGOR</a> </span>
            </div>
        </div>
        
        <div id="all">
        
        <div id="date">
        	<?php $hr = date('w');
				$arayhari = array("Minggu" , "Senin" , "Selasa" , "Rabu" , "Kamis" , "Jum`at" , "Sabtu");
				$hari = $arayhari[$hr];
    
				$tanggal = date('j');
				
				$bln = date('m');
				$araybulan = array("Januari" , "Febuari" , "Maret" , "April" , "Mei" , "Juni" , "Juli" , "Agustus" , "September" , "Oktober" , "Nopember" , "Desember");
				$bulan = $araybulan[$bln-1];
				
				$tahun = date('Y');
				
				$date = $hari . " , " . $tanggal . " " . $bulan . " " . $tahun;  
			?>
        	Waktu Hari ini : <?php echo $date ?>
            
        	| <span id="jam"></span> |
        </div>
        
        <script type="text/javascript" src="<?php echo base_url()?>plugin/js/pancibox/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>plugin/js/pancibox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugin/js/pancibox/fancybox/jquery.fancybox-1.3.4.css" media="screen" />