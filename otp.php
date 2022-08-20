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
            <!--  slider -->

            <div class="row">
                <div class="col">
                    <div>
                        <a href="./signup.php" class="rounded-5 bg-variant-4 d-flex flex-column mb-3 align-items-center w-30">
                            <i class="bi bi-arrow-left-short text-white fz-20 font-bold"></i>
                        </a>
                        <h3 class="text-white">Verifikasi OTP</h3>
                        <p class="text-white">Kami telah mengirimkan kode verifikasi ke nomor 0*******887. Silahkan cek kode OTP yang kami kirimkan ke nomor anda dan masukkan kode tersebut.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form action="" class="custom-form pb-4">
                        <div class="form-group my-4">
                            <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                                <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" />
                                <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" />
                                <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" />
                                <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" />
                                <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" />
                                <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" />
                            </div>
                        </div>

                        <div class="form-group">
                            <p class="text-white text-center fz-14">
                                Tidak menerima kode verifikasi?
                                <a href="javascript:void(0)" onclick="sendMore()" class="text-orange text-decoration-none">Kirim Ulang</a>
                            </p>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-orange w-100" type="submit">Lanjutkan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            function OTPInput() {
                const inputs = document.querySelectorAll('#otp > *[id]');
                for (let i = 0; i < inputs.length; i++) {
                    inputs[i].addEventListener('keydown', function(event) {
                        if (event.key === "Backspace") {
                            inputs[i].value = '';
                            if (i !== 0) inputs[i - 1].focus();
                        } else {
                            if (i === inputs.length - 1 && inputs[i].value !== '') {
                                return true;
                            } else if (event.keyCode > 47 && event.keyCode < 58) {
                                inputs[i].value = event.key;
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            } else if (event.keyCode > 64 && event.keyCode < 91) {
                                inputs[i].value = String.fromCharCode(event.keyCode);
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            }
                        }
                    });
                }
            }
            OTPInput();
        });
    </script>

</body>

</html>