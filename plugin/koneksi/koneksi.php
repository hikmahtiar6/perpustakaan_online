<?php
$createdb = "create database dbs_library_school";
mysql_query($createdb);


$db = "dbs_library_school";
$url = "http://localhost/ukk_hikmahtiar/";

error_reporting(E_ALL^E_NOTICE);
ob_start();


$koneksi = mysql_connect("localhost","root","") ;
mysql_select_db($db, $koneksi) or die ("koneksi gagal!") ;
?>