<div>
    <form action="" class="custom-form pb-4">
        <div class="form-group">
            <label class="form-label" for="autoSizingInputGroup">Nomor HP</label>
            <div class="input-group">
                <div class="input-group-text">+62</div>
                <input type="number" class="form-control" id="autoSizingInputGroup" placeholder="Masukkan nomor hp anda">
            </div>
        </div>

        <div class="form-group mb-2">
            <label class="form-label" for="autoSizingInputGroup">Kata Sandi</label>
            <div class="input-group">
                <input class="form-control" type="password" id="password" name="password" placeholder="Masukkan kata sandi Anda" value="">
                <span class="input-group-text">
                    <i class="bi bi-eye-slash-fill fz-14" id="togglePassword" style="cursor: pointer"></i>
                </span>
            </div>
        </div>
        <p class="text-end"><a href="./forgot-password.php" class="text-orange fz-14 text-decoration-none">Lupa Kata Sandi?</a></p>

        <div class="form-group">
            <button class="btn btn-orange w-100" type="submit">Masuk</button>
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
</script>