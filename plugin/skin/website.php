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
    margin: auto;
    margin-top: 30px;
    box-shadow: 0 0 5px #000;
    border-radius: 7px;
    border: 0 0 1px solid #e8e8e8;
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
    font-weight: bold;
}

#menu .tmp-menu > li:hover
{
    background: linear-gradient(#0082be,#005b85);
    background: -webkit-linear-gradient(#0082be,#005b85);
    background: -moz-linear-gradient(#0082be,#005b85);
    background: -webkit-linear-gradient(#0082be,#005b85);
    border-radius: 3px;
}

#menu .tmp-menu > li:hover ul
{
    visibility: visible;
    margin-top: 5px;
    background: #CCC;
    margin-left: -5px;
    width: 100px;
}

#menu .tmp-menu > li a
{
    color: #FFF;
}

#menu .tmp-menu ul
{
    position: absolute;
    visibility: hidden;
}

#menu .tmp-menu > li ul li
{
    margin-left: -40px;
    padding: 5px;
}
</style>