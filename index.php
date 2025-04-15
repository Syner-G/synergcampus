<?php
if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    // Perform your search logic here, e.g., querying a database
    // For demonstration, let's just echo the search term
    echo "You searched for: " . htmlspecialchars($searchTerm);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Syner G Campus The Learning Hub Inc</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>09253789153/ (074) 665 2766</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>registrar@synergcampus.org</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="https://www.facebook.com/SGCTheLearningHub">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.php" class="navbar-brand ml-lg-3 d-flex align-items-center">
    <img src="img/synerg.png" alt="Logo" style="height: 60px; width: auto; margin-right: 10px;">
    <h1 class="m-0 text-uppercase text-primary">Syner G Campus</h1>
</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="course.php" class="nav-item nav-link">Courses</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="detail.php" class="dropdown-item">Course Detail</a>
                            <a href="feature.php" class="dropdown-item">Our Features</a>
                            <a href="team.php" class="dropdown-item">Instructors</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>


            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4">SYNER G | CAMPUS</h1>
            <h1 class="text-white display-1 mb-5">THE LEARNING HUB INC</h1>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
            <div class="input-group">
    <div class="input-group-prepend">
        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Courses</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Courses 1</a>
        </div>
    </div>

    <input type="text" id="searchInput" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">

    <div class="input-group-append">
        <button class="btn btn-secondary px-4 px-lg-5" onclick="handleSearch()">Search</button>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

<!-- Hero Section -->
<div class="hero">
    <a href="about.php" class="cta-button"><Center>Learn More</Center></a>
</div>
</div>
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/gg.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6>
                        <h1 class="display-4">🚀 Our Mission</h1>
                    </div>
                    <p>🏢 Simulating real-world environments to ensure industry readiness.
                    📚 Integrating real market skill requirements into our curriculum.
                    🕒 Providing hands-on training with adequate hours in real work scenarios.
                    💡 Incorporating values and work ethics discussions in every module.</p>
                    <h1 class="display-4">🎯 Our Vision</h1>
                    <p>To prepare the next generation of Filipino workers with the skills and values that meet the expectations of the marketplace.</p>
                    <div class="row pt-3 mx-0">
                        <div class="col-3 px-0">
                            <div class="bg-success text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">1</h1>
                                <h6 class="text-uppercase text-white">Available<span class="d-block">Subjects</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-primary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">1</h1>
                                <h6 class="text-uppercase text-white">Available<span class="d-block">Courses</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-secondary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">3</h1>
                                <h6 class="text-uppercase text-white">Skilled<span class="d-block">Instructors</span></h6>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-image" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-5 pt-5 pb-lg-5">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Why Choose Us?</h6>
                        <h1 class="display-4">Why You Should Start Learning with Us?</h1>
                    </div>
                    <p class="mb-4 pb-2">Choosing SynerG|CAMPUS The Learning Hub Inc. comes with several advantages, making it a great choice for learners and professionals alike. Here’s why:</p>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-graduation-cap text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Skilled Instructors</h4>
                            <p>Our instructors are not just educators—they are professionals with real-world experience in their respective fields. This ensures that students receive practical, job-ready skills that align with industry standards.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-certificate text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Certificate</h4>
                            <p>Earning a certificate from SynerG|CAMPUS The Learning Hub Inc. means more than just completing a course—it signifies your commitment to excellence and career growth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/wow.png" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructors</h6>
                <h1 class="display-4">Meet Our Instructors</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/ej.jpg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Edward Justine De Castro</h5>
                        <p class="mb-2">TRAINER ADMIN</p>
                        <div class="d-flex justify-content-center">
                            
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/godf.jpg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Godfrey Fariñas</h5>
                        <p class="mb-2">ASSISTANT TRAINER</p>
                        <div class="d-flex justify-content-center">
                           
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/geehan.jpg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Jeehan Jane Castillejo</h5>
                        <p class="mb-2"> ASSISTANT TRAINER</p>
                        <div class="d-flex justify-content-center">
                           
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

  <!-- Core Values -->
  <section class="core-values">
    <h2>Our Core Values</h2>
    <div class="values-container">
        <div class="value-card">
            <h3>🔥 Passion</h3>
            <p>We are driven by enthusiasm and dedication in everything we do.</p>
        </div>
        <div class="value-card">
            <h3>⚖️ Integrity</h3>
            <p>We uphold honesty and strong moral principles in our actions.</p>
        </div>
        <div class="value-card">
            <h3>🏆 Excellence</h3>
            <p>We strive for the highest quality in our work and achievements.</p>
        </div>
        <div class="value-card">
            <h3>🤝 Teamwork</h3>
            <p>We believe in collaboration and supporting one another to succeed.</p>
        </div>
    </div>
</section>
    </div>
  </section>

    <!-- Testimonial Start -->
    <div class="container-fluid bg-image py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Testimonial</h6>
                        <h1 class="display-4">What Say Our Students</h1>
                    </div>
                    <p class="m-0">our students' success stories speak for themselves! From career advancements to personal growth, our learners share how our expert instructors, hands-on training, and supportive environment have helped them achieve their goals. Hear from our graduates and see why SynerG|CAMPUS is the top choice for quality education and skill development.</p>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>SynerG|CAMPUS transformed my skills and confidence! The hands-on training, expert instructors, and supportive community helped me grow both professionally and personally. I’m now ready to take on new career opportunities!</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/aman.jpeg" alt="">
                                <div>
                                    <h5>Ghianne Amante</h5>
                                    <span>Student</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>SynerG|CAMPUS gave me the knowledge and skills I needed to succeed. The instructors were amazing, and the hands-on approach made learning so much easier!</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/j.jpeg" alt="">
                                <div>
                                    <h5>Jhonel Lloyd Alagao</h5>
                                    <span>Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Start -->

    <!-- Footer Start -->
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><i class="fa fa-book-reader mr-3"></i>Syner G | Campus</h1>
                    </a>
                    <p class="m-0">SynerG|Campus is a premier learning institution dedicated to providing high-quality education and professional training. With expert instructors, industry-relevant courses, and a dynamic learning environment, we equip students with the skills needed for career success and personal growth.</p>
                </div>
                <div class="col-md-6 mb-5">
                    <h3 class="text-white mb-4">Newsletter</h3>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i> #2 Roman Ayson Road, Baguio City</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>09253789153/ (074) 665 2766
                    </p>
                    <p><i class="fa fa-envelope mr-2"></i> registrar@synergcampus.org</p>
                    <div class="d-flex justify-content-start mt-4">
                    <a href="https://www.facebook.com/SGCTheLearningHub" target="_blank" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
      </div>
                      
    <div class="gnomio-link">
  <a href="https://synergcampus.gnomio.com/" target="_blank">
    <img src="gnomio.jpg" alt="Gnomio Logo">
  </a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Our Courses</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Center Services NCll</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms & Condition</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Regular FAQs</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help & Support</a>
                        <a class="text-white-50" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">Syner G | Campus The Learning Hub Inc</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0">Designed by <a class="text-white" href="">GA</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    
<script>
    function handleSearch() {
        const keyword = document.getElementById("searchInput").value.toLowerCase().trim();

        // Match keyword to specific page
        if (keyword.includes("detail")) {
            window.location.href = "detail.php";
        } else if (keyword.includes("feature")) {
            window.location.href = "feature.php";
        } else if (keyword.includes("team")) {
            window.location.href = "team.php";
        } else if (keyword.includes("testimonial")) {
            window.location.href = "testimonial.php";
        } else {
            alert("No matching page found. Try keywords like: detail, feature, team, or testimonial.");
        }
    }
</script>
</body>

</html>