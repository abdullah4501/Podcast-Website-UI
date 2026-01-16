<!-- HEADER -->
<?php
$page = 'podcast';
include 'layouts/header.php';
include './fetchVideos.php';
?>
<!-- END HEADER -->

<!-- MAIN CONTENT -->
<main>
    <!-- BANNER -->
    <section class="section position-relative" style="background-image: url(image/image-1920x900-1.jpg);">
        <div class="image-overlay"></div>
        <div class="r-container  position-relative" style="z-index: 2;">
            <div class="d-flex flex-column">
                <h2 class="font-1 fw-bold">The <span class="accent-color">NashCast</span> Episodes</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb font-2">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Podcasts</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Most Favorite Podcast -->
    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 text-center">
                <h3 class="font-1 fw-bold">Start With These <span class="logo-blue">Nash</span><span class="logo-green">Cast</span></span> Episodes</h3>
                <p class="mx-auto text-gray" style="max-width: 768px;">A curated set of conversations that showcase what The NashCast is about, decision-making, leadership, execution, and personal growth in the real world.</p>
                <div class="row row-cols-1 row-cols-lg-3 w-100 text-start">
                    <?php if ($showVideosSection && !empty($allVideosByViews)): ?>
                        <?php $mostViewedVideos = array_slice($allVideosByViews, 0, 6); ?>
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

                                    <h5 class="font-1 fw-bold lh-1 truncate"><?= $video['title'] ?></h5>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Podcast -->
    <section class="section position-relative">
        <div class="texture-overlay"></div>
        <div class="r-container position-relative" style="z-index: 2;">
            <div class="d-flex flex-column text-center gap-3">
                <span class="fs-5">The <span class="logo-blue">Nash</span><span class="logo-green">Cast</span></span>
                <h3 class="font-1 fw-bold lh-1"><span class="accent-color">Recent</span> Conversations</h3>
                <?php if ($showVideosSection && !empty($allVideosByDate)): ?>
                    <?php $latestVideos = array_slice($allVideosByDate, 0, 9); ?>
                    <div class="row row-cols-1 row-cols-lg-3">
                        <?php foreach ($latestVideos as $index => $video):
                            $modalId = "modal-" . ($index + 1);
                        ?>
                            <div class="col mb-4">
                                <div class="d-flex flex-column gap-3 h-100">
                                    <a href="<?= $video['embed'] ?>" target="_blank" style="color:unset">
                                        <div class="position-relative h-100">
                                            <div class="overlay rounded-3"></div>
                                            <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                                <div class="d-flex justify-content-center align-items-center h-100">
                                                    <button type="button" class="btn request-loader" data-bs-toggle="modal" data-bs-target="#e119" fdprocessedid="ny0f1o">
                                                        <i class="fa-solid fa-play ms-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <img src="<?= $video['thumbnail'] ?>" class="w-100 h-100 object-fit-cover rounded-3 truncate" alt="<?= htmlspecialchars($video['title']) ?>">
                                            <div class="position-absolute bottom-0 start-0 w-100 d-flex flex-column px-4 py-3">
                                                <h5 class="font-1 fw-bold lh-1 truncate"><?= $video['title'] ?>
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
                    <a href="https://www.youtube.com/playlist?list=PLn8IsWI_eoZkUU_xUC3rJZuutrVFJiTYA" class="btn button font-1 ls-2" target="_blank">VIEW ALL PODCASTS
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-secondary-color">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 text-center">
                <h5 class="font-1 fw-bold">Listen To The NashCast On</h5>
                <div class="row row-cols-1 row-cols-lg-4">
                    <div class="col px-5 mb-3">
                        <a href="https://www.youtube.com/@theNashCast" target="_blank">
                            <img src="image/youtube.png" alt="youtube" class="img-fluid">
                        </a>
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

</main>

<!-- FOOTER -->
<?php
include 'layouts/footer.php';
?>


<!-- <span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span> -->

</body>

</html>