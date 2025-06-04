<?php include "short.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $name ?> - Contact</title>
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
                            <a href="https://wa.me/<?php echo $phone ?>"
                                class="text-white"><span>+<?php echo $phone ?></span></a>
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
                        <a href="about.php" class="nav-item nav-link ">About</a>
                        <a href="faq.php" class="nav-item nav-link">FAQ</a>
                        <a href="testimonial.php" class="nav-item nav-link">Testimonial</a>
                        <a href="services.php" class="nav-item nav-link">Services</a>
                    </div>
                    <a href="contact.php" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block active">Book
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
                        <h1 class="display-1 text-dark">Contact</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item text-red">Home</li>
                            <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <p class="fs-5 text-uppercase text-primary">Get In Touch</p>
                <h1 class="display-3">Contact For Any Queries</h1>
                <p class="mb-0">Whether you're seeking spiritual guidance, healing, or solutions to life's
                    challenges, I’m here to help. Fill out the form below, and I’ll respond with personalized care.
                    Your journey begins with a single step.</p>
            </div>
            <form id="whatsappForm" class="needs-validation" novalidate>
                <div class="row g-4 wow fadeIn" data-wow-delay="0.3s">

                    <div class="col-sm-6">
                        <input type="text" name="name" class="form-control bg-transparent p-3"
                            placeholder="Your Name" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" name="email" class="form-control bg-transparent p-3"
                            placeholder="Your Email" required>
                    </div>
                    <div class="col-12">
                        <input type="text" name="subject" class="form-control bg-transparent p-3"
                            placeholder="Subject" required>
                    </div>
                    <div class="col-12">
                        <textarea name="message" class="w-100 form-control bg-transparent p-3" rows="6" cols="10"
                            placeholder="Your Message" required></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary border-0 py-3 px-5" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Start -->
    <script>
        document.getElementById('whatsappForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form values
            const name = encodeURIComponent(this.name.value);
            const email = encodeURIComponent(this.email.value);
            const subject = encodeURIComponent(this.subject.value);
            const message = encodeURIComponent(this.message.value);

            // Format the WhatsApp message
            const whatsappMessage =
                `*New Contact Request*
    
*Name:* ${name}
*Email:* ${email}
    
*Subject:* ${subject}
    
*Message:*
${message}`;

            // Open WhatsApp with pre-filled message
            window.open(`https://wa.me/<?php echo $phone; ?>?&text=${whatsappMessage}`,
                '_blank');

        });
    </script>

    <style>
        /* Optional: Add form validation styling */
        .was-validated .form-control:invalid {
            border-color: #dc3545;
        }

        .was-validated .form-control:valid {
            border-color: #28a745;
        }
    </style>

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
                                <a href="https://wa.me/<?php echo $phone ?>" class="text-body">+<?php echo $phone ?></a>
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