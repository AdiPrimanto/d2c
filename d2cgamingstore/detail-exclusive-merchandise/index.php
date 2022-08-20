<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D2C Gaming Store</title>
    <link rel="shortcut icon" href="../../assets/images/logod2c.png">
    <link rel="stylesheet" href="../../styles/index.css">
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
                <img src="../../assets/images/Logo.svg" alt="" width="100" height="30">
            </a>
        </div>
    </nav>

    <!-- CONTENT -->
    <section>
        <div class="container min-h-100vh bg-variant py-4 pt-0">
            <div class="row text-center position-relative" id="updatesPageVariant">
                <div class="col">
                    <div>
                        <a href="../../index.php" class="rounded-5 bg-variant-4 d-flex flex-column mb-3 align-items-center w-30">
                            <i class="bi bi-arrow-left-short text-white fz-20 font-bold"></i>
                        </a>
                        <h3 class="visibility-hidden mt-5">Detail Game</h3>
                    </div>
                </div>
            </div>

            <div class="row my-4 mb-5 text-white">
                <div class="col">
                    <h1>Genshin Impact <img src="../../assets/images/img/Label2.png" alt=""></h1>

                    <p class="text-opacity fz-18">
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                    </p>

                    <a href="javascript:void(0)" onclick="showMore()" class="fz-14 text-orange text-decoration-none">Baca lebih lengkap</a>
                </div>
            </div>

            <form action="">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body" id="idUser">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <div class="d-flex gap-3 align-items-baseline">
                                        <span class="card-number">1</span>
                                        <h5 class="card-title fz-16">Masukkan Nama & Alamat</h5>
                                    </div>
                                    <a href="#" class="btn-info-user p-0" data-bs-toggle="modal" data-bs-target="#userInfo">
                                        <i class="bi bi-info-circle-fill"></i>
                                    </a>
                                </div>
                                <input class="form-control mt-3" type="text" placeholder="Masukkan Nama Anda" aria-label="default input example">
                                <input class="form-control mt-3" type="text" placeholder="Masukkan Alamat Anda" aria-label="default input example">
                                <p class="card-text mt-3">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="card" id="categoryItem">
                            <div class="card-body">
                                <div class="d-flex gap-3 align-items-baseline">
                                    <span class="card-number">2</span>
                                    <h5 class="card-title fz-16">Pilih Kategori & Item</h5>
                                </div>

                                <div class="categories">
                                    <h5 class="card-title fz-16 mt-3">Pilih Kategori</h5>
                                    <div class="btn-group gap-2" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="category" id="category1" autocomplete="off" checked>
                                        <label class="btn btn-outline-primary" for="category1">
                                            <img src="../../assets/images/starterpack/Diamond.svg" class="img-fluid" alt="">
                                            <div class="fw-bolder">Crystals</div>
                                        </label>

                                        <input type="radio" class="btn-check" name="category" id="category2" autocomplete="off">
                                        <label class="btn btn-outline-primary" for="category2">
                                            <img src="../../assets/images/starterpack/Starlight.svg" class="img-fluid" alt="">
                                            <div class="fw-bolder">Starlight</div>
                                        </label>

                                        <input type="radio" class="btn-check" name="category" id="category3" autocomplete="off">
                                        <label class="btn btn-outline-primary" for="category3">
                                            <img src="../../assets/images/starterpack/BattlepassGenshin.svg" class="img-fluid" alt="">
                                            <div class="fw-bolder">Battlepass</div>
                                        </label>
                                    </div>
                                </div>

                                <div class="items mt-3">
                                    <h5 class="card-title fz-16 mt-3">Pilih Item</h5>
                                    <div class="btn-group gap-3" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="item" id="item1" autocomplete="off" checked>
                                        <label class="btn btn-outline-primary text-start" for="item1">
                                            <img src="../../assets/images/starterpack/Diamond.svg" class="img-fluid" alt="">
                                            <div class="fw-bolder">10 Crystals</div>
                                            <div class="fz-14">Rp 100.000</div>
                                        </label>

                                        <input type="radio" class="btn-check" name="item" id="item2" autocomplete="off">
                                        <label class="btn btn-outline-primary text-start" for="item2">
                                            <img src="../../assets/images/starterpack/Diamond.svg" class="img-fluid" alt="">
                                            <div class="fw-bolder">50 Diamond</div>
                                            <div class="fz-14">Rp 200.000</div>
                                        </label>

                                        <input type="radio" class="btn-check" name="item" id="item3" autocomplete="off">
                                        <label class="btn btn-outline-primary text-start" for="item3">
                                            <img src="../../assets/images/starterpack/Diamond.svg" class="img-fluid" alt="">
                                            <div class="fw-bolder">100 Diamond</div>
                                            <div class="fz-14">Rp 300.000</div>
                                        </label>

                                        <input type="radio" class="btn-check" name="item" id="item4" autocomplete="off">
                                        <label class="btn btn-outline-primary text-start" for="item4">
                                            <img src="../../assets/images/starterpack/Diamond.svg" class="img-fluid" alt="">
                                            <div class="fw-bolder">200 Diamond</div>
                                            <div class="fz-14">Rp 500.000</div>
                                        </label>

                                        <input type="radio" class="btn-check" name="item" id="item5" autocomplete="off">
                                        <label class="btn btn-outline-primary text-start" for="item5">
                                            <img src="../../assets/images/starterpack/Diamond.svg" class="img-fluid" alt="">
                                            <div class="fw-bolder">300 Diamond</div>
                                            <div class="fz-14">Rp 600.000</div>
                                        </label>

                                        <input type="radio" class="btn-check" name="item" id="item6" autocomplete="off">
                                        <label class="btn btn-outline-primary text-start" for="item6">
                                            <img src="../../assets/images/starterpack/Diamond.svg" class="img-fluid" alt="">
                                            <div class="fw-bolder">500 Diamond</div>
                                            <div class="fz-14">Rp 900.000</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex gap-3 align-items-baseline">
                                    <span class="card-number">3</span>
                                    <h5 class="card-title fz-16">Jumlah Pembelian</h5>
                                </div>
                                <p class="card-text mt-3">Masukkan jumlah item yang dibeli (maksimal 5)</p>

                                <div class="purchase-amount w-50">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <i class="bi bi-dash-circle"></i>
                                            </button>
                                        </span>
                                        <input type="text" name="quant[1]" class="form-control input-number" value="0" min="0" max="5">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                <i class="bi bi-plus-circle"></i>
                                            </button>
                                        </span>
                                    </div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="card" id="metodePembayaran">
                            <div class="card-body">
                                <div class="d-flex gap-3 align-items-baseline">
                                    <span class="card-number">4</span>
                                    <h5 class="card-title fz-16">Metode Pembayaran</h5>
                                </div>

                                <ul class="payment nav nav-pills my-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation" style="padding-right: 1rem;">
                                        <button class="nav-link fz-14 rounded-5 px-0 active" id="pills-manual-tab" data-bs-toggle="pill" data-bs-target="#pills-manual" type="button" role="tab" aria-controls="pills-manual" aria-selected="true">Manual</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link fz-14 rounded-5 px-0" id="pills-otomatis-tab" data-bs-toggle="pill" data-bs-target="#pills-otomatis" type="button" role="tab" aria-controls="pills-otomatis" aria-selected="false">Otomatis</button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade text-white show active" id="pills-manual" role="tabpanel" aria-labelledby="pills-manual-tab" tabindex="0">
                                        <div class="code-promo mt-3">
                                            <button type="button" class="btn btn-promo w-100 py-4" data-bs-toggle="modal" data-bs-target="#useCodePromo">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-4">
                                                        <img src="../../assets/icons/discount.png" class="img-fluid" alt="">
                                                        <span class="discount">Pakai Kode Promo Anda</span>
                                                    </div>
                                                    <img src="../../assets/icons/ArrowRight.svg" class="img-fluid" alt="">
                                                </div>
                                            </button>
                                        </div>

                                        <div class="payment">
                                            <h5 class="card-title fz-16 mt-3">Bank Transfer</h5>
                                            <div class="btn-group gap-3" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="payment" id="bca" autocomplete="off" checked>
                                                <label class="btn btn-outline-primary d-flex align-items-center gap-3 py-3" for="bca">
                                                    <img src="../../assets/images/img/bca.png" class="img-fluid" alt="">
                                                    <div class="fw-bolder d-flex justify-content-between w-100">
                                                        BCA
                                                        <span style="font-weight: 500;">Rp 21.002</span>
                                                    </div>
                                                </label>

                                                <input type="radio" class="btn-check" name="payment" id="atm-bersama" autocomplete="off">
                                                <label class="btn btn-outline-primary py-3" for="atm-bersama">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <img src="../../assets/images/img/atm.png" class="img-fluid" alt="">
                                                        <div class="fw-bolder d-flex justify-content-between w-100">
                                                            ATM Bersama
                                                            <span style="font-weight: 500;">Rp 21.002</span>
                                                        </div>
                                                    </div>
                                                    <hr class="my-3" style="border: 2px solid #D7D7D7;" />
                                                    <div class="d-grid align-items-center gap-3" style="grid-template-columns: 1fr 1fr 1fr 1fr 1fr;">
                                                        <img src="../../assets/images/img/bcaa.png" class="img-fluid" alt="">
                                                        <img src="../../assets/images/img/bni.png" class="img-fluid" alt="">
                                                        <img src="../../assets/images/img/bri.png" class="img-fluid" alt="">
                                                        <img src="../../assets/images/img/cimb.png" class="img-fluid" alt="">
                                                        <img src="../../assets/images/img/panin.png" class="img-fluid" alt="">
                                                    </div>
                                                </label>

                                                <h5 class="card-title fz-16 mt-3 mb-0">E-Wallet (QRIS)</h5>
                                                <input type="radio" class="btn-check" name="payment" id="qris" autocomplete="off">
                                                <label class="btn btn-outline-primary py-3" for="qris">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <img src="../../assets/images/img/qris.png" class="img-fluid" alt="">
                                                        <div class="fw-bolder d-flex justify-content-between w-100">
                                                            QRIS Mobile
                                                            <span style="font-weight: 500;">Rp 21.002</span>
                                                        </div>
                                                    </div>
                                                    <hr class="my-3" style="border: 2px solid #D7D7D7;" />
                                                    <div class="d-grid align-items-center gap-3" style="grid-template-columns: 1fr 1fr 1fr 1fr 1fr;">
                                                        <img src="../../assets/images/img/ovo.png" class="img-fluid" alt="">
                                                        <img src="../../assets/images/img/gopay.png" class="img-fluid" alt="">
                                                        <img src="../../assets/images/img/dana.png" class="img-fluid" alt="">
                                                        <img src="../../assets/images/img/linkaja.png" class="img-fluid" alt="">
                                                        <img src="../../assets/images/img/shopeepay.png" class="img-fluid" alt="">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>

                                        <h5 class="card-title mt-4 mb-2">Detail Pembayaran</h5>
                                        <ul class="list-unstyled line-height-2 text-variant">
                                            <li class="d-flex justify-content-between">
                                                <label>Harga</label>
                                                <p class="mb-0 fw-500">Rp 21.002</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Potongan Voucher</label>
                                                <p class="mb-0 fw-500">- Rp 10.000</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Potongan Fee</label>
                                                <p class="mb-0 fw-500">Rp 1.000</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>PPN</label>
                                                <p class="mb-0 fw-500">-</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>[Payment gateway] fee</label>
                                                <p class="mb-0 fw-500">+ Rp 7.000</p>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <label>Total</label>
                                                <p class="mb-0 fw-bolder">Rp 12.002</p>
                                            </li>
                                        </ul>

                                        <div class="form-group mb-0 mt-3">
                                            <button type="button" class="btn btn-orange w-100" data-bs-toggle="modal" data-bs-target="#bayarSekarang">
                                                <img src="../../assets/icons/whatsappp.png" class="img-fluid" alt="">
                                                Bayar Sekarang
                                            </button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade text-white" id="pills-otomatis" role="tabpanel" aria-labelledby="pills-otomatis-tab" tabindex="0">
                                        <h2 class="text-orange">Bayar dengan otomatis</h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Modal Informasi User ID -->
        <div class="modal fade" id="userInfo" tabindex="-1" aria-labelledby="userInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h5 class="modal-title mb-3">Informasi User ID</h5>
                            <a href="#" class="btn-info-user p-0" data-bs-dismiss="modal" aria-label="Close">
                                <i class="bi bi-x-circle-fill"></i>
                            </a>
                        </div>

                        <div class="form-group d-flex flex-column gap-3">
                            <img src="../../assets/images/hero/id1.png" class="img-fluid" alt="">
                            <img src="../../assets/images/hero/id2.png" class="img-fluid" alt="">
                        </div>

                        <p class="mb-0">
                            Untuk menemukan ID pada game ini anda bisa memperhatikan beberapa tangkapan layar di atas untuk mengerti posisi ID pada game ini.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Kode Promo -->
        <div class="modal fade" id="useCodePromo" tabindex="-1" aria-labelledby="useCodePromoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 class="modal-title mb-3">Masukkan kode promo</h5>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan kode promo disini">
                        </div>

                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-orange-secondary w-100" data-bs-dismiss="modal">Batal</button>
                            <button class="btn btn-orange w-100" onclick="usePromo()">Pakai</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Bayar Sekarang -->
        <div class="modal fade" id="bayarSekarang" tabindex="-1" aria-labelledby="bayarSekarangModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 class="modal-title mb-3">Konfirmasi Pesanan</h5>
                        <ul class="list-unstyled line-height-2">
                            <li class="d-flex justify-content-between">
                                <label>Item Pembelian</label>
                                <p class="mb-0 fw-500">90 Syndicate Gold</p>
                            </li>
                            <li class="d-flex justify-content-between">
                                <label>Jumlah Pembelian</label>
                                <p class="mb-0 fw-500">1</p>
                            </li>
                            <li class="d-flex justify-content-between">
                                <label>UID</label>
                                <p class="mb-0 fw-500">123872198312</p>
                            </li>
                            <li class="d-flex justify-content-between">
                                <label>Server</label>
                                <p class="mb-0 fw-500">Asia</p>
                            </li>
                            <li class="d-flex justify-content-between">
                                <label>Harga</label>
                                <p class="mb-0 fw-500">Rp 10.000</p>
                            </li>
                            <li class="d-flex justify-content-between">
                                <label>Metode Pembayaran</label>
                                <p class="mb-0 fw-500">QRIS (All Payment)</p>
                            </li>
                            <li class="d-flex justify-content-between">
                                <label class="fw-bolder fz-24">Total</label>
                                <p class="mb-0 fw-bolder fz-24">Rp 12.002</p>
                            </li>
                        </ul>

                        <p class="text-variant">
                            Note: Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                        </p>

                        <div class="d-grid gap-2">
                            <a href="https://wa.me/6281355538777?text=Saya%20tertarik%20dengan%20mobil%20Anda%20yang%20dijual" class="btn btn-orange" target="_blank">Lanjutkan</a>
                            <button type="button" class="btn btn-orange-secondary" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- FOOTER -->
        <footer class="bg-variant-1">
            <div class="bg-variant-3 w-480 pb-4 pt-4 px-3 m-auto">
                <div class="d-flex gap-2 align-items-center">
                    <img src="../../assets/images/logoo.svg" alt="">
                    <h2 class="text-white mb-0">DITUSI Gaming</h2>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <p class="mb-0 fz-16" style="color: rgba(255, 255, 255, 0.8)">
                            Platform Top-Up dan Komunitas Game yang memberikan Real Testimoni Transparan kepada Para Gamer.
                        </p>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <table>
                            <tr>
                                <td class="align-baseline py-2"><img src="../../assets/icons/Location.png" alt=""></td>
                                <td class="fz-16 text-white opacity-70 pl-15 py-2">
                                    Kencana Tower, Mezzanine Floor, Jl. Meruya Ilir Raya No.88, Kb. Jeruk, Daerah Khusus Ibukota Jakarta 11620
                                </td>
                            </tr>
                            <tr>
                                <td class="align-baseline py-2"><img src="../../assets/icons/mails.png" alt=""></td>
                                <td class="fz-16 text-white opacity-70 pl-15 py-2">
                                    emailDitusi@mail.com
                                </td>
                            </tr>
                            <tr>
                                <td class="align-baseline py-2"><img src="../../assets/icons/whatsappp.png" alt=""></td>
                                <td class="fz-16 text-white opacity-70 pl-15 py-2">
                                    +62 8598-9099-1090
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-6">
                        <h6 class="text-white fz-18">Ditusi Gaming</h6>
                        <div class="d-flex flex-column gap-2">
                            <a href="#" class="text-white text-decoration-none opacity-70">Home</a>
                            <a href="#" class="text-white text-decoration-none opacity-70">Event</a>
                            <a href="#" class="text-white text-decoration-none opacity-70">Hubungi Kami</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <h6 class="text-white fz-18">Pelajari Lebih Lanjut</h6>
                        <div class="d-flex flex-column gap-2">
                            <a href="#" class="text-white text-decoration-none opacity-70">Tentang Kami</a>
                            <a href="#" class="text-white text-decoration-none opacity-70">Syarat dan Ketentuan</a>
                            <a href="#" class="text-white text-decoration-none opacity-70">Kebijakan Cookie</a>
                        </div>
                    </div>
                </div>

                <hr class="my-4" style="border: 1px solid #fff;" />

                <div class="row">
                    <div class="col gap-3 d-flex fz-20">
                        <a href="#" target="_blank"><i class="bi bi-youtube text-white"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-facebook text-white"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-tiktok text-white"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-instagram text-white"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-telegram text-white"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-discord text-white"></i></a>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <p class="mb-0 fz-16" style="color: rgba(255, 255, 255, 0.8)">
                            © 2021 PT. Emvipix Digital Kreatif - Ditusi Gaming Store. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </section>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('.btn-number').click(function(e) {
                e.preventDefault();

                fieldName = $(this).attr('data-field');
                type = $(this).attr('data-type');
                var input = $("input[name='" + fieldName + "']");
                var currentVal = parseInt(input.val());
                if (!isNaN(currentVal)) {
                    if (type == 'minus') {

                        if (currentVal > input.attr('min')) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('min')) {
                            $(this).attr('disabled', true);
                        }

                    } else if (type == 'plus') {

                        if (currentVal < input.attr('max')) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('max')) {
                            $(this).attr('disabled', true);
                        }

                    }
                } else {
                    input.val(0);
                }
            });
            // $('.input-number').focusin(function() {
            //     $(this).data('oldValue', $(this).val());
            // });
            $('.input-number').change(function() {

                minValue = parseInt($(this).attr('min'));
                maxValue = parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());

                name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the minimum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the maximum value was reached');
                    $(this).val($(this).data('oldValue'));
                }


            });
            $(".input-number").keydown(function(e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });

        });

        function usePromo() {
            var getPromo = $('#useCodePromo .form-control').val();
            $('.code-promo .discount').text(getPromo).css('font-weight', 'bold').css('text-transform', 'uppercase');
            $('#useCodePromo').modal('hide');
        }
    </script>

</body>

</html>