<?php include "short.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $name ?> - Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo $name ?>" name="keywords">
    <meta content="Spiritual Solutions" name="description">
    <!-- Favicon Meta Tags -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">
    <meta name="msapplication-TileImage" content="img/favicon.png">

    <!-- Open Graph Meta Tags (for social media sharing) -->
    <meta property="og:image" content="img/favicon.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="<?php echo $name ?> - Spiritual Solutions">
    <meta property="og:type" content="website">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">



</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar d-none d-lg-block">
            <div class="topbar-inner">
                <div class="row gx-0">
                    <div class="col-lg-7 text-start">
                        <div class="h-100 d-inline-flex align-items-center me-4">
                            <span class="fab fa-whatsapp me-2 text-primary"></span>
                            <a href="https://wa.me/2347017587828"
                                class="text-white"><span><?php echo $phone ?></span></a>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center">
                            <span class="far fa-envelope me-2 text-primary"></span>
                            <a href="mailto:<?php echo $email ?>"
                                class="text-white"><span><?php echo $email ?></span></a>
                        </div>
                    </div>
                    <div class="col-lg-5 text-end">
                        <div class="d-flex align-items-center ticker-wrapper overflow-hidden">
                            <span class="text-primary me-3 flex-shrink-0"><?php echo $name ?> Services:</span>
                            <div class="ticker-track-wrapper">
                                <div class="ticker-track">
                                    <a class="text-white px-3" href=""><i class="fa fa-eye me-2"> </i>Love
                                        Spell</a>
                                    <a class="text-white px-3" href=""><i class="fa fa-shield-alt me-2">
                                        </i>Protection</a>
                                    <a class="text-white px-3" href=""><i class="fa fa-fire me-2"> </i>Fortune
                                        Charms</a>
                                    <a class="text-white px-3" href=""><i class="fa fa-dove me-2"> </i>Spiritual
                                        Guidance</a>
                                    <a class="text-white px-3" href=""><i class="fa fa-lock me-2"> </i>Curse
                                        Removal</a>
                                    <a class="text-white px-3" href=""><i class="fa fa-magic me-2"> </i>Empowerment
                                        Rituals</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-3">
                <a href="index.php" class="navbar-brand">
                    <h3 class="mb-0"><?php echo $logoname ?> </h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav ms-lg-auto mx-xl-auto">
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                        <a href="about.php" class="nav-item nav-link  ">About</a>
                        <a href="faq.php" class="nav-item nav-link">FAQ</a>
                        <a href="testimonial.php" class="nav-item nav-link">Testimonial</a>
                        <a href="services.php" class="nav-item nav-link active">Services</a>
                    </div>
                    <a href="contact.php" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block">Book
                        Consultation</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Hero Start -->
    <div class="container-fluid hero-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-header-inner animated zoomIn">
                        <h1 class="display-1 text-dark">Services</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item text-red">Home</li>
                            <li class="breadcrumb-item text-dark" aria-current="page">Services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Activities Start -->
    <div class="container-fluid activities py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <p class="fs-5 text-uppercase text-red">Activities</p>
                <h1 class="display-6">Experience Peace With Every Spell</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-leaf fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h6>Empowerment Rituals</h6>
                            <p class="mb-4">Boost self-confidence, inner strength, and unlock your full potential.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-donate fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h6>Fortune Charms</h6>
                            <p class="mb-4">Attract good luck, prosperity, and opportunities into your life.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h6>Soul Connections</h6>
                            <p class="mb-4">Deepen relationships, foster love, and build unbreakable emotional
                                bonds.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Activities Start -->

    <!-- Sermon Start -->
    <div class="container-fluid sermon py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <p class="fs-5 text-uppercase text-red">Pricing</p>
                <h3 class="display-6">Consultation Services</h3>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-xl-4">
                    <div class="card pricing-card shadow-lg border-0 wow fadeIn" data-wow-delay="0.1s">
                        <img src="img/sermon-1.jpg" class="card-img-top img-fluid" alt="Restoration Service">

                        <div class="card-body d-flex flex-column justify-content-between">
                            <!-- Price -->
                            <div class="text-center mb-3">
                                <h3 class="text-red mb-1">
                                    $299 <small class="text-muted">USD</small>
                                </h3>

                                <small class="text-muted"><i class="fas fa-money-bill-wave me-2 text-success"></i>
                                    One-time payment</small>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title text-center mb-3">Restoring Broken Relationships & Marriages</h5>

                            <!-- Description -->
                            <p class="card-text text-center mb-4">
                                Don’t hesitate to DM me and resolve your troubled relationship or marriage. This
                                involves a powerful spiritual
                                technique and unique supplies.
                            </p>

                            <!-- CTA -->
                            <div class="text-center">
                                <a href="https://wa.me/<?php echo $phone; ?>&text=Hello Reekoa Healing. I want the service: Restoring Broken Relationships and Marriages for $299"
                                    target="_blank" class=" btn btn-danger px-4 py-2">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 ">
                    <div class="card pricing-card shadow-lg border-0 wow fadeIn" data-wow-delay="0.1s">
                        <img src="img/sermon-2.jpg" class="card-img-top img-fluid" alt="Restoration Service">

                        <div class="card-body d-flex flex-column justify-content-between bg-light">
                            <!-- Price -->
                            <div class="text-center mb-3">
                                <h3 class="text-red mb-1">
                                    $891 <small class="text-muted">USD</small>
                                </h3>
                                <small class="text-muted"><i class="fas fa-money-bill-wave me-2 text-success"></i>
                                    One-time payment</small>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title text-center mb-3">Improving Your Finances Spiritually</h5>

                            <!-- Description -->
                            <p class="card-text text-center mb-4">
                                Enhance your finances spiritually for just $891 USD. This powerful ritual, though
                                intensive, is highly effective and can significantly transform your financial
                                situation. Unlock a future of abundance and prosperity today, and take the first
                                step towards financial freedom. Don’t let stress hold you back—experience the
                                life-changing results of this proven spiritual technique.
                            </p>

                            <!-- CTA -->
                            <div class="text-center">
                                <a href="https://wa.me/<?php echo $phone; ?>&text=Hello Reekoa Healing. I want the service: Improving Your Finances Spiritually for $891"
                                    target="_blank" class=" btn btn-danger px-4 py-2">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4">
                    <div class="card pricing-card shadow-lg border-0 wow fadeIn" data-wow-delay="0.1s">
                        <img src="img/sermon-3.jpg" class="card-img-top img-fluid">

                        <div class="card-body d-flex flex-column justify-content-between">
                            <!-- Price -->
                            <div class="text-center mb-3">
                                <h3 class="text-red mb-1">
                                    $695 <small class="text-muted">USD</small>
                                </h3>
                                <small class="text-muted"><i class="fas fa-money-bill-wave me-2 text-success"></i>
                                    One-time payment</small>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title text-center mb-3">Breaking Curses</h5>

                            <!-- Description -->
                            <p class="card-text text-center mb-4">
                                A spiritual reading reveals negative energy affecting your life. Using effective
                                spiritual oils costing $695, we’ll remove the negativity or curse to restore
                                balance.
                            </p>

                            <!-- CTA -->
                            <div class="text-center">
                                <a href="https://wa.me/<?php echo $phone; ?>&text=Hello Reekoa Healing. I want the service: Breaking Curses for $695"
                                    target="_blank" class=" btn btn-danger px-4 py-2">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Sermon End -->


    <!-- Footer Start -->
    <div class="container-fluid footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">

            <div class="row g-4 footer-inner">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item mt-5">
                        <h4 class="text-light mb-4"><?php echo $logoname ?></h4>
                        <p class="mb-4 text-secondary">For over 37 years I have been helping people solve their
                            problems. I have help so many people take away tears from their eyes and put smile on
                            their face.
                        </p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item mt-5">
                        <h4 class="text-light mb-4">Reach Us</h4>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center border-bottom py-4">
                                <span class="flex-shrink-0 btn-square bg-red me-3 p-4"><i
                                        class="fa fa-envelope text-white"></i></span>
                                <a href="mailto:<?php echo $email ?>" class="text-body"><?php echo $email ?></a>
                            </div>
                            <div class="d-flex align-items-center py-4">
                                <span class="flex-shrink-0 btn-square bg-red me-3 p-4"><i
                                        class="fab fa-whatsapp text-white"></i></span>
                                <a href="https://wa.me/2347017587828" class="text-body"><?php echo $phone ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item mt-5">
                        <h4 class="text-light mb-4">Explore Link</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a class="text-body mb-2" href="index.php"><i
                                    class="fa fa-check text-red me-2"></i>Home</a>
                            <a class="text-body mb-2" href="about.php"><i
                                    class="fa fa-check text-red me-2"></i>About
                                Us</a>
                            <a class="text-body mb-2" href="services.php"><i
                                    class="fa fa-check text-red me-2"></i>Our
                                Services</a>
                            <a class="text-body mb-2" href="contact.php"><i
                                    class="fa fa-check text-red me-2"></i>Contact
                                us</a>
                            <a class="text-body mb-2" href="testimonial.php"><i
                                    class="fa fa-check text-red me-2"></i>Testimonials</a>
                            <a class="text-body mb-2" href="faq.php"><i
                                    class="fa fa-check text-red me-2"></i>FAQ</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container py-4">
            <div class="border-top border-secondary pb-4"></div>
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <?php echo date("Y");  ?>
                    <?php echo $name ?>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->

                </div>
            </div>
        </div>
    </div>
    <?php echo $tawk ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-danger border-3 border-light back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>