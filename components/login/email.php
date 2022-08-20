<div>
    <form action="" class="custom-form pb-4">
        <div class="form-group">
            <label class="form-label" for="autoSizingInputGroup">Email</label>
            <input type="email" class="form-control" id="autoSizingInputGroup" placeholder="Masukkan alamat email anda">
        </div>

        <div class="form-group mb-2">
            <label class="form-label" for="autoSizingInputGroup">Kata Sandi</label>
            <div class="input-group">
                <input class="form-control" type="password" id="passwordEmail" name="passwordEmail" placeholder="Masukkan kata sandi Anda" value="">
                <span class="input-group-text">
                    <i class="bi bi-eye-slash-fill fz-14" id="togglePasswordEmail" style="cursor: pointer"></i>
                </span>
            </div>
        </div>
        <p class="text-end"><a href="./forgot-password.php" class="text-orange fz-14 text-decoration-none">Lupa Kata Sandi?</a></p>

        <div class="form-group">
            <button class="btn btn-orange w-100" type="submit">Masuk</button>
        </div>

        <div class="form-group">
            <div class="d-flex align-items-center gap-3">
                <hr class="border-white flex-grow-1">
                <span>atau</span>
                <hr class="border-white flex-grow-1">
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-google w-100" type="submit">
                <img src="./assets/icons/google.png" alt="google"> Masuk dengan Google
            </button>
        </div>

        <div class="form-group">
            <p class="text-white text-center">
                Belum memiliki akun?
                <a href="./signup.php" class="text-orange text-decoration-none">Daftar</a>
            </p>
        </div>
    </form>
</div>

<script>
    const togglePasswordEmail = document.querySelector("#togglePasswordEmail");
    const passwordEmail = document.querySelector("#passwordEmail");

    togglePasswordEmail.addEventListener("click", function() {

        // toggle the type attribute
        const type = passwordEmail.getAttribute("type") === "password" ? "text" : "password";
        passwordEmail.setAttribute("type", type);
        // toggle the eye icon
        this.classList.toggle('bi-eye-slash-fill');
        this.classList.toggle('bi-eye-fill');
    });
</script>