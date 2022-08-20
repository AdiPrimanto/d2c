<div class="my-5">
    <div class="d-flex justify-content-between align-items-center">
    </div>

    <div class="my-3">
        <div class="row">
            <div class="col">
                <div class="testimonial swiper">
                    <h2 class="text-white fz-24 mb-0">Testimoni</h2>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex-column gap-3">
                            <img src="./assets/images/img/testi1.png" alt="...">
                            <p class="font-thin fz-16 mb-2" style="opacity: 80%;">“Gue selalu top up Genshin di DITUSI sejak 2017, ga pernah ngecewain sama sekali. Harganya juga bersahabat, big thanks to DITUSI team!”</p>
                            <span class="fz-16 font-bold text-start">Sandya Minova</span>
                        </div>
                        <div class="swiper-slide flex-column gap-3 ">
                            <img src="./assets/images/img/testi1.png" alt="...">
                            <p class="font-thin fz-16 mb-2" style="opacity: 80%;">“Gue selalu top up Genshin di DITUSI sejak 2017, ga pernah ngecewain sama sekali. Harganya juga bersahabat, big thanks to DITUSI team!”</p>
                            <span class="fz-16 font-bold text-start">Sandya Minova</span>
                        </div>
                        <div class="swiper-slide flex-column gap-3">
                            <img src="./assets/images/img/testi1.png" alt="...">
                            <p class="font-thin fz-16 mb-2" style="opacity: 80%;">“Gue selalu top up Genshin di DITUSI sejak 2017, ga pernah ngecewain sama sekali. Harganya juga bersahabat, big thanks to DITUSI team!”</p>
                            <span class="fz-16 font-bold text-start">Sandya Minova</span>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="testimonial swiper-pagination"></div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript">
    var swiper = new Swiper('.testimonial.swiper', {
        slidesPerView: 'auto',
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<style>
    .testimonial.swiper {
        width: 100%;
        height: 100%;
    }

    .testimonial .swiper-slide {
        text-align: left;
        font-size: 18px;
        /* background: #fff; */
        color: #fff;
        width: 100%;
        /* width: 80%; */

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
        align-items: start;
    }

    .testimonial .swiper-button-next,
    .swiper-button-prev {
        background-color: #111523;
        border-radius: 50%;
        width: 30px;
        height: 30px;
    }

    .testimonial .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 12px;
        font-weight: bold;
        color: #fff;
    }

    .testimonial .swiper-button-next,
    .testimonial .swiper-button-prev {
        top: 5% !important;
    }

    .testimonial .swiper-button-next {
        right: 0px !important;
    }

    .testimonial .swiper-button-prev {
        left: 85% !important;
    }

    .font-thin {
        font-weight: 300;
    }

    .chevron {
        background-color: #111523;
        border-radius: 50%;
        outline: none;
        border: 0;
        padding: 4px 7px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media screen and (max-width: 768px) {
        .testimonial .swiper-button-prev {
            left: 80% !important;
        }
    }
</style>