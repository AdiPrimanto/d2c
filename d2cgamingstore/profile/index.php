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

    <!-- MENU -->
    <section class="menu bg-variant-2" id="listMenu">
        <div class="container px-5 py-3 d-flex justify-content-between">
            <a href="../../index.php" class="menu-item d-flex flex-column justify-content-center align-items-center text-decoration-none">
                <i class="bi bi-house" style="font-size: 1.25rem;"></i>
                <span class="fz-14">Beranda</span>
            </a>
            <a href="../../transaksi.php" class="menu-item d-flex flex-column justify-content-center align-items-center text-decoration-none">
                <i class="bi bi-clipboard" style="font-size: 1.25rem;"></i>
                <span class="fz-14">Transaksi</span>
            </a>

            <!-- IF USER HAS NOT LOGIN -->
            <!-- <a href="./login.php" class="menu-item d-flex flex-column justify-content-center align-items-center text-decoration-none">
                <i class="bi bi-box-arrow-in-right" style="font-size: 1.25rem;"></i>
                <span class="fz-14">Masuk</span>
            </a> -->

            <!-- IF USER HAS LOGIN -->
            <a href="./index.php" class="menu-item d-flex flex-column justify-content-center align-items-center text-decoration-none active">
                <i class="bi bi-person" style="font-size: 1.25rem;"></i>
                <span class="fz-14">Akun</span>
            </a>
        </div>
    </section>

    <!-- CONTENT -->
    <section>
        <div class="container min-h-100vh bg-variant py-4 pt-0">
            <div class="row text-center text-white position-relative" id="updatesPageVariant2">
                <div class="col">
                    <div class="visibility-hidden">
                        <a href="../../index.php" class="rounded-5 bg-variant-4 d-flex flex-column mb-3 align-items-center w-30">
                            <i class="bi bi-arrow-left-short text-white fz-20 font-bold"></i>
                        </a>
                        <h3 class="text-white mt-5">Profile</h3>
                    </div>
                </div>
            </div>

            <div class="row mb-4 text-center text-white">
                <div class="col z-index-0 mt-n6">
                    <img src="../../assets/images/img/profile.png" class="img-fluid" alt="">
                    <h3 class="Inter fw-bolder mt-3">
                        Rickie Mickie
                    </h3>
                    <p class="text-white text-decoration-none">ricki@example / 087324242</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a href="./change-profile.php" class="d-flex justify-content-between align-items-center text-white text-decoration-none py-3 px-2">
                        <div class="d-flex gap-3">
                            <img src="../../assets/icons/pencilwhite.png" class="img-fluid" alt="">
                            <span class="fz-14">Ubah Profil</span>
                        </div>
                        <i class="bi bi-chevron-right"></i>
                    </a>
                    <a href="./otp.php" class="d-flex justify-content-between align-items-center text-white text-decoration-none py-3 px-2">
                        <div class="d-flex gap-3">
                            <img src="../../assets/icons/passwordwhite.png" class="img-fluid" alt="">
                            <span class="fz-14">Ubah Kata Sandi</span>
                        </div>
                        <i class="bi bi-chevron-right"></i>
                    </a>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#userLogout" class="d-flex justify-content-between align-items-center text-white text-decoration-none py-3 px-2">
                        <div class="d-flex gap-3">
                            <img src="../../assets/icons/logoutwhite.png" class="img-fluid" alt="">
                            <span class="fz-14">Log Out</span>
                        </div>
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Logout -->
        <div class="modal fade" id="userLogout" tabindex="-1" aria-labelledby="userLogoutModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 class="modal-title mb-3">Apakah anda yakin akan keluar?</h5>

                        <div class="form-group">
                            <p class="mb-0 text-opacity-2">
                                Jika anda keluar maka anda perlu melakukan login kembali jika ingin masuk ke akun ini.
                            </p>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-orange-secondary w-100" data-bs-dismiss="modal">Batal</button>
                            <button class="btn btn-orange w-100" onclick="onLogout()">Ya</button>
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

</body>

</html>