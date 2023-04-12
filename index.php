<?php require_once 'account/includes/controllers/main_controller.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Safe Route</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <link href="assets/css/main.css" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Safe Route</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#busses">Top Busses</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li>
                        <a class="get-a-quote" href="account/login.php">Sign In</a>
                    </li>
                </ul>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Your Limitless Travel Experience Partner</h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Safe Route offers reliable and safe bus rental services for school
                        events. With years of experience, we pride ourselves on
                        professionalism and exceptional customer service. Contact us to
                        book a bus for your next school activity and experience the
                        difference.
                    </p>

                    <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <input type="text" class="form-control" placeholder="Search for a bus" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Clients</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1453"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Support</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Workers</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->
                    </div>
                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container"></div>
        </section>
        <!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about pt-0">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="" />
                        <a href="https://www.youtube.com/watch?v=HNl-QtDzJ0Y" class="glightbox play-btn"></a>
                    </div>
                    <div class="col-lg-6 content order-last order-lg-first">
                        <h3>About Us</h3>
                        <p>
                            Safe Route is dedicated to offering top-quality and dependable
                            bus rental services for schools and organizations. They
                            prioritize safe and comfortable transportation and work
                            tirelessly to ensure the best rental experience possible. Their
                            experienced drivers and modern buses make them the affordable
                            and stress-free solution for all school events. Our commitment
                            to excellence is reflected in the following three major points:
                        </p>
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-diagram-3"></i>
                                <div>
                                    <h5>Professionalism</h5>
                                    <p>
                                        We pride ourselves on our professional approach to
                                        business. From the moment you contact us to the end of
                                        your rental, our team is dedicated to providing
                                        exceptional customer service and ensuring that your needs
                                        are met.
                                    </p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="fa fa-shield"></i>
                                <div>
                                    <h5>Safety</h5>
                                    <p>
                                        Safety is our top priority. All our buses undergo regular
                                        maintenance and safety checks, and our drivers are
                                        licensed, experienced, and trained to prioritize safety at
                                        all times.
                                    </p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="fa fa-question-circle"></i>
                                <div>
                                    <h5>24/7 Customer Support</h5>
                                    <p>
                                        At Safe Route, we offer 24/7 customer support for your
                                        peace of mind. Our dedicated support team is always
                                        available to assist you with any rental-related issues, no
                                        matter the time of day. We are committed to providing
                                        prompt and effective solutions to ensure that your rental
                                        experience is stress-free.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <span>Our Services</span>
                    <h2>Our Services</h2>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-1.jpg" alt="" class="img-fluid" />
                            </div>
                            <h3>
                                <a href="#" class="stretched-link">
                                    Field Trip Rentals
                                </a>
                            </h3>
                            <p>
                                Safe Route offers safe, comfortable and affordable
                                transportation for your school's field trips, making the
                                process convenient for students, teachers and parents.
                            </p>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-2.jpg" alt="" class="img-fluid" />
                            </div>
                            <h3>
                                <a href="#" class="stretched-link">
                                    Sports Event Rentals
                                </a>
                            </h3>
                            <p>
                                Whether it's for a local or out-of-town game, Safe Route
                                provides reliable and comfortable transportation for sports
                                teams, coaches and fans.
                            </p>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-3.jpg" alt="" class="img-fluid" />
                            </div>
                            <h3>
                                <a href="#" class="stretched-link">
                                    Academic Conference Bus Rentals
                                </a>
                            </h3>
                            <p>
                                Our buses are equipped with comfortable seating, air
                                conditioning, and Wi-Fi to ensure that conference attendees
                                arrive at their destination relaxed and ready for the event.
                            </p>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-4.jpg" alt="" class="img-fluid" />
                            </div>
                            <h3>
                                <a href="#" class="stretched-link">
                                    Bus Maintenance and Cleaning
                                </a>
                            </h3>
                            <p>
                                We offer bus maintenance and cleaning services to ensure that
                                our buses are always in top condition. Our experienced
                                mechanics and cleaning staff work tirelessly to keep our buses
                                in pristine condition, ready for your next rental.
                            </p>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-5.jpg" alt="" class="img-fluid" />
                            </div>
                            <h3>
                                <a href="#" class="stretched-link">
                                    Experienced Drivers
                                </a>
                            </h3>
                            <p>
                                All our drivers are licensed, experienced, and trained to
                                prioritize safety and provide exceptional customer service.
                            </p>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-6.jpg" alt="" class="img-fluid" />
                            </div>
                            <h3>
                                <a href="#" class="stretched-link">
                                    24/7 Customer Support
                                </a>
                            </h3>
                            <p>
                                We offer 24/7 customer support to ensure that you get prompt
                                and effective solutions to any issues that may arise during
                                your rental.
                            </p>
                        </div>
                    </div>
                    <!-- End Card Item -->
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Pricing Section ======= -->
        <!-- ======= Services Section ======= -->
        <section id="busses" class="services pt-0">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <span>Our Top Busses</span>
                    <h2>Our Top Busses</h2>
                </div>

                <div class="row gy-4">
                    <?php echo $busContent; ?>
                </div>
            </div>
        </section>
        <!-- End Services Section -->
        <!-- End Pricing Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="slides-1 swiper" data-aos="fade-up">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="" />
                                <h3>Mark Johnson</h3>
                                <h4>Director of Admissions at Hilltop College</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    SafeRoute's school bus rental services were exceptional. The driver was very
                                    professional and accommodating, and the bus was equipped with all the necessary
                                    amenities for a long trip. We would definitely recommend SafeRoute to anyone in need
                                    of reliable transportation services.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="" />
                                <h3>Mary Jones</h3>
                                <h4>Teacher at Oak Grove Elementary School</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    We recently used SafeRoute's school bus rental services for a field trip, and we
                                    were extremely impressed with the quality of the service. The bus was clean,
                                    well-maintained, and equipped with all the necessary amenities. The driver was
                                    friendly, courteous, and ensured that our trip was a success.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="" />
                                <h3>Sarah Williams</h3>
                                <h4>Executive Director at Bright Horizons Child Care Center</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    We were very impressed with the professionalism and expertise of SafeRoute's school
                                    bus rental services. The driver was knowledgeable, friendly, and ensured that we
                                    arrived at our destination on time and safely. We would definitely recommend
                                    SafeRoute to anyone in need of reliable transportation services.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="" />
                                <h3>David Smith</h3>
                                <h4>Director of Admissions at Hillcrest Academy</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    SafeRoute's school bus rental services were exceptional. The bus was comfortable,
                                    spacious, and equipped with all the amenities we needed for a long trip. The driver
                                    was very professional and accommodating, and made sure that we were comfortable
                                    throughout the journey.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="" />
                                <h3>John Smith</h3>
                                <h4>Principal at Lincoln Elementary School</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    We were extremely satisfied with SafeRoute's school bus rental services. The driver
                                    was friendly, professional, and arrived on time. Our school trip was a huge success
                                    thanks to SafeRoute!
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <span>Frequently Asked Questions</span>
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-10">
                        <div class="accordion accordion-flush" id="faqlist">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        How do I make a reservation for a school bus rental?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        To make a reservation for a school bus rental, simply
                                        contact us through our website, email, or phone number.
                                        You can also create an account/sign in to your account and
                                        follow a simple process of booking a reservation.
                                    </div>
                                </div>
                            </div>
                            <!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        How much does it cost to rent a school bus?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        The cost of renting a school bus varies depending on
                                        factors such as the duration of the rental, the type of
                                        bus, and the distance of the trip. Contact us to get a
                                        quote for your specific rental needs.
                                    </div>
                                </div>
                            </div>
                            <!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Are your drivers licensed and insured?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Yes, all of our drivers are licensed, insured, and
                                        experienced in operating school buses. We prioritize
                                        safety and ensure that our drivers meet all necessary
                                        requirements.
                                    </div>
                                </div>
                            </div>
                            <!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        What happens if there is a delay or cancellation in my
                                        rental?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        If there is a delay or cancellation in your rental, please
                                        contact us as soon as possible. We will work with you to
                                        reschedule or cancel your rental, and we have flexible
                                        policies to accommodate unforeseen circumstances.
                                    </div>
                                </div>
                            </div>
                            <!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Do you provide any additional services, such as catering
                                        or entertainment?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        We can provide additional services such as catering or
                                        entertainment upon request. Let us know your specific
                                        needs and we will work with you to make your rental
                                        experience as seamless and enjoyable as possible.
                                    </div>
                                </div>
                            </div>
                            <!-- # Faq item-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Frequently Asked Questions Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-4 footer-info">
                    <a href="#" class="logo d-flex align-items-center">
                        <span>Safe Route</span>
                    </a>
                    <p>
                        <strong>Your Limitless Travel Experience Partner.</strong>
                        <br />
                        We prioritize safe and comfortable transportation and work
                        tirelessly to ensure the best rental experience possible.
                    </p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-4 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#service">Services</a></li>
                        <li><a href="account/login.php">Sign In</a></li>
                        <li><a href="account/register.php">Sign Up</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        B302 Birch Lane
                        <br />
                        Los Angeles, CA 90001
                        <br />
                        United States
                        <br />
                        <br />
                        <strong>Phone:</strong>
                        +1 3234 55467 98
                        <br />
                        <strong>Email:</strong>
                        support@saferoute.com
                        <br />
                    </p>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright
                <strong><span>Safe Route</span></strong>
                . All Rights Reserved
            </div>
            <div class="credits">
                Designed by
                <a href="#">Safe Route</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>