<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <link rel="dns-prefetch" href="//s3.envato.com">


    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Goodsound</title>
    <meta name="description"
        content="">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="turbo-visit-control" content="reload">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Scripts -->
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/swiper-script.js"></script>
    <script src="js/submit-form.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>
    <script src="js/video_embedded.js"></script>

    <!-- HEADER -->
    <?php
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
                    <h2 class="font-1 fw-bold">About <span class="accent-color">Goodsound</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb font-2">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="section bg-secondary-color">
            <div class="r-container">
                <div class="row row-cols-1 row-cols-lg-2 w-100">
                    <div class="col mb-lg-0 mb-5">
                        <div class="d-flex flex-column gap-3 h-100 justify-content-center">
                            <span class="fs-5">About Us</span>
                            <h3 class="font-1 fw-bold lh-1">We Provide The <span class="accent-color">Latest</span>
                                Podcast For You</h3>
                            <p class="text-gray">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis, neque id
                                dapibus commodo, est libero ultricies felis, venenatis pulvinar eros magna dapibus
                                turpis. Curabitur vel congue quam. Donec eleifend dui nec dui malesuada, id consectetur
                                arcu aliquet.
                                <br><br>
                                Nam non sollicitudin lacus. Nullam euismod justo dictum ex euismod pellentesque.
                                Suspendisse potenti. Vestibulum ultricies, elit at dapibus placerat.
                            </p>
                            <h5 class="font-1 fw-bold ">Listen Our Podcast On</h5>
                            <div class="d-flex flex-lg-row gap-3">
                                <div class="col  mb-3">
                                    <img src="image/youtube.png" alt="youtube" class="img-fluid">
                                </div>
                                <div class="col  mb-3">
                                    <img src="image/spotify.png" alt="spotify" class="img-fluid">
                                </div>
                                <div class="col  mb-3">
                                    <img src="image/google_podcast.png" alt="google podcast" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col  mb-3">
                        <div class="position-relative">
                            <div class="position-absolute top-0 end-0 bg-accent-color px-5 py-4 rounded-3 shadow" style="z-index: 3; margin-top: -50px;">
                                <div class="d-flex flex-column text-center">
                                    <h2 class="font-1 fw-bold m-0">10<sup>th</sup></h2>
                                    <p class="fs-5 m-0">Experience</p>
                                </div>
                            </div>
                            <div class="position-relative me-5">
                                <div class="image-overlay-2 rounded-4"></div>
                                <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                    <div class="d-flex justify-content-center align-items-center h-100">
                                        <button type="button" class="btn request-loader" data-bs-toggle="modal" data-bs-target="#modal-about" fdprocessedid="k1928p">
                                            <i class="fa-solid fa-play ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                                <img src="image/image-600x700-1.jpg" alt="image" class="img-fluid w-100 rounded-4">
                            </div>
                        </div>
                        <div class="modal fade bg-overlay" id="modal-about" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-dark-color">
                                    <iframe class="ifr-video" src="https://www.youtube.com/embed/FK2RaJ1EfA8?autoplay=1"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="position-relative py-5 px-3" style="margin-top: -80px;">
            <div class="position-absolute top-0 start-0 w-75 h-100 bg-accent-color rounded-end-3"></div>
            <div class="r-container position-relative" style="z-index: 2;">
                <div class="row row-cols-1 row-cols-lg-4 ps-5 ps-lg-0">
                    <div class="col mb-4 mb-lg-0">
                        <div class="d-flex flex-column">
                            <h2 class="font-1 fw-bold m-0">20<sup>M</sup></h2>
                            <p class="fs-5 m-0">Our Subscribers</p>
                        </div>
                    </div>
                    <div class="col mb-4 mb-lg-0">
                        <div class="d-flex flex-column">
                            <h2 class="font-1 fw-bold m-0">150<sup>+</sup></h2>
                            <p class="fs-5 m-0">Podcast Episodes</p>
                        </div>
                    </div>
                    <div class="col mb-4 mb-lg-0">
                        <div class="d-flex flex-column">
                            <h2 class="font-1 fw-bold m-0">83<sup>K</sup></h2>
                            <p class="fs-5 m-0">Our Followers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Values -->
        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-column gap-3 h-100 justify-content-center text-center gap-3">
                    <span class="fs-5">Our Values</span>
                    <h3 class="font-1 fw-bold lh-1">You <span class="accent-color">Must</span> Listen to Our Podcast
                    </h3>
                    <div class="row row-cols-1 row-cols-lg-3">
                        <div class="col  mb-3">
                            <div class="bg-secondary-dark px-5 py-3 rounded-3">
                                <span class="accent-color" style="font-size: 5.175rem;">
                                    <i class="fa-solid fa-award"></i>
                                </span>
                                <h5 class="font-1 fw-bold">Best Sound Quality</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar.</p>
                                <div class="my-5">
                                    <a href="" class="link-white font-1 fw-bold ">
                                        LEARN MORE
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col  mb-3">
                            <div class="bg-secondary-dark px-5 py-3 rounded-3">
                                <span class="accent-color" style="font-size: 5.175rem;">
                                    <i class="fa-solid fa-users"></i>
                                </span>
                                <h5 class="font-1 fw-bold">Famous Interviewees</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar.</p>
                                <div class="my-5">
                                    <a href="" class="link-white font-1 fw-bold ">
                                        LEARN MORE
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col  mb-3">
                            <div class="bg-secondary-dark px-5 py-3 rounded-3">
                                <span class="accent-color" style="font-size: 5.175rem;">
                                    <i class="fa-solid fa-icons"></i>
                                </span>
                                <h5 class="font-1 fw-bold">Interesting Topic</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar.</p>
                                <div class="my-5">
                                    <a href="" class="link-white font-1 fw-bold ">
                                        LEARN MORE
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
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
                                <div class="swiper-wrapper" id="swiper-wrapper-68e29cf105e34133b" aria-live="off" style="cursor: grab; transition-duration: 0ms; transform: translate3d(-730px, 0px, 0px);">
                                    <!-- Slides -->
                                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 3" style="width: 720px; margin-right: 10px;">
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
                                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 3" style="width: 720px; margin-right: 10px;">
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
                                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 3" style="width: 720px; margin-right: 10px;">
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
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
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

        <!-- OUR TEAM -->
        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-column gap-3 text-center">
                    <span class="fs-5">Our Team</span>
                    <h3 class="font-1 fw-bold">Meet Our <span class="accent-color">Host</span></h3>
                    <p class="mx-auto text-gray" style="max-width: 768px;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Morbi pharetra magna a lacus dignissim, sed scelerisque elit rutrum. Nam a pulvinar
                        sapien, a placerat arcu. Nam condimentum orci et semper rutrum.</p>
                    <div class="row row-cols-1 row-cols-lg-3">
                        <div class="col mb-3">
                            <div class="d-flex flex-column bg-secondary-color p-4 rounded-3">
                                <img src="image/image-600x700-2.jpg" alt="image" class="img-fluid rounded-3 mb-3">
                                <div class="mb-4">
                                    <h5 class="font-1 fw-bold m-0 lh-1">Emilly Spector</h5>
                                    <span class="accent-color">Expert Host</span>
                                </div>
                                <div class="social-container mb-3 justify-content-center">
                                    <a href="https://www.facebook.com" class="social-item">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.twitter.com" class="social-item">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="https://www.youtube.com" class="social-item">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-column bg-secondary-color p-4 rounded-3">
                                <img src="image/image-600x700-3.jpg" alt="image" class="img-fluid rounded-3 mb-3">
                                <div class="mb-4">
                                    <h5 class="font-1 fw-bold m-0 lh-1">Baron Mordo</h5>
                                    <span class="accent-color">Expert Host</span>
                                </div>
                                <div class="social-container mb-3 justify-content-center">
                                    <a href="https://www.facebook.com" class="social-item">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.twitter.com" class="social-item">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="https://www.youtube.com" class="social-item">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-column bg-secondary-color p-4 rounded-3">
                                <img src="image/image-600x700-4.jpg" alt="image" class="img-fluid rounded-3 mb-3">
                                <div class="mb-4">
                                    <h5 class="font-1 fw-bold m-0 lh-1">Eva James</h5>
                                    <span class="accent-color">Expert Host</span>
                                </div>
                                <div class="social-container mb-3 justify-content-center">
                                    <a href="https://www.facebook.com" class="social-item">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.twitter.com" class="social-item">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="https://www.youtube.com" class="social-item">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Subscribe -->
        <section class="section">
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
                                        <input type="email" name="email" class="form-control py-3 px-4 form-white" placeholder="Your Email" aria-label="Recipient's username" aria-describedby="button-addon2" required="" fdprocessedid="wgto8e">
                                        <button class="btn button btn_submit-subscribe font-1  fw-bold px-5" type="submit" id="button-addon2" fdprocessedid="awtodb">Subscribe</button>
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

        <!-- Our Partners -->
        <section class="section bg-secondary-color">
            <div class="r-container">
                <div class="d-flex flex-column text-center gap-3">
                    <span class="fs-5">Our Partners</span>
                    <h3 class="font-1 fw-bold lh-1">In <span class="accent-color">Collaboration</span> With</h3>
                    <p class="mx-auto text-gray" style="max-width: 768px;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Morbi pharetra magna a lacus dignissim, sed scelerisque elit rutrum. Nam a pulvinar
                        sapien, a placerat arcu. Nam condimentum orci et semper rutrum.
                    </p>
                    <div class="row row-cols-1 row-cols-lg-6 justify-content-center align-items-center">
                        <div class="col mb-3">
                            <img src="image/logo-ipsum-1.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                        <div class="col mb-3">
                            <img src="image/logo-ipsum-2.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                        <div class="col mb-3">
                            <img src="image/logo-ipsum-3.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                        <div class="col mb-3">
                            <img src="image/logo-ipsum-4.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                        <div class="col  mb-3">
                            <img src="image/logo-ipsum-5.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                        <div class="col mb-3">
                            <img src="image/logo-ipsum-6.png" alt="logo" class="img-fluid logo-partner">
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