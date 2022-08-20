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
            <div class="row text-center position-relative" id="updatesPage">
                <div class="col">
                    <div>
                        <h3 class="text-white mt-5 fw-600 Inter">
                            Selesaikan pembayaran dalam
                        </h3>
                        <h3 class="text-orange mb-0 fw-600 Inter">
                            23:59:59
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row text-center mb-4">
                <div class="col">
                    <h6 class="text-white mb-2" style="font-family: 'Inter', sans-serif">
                        Batas akhir pembayaran
                    </h6>
                    <h4 class="text-white fw-600 Inter">
                        Rabu, 22 Juni 2022 13:41
                    </h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card bg-variant-6">
                        <div class="card-body bg-variant-5">
                            <h5 class="card-title mb-2 text-white Inter">Detail Pesanan</h5>
                            <ul id="less-detail" class="list-unstyled line-height-3 text-variant text-white fz-14">
                                <li class="d-flex justify-content-between">
                                    <label>ID Pemesanan</label>
                                    <p class="mb-0 fw-500">Rp 21.002</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label>Game</label>
                                    <p class="mb-0 fw-500">0127839129929912</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label>Produk</label>
                                    <p class="mb-0 fw-500">90 Syndicate Gold0</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label>Metode Pembayaran</label>
                                    <p class="mb-0 fw-500">BCA Virtual Account</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label>Nomor Virtual Account</label>
                                    <p class="mb-0 fw-500">
                                        <span id="copyOne">012881288838138</span>
                                        <i class="bi bi-files" onclick="copyTextOne('copyOne')"></i>
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label class="fw-bolder">Total Pembayaran</label>
                                    <p class="mb-0 fw-bolder">
                                        Rp <span id="copyTwo">60.000</span>
                                        <i class="bi bi-files" onclick="copyTextOne('copyTwo')"></i>
                                    </p>
                                </li>
                            </ul>
                            <div class="text-center text-white fw-bolder mt-3 pointer show-detail">
                                Lihat Detail <i class="bi bi-chevron-down ml-75"></i>
                            </div>

                            <ul id="more-detail" class="list-unstyled line-height-3 text-variant text-white fz-14 d-none">
                                <li class="d-flex justify-content-between">
                                    <label>ID Pemesanan</label>
                                    <p class="mb-0 fw-500">Rp 21.002</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label>Game</label>
                                    <p class="mb-0 fw-500">0127839129929912</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label>Produk</label>
                                    <p class="mb-0 fw-500">90 Syndicate Gold0</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label>Metode Pembayaran</label>
                                    <p class="mb-0 fw-500">BCA Virtual Account</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label>Nomor Virtual Account</label>
                                    <p class="mb-0 fw-500">
                                        <span id="copyThree">012881288838138</span>
                                        <i class="bi bi-files" onclick="copyTextOne('copyThree')"></i>
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label>Harga</label>
                                    <p class="mb-0 fw-500">Rp 41.002</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label>Potongan Voucher</label>
                                    <p class="mb-0 fw-500">- Rp 10.000</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label>Payment Fee</label>
                                    <p class="mb-0 fw-500">Rp 1.000</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label>PPN</label>
                                    <p class="mb-0 fw-500">-</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label>[Payment gateway] fee</label>
                                    <p class="mb-0 fw-500">Rp 7.000</p>
                                </li>
                                <li>
                                    <hr class="my-2" style="border: 1px solid #D7D7D7;" />
                                </li>
                                <li class="d-flex justify-content-between">
                                    <label class="fw-bolder">Total Pembayaran</label>
                                    <p class="mb-0 fw-bolder">
                                        Rp <span id="copyFour">60.000</span>
                                        <i class="bi bi-files" onclick="copyTextOne('copyFour')"></i>
                                    </p>
                                </li>
                            </ul>
                            <div class="text-center text-white fw-bolder mt-3 close-detail pointer d-none">
                                Tutup <i class="bi bi-chevron-up ml-75"></i>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="../detail-direct-topup/index.php" class="btn btn-orange w-100">
                            Belanja Lagi
                        </a>
                        <a href="../../transaksi.php" class="btn btn-orange-secondary w-100 mt-3" style="background-color: transparent !important;">
                            Cek Status Pembayaran
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <h5 class="text-white Inter fw-bolder">Tata Cara Pembayaran</h5>
                    <div class="accordion accordion-flush" id="accordionExample">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        ATM BCA
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        m-BCA (BCA mobile)
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        m-BCA (BCA mobile)
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Kantor Bank BCA
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="bg-variant-1">
            <div class="bg-variant-3 w-480 py-4 px-3 m-auto">
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
            $('.show-detail').click(function() {
                $('#more-detail').show().removeClass('d-none');
                $('.close-detail').show().removeClass('d-none');
                $('#less-detail').hide();
                $(this).hide();
            });
            $('.close-detail').click(function() {
                $('#less-detail').show().removeClass('d-none');
                $('.show-detail').show().removeClass('d-none');
                $('#more-detail').hide();
                $(this).hide();
            });

        });

        // ? Copy Text
        function copyTextOne(id) {
            var copyText = document.getElementById(id);
            navigator.clipboard.writeText(copyText.textContent);

            // copyText.select();
            // copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Alert the copied text */
            // alert("Copied the text: " + copyText.textContent);
        }
    </script>

    <style>
        .accordion-flush .accordion-item .accordion-button {
            box-shadow: none;
        }

        .accordion-collapse {
            opacity: 80%;
        }

        .accordion-item {
            background-color: #1e253e;
            border: 1px solid #1e253e;
            color: #fff;
            font-size: 16px;
        }

        .accordion-button:focus {
            border-color: #1e253e;
            box-shadow: none;
        }

        .accordion-button:not(.collapsed) {
            background-color: #1e253e;
            color: #fff;
            font-size: 18px;
        }

        .accordion-button {
            background-color: #1e253e;
            color: #fff;
            font-family: "Inter", sans-serif;
            font-size: 18px;
            padding: 1rem 0;
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url('../../assets/icons/MinusWhite.svg');
        }

        .accordion-button::after {
            background-image: url('../../assets/icons/PlusWhite.svg');
        }

        .accordion-body {
            padding: 0 0 1rem 0;
        }
    </style>

</body>

</html>