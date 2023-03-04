<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan 2.1</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>

    <body>
        <form method='POST'>
            Nama : <input type='text' name='nama' value='' size= '30'></br>
            Nilai : <input type='text' name='nilai' value='' size= '6'></br>
            <button name='proses' value='tersimpan'>SIMPAN</button>
        </form>
        <?php
            $nama = $_POST['nama'];
            $nilai = $_POST['nilai'];
            $tombol = $_POST['proses'];

            $ket = ($nilai>= 55)? 'lulus':'gagal';

            if($nilai>=85 && $nilai<=100 ) $grade = 'A';
            else if ($nilai>=70 && $nilai<=84) $grade = 'B';
            else if ($nilai>=56 && $nilai<=69) $grade = 'C';
            else if ($nilai>=36 && $nilai<=55) $grade = 'D';
            else if ($nilai>=0 && $nilai<=35) $grade = 'E';
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

            echo 'NAMA : ' .$nama; 
            echo '</br>NILAI : ' .$nilai; 
            echo '</br>GRADE : ' .$grade; 
            echo '</br>PREDIKAT : ' .$predikat; 
            echo '</br>KETERANGAN : ' .$ket; 

        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>