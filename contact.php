
    <!-- HEADER -->
    <?php
    $page = 'contact';
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
                    <h2 class="font-1 fw-bold"><span class="accent-color">Contact</span> Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb font-2">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <section class="section position-relative">
            <div class="texture-overlay"></div>
            <div class="r-container position-relative" style="z-index: 2;">
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="col mb-3">
                        <div class="d-flex flex-column gap-3">
                            <span class="fs-5">Contact Us</span>
                            <h3 class="font-1 fw-bold lh-1">Send Your <span class="accent-color">Message</span>
                            </h3>
                            <p class="text-gray">Lorem ipsum dolor sit amet,
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis, neque id
                                dapibus commodo, est libero ultricies felis, venenatis pulvinar eros magna dapibus
                                turpis. Curabitur vel congue quam. consectetur adipiscing.
                            </p>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex flex-row gap-3 align-items-center">
                                    <div class="rounded-circle bg-accent-color d-flex align-items-center justify-content-center" style="width: 3rem; height: 3rem;">
                                        <span class="text-white fs-3"><i class="fa-solid fa-location-dot"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="fs-4 font-1 fw-bold">
                                            Address</span>
                                        <span class="accent-color">99 Roving St., Big City, PKU 23456</span>
                                    </div>
                                </div>
                                <div class="d-flex flex-row gap-3 align-items-center">
                                    <div class="rounded-circle bg-accent-color d-flex align-items-center justify-content-center" style="width: 3rem; height: 3rem;">
                                        <span class="text-white fs-3"><i class="fa-solid fa-phone"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="fs-4 font-1 fw-bold">Call Us</span>
                                        <span class="accent-color">+123-234-1234</span>
                                    </div>
                                </div>
                                <div class="d-flex flex-row gap-3 align-items-center">
                                    <div class="rounded-circle bg-accent-color d-flex align-items-center justify-content-center" style="width: 3rem; height: 3rem;">
                                        <span class="text-white fs-3"><i class="fa-solid fa-envelope"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="fs-4 font-1 fw-bold">Email</span>
                                        <span class="accent-color">hello@awesomesite.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom border-accent-color"></div>
                            <div class="social-container mb-lg-0 mb-3">
                                <a href="https://www.youtube.com" class="social-item">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                                <a href="https://www.spotify.com" class="social-item">
                                    <i class="fa-brands fa-spotify"></i>
                                </a>
                                <a href="https://www.soundcloud.com" class="social-item">
                                    <i class="fa-brands fa-soundcloud"></i>
                                </a>
                                <a href="https://www.twitter.com" class="social-item">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="h-100 d-flex flex-column bg-secondary-color rounded-3 p-5">
                            <div class="success_msg toast align-items-center w-100 shadow-none mb-3 border border-success rounded-0 my-4" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-2">
                                    <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-success">
                                        <i class="fa-solid fa-check f-36 text-success"></i>
                                        Your Message Successfully Send.
                                    </div>
                                    <button type="button" class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-success" data-bs-dismiss="toast" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                            <div class="error_msg toast align-items-center w-100 shadow-none border-danger mb-3 my-4 border rounded-0" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-2">
                                    <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-danger">
                                        <i class="fa-solid fa-triangle-exclamation f-36 text-danger"></i>
                                        Something Wrong ! Send Form Failed.
                                    </div>
                                    <button type="button" class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-danger" data-bs-dismiss="toast" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                            <form class="d-flex flex-column h-100 justify-content-center w-100 needs-validation mb-3 form" novalidate="">
                                <div class="mb-3">
                                    <input type="text" class="form-control py-3 px-4" name="name" id="name" placeholder="Name" required="" fdprocessedid="7bl1w">
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control py-3 px-4" name="email" id="email" placeholder="Email" required="" fdprocessedid="ncydnm">
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control py-3 px-4" name="subject" id="subject" placeholder="Subject" required="" fdprocessedid="z5w3be">
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control py-3 px-4" id="message" name="message" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn submit_form font-1 fw-bold ls-2 py-3" fdprocessedid="ygqh7s">
                                        Send Message
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div>
            <iframe loading="lazy" class="maps" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
        </div>

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
                                        <input type="email" name="email" class="form-control py-3 px-4 form-white" placeholder="Your Email" aria-label="Recipient's username" aria-describedby="button-addon2" required="" fdprocessedid="oau5sr">
                                        <button class="btn button btn_submit-subscribe font-1  fw-bold px-5" type="submit" id="button-addon2" fdprocessedid="6hbv2">Subscribe</button>
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

</body>

</html>