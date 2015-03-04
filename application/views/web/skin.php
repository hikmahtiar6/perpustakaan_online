<!---
/*
     programmer : 'Hikmahtiar' ,
     Copyright (c) : 2013 ,
     script : website.php ,
     All rights reserved.
*/
--->

<style type="text/css">
body
{
    background: #e0e8ec;
    margin: 0;
    padding: 0;
    font-family: calibri;
}

a
{
    text-decoration: none;
}

li
{
    list-style: none;    
}

::-webkit-scrollbar
	{
		width:5px;
		background:#000;
	}
	::-webkit-scrollbar-thumb
	{
		background:#CCC;
		border-radius:5px;
	}

#up
{
    padding: 5px 0 5px 0;
    background: linear-gradient(#333,#000);
    background: -webkit-linear-gradient(#333,#000);
    background: -moz-linear-gradient(#333,#000);
    background: -o-linear-gradient(#333,#000);
    margin: auto;
    box-shadow: 0 3px 7px #000;
}

#up .up-two
{
    width: 950px;
    margin: auto;
    height: 45px;
    color: #FFF;
}

#up .up-two .img
{
    float: left;
    position: relative;
}

#up .up-two .smk
{
    margin-left: 10px;
    position: relative;
}

#up .up-two .smk a
{
    color: #FFF;
}

#all
{
    width: 950px;
	clear:both;
    margin: auto;
    margin-top: 30px;
    /*box-shadow: 0 0 5px #000;*/
    border-radius: 7px;
    border: 0 0 1px solid #e8e8e8;
	padding-bottom:50px;
}

#date
{
	padding:5px;
	color:#666;
}

#menu
{
    background: linear-gradient(#009ce5,#006a9c);
    background: -webkit-linear-gradient(#009ce5,#006a9c);
    background: -moz-linear-gradient(#009ce5,#006a9c);
    background: -o-linear-gradient(#009ce5,#006a9c);
    border-radius: 7px 7px 0 0;
    padding: 7px 0 7px 0;
}

#menu .tmp-menu
{
    width: 900px;
    margin: auto;
}

#menu .tmp-menu > li
{
    display: inline-block;
    color: #FFF;
    padding: 5px;
}

#menu .tmp-menu > li:hover
{
    background: linear-gradient(#0082be,#005b85);
    background: -webkit-linear-gradient(#0082be,#005b85);
    background: -moz-linear-gradient(#0082be,#005b85);
    background: -webkit-linear-gradient(#0082be,#005b85);
    border-radius: 3px;
}

#menu .tmp-menu .pilih
{
    background: linear-gradient(#0082be,#005b85);
    background: -webkit-linear-gradient(#0082be,#005b85);
    background: -moz-linear-gradient(#0082be,#005b85);
    background: -webkit-linear-gradient(#0082be,#005b85);
    border-radius: 3px;
	color:#ccc;
}

#menu .tmp-menu .pilih a
{
	color:#ccc;
}

#menu .tmp-menu > li a
{
    color: #FFF;
}

#menu .tmp-menu > li:hover a
{
	color:#ccc;
}

#tutup-slide
{
	z-index:1000;
	width:950px;
	position:absolute;
	height:25px;
	background:white;
}

#konten
{
	/*border:1px solid #999;*/
	margin-top:35px;
	min-height:300px;
	float:left;
	width:950px;
	border-radius:0 0 7px 7px;
}

#konten .konten-kiri
{
	float:left;
	width:300px;
	min-height:300px;
}

#konten .konten-kanan
{
	float:right;
	width:640px;
	min-height:300px;
}

#konten .konten-kiri .wadah
{
	margin:auto;
	border:1px solid #CCC;
	width:270px;
	border-radius:7px;
	background:#FFF;
	box-shadow:0 0 10px #CCC;
	padding:5px;
}

#konten .konten-kiri .wadah .isi .ahref
{
	color:#666;
}

#konten .konten-kiri .wadah .isi .ahref:hover
{
	color:red;
}

#konten .konten-kiri .wadah h2
{
	padding:5px;
	font-size:20px;
	margin:auto;
	text-align:center;
	color:#0074E8;
	background:-webkit-linear-gradient(#C4C4C4,#A8A8A8);
	border-radius:7px;
}

#konten .konten-kiri .isi
{
	width:250px;
	margin:auto;
}

#konten .konten-kiri .isi .button
{
	background:none;
	border:none;
	background: linear-gradient(#009ce5,#006a9c);
    background: -webkit-linear-gradient(#009ce5,#006a9c);
    background: -moz-linear-gradient(#009ce5,#006a9c);
    background: -o-linear-gradient(#009ce5,#006a9c);
	border-radius: 3px;
	color:#FFF;
}

#konten .konten-kiri .isi .button:hover
{
	background: linear-gradient(#0082be,#005b85);
    background: -webkit-linear-gradient(#0082be,#005b85);
    background: -moz-linear-gradient(#0082be,#005b85);
    background: -webkit-linear-gradient(#0082be,#005b85);
    
}

#konten .konten-kiri .wadah .isi > li
{
	width:200px;
	margin:5px auto;
	border:1px solid #eee;
	border-radius:7px;
	padding:5px 10px 5px 10px;
	font-size:15px;
}

#konten .konten-kiri .wadah .isi > li:hover
{
	background:#48A4FF;
}

#konten .konten-kiri .wadah .isi > li:hover a
{
	color:#FFF;
}

#konten .konten-kiri .wadah .isi > li a
{
	color:#000;
}

#konten .konten-kiri .wadah .isi > li a:hover
{
	color:#FFF;
}

#konten .konten-kanan .wadah
{
	background:#FFF;
	border:5px solid #CCC;
	width:550px;
	padding:10px 10px 5px 10px;
	margin:auto;
	border-radius:7px;
	box-shadow:0 0 10px #CCC;
}

#konten .konten-kanan .wadah .judul-konten
{
	font-size:25px;
	text-align:center;
	padding:5px;
	font-weight:bold;
	color:#FFF;
	border-radius:5px;
	background:linear-gradient(#787878,#515151);
	background:-webkit-linear-gradient(#787878,#515151);
	background:-moz-linear-gradient(#787878,#515151);
	background:-o-linear-gradient(#787878,#515151);
}

#konten .konten-kanan .wadah .judul-konten a
{
	color:#FFF;
}

#konten .konten-kanan .wadah .judul-konten a:hover
{
	color:#D7D7D7;
}

#konten .konten-kanan .wadah .isi-konten
{
	color:#666;
	padding-bottom:10px;
	padding-top:10px;
}

#konten .konten-kanan .wadah .isi-konten p
{
	padding:0;
}

#konten .konten-kanan .wadah .isi-konten p .tab
{
	margin-left:25px;
}

#konten .konten-kanan .wadah .isi-konten p .image
{
	float:left;
}

.button
{
	background:none;
	border:none;
	background: linear-gradient(#009ce5,#006a9c);
    background: -webkit-linear-gradient(#009ce5,#006a9c);
    background: -moz-linear-gradient(#009ce5,#006a9c);
    background: -o-linear-gradient(#009ce5,#006a9c);
	border-radius: 3px;
	color:#FFF;
}

.button:hover
{
	background: linear-gradient(#0082be,#005b85);
    background: -webkit-linear-gradient(#0082be,#005b85);
    background: -moz-linear-gradient(#0082be,#005b85);
    background: -webkit-linear-gradient(#0082be,#005b85);
    
}

#footer
{
	padding:10px 0 10px 0;
	min-height:10px;
	width:950px;
	float:left;
	color:#666;
	font-size:13px;
	margin-top:30px;
	border-bottom:solid 1px #999;
	border-top:solid 1px #999;
}

#footer a
{
	color:#666;
}

#footer a:hover
{
	color:#000;
	text-decoration:underline;
}

#footer img
{
	float:left;
	padding-right:10px;
}

#clear
{
	height:30px;
	float:left;
	width:950px;
}
</style>