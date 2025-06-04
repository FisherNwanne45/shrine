<?php include "short.php" ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?php echo $name ?> - About</title>
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
                            <a href="about.php" class="nav-item nav-link active">About</a>
                            <a href="faq.php" class="nav-item nav-link">FAQ</a>
                            <a href="testimonial.php" class="nav-item nav-link">Testimonial</a>
                            <a href="services.php" class="nav-item nav-link">Services</a>
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
                            <h1 class="display-1 text-dark">About Us</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item text-red">Home</li>
                                <li class="breadcrumb-item text-dark" aria-current="page">About</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Satrt -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 mb-5">
                    <div class="col-xl-6">
                        <div class="row g-4">
                            <div class="col-6">
                                <img src="img/about-1.jpg" class="img-fluid h-100 wow zoomIn" data-wow-delay="0.1s"
                                    alt="">
                            </div>
                            <div class="col-6">
                                <img src="img/about-2.jpg" class="img-fluid pb-3 wow zoomIn" data-wow-delay="0.1s"
                                    alt="">
                                <img src="img/about-3.jpg" class="img-fluid pt-3 wow zoomIn" data-wow-delay="0.1s"
                                    alt="">
                            </div>
                            <div class="bg-light p-3 mb-4">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-3">
                                        <img src="img/about-child.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0">Through sacred rites and ancestral offerings, we call forth
                                            wealth and favor, the spirits bless your hands.</p>
                                    </div>
                                    <div class="col-3">
                                        <h4 class="mb-0 text-red text-center">Fortune</h4>
                                        <h5 class="mb-0 text-center">Charms</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeIn" data-wow-delay="0.5s">
                        <p class="fs-5 text-uppercase text-red">A Spiritual Feeling</p>
                        <h1 class="display-5 pb-4 m-0">About <?php echo $name ?></h1>
                        <p class="pb-4">You are welcome to my temple of solutions, I’m the greatest spell caster in the
                            whole of Africa, and what I do is the best, making sure my clients get they desired result
                            is my main goal. I restore broken relationships, marriages, love readings, Life reading,
                            spiritual reading. What I practice is pure and deeper spirituality, and my service is only
                            available for serious clients.. Thanks to my lovely fans and clients.
                            <br>
                            I am the most reliable spiritualist with evidence of my many good works. For over 37 years i
                            have been helping people solve their problems. I have help so many people take away tears
                            from their eyes and put smile on their face.<br>

                            <b><small> - I can help you bring back your ex lover.<br>

                                    - I can help you get the love of your life.<br>

                                    - Is your husband or wife trying to leave you i can make them change their mind and
                                    love 10
                                    times more than before. </small></b>

                        </p>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <div class="ps-3 d-flex align-items-center justify-content-start">
                                    <span class="bg-red btn-md-square rounded-circle mt-4 me-2"><i
                                            class="fa fa-eye text-dark fa-4x mb-5 pb-2"></i></span>
                                    <div class="ms-4">
                                        <h5>Love Spell</h5>
                                        <p>Rekindle Your Lost Love</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ps-3 d-flex align-items-center justify-content-start">
                                    <span class="bg-red btn-md-square rounded-circle mt-4 me-2"><i
                                            class="fa fa-shield-alt text-dark fa-4x mb-5 pb-2"></i></span>
                                    <div class="ms-4">
                                        <h5>Protections </h5>
                                        <p>Shield Yourself from Harm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md-6">
                                <p class="mb-2"><i class="fa fa-check text-red me-3"></i>Prosperity</p>
                                <p class="mb-0"><i class="fa fa-check text-red me-3"></i>Curse Removal</p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-2"><i class="fa fa-check text-red me-3"></i>Spiritual Guidance</p>
                                <p class="mb-0"><i class="fa fa-check text-red me-3"></i>Empowerment Rituals</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container text-center bg-red py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-2">
                            <i class="fa fa-magic fa-5x text-white"></i>
                        </div>
                        <div class="col-lg-10 text-center   text-lg-start">
                            <h1 class="mb-0 text-primary">I am always delighted to solve problems and make others happy.
                            </h1><br>
                            <p class="text-white">If you have problems related to relationships, personal struggles,
                                finances, health, or
                                if you need guidance, reach out to me today to fulfill your heart's desires.</p>
                        </div>
                 </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <style>
        /* Small screens: background image on text container */
        @media (max-width: 991.98px) {
            .spiritual-message {
                background: url('img/candles.jpg') center center/cover no-repeat;
                color: white;
                position: relative;
            }

            .spiritual-message::before {
                content: '';
                position: absolute;
                inset: 0;
                background: rgba(0, 0, 0, 0.6);
                /* dark overlay */
                z-index: 0;
                border-radius: 10px;
            }

            .spiritual-message>* {
                position: relative;
                z-index: 1;
            }
        }
        </style>

        <div class="bg-light container py-5">
            <div class="row align-items-center">

                <!-- Text Section -->
                <div class="col-12 col-lg-9">
                    <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                        <div class="spiritual-message p-4"
                            style="background-color: rgba(255,255,255,0.95); border-radius: 10px;">

                            <h3 class="display-6 text-red">Curse Removal for a Better, Balanced Life</h3>

                            <p><strong>Are you a woman who can’t get pregnant?</strong><br>
                                Come to me and I will make you pregnant and have healthy and beautiful children.</p>

                            <p><strong>Do you have financial problems?</strong><br>
                                Or do you want a good job, win the lottery, or land a big contract?<br>
                                Come to <strong><?php echo $name ?> Temple of Solution</strong> and let me help you.</p>

                            <p><strong>Do you have a health problem and doctors say there's nothing they can
                                    do?</strong><br>
                                Contact me — let me help you.</p>

                            <p>Whether it’s a relationship problem, personal issue, financial trouble, health concern,
                                or you simply need guidance,
                                <strong>contact me today</strong> and get your heart’s desires.
                            </p>

                            <p>I am a man and a father. <strong>I do not ask for money before I help
                                    people.</strong><br>
                                You only need to make a one-time payment for the spiritual items needed to begin your
                                work.</p>

                            <p>You may also send a gift to show gratitude. It can be big or small, as long as it comes
                                from the heart.
                                I am very confident in what I do. Above all, it brings me joy to help people.</p>

                            <p>I love solving problems and making people happy, but I do not like to help those who are
                                not serious.<br>
                                <strong>I only help people who are serious about solving their problems.</strong>
                            </p>

                            <p>If you want a fast solution and are truly ready to change your life, <strong>contact me
                                    right away.</strong><br>
                                You can talk to me via email: <a href="mailto:<?php echo $mail ?>"
                                    class="text-red text-decoration-underline"><?php echo $mail ?></a></p>

                            <p><strong>I am always ready and willing to help.</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Right Image Column - Large screens only -->
                <div class="d-none d-lg-block col-lg-3">
                    <img src="img/candles.jpg" alt="Candles" class="img-fluid rounded h-100 w-100 object-fit-cover">
                </div>



            </div>
        </div>


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