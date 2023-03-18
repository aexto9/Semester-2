<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Registrasi</title>
</head>
<body class='bg-warning'>
    <?php
        $ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik informatika", "BD"=>"Bisnis Digital"];
        $ar_skill = ["HTML"=>10,"CSS"=>10,'JavaScript'=>20,"RWD Boostrap"=>20,"PHP"=>30,'Phyton'=>30,"Java"=>50];
        $ar_domisili = ['Jakarta','Bogor','Depok','Tanggerang','Bekasi','Lainnya']
    ?>
    
    <div>
        <div class='container '>
            <div class='m-3'>
            <h1 class='text-center p-2'>Form Registrasi IT Club Data Science</h1>
            <form method='POST' action='practice1.php' >
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control"
                    name="nama" value="">
                </div>
                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" class="form-control"
                    name="nim" value="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Laki-Laki">
                        <label class="form-check-label">
                            Laki - Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                        <label class="form-check-label">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Program Studi</label>
                    <select class="form-select" aria-label="Default select example" name='prodi'>
                        <?php
                            foreach ($ar_prodi as $prodi=>$p) { ?>
                            <option value="<?=$p?>"><?=$p?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Skill</label>
                    <?php
                    foreach($ar_skill as $skill =>$s) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name='skill[<?=$skill?>]' value='<?= $s?>'> 
                        <label class="form-check-label" for="flexCheckChecked">
                            <?=$skill?>
                        </label>
                    </div>
                    <?php } ?>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Asal Domisili</label>
                    <select class="form-select" aria-label="Default select example" name='domisili'>
                        <?php
                            foreach ($ar_domisili as $dom) { ?>
                            <option value="<?=$dom?>"><?=$dom?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="email">
                </div>
                
                <button class="btn btn-primary" name='proses'>Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php
        if (isset($_POST['proses'])){
            error_reporting(0);
            $NIM = $_POST['nim'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $prodi = $_POST['prodi'];
            $skills = $_POST['skill'];
            $nilai = implode(",",array_keys($skills));
            $dom =$_POST['domisili'];
            $email = $_POST['email'];
        }

        
    ?>

    <div class='container'>
        <div class='row'>
            <div class='mb-3 col-12'>
                <h1 class = 'text-center' > Hasil Pendaftaran</h1>
            </div>
            <div class = 'mb-3 col-4'>
                <p>Nama</p>
                <p>NIM</p>
                <p>Jenis Kelamin</p>
                <p>Program Studi</p>
                <p>Domisili</p>
                <p>Email</p>
                <p>Skill</p>
                <p>Total Nilai Skill</p>
                <p>Keterangan Nilai</p>
            </div>
            
        <?php
            $jumlah= 0;
            foreach($skills as $skil => $s){
                $jumlah += $s;
            }
        ?>

        <?php
        function skor_skill($jumlah)
        {
            if ($jumlah >= 100 && $jumlah <= 170) {
            return 'Sangat Baik';
            } elseif ($jumlah > 60 && $jumlah < 100) {
            return 'Baik';
            } elseif ($jumlah > 40 && $jumlah <= 60) {
            return 'Cukup';
            } elseif ($jumlah > 0 && $jumlah <= 40) {
            return 'Kurang';
            } else {
            return 'Tidak Memadai';
            }
        }

        $keterangan = skor_skill($jumlah)
        ?>

        <?php if (isset($_POST['proses'])){ ?>
            <div class = 'mb-3 col-8'>
                <p><?=$nama?></p>
                <p><?=$NIM?></p>
                <p><?=$jk?></p>
                <p><?=$prodi?></p>
                <p><?=$dom?></p>
                <p><?=$email?></p>
                <p><?=$nilai?></p>
                <p><?=$jumlah?></p>
                <p><?=$keterangan?></p>
            </div>
        <?php } ?>
        </div>

    </div>
</body>
</html>