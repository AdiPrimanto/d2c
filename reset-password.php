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
            <div class="row mb-4">
                <div class="col">
                    <div>
                        <h3 class="text-white">Buat Kata Sandi Baru</h3>
                        <p class="text-white">Silahkan masukkan kata sandi baru anda dengan kombinasi yang lebih baik dari kata sandi sebelumnya</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form action="" class="custom-form pb-4">
                        <div class="form-group">
                            <label class="form-label" for="autoSizingInputGroup">Kata Sandi Baru</label>
                            <div class="input-group mb-3">
                                <input class="form-control" type="password" id="password" name="password" placeholder="Masukkan Kata Sandi Baru" value="">
                                <span class="input-group-text">
                                    <i class="bi bi-eye-slash-fill fz-14" id="togglePassword" style="cursor: pointer"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="autoSizingInputGroup">Konfirmasi Kata Sandi Baru</label>
                            <div class="input-group mb-3">
                                <input class="form-control" type="password" id="repassword" name="repassword" placeholder="Masukkan Kata Sandi Baru" value="">
                                <span class="input-group-text">
                                    <i class="bi bi-eye-slash-fill fz-14" id="togglePasswordUlang" style="cursor: pointer"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group text-white fz-14 opacity-80">
                            <span>Pastikan password Anda memenuhi</span>
                            <ul>
                                <li>Terdapat Huruf Kapital</li>
                                <li>Terdapat Kombinasi Angka</li>
                                <li>Terdapat Kombinasi Special Character</li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <!-- <button class="btn btn-orange w-100" type="submit">Buat Password</button> -->
                            <a href="./reset-password-success.php" class="btn btn-orange w-100">Buat Password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function() {

            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            // toggle the eye icon
            this.classList.toggle('bi-eye-slash-fill');
            this.classList.toggle('bi-eye-fill');
        });

        const togglePasswordUlang = document.querySelector("#togglePasswordUlang");
        const repassword = document.querySelector("#repassword");

        togglePasswordUlang.addEventListener("click", function() {

            // toggle the type attribute
            const type = repassword.getAttribute("type") === "password" ? "text" : "password";
            repassword.setAttribute("type", type);
            // toggle the eye icon
            this.classList.toggle('bi-eye-slash-fill');
            this.classList.toggle('bi-eye-fill');
        });
    </script>

</body>

</html>