<?php include "short.php" ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?php echo $name ?> - Home</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <!-- Favicon Meta Tags -->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/favicon.png">
        <meta name="msapplication-TileImage" content="img/favicon.png">

        <!-- Open Graph Meta Tags (for social media sharing) -->
        <meta property="og:image" content="img/favicon.jpg">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:alt" content="Reekoa Healing - Spiritual Solutions">
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
        <div class="container-fluid container-fluids fixed-top">
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
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
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
        <div class="hero-header-main">
            <video class="bg-video" autoplay muted loop playsinline>
                <source src="img/shrine.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-overlay"></div>

            <div class="overlay-content">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- LEFT TEXT CONTENT -->

                        <div class="col-lg-6">
                            <div class="hero-header-inners animated zoomIn">

                                <p class="fs-4 text-white">Love Spell That Works</p>
                                <h6 class="display-5 mb-5 text-white">Experience <?php echo $name ?> Love Spell</h6>
                                <a href="" class="btn btn-primary py-3 px-5">Read More</a>
                            </div>
                        </div>

                        <!-- RIGHT ROTATING IMAGE -->
                        <div class="col-lg-6 text-center">
                            <img src="img/horoscope.png" alt="Horoscope" class="horoscope-image">
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
                                    <a href="https://web.whatsapp.com/send?phone=<?php echo $phone; ?>&text=Hello Reekoa Healing. I want the service: Restoring Broken Relationships and Marriages for $299"
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
                                    <a href="https://web.whatsapp.com/send?phone=<?php echo $phone; ?>&text=Hello Reekoa Healing. I want the service: Improving Your Finances Spiritually for $891"
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
                                    <a href="https://web.whatsapp.com/send?phone=<?php echo $phone; ?>&text=Hello Reekoa Healing. I want the service: Breaking Curses for $695"
                                        target="_blank" class=" btn btn-danger px-4 py-2">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Sermon End -->

        <!-- Testimonial Start -->
        <div class="container-fluid event py-5">
            <div class="container py-5">
                <h1 class="display-3 mb-2 wow fadeIn" data-wow-delay="0.1s">Client <span
                        class="text-red">Testimonials</span></h1>
                <p class="display-6 mb-5 wow fadeIn" data-wow-delay="0.1s"> Sweet Reviews From my Clients</p>

                <!-- Testimonial 1 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.1s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Sarah Wilkinson</h6>
                            <p class="mb-0">London, UK</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Love Spell That Works</h4>
                            <p class="mb-4">I must say you are the best spiritual spell mentor and i must tell the world
                                about REEAKOA HEALING she is a nice woman and also her love spell is very effective and
                                i am very happy to say this to the world that reeakoa help me get back my lover, she
                                specializes on all kinds of spell. You can reach her on email:
                                <?php echo $mail ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-3.jpg" class="img-fluid w-100" alt="Sarah Wilkinson's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.3s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Amed Farooqi</h6>
                            <p class="mb-0">Toronto, Canada</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Financial Blessing</h4>
                            <p class="mb-4">My name is Amed I want to sincerely thank Reeakao Healing for the powerful
                                financial spell that truly changed my life. I was struggling to make ends meet and felt
                                stuck in a cycle of financial stress. After working with Reeakao, I noticed a shift
                                almost immediately new opportunities began to open up, unexpected income came my way,
                                and I finally feel financially secure and confident about the future. I am deeply
                                grateful for this blessing and highly recommend Reeakao Healing to anyone seeking real,
                                positive change.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-13.jpg" class="img-fluid w-100" alt="James Peterson's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Emma Laurent</h6>
                            <p class="mb-0">Paris, France</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Pregnancy Miracle</h4>
                            <p class="mb-4">I'm beyond grateful to Reeakao Healing for her incredible pregnancy spell.
                                After months of heartbreak and trying without success, I turned to Reeakao as a last
                                hope and I'm so glad I did. Not long after the healing session, I received the amazing
                                news that I was pregnant. It feels like a true miracle. Thank you, Reeakao Healing, for
                                bringing this blessing into our lives. I will forever be thankful.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-16.jpg" class="img-fluid w-100" alt="Emma Laurent's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.1s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Michael Bianchi</h6>
                            <p class="mb-0">Rome, Italy</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Healing From Cancer</h4>
                            <p class="mb-4">As someone who was diagnosed with cancer and told there was no cure, I know
                                how devastating that news can be. I'm from Monaco, and for over two years, I battled
                                this illness with little hope until I came across a story that changed my life. I
                                discovered REEAKOA HEALING through a testimonial I found online. It spoke of natural,
                                herbal based support that had helped others facing serious conditions. Skeptical but
                                desperate, I decided to reach out. She responded with compassion and confidence, and I
                                began a one month herbal treatment plan. To my surprise, after just three weeks, I began
                                to feel real changes. I went for a follow up with my doctor, and to our shock, the
                                results came back clear. Today, I feel like I've been given a second chance at life.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-1.jpg" class="img-fluid w-100" alt="Michael Bianchi's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.3s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Olivia Schmidt</h6>
                            <p class="mb-0">Berlin, Germany</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Marriage Restoration</h4>
                            <p class="mb-4">New season is all about been with the one you love and those who care about
                                you too. Imagine not spending time with the one you love this Holiday. That will be so
                                Depressing I would have been in that situation if not for REEAKOA HEALING who helped in
                                bringing my Lovely wife back home after 2 years of separation. All thanks to REEAKOA
                                HEALING I can now feel the love and Joy from new year... And I wish Everyone to have a
                                Wonderful year ahead with their Loved One</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-5.jpg" class="img-fluid w-100" alt="Olivia Schmidt's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 6 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Glory Anderson</h6>
                            <p class="mb-0">Los Angeles, USA</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">From Separation to Reconciliation</h4>
                            <p class="mb-4">Hello, my name is Glory Anderson, and I'm from Los Angeles. The past two
                                years have been a deeply emotional and transformative period for me and my family.
                                During a time when I felt like my world was falling apart, I found an unexpected source
                                of support that helped me restore something I value deeply my marriage. My husband and I
                                had shared a beautiful life together, but like many couples, we faced serious challenges
                                that eventually led to separation. It was a heartbreaking time. I was overwhelmed with
                                sadness, frustration, and a deep sense of loss. We had always been close, and watching
                                our relationship unravel was incredibly painful. During that period, I was desperate for
                                a way to reconnect and heal what had been broken. I truly believed that our love was
                                worth fighting for. In my search for guidance, I came across stories of people who had
                                found help and healing through spiritual support. After careful consideration and
                                reflection, I reached out to someone who many described as compassionate and wise.
                                Through that journey, my husband and I were able to rebuild the bond we once had. Today,
                                our relationship is stronger, more respectful, and filled with renewed love.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-6.jpg" class="img-fluid w-100" alt="Glory Anderson's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 7 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.1s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Matthew Kobe</h6>
                            <p class="mb-0">Vancouver, Canada</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Cancer Recovery</h4>
                            <p class="mb-4">My name is Matthew Kobe, a construction engineer and estate consultant.
                                After losing my wife in a tragic accident and being diagnosed with terminal lung cancer,
                                life became incredibly difficult. I feared I wouldn't live long enough to raise my
                                daughter, Kate. In a moment of deep desperation, I was introduced to Reeakoa Healing
                                during a visit to west Africa. Though skeptical, I followed her natural healing remedy
                                and to my doctors' amazement, my condition completely reversed and I'm cancer free now
                                I'm forever grateful for the hope and healing I received. If you're struggling with a
                                serious issue, I encourage you to reach out to <?php echo $mail ?> I'm sure
                                she will be able to help in any spiritual and physical problems.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-11.jpg" class="img-fluid w-100" alt="Matthew Kobe's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 8 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.3s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Marcel Dubois</h6>
                            <p class="mb-0">Brussels, Belgium</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Relationship Transformation</h4>
                            <p class="mb-4">Reaching out to Reeako healing was one of the best decisions I've ever made.
                                The support I received completely transformed my relationship in ways I never thought
                                possible. I'm deeply grateful, and I'm sharing this for anyone going through a difficult
                                time, whether it's in love, Relationship, Marriage, or life in general. If you're
                                looking for real healing and change, REEAKOA HEALING is definitely going to help you out
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-8.jpg" class="img-fluid w-100" alt="Sophie Dubois' testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 9 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Isabella Rossi</h6>
                            <p class="mb-0">Milan, Italy</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Love Reunited</h4>
                            <p class="mb-4">l am so happy sharing my amazing experience with the powerful spell caster
                                ReeakoaHealing who helped me bring my boyfriend back, I and my partner was having a lot
                                of issues, things got so worst we broke up I was devastated I love him more than
                                anything, I cried my eyes out until my friend who had a perfect relationship Introduced
                                me to the wonderful woman Reeako Healing she told me everything was going to be Ok. She
                                told me what to do which I did and exactly 3 days later my boyfriend came back l'm so
                                happy, thank you so much, l'm going to leave her details here so you too can benefit
                                from her powerful work. <?php echo $mail ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-9.jpg" class="img-fluid w-100" alt="Isabella Rossi's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 10 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.1s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Naomi Clark</h6>
                            <p class="mb-0">Manchester, UK</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Husband Returned</h4>
                            <p class="mb-4">I never thought I would smile again, My husband left me with my child for a
                                year, All effort to bring him back failed I thought I'm not going to see him again not
                                until I met a lady who told me about a spell caster Reeakoa Healing I did contacted her
                                and she assured me within 48 hours my husband will come back to me, In less than 3 days
                                my husband came back saying, it is the devils work for abandoning me, I am full of joy
                                and happiness to be with my family again after all i went through, thank the universe
                                for using Reeakoa Healing to restore my marriage back.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-7.jpg" class="img-fluid w-100" alt="Naomi Clark's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 11 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.3s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Alex Morgan</h6>
                            <p class="mb-0">New York, USA</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">LGBTQ Relationship Healing</h4>
                            <p class="mb-4">People always looked down on my relationship with my partner because we're
                                both gay, which really affected us. Some of my partner's friends and family weren't
                                supportive, and we were on and off for several months. Then I came into contact with Dr
                                Reeakoa, who uplifted our spirits with his amazing voodoo charms. I'm so glad my man and
                                I are back together! I want to take this opportunity to thank you and share the goodness
                                you've brought back into my life.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-10.jpg" class="img-fluid w-100" alt="Alex Morgan's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 12 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Sophia Martinez</h6>
                            <p class="mb-0">Rio de Janeiro, Brazil</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">From Engagement to Marriage</h4>
                            <p class="mb-4">I want to express my heartfelt gratitude to REEAKOA HEALING, whose guidance
                                helped me reunite with my partner, now my husband. After nine months of engagement, our
                                relationship fell apart, and I was left heartbroken and unsure of what to do. Through
                                her compassionate support and spiritual insight, everything changed. Today, we are
                                happily married and stronger than ever. REEAKOA HEALING has helped many people restore
                                love, heal emotional wounds, and rediscover joy. If you're facing struggles in love or
                                relationships, I truly encourage you to reach out. <?php echo $mail ?> Her
                                support transformed my life it might do the same for you.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-2.jpg" class="img-fluid w-100" alt="Sophia Martinez's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 13 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.1s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Linda Berg</h6>
                            <p class="mb-0">Stockholm, Sweden</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Marriage Reconciliation</h4>
                            <p class="mb-4">My marriage of 4 years got broken because of a fight we had and I regretted
                                it, I was so devastated until I saw a comment of a lady thanking REEAKOA HEALING for
                                what she did for her marriage. I contacted her and she helped me restore my
                                relationship... now my husband loves me like never before...</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-12.jpg" class="img-fluid w-100" alt="Linda Berg's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 14 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.3s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Yonna Brown</h6>
                            <p class="mb-0">Dallas, USA</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">From Heartbreak to Healing</h4>
                            <p class="mb-4">Life can be deeply frustrating and at times heartbreaking, but it's in those
                                moments we must find the strength to keep going. My name is Yonna Brown, and I want to
                                share a personal story that took me from heartbreak to healing. I was in a complicated
                                relationship with someone I truly loved, Kelly. We had our ups and downs we separated in
                                2018 reunited in 2020 and those years together were some of the most meaningful of my
                                life. But in January 2023, shortly after my birthday, Kelly ended things for good. It
                                was a painful shock, and I was left devastated. As someone who's naturally introverted,
                                it was hard to open up about the pain I was feeling. I cried alone, fell into
                                depression, and truly struggled to cope. Then, a friend shared her own story of nearly
                                losing her marriage and how REEAKOA HEALING helped turn everything around. With hope and
                                hesitation, I reached out to her, What I found was not just spiritual support, but
                                genuine care and powerful guidance. That connection helped me find strength, clarity,
                                and emotional healing. I'm still amazed at the transformation it brought into my life.
                                My marriage is back now.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-14.jpg" class="img-fluid w-100" alt="Yonna Brown's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 15 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Daniel Craig</h6>
                            <p class="mb-0">London, UK</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Business Turnaround</h4>
                            <p class="mb-4">After nearly losing my business during the pandemic, I reached out to
                                Reeakoa Healing for a prosperity spell. Within weeks, new investors came forward,
                                contracts I'd been waiting on were signed, and my business not only recovered but
                                thrived. This experience taught me that sometimes we need both practical action and
                                spiritual support to manifest our goals.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-15.jpg" class="img-fluid w-100" alt="Daniel White's testimonial">
                        </div>
                    </div>
                </div>
                <!-- Testimonial 16 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Lisa Schneider</h6>
                            <p class="mb-0">Berlin, Germany</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Love Reconciliation</h4>
                            <p class="mb-4">This is my opportunity to tell the world how happy I am now with the help of
                                a great spiritual leader called Dr REEAKOA HEALING, who brought back my lost lover into
                                my life. I am so grateful</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-17.jpg" class="img-fluid w-100" alt="Michael Schneider's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 17 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Sophie Laurent</h6>
                            <p class="mb-0">Paris, France</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Effective Love Spell</h4>
                            <p class="mb-4">I must say you are the best love spell caster and i must tell the world
                                about Dr REEAKOA she is a nice woman and also her love spell is very effective and i am
                                very happy to say this to the world that Dr Reeakoa help me get back my lover, she
                                specializes on all kinds of spell and spiritual work, you can reach her on WhatsApp:
                                <?php echo $phone ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-18.jpg" class="img-fluid w-100" alt="Sophie Laurent's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 18 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Simon Mccoy</h6>
                            <p class="mb-0">Baltimore, USA</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Life Transformation</h4>
                            <p class="mb-4">I've been working with REEAKOA for about 4 years now, and the transformation
                                in my life has been truly incredible. Every area of my life has improved from my energy
                                and health to my finances and relationships. One of the most powerful experiences was
                                the Aura Cleansing, which brought a deep sense of renewal and clarity. Since then, I've
                                reconnected with someone special from my past, my health has improved, and I've
                                experienced a shift in positive energy that I can feel every day. Even the negativity
                                and conflict that once surrounded me have faded away. I'm so grateful for the care,
                                wisdom, and powerful guidance that REEAKOA HEALING provides. Thank you for doing what
                                you do so well, your work has truly changed my life.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-4.jpg" class="img-fluid w-100" alt="Simon's testimonial">
                        </div>
                    </div>
                </div>

                <!-- Testimonial 19 -->
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>Monika Cheng</h6>
                            <p class="mb-0">United Kingdom</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Fertility Miracle</h4>
                            <p class="mb-4">Hello, my name is Monika, and I'm from the United Kingdom. I want to share
                                my story and express my heartfelt gratitude to REEAKOA HEALING, whose support helped me
                                through one of the most difficult times in my life. For a long time, I struggled to get
                                pregnant due to a chronic medical condition. It placed a heavy strain on my marriage,
                                and at one point, my husband told me he was ready to leave and start a family with
                                someone else. I was devastated heartbroken and afraid of losing everything we had built
                                together. One night, while searching for answers online, I came across testimonials
                                about REEAKOA Healing and how she had helped others in similar situations. After some
                                reflection, I decided to reach out. To my surprise, I received a kind and encouraging
                                response. I followed her guidance carefully, and within 72 hours, my husband returned
                                home asking for forgiveness and canceled the divorce. Just four weeks later, I found out
                                I was pregnant, after receiving some herbal remedies. Words can't fully express the joy
                                and relief I felt. If you're going through something similar in your relationship or
                                with fertility I truly encourage you to connect with REEAKOA. Her support brought light
                                back into my life, and she can help anyone from any part of the world.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-19.jpg" class="img-fluid w-100" alt="Monika Kowalski's testimonial">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->





        <!-- Blog Start  
        <div class="container-fluid py-5">
            <div class="container py-5">
                <h1 class="display-3 mb-5 wow fadeIn" data-wow-delay="0.1s">Latest From <span class="text-primary">Our
                        Blog</span></h1>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 col-xl-4">
                        <div class="blog-item wow fadeIn" data-wow-delay="0.1s">
                            <div class="blog-img position-relative overflow-hidden">
                                <img src="img/blog-1.jpg" class="img-fluid w-100" alt="">
                                <div
                                    class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">
                                    01 Jan 2045</div>
                            </div>
                            <div class="p-4">
                                <div class="blog-meta d-flex justify-content-between pb-2">
                                    <div class="">
                                        <small><i class="fas fa-user me-2 text-muted"></i><a href=""
                                                class="text-muted me-2">By Admin</small></a>
                                        <small><i class="fa fa-comment-alt me-2 text-muted"></i><a href=""
                                                class="text-muted me-2">12 Comments</small></a>
                                    </div>
                                    <div class="">
                                        <a href=""><i class="fas fa-bookmark text-muted"></i></a>
                                    </div>
                                </div>
                                <a href="" class="d-inline-block h4 lh-sm mb-3">Importance of “Piller” of Islam</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    aliquip ex ea commodo consequat.</p>
                                <a href="#" class="btn btn-primary px-3">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="blog-item wow fadeIn" data-wow-delay="0.3s">
                            <div class="blog-img position-relative overflow-hidden">
                                <img src="img/blog-2.jpg" class="img-fluid w-100" alt="">
                                <div
                                    class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">
                                    01 Jan 2045</div>
                            </div>
                            <div class="p-4">
                                <div class="blog-meta d-flex justify-content-between pb-2">
                                    <div class="">
                                        <small><i class="fas fa-user me-2 text-muted"></i><a href=""
                                                class="text-muted me-2">By Admin</small></a>
                                        <small><i class="fa fa-comment-alt me-2 text-muted"></i><a href=""
                                                class="text-muted me-2">12 Comments</small></a>
                                    </div>
                                    <div class="">
                                        <a href=""><i class="fas fa-bookmark text-muted"></i></a>
                                    </div>
                                </div>
                                <a href="" class="d-inline-block h4 lh-sm mb-3">How to get closer to Allah</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    aliquip ex ea commodo consequat.</p>
                                <a href="#" class="btn btn-primary px-3">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="blog-item wow fadeIn" data-wow-delay="0.5s">
                            <div class="blog-img position-relative overflow-hidden">
                                <img src="img/blog-3.jpg" class="img-fluid w-100" alt="">
                                <div
                                    class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">
                                    01 Jan 2045</div>
                            </div>
                            <div class="p-4">
                                <div class="blog-meta d-flex justify-content-between pb-2">
                                    <div class="">
                                        <small><i class="fas fa-user me-2 text-muted"></i><a href=""
                                                class="text-muted me-2">By Admin</small></a>
                                        <small><i class="fa fa-comment-alt me-2 text-muted"></i><a href=""
                                                class="text-muted me-2">12 Comments</small></a>
                                    </div>
                                    <div class="">
                                        <a href=""><i class="fas fa-bookmark text-muted"></i></a>
                                    </div>
                                </div>
                                <a href="" class="d-inline-block h4 lh-sm mb-3">Importance of Hajj in Islam</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    aliquip ex ea commodo consequat.</p>
                                <a href="#" class="btn btn-primary px-3">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Team Start  
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <p class="fs-5 text-uppercase text-primary">Our Team</p>
                    <h1 class="display-3">Meet Our Organizer</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-xl-5">
                        <div class="team-img wow zoomIn" data-wow-delay="0.1s">
                            <img src="img/team-1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-7">
                        <div class="team-item wow fadeIn" data-wow-delay="0.1s">
                            <h1>Anamul Hasan</h1>
                            <h5 class="fw-normal fst-italic text-primary mb-4">President</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. aliquip ex ea commodo
                                consequat.</p>
                            <div class="team-icon d-flex pb-4 mb-4 border-bottom border-primary">
                                <a class="btn btn-primary btn-lg-square me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-lg-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-primary btn-lg-square me-2"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary btn-lg-square"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="team-item wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/team-2.jpg" class="img-fluid w-100" alt="">
                                    <div class="team-content text-dark text-center py-3">
                                        <div class="team-content-inner">
                                            <h5 class="mb-0">Mustafa Kamal</h5>
                                            <p class="text-dark">Imam</p>
                                            <div class="team-icon d-flex align-items-center justify-content-center">
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                        class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                        class="fab fa-twitter"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square me-2"><i
                                                        class="fab fa-instagram"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-item wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/team-3.jpg" class="img-fluid w-100" alt="">
                                    <div class="team-content text-dark text-center py-3">
                                        <div class="team-content-inner">
                                            <h5 class="mb-0">Nahiyan Momen</h5>
                                            <p class="text-dark">Teacher</p>
                                            <div class="team-icon d-flex align-items-center justify-content-center">
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                        class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                        class="fab fa-twitter"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square me-2"><i
                                                        class="fab fa-instagram"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-item wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/team-4.jpg" class="img-fluid w-100" alt="">
                                    <div class="team-content text-dark text-center py-3">
                                        <div class="team-content-inner">
                                            <h5 class="mb-0">Asfaque Ali</h5>
                                            <p class="text-dark">Volunteer</p>
                                            <div class="team-icon d-flex align-items-center justify-content-center">
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                        class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                        class="fab fa-twitter"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square me-2"><i
                                                        class="fab fa-instagram"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testiminial Start  
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <p class="fs-5 text-uppercase text-primary">Testimonial</p>
                    <h1 class="display-3">What People Say About Islam</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                    <div class="testimonial-item">
                        <div class="d-flex mb-3">
                            <div class="position-relative">
                                <img src="img/testimonial-1.jpg" class="img-fluid" alt="">
                                <div class="btn-md-square bg-primary rounded-circle position-absolute"
                                    style="top: 25px; left: -25px;">
                                    <i class="fa fa-quote-left text-dark"></i>
                                </div>
                            </div>
                            <div class="ps-3 my-auto ">
                                <h5 class="mb-0">Full Name</h5>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim quis.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="d-flex mb-3">
                            <div class="position-relative">
                                <img src="img/testimonial-2.jpg" class="img-fluid" alt="">
                                <div class="btn-md-square bg-primary rounded-circle position-absolute"
                                    style="top: 25px; left: -25px;">
                                    <i class="fa fa-quote-left text-dark"></i>
                                </div>
                            </div>
                            <div class="ps-3 my-auto ">
                                <h5 class="mb-0">Full Name</h5>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim quis.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="d-flex mb-3">
                            <div class="position-relative">
                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                <div class="btn-md-square bg-primary rounded-circle position-absolute"
                                    style="top: 25px; left: -25px;">
                                    <i class="fa fa-quote-left text-dark"></i>
                                </div>
                            </div>
                            <div class="ps-3 my-auto ">
                                <h5 class="mb-0">Full Name</h5>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim quis.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="d-flex mb-3">
                            <div class="position-relative">
                                <img src="img/testimonial-4.jpg" class="img-fluid" alt="">
                                <div class="btn-md-square bg-primary rounded-circle position-absolute"
                                    style="top: 25px; left: -25px;">
                                    <i class="fa fa-quote-left text-dark"></i>
                                </div>
                            </div>
                            <div class="ps-3 my-auto ">
                                <h5 class="mb-0">Full Name</h5>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim quis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testiminial End -->


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