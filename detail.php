<?php
// Initialize an array of courses
$courses = [
    "Contact Center Services NCll",
    "Web Design & Development",
    "Graphic Design",
    "Digital Marketing",
    "Data Science",
];

// Initialize variables for search results
$searchResults = [];
$searchTerm = '';

// Check if the search query is set
if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    
    // Perform the search
    foreach ($courses as $course) {
        if (stripos($course, $searchTerm) !== false) { // Case-insensitive search
            $searchResults[] = $course;
        }
    }
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
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="course.php" class="nav-item nav-link">Courses</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="detail.php" class="dropdown-item active">Course Detail</a>
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
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Course Detail</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Course Detail</p>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Course Detail</h6>
                            <h1 class="display-4">Contact Center Service NCII</h1>
                        </div>
                        <img class="img-fluid rounded w-100 mb-4" src="img/tesda.png" alt="Image">
                        <p>Syner G Campus exists to prepare the next generation of Filipino workers with the skills and values</p>
                        
                        <p>FREE TESDA SCHOLARSHIP FOR CONTACT CENTER SERVICES NCII. Enrollment on going for the next batch!
Fill up the form below and wait for our call for the confirmation of your registration.
LIMITED SLOTS! FIRST COME FIRST SERVED!  SIGN UP NOW FOR INITIAL SCREENING AND WE WILL CONTACT YOU FOR FURTHER INSTRUCTIONS!
>  Kindly fill out this form: <a href="https://forms.gle/a2mCRJRSZMGnf3L2A" target="_blank">Enrollment Google Form</a></p>
                    </div>

                    <h2 class="mb-3">Related Courses</h2>
                    <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                            <img class="img-fluid" src="img/courses-3.jpg" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Web design & development courses for
                                    beginners</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>Johari Dumlao</span>
                                       
                                          
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
               </div>
               <?php
// Assuming you're passing the course details (course_id, course_name) to this page
$course_id = 1; // Example course ID, this should be dynamically set
$course_name = "Contact Center Services NCII"; // Example course name, this should be dynamically set
?>

<div class="col-lg-4 mt-5 mt-lg-0">
    <div class="bg-primary mb-5 py-3">
        <h3 class="text-white py-3 px-4 m-0">Course Features</h3>
        <div class="d-flex justify-content-between border-bottom px-4">
            <h6 class="text-white my-3">Instructor</h6>
            <h6 class="text-white my-3">Edward Justine De Castro</h6>
        </div>
        <div class="d-flex justify-content-between border-bottom px-4">
            <h6 class="text-white my-3">Days</h6>
            <h6 class="text-white my-3">18 Days</h6>
        </div>
        <div class="d-flex justify-content-between border-bottom px-4">
            <h6 class="text-white my-3">Lectures</h6>
            <h6 class="text-white my-3">8am-5pm</h6>
        </div>
        <div class="d-flex justify-content-between border-bottom px-4">
            <h6 class="text-white my-3">Duration</h6>
            <h6 class="text-white my-3">144 Hrs</h6>
        </div>
        <div class="d-flex justify-content-between border-bottom px-4">
            <h6 class="text-white my-3">Skill level</h6>
            <h6 class="text-white my-3">All Level</h6>
        </div>
        <div class="d-flex justify-content-between px-4">
            <h6 class="text-white my-3">Language</h6>
            <h6 class="text-white my-3">English</h6>
            <h6 class="text-white my-3">Tagalog</h6>
        </div>
        <!-- Enroll Now Button -->
       <!-- Enroll Now Button -->
<a class="btn btn-block btn-secondary py-3 px-5" href="enroll.php">Enroll Now</a>

    </div>
</div>


                    <button type="submit" class="btn btn-primary">Enroll</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Include necessary Bootstrap scripts for modal functionality -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


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
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#"> Syner G | Campus The Learning Hub Inc.</a>. All Rights Reserved.
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
</body>

</html>