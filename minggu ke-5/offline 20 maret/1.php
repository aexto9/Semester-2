<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

    

    

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>
<body>
<?php 
    require_once 'dbkoneksi.php';
?>
<div class="container">
    <main>
        <div class="py-5 text-center">
        <h1>Form Pelanggan</h1>
        </div>

        <div class="row g-5">
            <div class="mb-3">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-12">
                    <label for="username" class="form-label">Kode</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Username" required>
                        <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>

                    <div class="col-sm-12">
                    <label for="firstName" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="nama" placeholder="" value="" name="nama"required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
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

                    <div class="col-12">
                    <label class="form-label">Tempat Lahir </label>
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" >
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                    </div>

                    <div class="col-12">
                    <label for="address" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                    </div>

                    <div class="col-12">
                    <label class="form-label">Email </label>
                    <input type="email" class="form-control" id="email" name="email" >
                    </div>

                    <div class="col-12">
                    <label for="jenis" class="col-4 col-form-label">Kartu Id</label> 
                        <div>
                            <?php 
                                $sqljenis = "SELECT * FROM kartu";
                                $rsjenis = $dbh->query($sqljenis);
                            ?>
                        <select id="kartu_id" name="kartu_id" class="form-select" aria-label="Default select example">
                            <?php 
                                foreach($rsjenis as $rowjenis){
                            ?>
                                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
                            <?php
                                }
                            ?>
                            <!--
                            <option value="1">Elektronik</option>
                            <option value="2">Furniture</option>
                            <option value="3">Makanan</option>-->

                        </select>
                    </div>


                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>