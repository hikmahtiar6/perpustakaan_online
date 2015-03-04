
        <script language='JavaScript'>
            var txt="Selamat Datang di Perpustakaan Online SMK NEGERI 4 Kota Bogor |  ";
            var kecepatan=200;var segarkan=null;function bergerak() { document.title=txt;
            txt=txt.substring(1,txt.length)+txt.charAt(0);
            segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
        </script>