<div class="my-5">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="text-white fz-24 mb-0">Update Terbaru</h2>
        <a href="./d2cgamingstore/updates/index.php" class="fz-14 text-orange">Lihat Selengkapnya</a>
        <!-- <a href="./updates.php" class="fz-14 text-orange">Lihat Selengkapnya</a> -->
    </div>

    <div class="my-3">
        <?php
        $data = [
            ["./assets/images/img/update1.png", "Genshin Game Patch 2.8", "10 Juli 2022"],
            ["./assets/images/img/update2.png", "DITUSI Giveaway Party!!", "6 Juli 2022"],
            ["./assets/images/img/update3.png", "Genshin Impact Sumeru Trailer", "2 Juli 2022"],
        ];
        foreach ($data as $i => $val) :
        ?>
            <div class="d-flex gap-2 flex-column mb-3">
                <a href="./d2cgamingstore/updates/updates-detail.php">
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

<style>
    .text-orange:hover {
        color: #ff9c03;
    }
</style>