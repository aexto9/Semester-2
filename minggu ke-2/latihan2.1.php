<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan 2.1</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>

    <body>
        <form method='GET'>
            Nama : <input type='text' name='nama' value='' size= '30'></br>
            Mata Kuliah : 
                <select name="matkul" id="">
                    <option value="DDP">Dasar Dasar Pemrograman</option>
                    <option value="BDI">Basis Data 1</option>
                    <option value="WEB1">Pemrograman Web 1</option>
                </select></br>
            Nilai UTS : <input type='text' name='nilai_uts' value='' size= '6'></br>
            Nilai UAS : <input type='text' name='nilai_uas' value='' size= '6'></br>
            Nilai Tugas/Praktikum :
                <input type="text" name='nilai_tugas' value='' size=""></br>
                <input type="submit" value='simpan' name='proses'>
        </form>
        <?php
            error_reporting(0);
            $proses = $_GET['proses'];
            $nama_siswa = $_GET['nama'];
            $mata_kuliah = $_GET['matkul'];
            $nilai_uts = $_GET['nilai_uts'];
            $nilai_uas = $_GET['nilai_uas'];
            $nilai_tugas = $_GET['nilai_tugas'];

                echo 'proses : ' .$proses;
                echo '</br>Nama : ' .$nama_siswa;
                echo '</br>Mata Kuliah : ' .$mata_kuliah;
                echo '</br>Nilai UTS : ' .$nilai_uts;
                echo '</br>Nilai UAS : ' .$nilai_uas;
                echo '</br>Nilai Tugas Praktikum : ' .$nilai_tugas;
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>