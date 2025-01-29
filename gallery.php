
    <!-- HEADER -->
    <?php
    $page = 'gallery';
    include 'layouts/header.php';
    ?>
    <!-- END HEADER -->

    <!-- MAIN CONTENT -->
    <main>
        <!-- BANNER -->
        <section class="section position-relative" style="background-image: url(image/image-1920x900-1.jpg);">
            <div class="image-overlay"></div>
            <div class="r-container  position-relative" style="z-index: 2;">
                <div class="d-flex flex-column">
                    <h2 class="font-1 fw-bold">Our <span class="accent-color">Gallery</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb font-2">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <div class="section">
            <div class="r-container">
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col mb-4">
                        <a href="image/image-600x500-7.jpg" data-fslightbox="gallery">
                            <img src="image/image-600x500-7.jpg" alt="image" class="img-fluid rounded-3">
                        </a>
                    </div>
                    <div class="col mb-4">
                        <a href="image/image-600x500-2.jpg" data-fslightbox="gallery">
                            <img src="image/image-600x500-2.jpg" alt="image" class="img-fluid rounded-3">
                        </a>
                    </div>
                    <div class="col mb-4">
                        <a href="image/image-600x500-1.jpg" data-fslightbox="gallery">
                            <img src="image/image-600x500-1.jpg" alt="image" class="img-fluid rounded-3">
                        </a>
                    </div>
                    <div class="col mb-4">
                        <a href="image/image-600x500-8.jpg" data-fslightbox="gallery">
                            <img src="image/image-600x500-8.jpg" alt="image" class="img-fluid rounded-3">
                        </a>
                    </div>
                    <div class="col mb-4">
                        <a href="image/image-600x500-5.jpg" data-fslightbox="gallery">
                            <img src="image/image-600x500-5.jpg" alt="image" class="img-fluid rounded-3">
                        </a>
                    </div>
                    <div class="col mb-4">
                        <a href="image/image-600x500-9.jpg" data-fslightbox="gallery">
                            <img src="image/image-600x500-9.jpg" alt="image" class="img-fluid rounded-3">
                        </a>
                    </div>
                    <div class="col mb-4">
                        <a href="image/image-600x500-6.jpg" data-fslightbox="gallery">
                            <img src="image/image-600x500-6.jpg" alt="image" class="img-fluid rounded-3">
                        </a>
                    </div>
                    <div class="col mb-4">
                        <a href="image/image-600x500-10.jpg" data-fslightbox="gallery">
                            <img src="image/image-600x500-10.jpg" alt="image" class="img-fluid rounded-3">
                        </a>
                    </div>
                    <div class="col mb-4">
                        <a href="image/image-600x500-11.jpg" data-fslightbox="gallery">
                            <img src="image/image-600x500-11.jpg" alt="image" class="img-fluid rounded-3">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Most Favorite Podcast -->
        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-column gap-3 text-center">
                    <h3 class="font-1 fw-bold">Most <span class="accent-color">Favorite</span> Podcast</h3>
                    <p class="mx-auto text-gray" style="max-width: 768px;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Morbi pharetra magna a lacus dignissim, sed scelerisque elit rutrum. Nam a pulvinar
                        sapien, a placerat arcu. Nam condimentum orci et semper rutrum.</p>
                    <div class="row row-cols-1 row-cols-lg-3 w-100 text-start">
                        <div class="col  mb-3">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="position-relative h-100">
                                    <div class="image-overlay-2"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <button type="button" class="btn request-loader" data-bs-toggle="modal" data-bs-target="#modal-1" fdprocessedid="6ackeb">
                                                <i class="fa-solid fa-play ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="image/image-600x400-1.jpg" alt="image" class="img-fluid rounded-3">
                                </div>
                                <div class="d-flex flex-row gap-5">
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <i class="fa-regular fa-clock accent-color"></i>
                                        1hr 24m
                                    </div>
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <i class="fa-solid fa-calendar-days accent-color"></i>
                                        13 October 2023
                                    </div>
                                </div>
                                <h5 class="font-1 fw-bold lh-1">Bryan Knoxville: How to Live a Life Full of Music | E106
                                </h5>
                            </div>
                            <div class="modal fade bg-overlay" id="modal-1" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content bg-dark-color">
                                        <iframe class="ifr-video" src="https://www.youtube.com/embed/FK2RaJ1EfA8?autoplay=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col  mb-3">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="position-relative h-100">
                                    <div class="image-overlay-2"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <button type="button" class="btn request-loader" data-bs-toggle="modal" data-bs-target="#modal-2" fdprocessedid="ep65u1">
                                                <i class="fa-solid fa-play ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="image/image-600x400-2.jpg" alt="image" class="img-fluid rounded-3">
                                </div>
                                <div class="d-flex flex-row gap-5">
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <i class="fa-regular fa-clock accent-color"></i>
                                        0hr 58m
                                    </div>
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <i class="fa-solid fa-calendar-days accent-color"></i>
                                        13 October 2023
                                    </div>
                                </div>
                                <h5 class="font-1 fw-bold lh-1">Bryan Knoxville: How to Live a Life Full of Music | E107
                                </h5>
                            </div>
                            <div class="modal fade bg-overlay" id="modal-2" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content bg-dark-color">
                                        <iframe class="ifr-video" src="https://www.youtube.com/embed/FK2RaJ1EfA8?autoplay=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col  mb-3">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="position-relative h-100">
                                    <div class="image-overlay-2"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <button type="button" class="btn request-loader" data-bs-toggle="modal" data-bs-target="#modal-3" fdprocessedid="ofpv9f">
                                                <i class="fa-solid fa-play ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="image/image-600x400-3.jpg" alt="image" class="img-fluid rounded-3">
                                </div>
                                <div class="d-flex flex-row gap-5">
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <i class="fa-regular fa-clock accent-color"></i>
                                        0hr 48m
                                    </div>
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <i class="fa-solid fa-calendar-days accent-color"></i>
                                        13 October 2023
                                    </div>
                                </div>
                                <h5 class="font-1 fw-bold lh-1">Bryan Knoxville: How to Live a Life Full of Music | E108
                                </h5>
                            </div>
                            <div class="modal fade bg-overlay" id="modal-3" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content bg-dark-color">
                                        <iframe class="ifr-video" src="https://www.youtube.com/embed/FK2RaJ1EfA8?autoplay=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIAL -->
        <section class="section position-relative bg-attach-fixed" style="background-image: url(image/image-1920x900-2.jpg);">
            <div class="image-overlay"></div>
            <div class="r-container  position-relative" style="z-index: 2;">
                <div class="d-flex flex-lg-row flex-column-reverse gap-3">
                    <div class="col col-lg-6">
                        <div class="overflow-hidden">
                            <!-- Slider main container -->
                            <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden swiper-pagination-disabled">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper" id="swiper-wrapper-7062259cc22a1d52" aria-live="off" style="cursor: grab; transition-duration: 2000ms; transform: translate3d(-1406px, 0px, 0px);">
                                    <!-- Slides -->
                                    <div class="swiper-slide" role="group" aria-label="1 / 3" style="width: 693px; margin-right: 10px;">
                                        <div class="testimonial-container">
                                            <ul class="rating">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <p class="fst-italic text-gray fs-5 m-0">
                                                “Aliquam consequat arcu a pharetra venenatis. Donec at purus finibus,
                                                eleifend mauris et, eleifend dui. Nam euismod pulvinar elit quis
                                                placerat. Donec feugiat porttitor suscipit.”
                                            </p>
                                            <div class="d-flex flex-row justify-content-between">
                                                <div class="d-flex flex-row align-items-center gap-3">
                                                    <img src="image/image-400x400-1.jpg" alt="testimonials" class="img-fluid rounded-circle" width="70">
                                                    <div>
                                                        <p class="fs-5 m-0 fw-bold">Jhon Burton</p>
                                                        <p class="accent-color m-0">Actor</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="fs-very-large accent-color"><i class="fa-solid fa-quote-right"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 3" style="width: 693px; margin-right: 10px;">
                                        <div class="testimonial-container">
                                            <ul class="rating">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <p class="fst-italic text-gray fs-5 m-0">
                                                “Aliquam consequat arcu a pharetra venenatis. Donec at purus finibus,
                                                eleifend mauris et, eleifend dui. Nam euismod pulvinar elit quis
                                                placerat. Donec feugiat porttitor suscipit.”
                                            </p>
                                            <div class="d-flex flex-row justify-content-between">
                                                <div class="d-flex flex-row align-items-center gap-3">
                                                    <img src="image/image-400x400-2.jpg" alt="testimonials" class="img-fluid rounded-circle" width="70">
                                                    <div>
                                                        <p class="fs-5 m-0 fw-bold">Danilla</p>
                                                        <p class="accent-color m-0">Musician</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="fs-very-large accent-color"><i class="fa-solid fa-quote-right"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 3" style="width: 693px; margin-right: 10px;">
                                        <div class="testimonial-container">
                                            <ul class="rating">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <p class="fst-italic text-gray fs-5 m-0">
                                                “Aliquam consequat arcu a pharetra venenatis. Donec at purus finibus,
                                                eleifend mauris et, eleifend dui. Nam euismod pulvinar elit quis
                                                placerat. Donec feugiat porttitor suscipit.”
                                            </p>
                                            <div class="d-flex flex-row justify-content-between">
                                                <div class="d-flex flex-row align-items-center gap-3">
                                                    <img src="image/image-400x400-3.jpg" alt="testimonials" class="img-fluid rounded-circle" width="70">
                                                    <div>
                                                        <p class="fs-5 m-0 fw-bold">Jenny</p>
                                                        <p class="accent-color m-0">Blogger</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="fs-very-large accent-color"><i class="fa-solid fa-quote-right"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="d-flex flex-column gap-3">
                            <span class="fs-5">Testimonials</span>
                            <h3 class="font-1 fw-bold lh-1">What <span class="accent-color">Listener</span> Says</h3>
                            <p class="text-gray">
                                Phasellus facilisis, neque id dapibus commodo, est libero ultricies felis, venenatis
                                pulvinar eros magna dapibus turpis. Donec eleifend dui nec dui malesuada, id
                                consectetur.
                                <br><br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis, neque id
                                dapibus commodo, est libero ultricies felis, venenatis pulvinar eros magna dapibus
                                turpis. Curabitur vel congue quam. consectetur adipiscing elit.
                            </p>
                            <div>
                                <a href="" class="btn button font-1 ls-2">ALL TESTIMONIALS
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-column gap-3 text-center">
                    <h5 class="font-1 fw-bold">Listen Our Podcast On</h5>
                    <div class="row row-cols-1 row-cols-lg-4">
                        <div class="col px-5 mb-3">
                            <img src="image/youtube.png" alt="youtube" class="img-fluid">
                        </div>
                        <div class="col px-5 mb-3">
                            <img src="image/spotify.png" alt="spotify" class="img-fluid">
                        </div>
                        <div class="col px-5 mb-3">
                            <img src="image/soundcloud.png" alt="soundcloud" class="img-fluid">
                        </div>
                        <div class="col px-5 mb-3">
                            <img src="image/google_podcast.png" alt="google podcast" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Subscribe -->
        <section class="section bg-secondary-color">
            <div class="r-container">
                <div class="section position-relative rounded-4 overflow-hidden bg-attach-fixed" style="background-image: url(image/image-1920x900-3.jpg);">
                    <div class="image-overlay-2"></div>
                    <div class="row row-cols-1 row-cols-lg-2 position-relative" style="z-index: 2;">
                        <div class="col  mb-3">
                            <h3 class="font-1 fw-bold lh-1"><span class="accent-color">Subscribe</span> For The Latest
                                Episodes</h3>
                            <p class="text-gray">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo.
                            </p>
                        </div>
                        <div class="col  mb-3">
                            <div class="d-flex h-100 flex-column justify-content-center">
                                <h5 class="font-1 fw-bold">Newsletter</h5>
                                <form class="w-100 form needs-validation">
                                    <input type="text" name="action" value="subscribe" hidden="">
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" class="form-control py-3 px-4 form-white" placeholder="Your Email" aria-label="Recipient's username" aria-describedby="button-addon2" required="" fdprocessedid="dampff">
                                        <button class="btn button btn_submit-subscribe font-1  fw-bold px-5" type="submit" id="button-addon2" fdprocessedid="11n5yq">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                <div id="liveToast" class="toast success_msg_subscribe bg-dark-transparent text-white" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Your Subscribe Send Successfully!.
                                        </div>
                                        <button type="button" class="btn me-2 m-auto text-white" data-bs-dismiss="toast" aria-label="Close">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- FOOTER -->
    <?php
    include 'layouts/footer.php';
    ?>


    <!-- <span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span> -->

</body>

</html>