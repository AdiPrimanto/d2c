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

    <!-- CONTENT -->
    <section>
        <div class="container min-h-100vh bg-variant py-4">
            <div class="row mb-4">
                <div class="col">
                    <div>
                        <a href="./index.php" class="rounded-5 bg-variant-4 d-flex flex-column mb-3 align-items-center w-30">
                            <i class="bi bi-arrow-left-short text-white fz-20 font-bold"></i>
                        </a>
                        <h3 class="text-white">Masuk dan nikmati kemudahan dalam melakukan Topup</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <ul class="login nav nav-pills mb-3 p-2 rounded-5 d-flex justify-content-between" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fz-14 rounded-5 active" id="pills-phone-tab" data-bs-toggle="pill" data-bs-target="#pills-phone" type="button" role="tab" aria-controls="pills-phone" aria-selected="true">Dengan Nomor HP</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fz-14 rounded-5" id="pills-email-tab" data-bs-toggle="pill" data-bs-target="#pills-email" type="button" role="tab" aria-controls="pills-email" aria-selected="false">Dengan Alamat Email</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade text-white show active" id="pills-phone" role="tabpanel" aria-labelledby="pills-phone-tab" tabindex="0">
                            <!--  login phone -->
                            <?php @include('./components/login/phone.php'); ?>
                        </div>
                        <div class="tab-pane fade text-white" id="pills-email" role="tabpanel" aria-labelledby="pills-email-tab" tabindex="0">
                            <!--  login email phone -->
                            <?php @include('./components/login/email.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {});
    </script>

</body>

</html>