<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D2C Gaming Store</title>
    <link rel="shortcut icon" href="./assets/images/logod2c.png">
    <link rel="stylesheet" href="./styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body class="bg-variant-1">
    <!-- TOPBAR -->
    <nav class="navbar bg-variant-2">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/images/Logo.svg" alt="" width="100" height="30">
            </a>
        </div>
    </nav>

    <!-- MENU -->
    <section class="menu bg-variant-2" id="listMenu">
        <div class="container px-5 py-3 d-flex justify-content-between">
            <a href="./index.php" class="menu-item d-flex flex-column justify-content-center align-items-center text-decoration-none">
                <i class="bi bi-house" style="font-size: 1.25rem;"></i>
                <span class="fz-14">Beranda</span>
            </a>
            <a href="./transaksi.php" class="menu-item d-flex flex-column justify-content-center align-items-center text-decoration-none active">
                <i class="bi bi-clipboard" style="font-size: 1.25rem;"></i>
                <span class="fz-14">Transaksi</span>
            </a>

            <!-- IF USER HAS NOT LOGIN -->
            <!-- <a href="./login.php" class="menu-item d-flex flex-column justify-content-center align-items-center text-decoration-none">
                <i class="bi bi-box-arrow-in-right" style="font-size: 1.25rem;"></i>
                <span class="fz-14">Masuk</span>
            </a> -->

            <!-- IF USER HAS LOGIN -->
            <a href="./d2cgamingstore/profile/index.php" class="menu-item d-flex flex-column justify-content-center align-items-center text-decoration-none">
                <i class="bi bi-person" style="font-size: 1.25rem;"></i>
                <span class="fz-14">Akun</span>
            </a>
        </div>
    </section>

    <!-- CONTENT -->
    <section>
        <div class="container min-h-100vh bg-variant py-4 pt-0">
            <div class="row text-center position-relative" id="updatesPage">
                <div class="col">
                    <div>
                        <a href="../../index.php" class="rounded-5 bg-variant-4 d-flex flex-column mb-3 align-items-center w-30 visibility-hidden">
                            <i class="bi bi-arrow-left-short text-white fz-20 font-bold"></i>
                        </a>
                        <h3 class="text-white mt-5 fw-600 Inter">
                            Riwayat Transaksi
                        </h3>
                    </div>
                </div>
            </div>

            <div class="mb-5 mt-3">
                <div class="row mb-4" id="myGalleyImage">
                    <div class="col">
                        <div id="ditusiGameGallery">
                            <div class="btn-group">
                                <button class="btn btn-filter active" onclick="filterTransactionHistory('semua')">Semua</button>
                                <button class="btn btn-filter" onclick="filterTransactionHistory('diproses')">Diproses</button>
                                <button class="btn btn-filter" onclick="filterTransactionHistory('pending')">Pending</button>
                                <button class="btn btn-filter" onclick="filterTransactionHistory('selesai')">Selesai</button>
                                <button class="btn btn-filter" onclick="filterTransactionHistory('batal')">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-updates semua">
                    <div class="row">
                        <div class="col">
                            <?php
                            $data = [
                                ["./assets/images/hero/h1.png", "pending", "Pending", "Genshin Impact (Via UID)"],
                                ["./assets/images/hero/h2.png", "finish", "Selesai", "Arena of Valor"],
                                ["./assets/images/hero/h3.png", "processed", "Diproses", "Valorant Points"],
                                ["./assets/images/hero/h4.png", "canceled", "Batal", "Mobile Legend (Via UID)"],
                            ];
                            foreach ($data as $i => $val) :
                            ?>
                                <div class="card bg-variant-6 mb-3">
                                    <div class="card-body bg-variant-5">
                                        <div class="d-flex gap-3 align-items-center mb-2">
                                            <img src="<?= $val[0] ?>" class="img-fluid" alt="">
                                            <h5 class="card-title mb-2 text-white Inter"><?= $val[3] ?></h5>
                                        </div>
                                        <ul class="list-unstyled line-height-3 text-variant text-white fz-14 mb-0">
                                            <li class="d-flex justify-content-between">
                                                <label>Status</label>
                                                <span class="label label-<?= $val[1] ?>"><?= $val[2] ?></span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>ID Pemesanan</label>
                                                <p class="mb-0 fw-500">0127839129929912</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>ID Transaksi</label>
                                                <p class="mb-0 fw-500">0212999129912838</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Barang yang Dibeli</label>
                                                <p class="mb-0 fw-500">60 Gensis Crystals</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Tanggal Pemesanan</label>
                                                <p class="mb-0 fw-500">28 Juni, 2022</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Metode Pembayaran</label>
                                                <p class="mb-0 fw-500">OVO</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>

                <div class="item-updates diproses">
                    <div class="row">
                        <div class="col">
                            <?php
                            $data = [
                                ["./assets/images/hero/h2.png", "processed", "Diproses", "Arena of Valor"],
                            ];
                            foreach ($data as $i => $val) :
                            ?>
                                <div class="card bg-variant-6 mb-3">
                                    <div class="card-body bg-variant-5">
                                        <div class="d-flex gap-3 align-items-center mb-2">
                                            <img src="<?= $val[0] ?>" class="img-fluid" alt="">
                                            <h5 class="card-title mb-2 text-white Inter"><?= $val[3] ?></h5>
                                        </div>
                                        <ul class="list-unstyled line-height-3 text-variant text-white fz-14 mb-0">
                                            <li class="d-flex justify-content-between">
                                                <label>Status</label>
                                                <span class="label label-<?= $val[1] ?>"><?= $val[2] ?></span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>ID Pemesanan</label>
                                                <p class="mb-0 fw-500">0127839129929912</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>ID Transaksi</label>
                                                <p class="mb-0 fw-500">0212999129912838</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Barang yang Dibeli</label>
                                                <p class="mb-0 fw-500">60 Gensis Crystals</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Tanggal Pemesanan</label>
                                                <p class="mb-0 fw-500">28 Juni, 2022</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Metode Pembayaran</label>
                                                <p class="mb-0 fw-500">OVO</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>

                <div class="item-updates pending">
                    <div class="row">
                        <div class="col">
                            <?php
                            $data = [
                                ["./assets/images/hero/h2.png", "pending", "Pending", "Arena of Valor"],
                            ];
                            foreach ($data as $i => $val) :
                            ?>
                                <div class="card bg-variant-6 mb-3">
                                    <div class="card-body bg-variant-5">
                                        <div class="d-flex gap-3 align-items-center mb-2">
                                            <img src="<?= $val[0] ?>" class="img-fluid" alt="">
                                            <h5 class="card-title mb-2 text-white Inter"><?= $val[3] ?></h5>
                                        </div>
                                        <ul class="list-unstyled line-height-3 text-variant text-white fz-14 mb-0">
                                            <li class="d-flex justify-content-between">
                                                <label>Status</label>
                                                <span class="label label-<?= $val[1] ?>"><?= $val[2] ?></span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>ID Pemesanan</label>
                                                <p class="mb-0 fw-500">0127839129929912</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>ID Transaksi</label>
                                                <p class="mb-0 fw-500">0212999129912838</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Barang yang Dibeli</label>
                                                <p class="mb-0 fw-500">60 Gensis Crystals</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Tanggal Pemesanan</label>
                                                <p class="mb-0 fw-500">28 Juni, 2022</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Metode Pembayaran</label>
                                                <p class="mb-0 fw-500">OVO</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>

                <div class="item-updates selesai">
                    <div class="row">
                        <div class="col">
                            <?php
                            $data = [
                                ["./assets/images/hero/h2.png", "finish", "Selesai", "Arena of Valor"],
                            ];
                            foreach ($data as $i => $val) :
                            ?>
                                <div class="card bg-variant-6 mb-3">
                                    <div class="card-body bg-variant-5">
                                        <div class="d-flex gap-3 align-items-center mb-2">
                                            <img src="<?= $val[0] ?>" class="img-fluid" alt="">
                                            <h5 class="card-title mb-2 text-white Inter"><?= $val[3] ?></h5>
                                        </div>
                                        <ul class="list-unstyled line-height-3 text-variant text-white fz-14 mb-0">
                                            <li class="d-flex justify-content-between">
                                                <label>Status</label>
                                                <span class="label label-<?= $val[1] ?>"><?= $val[2] ?></span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>ID Pemesanan</label>
                                                <p class="mb-0 fw-500">0127839129929912</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>ID Transaksi</label>
                                                <p class="mb-0 fw-500">0212999129912838</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Barang yang Dibeli</label>
                                                <p class="mb-0 fw-500">60 Gensis Crystals</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Tanggal Pemesanan</label>
                                                <p class="mb-0 fw-500">28 Juni, 2022</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Metode Pembayaran</label>
                                                <p class="mb-0 fw-500">OVO</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>

                <div class="item-updates batal">
                    <div class="row">
                        <div class="col">
                            <?php
                            $data = [
                                ["./assets/images/hero/h4.png", "canceled", "Batal", "Valorant Points"],
                            ];
                            foreach ($data as $i => $val) :
                            ?>
                                <div class="card bg-variant-6 mb-3">
                                    <div class="card-body bg-variant-5">
                                        <div class="d-flex gap-3 align-items-center mb-2">
                                            <img src="<?= $val[0] ?>" class="img-fluid" alt="">
                                            <h5 class="card-title mb-2 text-white Inter"><?= $val[3] ?></h5>
                                        </div>
                                        <ul class="list-unstyled line-height-3 text-variant text-white fz-14 mb-0">
                                            <li class="d-flex justify-content-between">
                                                <label>Status</label>
                                                <span class="label label-<?= $val[1] ?>"><?= $val[2] ?></span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>ID Pemesanan</label>
                                                <p class="mb-0 fw-500">0127839129929912</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>ID Transaksi</label>
                                                <p class="mb-0 fw-500">0212999129912838</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Barang yang Dibeli</label>
                                                <p class="mb-0 fw-500">60 Gensis Crystals</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Tanggal Pemesanan</label>
                                                <p class="mb-0 fw-500">28 Juni, 2022</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Metode Pembayaran</label>
                                                <p class="mb-0 fw-500">OVO</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script>
        $("#myGalleyImage .btn-filter").on('click', function() {
            $(this).siblings().removeClass('active')
            $(this).addClass('active');
        })

        filterTransactionHistory("semua")

        function filterTransactionHistory(c) {
            var x, i;
            x = document.getElementsByClassName("item-updates");
            // untuk menampilkan semua data
            // if (c == "2022") c = "";
            for (i = 0; i < x.length; i++) {
                removeClassTransaction(x[i], "show");
                if (x[i].className.indexOf(c) > -1) addClassTransaction(x[i], "show");
            }
        }

        function addClassTransaction(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function removeClassTransaction(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }
    </script>

</body>

</html>