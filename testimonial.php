<?php include "short.php" ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?php echo $name ?> - Testimonial</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="<?php echo $name ?>" name="keywords">
        <meta content="Spiritual Solutions" name="description">
        <!-- Favicon Meta Tags -->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/favicon.png">
        <meta name="msapplication-TileImage" content="img/favicon.png">

        <!-- Open Graph Meta Tags (for social media sharing) -->
        <meta property="og:image" content="img/favicon.png">
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
                            <a href="testimonial.php" class="nav-item nav-link active">Testimonial</a>
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
                            <h1 class="display-1 text-dark">Testimonial</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item text-red">Home</li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Testimonial</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Testiminial Start -->
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
                                    <a href="https://wa.me/<?php echo $phone ?>"
                                        class="text-body">+<?php echo $phone ?></a>
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
                        &copy; 2010 - <?php echo date("Y");  ?>
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