<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan 2.3</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>

    <body>
        <form method='POST'>
            Nama : <input type='text' name='nama' value='' size= '30'></br>
            Nilai UTS : <input type='text' name='nilai1' value='' size= '6'></br>
            Nilai UAS : <input type='text' name='nilai2' value='' size= '6'></br>
            Nilai Tugas/Praktikum : <input type='text' name='nilai3' value='' size= '6'></br>
            <button name='proses' value='tersimpan'>SIMPAN</button>
        </form>
        <?php
            $nama = $_POST['nama'];
            $nilai1 = $_POST['nilai1'];
            $nilai2 = $_POST['nilai2'];
            $nilai3 = $_POST['nilai3'];
            $tombol = $_POST['proses'];

            $nilai_total = $nilai1*30/100 + $nilai2*35/100 + $nilai3*35/100;

            $ket = ($nilai_total>= 55)? 'lulus':'gagal';

            if($nilai_total>=85 && $nilai_total<=100 ) $grade = 'A';
            else if ($nilai_total>=70 && $nilai_total<=84) $grade = 'B';
            else if ($nilai_total>=56 && $nilai_total<=69) $grade = 'C';
            else if ($nilai_total>=36 && $nilai_total<=55) $grade = 'D';
            else if ($nilai_total>=0 && $nilai_total<=35) $grade = 'E';
            else $grade = "I" ;

            switch($grade){
                case 'A':$predikat = 'sangat memuaskan' ;break;
                case 'B':$predikat = 'memuaskan' ;break;
                case 'C':$predikat = 'cukup' ;break;
                case 'D':$predikat = 'kurang' ;break;
                case 'E':$predikat = 'sangat kurang' ;break;

                default:$predikat = '';
            }

            if(isset($tombol))

            echo '</br>NAMA : ' .$nama;
            echo '</br>NILAI UTS : ' .$nilai1;
            echo '</br>NILAI UAS : ' .$nilai2;
            echo '</br>NILAI TUGAS PRAKTIKUM : ' .$nilai3; 
            echo '</br>NILAI TOTAL : ' .$nilai_total; 
            echo '</br>GRADE : ' .$grade; 
            echo '</br>PREDIKAT : ' .$predikat; 
            echo '</br>KETERANGAN : ' .$ket; 

        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>