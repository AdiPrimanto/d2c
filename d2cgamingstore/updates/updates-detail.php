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
        <div class="container min-h-100vh bg-variant py-4">
            <div class="row">
                <div class="col">
                    <div>
                        <a href="../../index.php" class="rounded-5 bg-variant-4 d-flex flex-column mb-4 align-items-center w-30">
                            <i class="bi bi-arrow-left-short text-white fz-20 font-bold"></i>
                        </a>
                        <h3 class="text-white">Genshin Impact Patch 2.8</h3>
                        <small class="text-white mt-2">2022</small>
                    </div>
                </div>
            </div>

            <div class="row my-4 text-white">
                <div class="mb-4">
                    <img src="../../assets/images/img/swiper2.png" class="img-fluid" alt="">
                </div>
                <p class="text-opacity">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu urna tortor vulputate neque felis a tristique laoreet. Amet, molestie scelerisque vestibulum, et. Semper iaculis enim et egestas egestas laoreet. Auctor sed arcu, quam et fermentum consequat. Orci amet enim, nisl maecenas cras. Gravida sit elementum amet, bibendum varius ultrices. Suspendisse aliquam semper sit justo amet, tristique urna massa pulvinar.

                    Eget dignissim quis sed vehicula vitae, ut pretium. Odio duis ut arcu in. Cras tristique blandit vitae quam nec amet facilisi.
                    Id tincidunt interdum viverra interdum sem ultrices vel lectus. Eget integer tincidunt et tristique tempor urna, amet lorem. Pulvinar fermentum nulla blandit felis, viverra facilisis. Arcu volutpat interdum elementum consectetur ultrices sit sed. Nisl aliquet venenatis adipiscing quis mi. Elementum consectetur et, commodo vel consectetur.
                    Nibh vitae mauris eu eget.

                    Venenatis fermentum diam rhoncus hendrerit amet, a vitae turpis neque. Tellus volutpat tellus in ultricies nunc, vitae, elit non elementum. Nisl tempor non mollis egestas vestibulum in. Purus neque mauris est mattis nibh vel. Vitae ac magna vel venenatis. Sit dolor morbi interdum lectus in aliquam laoreet in nunc. Nulla est augue quis suspendisse enim. Neque turpis nibh cursus quam facilisi lacus. Urna interdum in urna quam elementum facilisi. Feugiat nisi ornare bibendum neque eget.
                </p>
            </div>

            <div class="row text-center">
                <div class="col">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="text-white fz-24 mb-0">Update Lainnya</h2>
                        <a href="./index.php" class="fz-14 text-orange text-decoration-none">Lihat Selengkapnya</a>
                    </div>

                    <div class="my-3">
                        <?php
                        $data = [
                            ["../../assets/images/img/update1.png", "Genshin Game Patch 2.8", "10 Juli 2022"],
                            ["../../assets/images/img/update2.png", "DITUSI Giveaway Party!!", "6 Juli 2022"],
                            ["../../assets/images/img/update3.png", "Genshin Impact Sumeru Trailer", "2 Juli 2022"],
                        ];
                        foreach ($data as $i => $val) :
                        ?>
                            <div class="d-flex gap-2 flex-column mb-3">
                                <a href="./updates-detail.php">
                                    <img src="<?= $val[0] ?>" width="100%" class="img-fluid" alt="">
                                </a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="font-bold text-white fz-16"><?= $val[1] ?></label>
                                    <span class="fz-14" style="color: rgba(255, 255, 255, 0.8);"><?= $val[2] ?></span>
                                </div>
                            </div>
                        <?php endforeach ?>
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
                            ?? 2021 PT. Emvipix Digital Kreatif - Ditusi Gaming Store. All rights reserved.
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