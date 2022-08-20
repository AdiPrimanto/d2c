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
            <a href="./index.php" class="menu-item d-flex flex-column justify-content-center align-items-center text-decoration-none">
                <i class="bi bi-house" style="font-size: 1.25rem;"></i>
                <span class="fz-14">Beranda</span>
            </a>
            <a href="./transaksi.php" class="menu-item d-flex flex-column justify-content-center align-items-center text-decoration-none">
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
        <div class="container min-h-100vh bg-variant py-4">
            <div class="row">
                <div class="col">
                    <div>
                        <a href="./index.php" class="rounded-5 bg-variant-4 d-flex flex-column mb-3 align-items-center w-30">
                            <i class="bi bi-arrow-left-short text-white fz-20 font-bold"></i>
                        </a>
                        <h3 class="text-white Inter">Ubah Profil</h3>
                        <div class="my-4 text-center position-relative">
                            <img src="../../assets/images/img/change-profile.png" alt="" id="photo_profile">
                            <div class="file btn btn-orange rounded-circle py-2 px-2" id="file-upload">
                                <img src="../../assets/icons/pencilwhite.png" class="img-fluid" alt="">
                                <input type="file" name="file" click="uploadImage()" accept="image/jpeg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col">
                    <form action="" class="custom-form pb-4">
                        <div class="form-group">
                            <label class="form-label" for="autoSizingInputGroup">Nama</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Masukkan nama anda" value="Rickie Mickie">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="autoSizingInputGroup">NNomor HP (Whatsapp)</label>
                            <div class="input-group">
                                <div class="input-group-text">+62</div>
                                <input type="number" class="form-control" id="autoSizingInputGroup" placeholder="Masukkan nomor hp anda" value="87324242">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="autoSizingInputGroup">Email</label>
                            <input type="email" class="form-control" id="autoSizingInputGroup" placeholder="Masukkan alamat email anda" value="ricki@example.com">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-orange w-100" type="submit">SImpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#file-upload').on('change', function(e) {
                // Get the file name and set it to var fileName
                var fileName = e.target.files[0].name;
                // Set the value of the file input to fileName
                $('#photo_profile').attr('src', URL.createObjectURL(e.target.files[0]));
                // $('#file-upload').val(fileName);
            });

        });
    </script>

</body>

</html>