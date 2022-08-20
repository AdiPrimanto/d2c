<div class="mb-5 mt-3">
    <form class="form-inline has-search my-2">
        <input class="form-control" type="search" id="search-game" placeholder="Cari game favorit Anda disini" aria-label="Search">
        <!-- <button class="btn btn-search">
            <img src="./assets/icons/Search.svg" width="15" height="15" alt="search">
        </button> -->
    </form>

    <div class="row mt-4" id="myGalleyImage">
        <div class="col">
            <div id="ditusiGameGallery">
                <div class="btn-group">
                    <button class="btn btn-filter active" onclick="filterGallery('most-popular')">Most Popular</button>
                    <button class="btn btn-filter" onclick="filterGallery('powered-gp')">Powered by Google Play</button>
                    <button class="btn btn-filter" onclick="filterGallery('direct-topup')">Direct Top Up</button>
                    <button class="btn btn-filter" onclick="filterGallery('exclusive-merchandise')">Exclusive Merchandise</button>
                    <button class="btn btn-filter" onclick="filterGallery('special-service')">Special Service</button>
                    <button class="btn btn-filter" onclick="filterGallery('voucher')">Voucher</button>
                </div>
            </div>
        </div>
    </div>

    <div class="item-updates most-popular">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mt-3 pl-15">
            <?php
            $data = [
                ["./assets/images/hero/gi.png", "Genshin Impact", "<img src='./assets/images/img/Label.png' class='img-fluid' alt='image' />"],
                ["./assets/images/hero/ml.png", "Mobile Legends"],
                ["./assets/images/hero/val.png", "Genshin Impact", "<img src='./assets/images/img/Label2.png' class='img-fluid' alt='image' />"],
                ["./assets/images/hero/ml.png", "Mobile Legends"],
                ["./assets/images/hero/gi.png", "Genshin Impact", "<img src='./assets/images/img/Label.png' class='img-fluid' alt='image' />"],
                ["./assets/images/hero/ml.png", "Genshin Impact", "<img src='./assets/images/img/Label2.png' class='img-fluid' alt='image' />"],
                ["./assets/images/hero/val.png", "Genshin Impact", "<img src='./assets/images/img/Label2.png' class='img-fluid' alt='image' />"],
                ["./assets/images/hero/gi.png", "Genshin Impact", "<img src='./assets/images/img/Label.png' class='img-fluid' alt='image' />"],
                ["./assets/images/hero/ml.png", "Mobile Legends"],
            ];
            foreach ($data as $i => $val) :
            ?>
                <div class="col-sm-4 gallery__image mt-2">
                    <a href="./d2cgamingstore/detail-googleplay/index.php">
                        <div class="image__gallery">
                            <img src="<?= $val[0] ?>" class="img-fluid" loading="lazy" alt="image">
                        </div>
                        <div class="label d-flex gap-1">
                            <?= $val[2] ?>
                            <?= $val[2] ?>
                            <?= $val[2] ?>
                            <?= $val[2] ?>
                            <?= $val[2] ?>
                        </div>
                        <div class="title"><?= $val[1] ?></div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="item-updates powered-gp">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mt-3 pl-15">
            <?php
            $data = [
                ["./assets/images/hero/val.png", "Genshin Impact", "<img src='./assets/images/img/Label2.png' class='img-fluid' alt='image' />"],
                ["./assets/images/hero/ml.png", "Genshin Impact", "<img src='./assets/images/img/Label2.png' class='img-fluid' alt='image' />"],
                ["./assets/images/hero/val.png", "Genshin Impact", "<img src='./assets/images/img/Label2.png' class='img-fluid' alt='image' />"],
            ];
            foreach ($data as $i => $val) :
            ?>
                <div class="col-sm-4 gallery__image mt-2">
                    <a href="./d2cgamingstore/detail-googleplay/index.php">
                        <div class="image__gallery">
                            <img src="<?= $val[0] ?>" class="img-fluid" loading="lazy" alt="image">
                        </div>
                        <div class="label"><?= $val[2] ?></div>
                        <div class="title"><?= $val[1] ?></div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="item-updates direct-topup">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mt-3 pl-15">
            <?php
            $data = [
                ["./assets/images/hero/gi.png", "Genshin Impact", "<img src='./assets/images/img/Label.png' class='img-fluid' alt='image' />"],
                ["./assets/images/hero/gi.png", "Genshin Impact", "<img src='./assets/images/img/Label.png' class='img-fluid' alt='image' />"],
                ["./assets/images/hero/gi.png", "Genshin Impact", "<img src='./assets/images/img/Label.png' class='img-fluid' alt='image' />"],
            ];
            foreach ($data as $i => $val) :
            ?>
                <div class="col-sm-4 gallery__image mt-2">
                    <a href="./d2cgamingstore/detail-direct-topup/index.php">
                        <div class="image__gallery">
                            <img src="<?= $val[0] ?>" class="img-fluid" loading="lazy" alt="image">
                        </div>
                        <div class="label"><?= $val[2] ?></div>
                        <div class="title"><?= $val[1] ?></div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="item-updates exclusive-merchandise">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mt-3 pl-15">
            <?php
            $data = [
                ["./assets/images/hero/gi.png", "Genshin Impact"],
                ["./assets/images/hero/ml.png", "Mobile Legends"],
            ];
            foreach ($data as $i => $val) :
            ?>
                <div class="col-sm-4 gallery__image mt-2">
                    <a href="./d2cgamingstore/detail-exclusive-merchandise/index.php">
                        <div class="image__gallery">
                            <img src="<?= $val[0] ?>" class="img-fluid" loading="lazy" alt="image">
                        </div>
                        <div class="label"><?= $val[2] ?></div>
                        <div class="title"><?= $val[1] ?></div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="item-updates special-service">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mt-3 pl-15">
            <?php
            $data = [
                ["./assets/images/hero/val.png", "Genshin Impact"],
                ["./assets/images/hero/gi.png", "Genshin Impact"],
            ];
            foreach ($data as $i => $val) :
            ?>
                <div class="col-sm-4 gallery__image mt-2">
                    <a href="./d2cgamingstore/detail-special-service/index.php">
                        <div class="image__gallery">
                            <img src="<?= $val[0] ?>" class="img-fluid" loading="lazy" alt="image">
                        </div>
                        <div class="label"><?= $val[2] ?></div>
                        <div class="title"><?= $val[1] ?></div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="item-updates voucher">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mt-3 pl-15">
            <?php
            $data = [
                ["./assets/images/hero/ml.png", "Mobile Legends"],
                ["./assets/images/hero/val.png", "Genshin Impact"],
            ];
            foreach ($data as $i => $val) :
            ?>
                <div class="col-sm-4 gallery__image mt-2">
                    <a href="./d2cgamingstore/detail-voucher/index.php">
                        <div class="image__gallery">
                            <img src="<?= $val[0] ?>" class="img-fluid" loading="lazy" alt="image">
                        </div>
                        <div class="label"><?= $val[2] ?></div>
                        <div class="title"><?= $val[1] ?></div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="row">
        <div class="col text-center mt-3">
            <a href="javascript:void(0)" class="text-orange" onclick="showMore()">
                Lihat Lebih Banyak <img src="./assets/icons/chevron-down.svg" alt="chevron-down">
            </a>
        </div>
    </div>
</div>

<script>
    $("#myGalleyImage .btn-filter").on('click', function() {
        $(this).siblings().removeClass('active')
        $(this).addClass('active');
    })

    filterGallery("most-popular")

    function filterGallery(c) {
        var x, i;
        x = document.getElementsByClassName("item-updates");
        // untuk menampilkan semua data
        // if (c == "2022") c = "";
        for (i = 0; i < x.length; i++) {
            removeClassGallery(x[i], "show");
            if (x[i].className.indexOf(c) > -1) addClassGallery(x[i], "show");
        }
    }

    function addClassGallery(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function removeClassGallery(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }
</script>

<style>
    .form-inline {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .has-search .form-control {
        width: 100% !important;
        padding: .375rem 1.25rem;
        border-radius: 20px;
        border: none;
        outline: none;
        color: #ffffff;
    }

    .btn-search {
        color: #ffffff;
        margin-left: -45px;
        border-radius: 20px;
        background: #fff;
        padding: .3rem 1rem !important;
    }

    .btn-search:hover {
        outline: none;
        border: 0;
    }

    .text-orange {
        color: #ff9c03;
        text-decoration: none;
        font-weight: bold;
        font-size: .875rem;
    }

    .pl-15 {
        padding-left: 15px;
    }

    .gallery__image {
        position: relative;
        padding: 0 15px 0 0;
    }

    .image__gallery img {
        border-radius: 10px;
        position: relative;
        display: block;
    }

    .image__gallery {
        position: relative;
        display: inline-block;
    }

    .image__gallery:after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        display: inline-block;
        border-radius: 10px;
        background: linear-gradient(to bottom, rgba(109, 121, 164, 0) 0%, #1E253E 84%);
    }

    .gallery__image .label {
        position: absolute;
        padding: 0;
        top: 4%;
        left: 4%;
        width: 13.5%;
    }

    .gallery__image .title {
        position: absolute;
        bottom: 10%;
        left: 4%;
        width: 65%;
        color: #ffffff;
        font-size: .8rem;
        font-weight: bold;
        text-align: left;
    }

    @media screen and (max-width: 768px) {
        .gallery__image {
            width: 33.3333333333%;
        }
    }
</style>