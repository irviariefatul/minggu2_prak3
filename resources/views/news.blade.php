<!DOCTYPE html>
<html>
    <head>
        <title>News</title>
    </head>
    <head>
        <?php
        if($id == 1 OR $id == 3){
        ?>
            <h4>News dengan Ke-{{$id}}</h4>
            <h1>POLINEMA Melepas Mahasiswa Program BIDIKSIBA</h1>
            <hr>
            <p>POLINEMA menggelar acara pelepasan mahasiswa program Beasiswa Pendidikan Siswa Bukit Asam 
                (BIDIKSIBA) secara daring dan luring di Hotel Atria Malang pada Jumat (17/9/2021). Sebanyak 
                20 mahasiswa program BIDIKSIBA ini telah selesai menempuh pendidikan pada jenjang Diploma III 
                di beberapa prodi yang ada di POLINEMA...</p>
            <?php
        } else {
            ?>
            <h4>News dengan Ke-{{$id}}</h4>
            <h1>Sosialisasi Beasiswa dan Studi di Taiwan</h1>
            <p>Untuk mewujudkan visi sebagai perguruan tinggi vokasi yang berdaya saing global, Polinema semakin 
                giat untuk membantu mahasiswa dan lulusannya agar dapat melanjutkan studi di luar negeri. Bekerjasama 
                dengan PPI Taiwan dan Indonesia Taiwan Education Center in Surabaya (TECSID), Polinema menggelar Scholarship 
                Expo 2020 pada tanggal 06 Februari 2020...</p>
        <?php
        }
        ?>
    </head>
</html>