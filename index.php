<!-- HEADER -->
<?php
$page = 'home';
include 'layouts/header.php';

include './fetchVideos.php';
?>
<!-- END HEADER -->

<!-- MAIN CONTENT -->
<main>
    <!-- BANNER -->
    <section class="section position-relative" style="background-image: url(image/image-1920x900-1.jpg); height: 90vh;">
        <div class="image-overlay"></div>
        <div class="r-container h-100 position-relative" style="z-index: 2;">
            <div class="row w-100 h-100">
                <div class="col-md-8 col-12 h-100 p-lg-0">
                    <div class="d-flex flex-column gap-3 justify-content-center h-100">
                        <h1 class="fw-bold lh-1">
                            Powerful Conversations To Help You <span class="logo-blue">Think,</span> <span class="accent-color">Lead</span> and <span class="logo-green">Succeed</span>
                        </h1>
                        <p class="text-gray main-text-content">
                            Welcome to The NashCast, a YouTube podcast hosted by Adeel Shaikh & Nabeel Shaikh, and built for professionals, founders, and lifelong learners who want more than surface-level content.
                            Learn how entrepreneurs, industry experts, and changemakers make decisions, overcome challenges, and build meaningful, sustainable impact.
                        </p>
                        <div class="d-flex flex-lg-row flex-column gap-lg-5 gap-4">
                            <div class="d-flex flex-row gap-3 align-items-center">
                                <a href="https://www.youtube.com/playlist?list=PLn8IsWI_eoZkUU_xUC3rJZuutrVFJiTYA" type="button" class="btn request-loader" target="_blank">
                                    <i class="fa-solid fa-play ms-1"></i>
                                </a>
                                <span class="font-1 ls-2 fw-bold logo-green">START WATCHING</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
    $stats = getChannelStats($channelId, $apiKey);
    

    ?>
    <div class="position-relative py-5 px-3 display-numbers">
        <div class="position-absolute w-75 h-100 bg-accent-color rounded-end-3 display-numbers-bg"></div>
        <div class="r-container position-relative" style="z-index: 2;">
            <div class="row row-cols-1 row-cols-lg-4 ps-5 ps-lg-0">
                <div class="col mb-4 mb-lg-0">
                    <div class="d-flex flex-column">
                        <h2 class="font-1 fw-bold m-0 counter" data-target="<?= $stats['subscriberCount'] ?? 0 ?>">0</h2>
                        <p class="fs-5 m-0">Our Subscribers</p>
                    </div>
                </div>
                <div class="col mb-4 mb-lg-0">
                    <div class="d-flex flex-column">
                        <h2 class="font-1 fw-bold m-0 counter" data-target="<?= $stats['videoCount'] ?>" data-plus="true">0<sup>+</sup></h2>
                        <p class="fs-5 m-0">Podcast Episodes</p>
                    </div>
                </div>
                <div class="col mb-4 mb-lg-0">
                    <div class="d-flex flex-column">
                        <h2 class="font-1 fw-bold m-0 counter" data-target="<?= $stats['viewCount'] ?>">0</h2>
                        <p class="fs-5 m-0">Our Views</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Most Favorite Podcast -->
    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 text-center">
                <h3 class="font-1 fw-bold">Most <span class="accent-color">Impactful</span> Conversations</h3>
                <p class="mx-auto text-gray" style="max-width: 768px;">Deep-dive episodes from The NashCast featuring entrepreneurs, operators, and changemakers across business, finance, technology, leadership, and personal growth, curated to help you think bigger and execute better.</p>
                <div class="row row-cols-1 row-cols-lg-3 w-100 text-start">
                    <?php if ($showVideosSection && !empty($allVideosByViews)): ?>
                        <?php $mostViewedVideos = array_slice($allVideosByViews, 0, 3); ?>
                        <?php foreach ($mostViewedVideos as $index => $video):
                            $modalId = "modal-" . ($index + 1);
                        ?>
                            <div class="col mb-3">
                                <div class="d-flex flex-column gap-3 h-100">
                                    <a href="<?= $video['embed'] ?>" target="_blank">
                                        <div class="position-relative ratio ratio-16x9">
                                            <div class="image-overlay-2"></div>
                                            <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                                <div class="d-flex justify-content-center align-items-center h-100">
                                                    <button type="button" class="btn request-loader" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>">
                                                        <i class="fa-solid fa-play ms-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <img src="<?= $video['thumbnail'] ?>" class="w-100 h-100 object-fit-cover rounded-3" alt="<?= htmlspecialchars($video['title']) ?>">
                                        </div>
                                    </a>


                                    <div class="d-flex flex-row gap-5">
                                        <div><i class="fa-regular fa-clock accent-color"></i> <?= $video['duration'] ?></div>
                                        <div><i class="fa-solid fa-calendar-days accent-color"></i> <?= $video['date_formatted'] ?></div>
                                    </div>

                                    <h5 class="font-1 fw-semibold lh-1 truncate"><?= $video['title'] ?></h5>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="section bg-secondary-color">
        <div class="r-container">
            <div class="row row-cols-1 row-cols-lg-2 w-100">
                <div class="col mb-lg-0 mb-5">
                    <div class="d-flex flex-column gap-3 h-100 justify-content-center">
                        <span class="fs-5">About The <span class="accent-color">NashCast</span></span>
                        <h3 class="font-1 fw-bold lh-1">Conversations That Influence <span class="accent-color">Minds</span> and <span class="logo-blue"> Decisions</span></h3>
                        <p class="text-gray">
                            The NashCast is a YouTube podcast hosted by Adeel Shaikh & Nabeel Shaikh, featuring in-depth conversations with entrepreneurs, industry experts, and changemakers across business, finance, technology, leadership, and personal growth.
                            Each episode is designed to deliver real-world insight, strategic thinking, and practical knowledge you can apply immediately to your work, your company, and your life.
                            <br><br>
                            Our mission is to inspire action, share meaningful insight, and empower people to think bigger and perform better, whether you're building a business, leading a team, or investing in your own growth.
                        </p>
                        <h5 class="font-1 fw-bold ">Listen Our Podcast On</h5>
                        <div class="d-flex flex-lg-row gap-3">
                            <div class="col  mb-3">
                                <a href="https://www.youtube.com/@theNashCast" target="_blank">
                                    <img src="image/youtube.png" alt="youtube" class="img-fluid">
                                </a>
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
                <?php $playlistVideoCount = getPlaylistVideoCount($playlistId, $apiKey); ?>
                <div class="col mb-3">
                    <div class="position-relative ">
                        <div class="position-absolute top-0 end-0 bg-accent-color px-5 py-4 rounded-3 shadow" style="z-index: 3; margin-top: -50px;">
                            <div class="d-flex flex-column text-center">
                                <h2 class="font-1 fw-bold m-0 counter" data-target="<?=  $playlistVideoCount ?>" data-plus="true">0</h2>
                                <p class="fs-5 m-0">Podcasts</p>
                            </div>
                        </div>
                        <div class="position-relative me-5 cursor-pointer" data-bs-toggle="modal" data-bs-target="#modal-about" fdprocessedid="7mh7r">
                            <div class="image-overlay-2 rounded-4"></div>
                            <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <button type="button" class="btn request-loader" data-bs-toggle="modal" data-bs-target="#modal-about" fdprocessedid="7mh7r">
                                        <i class="fa-solid fa-play ms-1"></i>
                                    </button>
                                </div>
                            </div>
                            <img src="image/about-thumbnail2.png" alt="image" class="img-fluid w-100 rounded-4">
                        </div>
                    </div>
                    <div class="modal fade bg-overlay" id="modal-about" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content bg-dark-color">
                                <iframe
                                    id="aboutVimeo"
                                    class="ifr-video"
                                    src="https://player.vimeo.com/video/1155982375?title=0&byline=0&portrait=0&autoplay=0&muted=0"
                                    frameborder="0"
                                    allow="autoplay; fullscreen; picture-in-picture"
                                    allowfullscreen>
                                </iframe>


                            </div>
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
                <span class="fs-5">Our <span class="accent-color">Hosts</span></span>
                <h3 class="font-1 fw-bold">Behind <span class="accent-color">The</span> <span class="logo-blue">Nash</span><span class="logo-green">Cast</span></h3>
                <p class="mx-auto text-gray" style="max-width: 768px;">The NashCast is hosted by Adeel Shaikh & Nabeel Shaikh, and amplified by a network of founders, operators, and experts who live what they teach. Across episodes you’ll hear unfiltered stories, frameworks, and lessons from people building real companies, leading real teams, and navigating real challenges.</p>
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="col mb-3">
                        <div class="d-flex flex-column bg-secondary-color p-4 rounded-3">
                            <img src="image/host1.jpg"
                                alt="image"
                                class="img-fluid rounded-3 mb-3 mx-auto d-block mb-4"
                                style="max-width: 80%;">

                            <div class="mb-4">
                                <h5 class="font-1 fw-bold m-0 lh-1">Adeel Shaikh</h5>
                                <span class="logo-blue fw-medium">Founder & Host</span>
                            </div>
                            <div class="social-container mb-3 justify-content-center">
                                <a href="https://www.facebook.com/share/1RAR2JzyJZ/" class="social-item facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook-icon lucide-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </a>
                                <a href="https://www.instagram.com/adeelshaikh1996?igsh=amtuYTY0aG9nZzk2" class="social-item insta">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram-icon lucide-instagram">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/adeelshaikh96/" class="social-item linkedin">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="20" height="20" viewBox="0 0 640 640" fill="currentColor" stroke="currentColor" stroke-width="2.5"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                        <path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z" />
                                    </svg>
                                </a>
                                <a href="https://www.youtube.com/@theNashCast" class="social-item youtube">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="d-flex flex-column bg-secondary-color p-4 rounded-3">
                            <img src="image/host2.jpeg"
                                alt="image"
                                class="img-fluid rounded-3 mb-3 mx-auto d-block mb-4"
                                style="max-width: 80%;">

                            <div class="mb-4">
                                <h5 class="font-1 fw-bold m-0 lh-1">Nabeel Shaikh</h5>
                                <span class="logo-blue fw-medium">Founder & Host</span>
                            </div>
                            <div class="social-container mb-3 justify-content-center">
                                <a href="https://www.facebook.com/nabeel.shaikh/" class="social-item facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook-icon lucide-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </a>
                                <a href="https://www.instagram.com/nabeilschaik/" class="social-item insta">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram-icon lucide-instagram">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/nabeilschaik" class="social-item linkedin">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="20" height="20" viewBox="0 0 640 640" fill="currentColor" stroke="currentColor" stroke-width="2.5"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                        <path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z" />
                                    </svg>
                                </a>
                                <a href="https://www.youtube.com/@theNashCast" class="social-item youtube">
                                    <i class="fa-brands fa-youtube"></i>
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
                            <div class="swiper-wrapper" id="swiper-wrapper-6734d37033ad0bac" aria-live="off" style="cursor: grab; transition-duration: 2000ms; transform: translate3d(0px, 0px, 0px);">
                                <!-- Slides -->
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 3" style="width: 720px; margin-right: 10px;">
                                    <div class="testimonial-container">
                                        <ul class="rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <p class="fst-italic text-gray fs-5 m-0">
                                            “The NashCast explains complex ideas in a very clear and simple way. Their podcasts are genuinely informative and easy to follow.”
                                        </p>
                                        <div class="d-flex flex-row justify-content-between">
                                            <div class="d-flex flex-row align-items-center gap-3">
                                                <img src="image/feedbacks/feedback1.webp" alt="testimonials" class="img-fluid rounded-circle" width="70">
                                                <div>
                                                    <p class="fs-5 m-0 fw-bold">Abdul Rafey Hasan</p>
                                                    <p class="accent-color m-0">Listener</p>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="fs-very-large accent-color"><i class="fa-solid fa-quote-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 3" style="width: 720px; margin-right: 10px;">
                                    <div class="testimonial-container">
                                        <ul class="rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <p class="fst-italic text-gray fs-5 m-0">
                                            “What makes The NashCast stand out is how real the conversations feel. Their podcasts reflect everyday real experiences.”
                                        </p>
                                        <div class="d-flex flex-row justify-content-between">
                                            <div class="d-flex flex-row align-items-center gap-3">
                                                <img src="image/feedbacks/feedback2.webp" alt="testimonials" class="img-fluid rounded-circle" width="70">
                                                <div>
                                                    <p class="fs-5 m-0 fw-bold">Abdur Rehman</p>
                                                    <p class="accent-color m-0">Listener</p>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="fs-very-large accent-color"><i class="fa-solid fa-quote-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 3" style="width: 720px; margin-right: 10px;">
                                    <div class="testimonial-container">
                                        <ul class="rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <p class="fst-italic text-gray fs-5 m-0">
                                            “Listening to their podcasts always pushes me to think differently and improve my mindset. The Nashcast have real impact.”
                                        </p>
                                        <div class="d-flex flex-row justify-content-between">
                                            <div class="d-flex flex-row align-items-center gap-3">
                                                <img src="image/feedbacks/feedback3.jpg" alt="testimonials" class="img-fluid rounded-circle" width="70">
                                                <div>
                                                    <p class="fs-5 m-0 fw-bold">Abdullah Ahmed</p>
                                                    <p class="accent-color m-0">Listener</p>
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
                <div class="col col-lg-6 d-flex align-items-center">
                    <div class="d-flex flex-column gap-3">
                        <span class="fs-5">Testimonials</span>
                        <h3 class="font-1 fw-bold lh-1">What <span class="accent-color">Listeners</span> Say</h3>
                        <p class="text-gray">
                            The NashCast is built for people who want more than motivation. Listeners come here for clarity, practical frameworks, and honest conversations about what it really takes to build, lead, and grow.
                            Episodes are designed to leave you with at least one idea you can apply immediately in your work or life.
                        </p>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Podcast -->
    <section class="section position-relative">
        <div class="texture-overlay"></div>
        <div class="r-container position-relative" style="z-index: 2;">
            <div class="d-flex flex-column text-center gap-3">
                <span class="fs-5">Our <span class="accent-color">Podcasts</span></span>
                <h3 class="font-1 fw-bold lh-1"><span class="accent-color">Recent</span> Episodes</h3>
                <?php if ($showVideosSection && !empty($allVideosByDate)): ?>
                    <?php $latestVideos = array_slice($allVideosByDate, 0, 6); ?>
                    <div class="row row-cols-1 row-cols-lg-3">
                        <?php foreach ($latestVideos as $index => $video):
                            $modalId = "modal-" . ($index + 1);
                        ?>
                            <div class="col mb-4">
                                <div class="d-flex flex-column gap-3 h-100">
                                    <a href="<?= $video['embed'] ?>" target="_blank" style="color:unset">
                                        <div class="position-relative ratio ratio-16x9">
                                            <div class="overlay rounded-3 z-1"></div>
                                            <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                                <div class="d-flex justify-content-center align-items-center h-100">
                                                    <button type="button" class="btn request-loader" data-bs-toggle="modal" data-bs-target="#e119" fdprocessedid="ny0f1o">
                                                        <i class="fa-solid fa-play ms-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <img src="<?= $video['thumbnail'] ?>" class="w-100 h-100 object-fit-cover rounded-3 truncate" alt="<?= htmlspecialchars($video['title']) ?>">
                                            <div class="position-absolute justify-content-end z-1 bottom-0 start-0 w-100 d-flex flex-column px-4 py-3 justify-end">
                                                <h5 class="font-1 fw-semibold lh-1 truncate"><?= $video['title'] ?>
                                                </h5>
                                                <div class="d-flex flex-row justify-content-center gap-5">
                                                    <div class="d-flex flex-row align-items-center gap-2">
                                                        <i class="fa-regular fa-clock accent-color"></i>
                                                        <?= $video['duration'] ?>
                                                    </div>
                                                    <div class="d-flex flex-row align-items-center gap-2">
                                                        <i class="fa-solid fa-calendar-days accent-color"></i>
                                                        <?= $video['date_formatted'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="d-flex justify-content-center">
                    <a aria-current="page" href="podcast" class="btn button font-1 ls-2">VIEW ALL PODCASTS
                    </a>
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
                        <h3 class="font-1 fw-bold lh-1">Subscribe To<br><span class="accent-color">The</span> <span class="logo-blue">Nash</span><span class="logo-green">Cast</span></h3>
                        <p class="text-gray">
                            Subscribe on YouTube for full episodes, exclusive clips, and behind-the-scenes content that keeps you close to the leaders, dreamers, and doers shaping the future of business, technology, and leadership.
                        </p>
                    </div>
                    <div class="col  mb-3">
                        <div class="d-flex h-100 flex-column justify-content-center">
                            <h5 class="font-1 fw-bold">Newsletter</h5>
                            <form class="w-100 form needs-validation">
                                <input type="text" name="action" value="subscribe" hidden="">
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control py-3 px-4 form-white" placeholder="Your Email" aria-label="Recipient's username" aria-describedby="button-addon2" required="" fdprocessedid="q5s7agg">
                                    <button class="btn button btn_submit-subscribe font-1  fw-bold px-5" type="submit" id="button-addon2" fdprocessedid="tmg8">Subscribe</button>
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
    <section class="bg-secondary-color pb-0">
        <div class="section">
            <div class="d-flex flex-column text-center gap-3">
                <span class="fs-5">Our <span class="accent-color">Partners</span></span>
                <h3 class="font-1 fw-bold lh-1">In <span class="accent-color">Collaboration</span> With</h3>
                <p class="mx-auto text-gray" style="max-width: 768px;"> Our partners play a key role in supporting conversations that matter. By working with brands and
                    organizations aligned with our values, we amplify ideas, share insights, and build a stronger
                    ecosystem for entrepreneurs, professionals, and changemakers worldwide.
                </p>
                <!-- Partners -->

            </div>
        </div>
        <div class="partners-wrapper mb-5 bg-light py-2">
            <!-- NORMAL GRID (lg and up) -->
            <div class="partners-marquee">
                <div class="marquee-track">
                    <div class="logo-item">
                        <img src="image/partners/brannovate-b.png" class="img-fluid">
                        <i class="fa-solid fa-star accent-color"></i>
                    </div>
                    <div class="logo-item">
                        <img src="image/partners/mavens.png" class="img-fluid">
                        <i class="fa-solid fa-star accent-color"></i>
                    </div>
                    <div class="logo-item">
                        <img src="image/partners/edwatch.webp" class="img-fluid">
                        <i class="fa-solid fa-star accent-color"></i>
                    </div>
                    <div class="logo-item">
                        <img src="image/partners/shapater-logo.webp" class="img-fluid">
                        <i class="fa-solid fa-star accent-color"></i>
                    </div>
                    <div class="logo-item">
                        <img src="image/partners/brannovate-b.png" class="img-fluid">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="logo-item">
                        <img src="image/partners/mavens.png" class="img-fluid">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="logo-item">
                        <img src="image/partners/edwatch.webp" class="img-fluid">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="logo-item">
                        <img src="image/partners/shapater-logo.webp" class="img-fluid">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="logo-item">
                        <img src="image/partners/brannovate-b.png" class="img-fluid">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="logo-item">
                        <img src="image/partners/mavens.png" class="img-fluid">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="logo-item">
                        <img src="image/partners/edwatch.webp" class="img-fluid">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="logo-item">
                        <img src="image/partners/shapater-logo.webp" class="img-fluid">
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>


        </div>
        <br>
    </section>

</main>

<!-- FOOTER -->
<?php
include 'layouts/footer.php';
?>


<!-- <span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span> -->

</body>

</html>