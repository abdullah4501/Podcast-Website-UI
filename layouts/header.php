<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <link rel="dns-prefetch" href="//s3.envato.com">


    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>The NashCast - <?php echo ucwords($page); ?></title>
    <meta name="description"
        content="The NashCast is a YouTube podcast hosted by Adeel Shaikh, featuring powerful conversations with entrepreneurs, industry experts, and changemakers across business, finance, technology, leadership, and personal growth.">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="turbo-visit-control" content="reload">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+3:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="css/vendor/fontawesome.css">
    <link rel="stylesheet" href="css/vendor/brands.css">
    <link rel="stylesheet" href="css/vendor/regular.css">
    <link rel="stylesheet" href="css/vendor/solid.css">
    <link rel="stylesheet" href="css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="bg-secondary-dark sticky-top">
        <div class="r-container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <div class="logo-container">
                            <img src="image/nashcast_logo4.png" alt="logo" class="img-fluid w-50">
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
                            <li class="nav-item">
                                <a class="nav-link <?= ($page == 'home') ? 'active' : ''; ?>" aria-current="page" href="home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($page == 'about') ? 'active' : ''; ?>" href="about-us">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($page == 'podcast') ? 'active' : ''; ?>" href="podcast">Podcasts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($page == 'team') ? 'active' : ''; ?>" href="team">Team</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item <?= ($page == 'team') ? 'active' : ''; ?>" href="team">Team</a></li>
                                    <li><a class="dropdown-item <?= ($page == 'gallery') ? 'active' : ''; ?>" href="gallery">Gallery</a></li>
                                    <li><a class="dropdown-item" href="#">Pricing</a></li>
                                    <li><a class="dropdown-item" href="#">FAQs</a></li>
                                    <li><a class="dropdown-item" href="#">404 Error</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item <?= ($page == 'blogs') ? 'active' : ''; ?>" href="blogs">Blogs</a></li>
                                    <li><a class="dropdown-item" href="#">Single Post</a></li>
                                </ul>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link <?= ($page == 'contact') ? 'active' : ''; ?>" href="contact">Contact Us</a>
                            </li>
                        </ul>
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
            </nav>
        </div>
    </header>