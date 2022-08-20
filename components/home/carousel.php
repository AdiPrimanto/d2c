<div>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./assets/images/img/swiper1.png" class="d-block w-100" alt="img">
            </div>
            <div class="swiper-slide">
                <img src="./assets/images/img/swiper1.png" class="d-block w-100" alt="img">
            </div>
            <div class="swiper-slide">
                <img src="./assets/images/img/swiper1.png" class="d-block w-100" alt="img">
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper', {
        spaceBetween: 30,
        // centeredSlides: true,
        slidesPerView: 'auto',
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #1e253e;
        width: 80%;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-bullets.swiper-pagination-horizontal,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
        position: initial;
    }

    .swiper-pagination {
        text-align: left;
    }

    .swiper-pagination-bullet-active {
        background: #fff !important;
    }

    .swiper-pagination-bullet {
        background: rgba(255, 255, 255, 0.2);
    }
</style>