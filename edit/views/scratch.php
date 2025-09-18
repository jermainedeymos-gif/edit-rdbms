<!-- Price Start -->
<div class="price ">
    <div class="container">
        <div class="section-header text-center">
            <p>Washing Plan</p>
            <h2>Choose Your Plan</h2>
        </div>
        <div class="row ">
            <div class="col-md-4 ">
                <div class="price-item">
                    <div class="price-header">
                        <h3>Basic Cleaning</h3>
                        <h2><span>$</span><strong>10</strong><span>.99</span></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="far fa-check-circle"></i>Seats Washing</li>
                            <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                            <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                            <li><i class="far fa-times-circle"></i>Window Wiping</li>
                        </ul>
                    </div>
                    <script>
                        $(document).on("click", "#myModal", function () {
                           $("myModal").show();
                        })
                    </script> 
                    <div class="price-footer">
                        <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-item featured-item">
                    <div class="price-header">
                        <h3>Premium Cleaning</h3>
                        <h2><span>$</span><strong>20</strong><span>.99</span></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="far fa-check-circle"></i>Seats Washing</li>
                            <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                            <li><i class="far fa-times-circle"></i>Window Wiping</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-item">
                    <div class="price-header">
                        <h3>Complex Cleaning</h3>
                        <h2><span>$</span><strong>30</strong><span>.99</span></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="far fa-check-circle"></i>Seats Washing</li>
                            <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Window Wiping</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Price End -->








<!--video carrousel-->
<video class="video"
    src="https://framerusercontent.com/assets/jPGmgjk0UnrlNS7OFk2YvyM4c.mp4" loop="" muted="" playsinline="" autoplay="" width="90%">
</video>




<div class="w3-light-grey" style="padding:8px 8px 20px 16px">
    <h2>Example Text</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span>
    <span id="more">
        erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. 
        Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. 
        In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. 
        Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.
    </span>
    </p>
    <button onclick="myFunction()" id="myBtn" class="w3-button w3-dark-grey">Read more</button>
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
</div>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Car Wash management System | Home Page</title>


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="index.php">
                            <h1>CAR <span>Wash</span></h1>
                            <!-- <img src="img/logo.jpg" alt="Logo"> -->
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 col-md-7 d-none d-lg-block">
                    <div class="row">
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Opening Hour</h3>
                                    <p>Mon - Fri, 9:00 AM - 9:00 PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Call Us</h3>
                                    <p>+9123456789</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Email Us</h3>
                                    <p>123@123.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="washing-plans.php" class="nav-item nav-link">Washing Plans</a>
                        <a href="location.php" class="nav-item nav-link">Washing Points</a>

                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="admin" class="nav-item nav-link">admin</a>
                    </div>
                    <div class="ml-auto">
                        <a class="btn btn-custom" href="contact.php">Get Appointment</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-1.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Washing & Detailing</h3>
                        <h1>Keep your Car Newer</h1>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-2.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Washing & Detailing</h3>
                        <h1>Quality service for you</h1>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-3.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Washing & Detailing</h3>
                        <h1>Exterior & Interior Washing</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/about.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>About Us</p>
                        <h2>car washing and detailing</h2>
                    </div>
                    <div class="about-content">
                        <p>
                            Lorem ipsum dolor sit amet elit. In vitae turpis. Donec in hendre dui, vel blandit massa. Ut vestibu suscipi cursus. Cras quis porta nulla, ut placerat risus. Aliquam nec magna eget velit luctus dictum
                        </p>
                        <ul>
                            <li><i class="far fa-check-circle"></i>Seats washing</li>
                            <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                            <li><i class="far fa-check-circle"></i>Interior wet cleaning</li>
                            <li><i class="far fa-check-circle"></i>Window wiping</li>
                        </ul>
                        <a class="btn btn-custom" href="about.php">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>What We Do?</p>
                <h2>Premium Washing Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-wash-1"></i>
                        <h3>Exterior Washing</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-wash"></i>
                        <h3>Interior Washing</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-vacuum-cleaner"></i>
                        <h3>Vacuum Cleaning</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-seat"></i>
                        <h3>Seats Washing</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-service"></i>
                        <h3>Window Wiping</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-service-2"></i>
                        <h3>Wet Cleaning</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-wash"></i>
                        <h3>Oil Changing</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-brush-1"></i>
                        <h3>Brake Reparing</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Facts Start -->
    <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-map-marker-alt"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">25</h3>
                            <p>Service Points</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-user"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">350</h3>
                            <p>Engineers & Workers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-users"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">1500</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-check"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">5000</h3>
                            <p>Projects Completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Price Start -->
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>Washing Plan</p>
                <h2>Choose Your Plan</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="price-item">
                        <div class="price-header">
                            <h3>Basic Cleaning</h3>
                            <h2><span>$</span><strong>10</strong><span>.99</span></h2>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                                <li><i class="far fa-times-circle"></i>Window Wiping</li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item featured-item">
                        <div class="price-header">
                            <h3>Premium Cleaning</h3>
                            <h2><span>$</span><strong>20</strong><span>.99</span></h2>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                <li><i class="far fa-times-circle"></i>Window Wiping</li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item">
                        <div class="price-header">
                            <h3>Complex Cleaning</h3>
                            <h2><span>$</span><strong>30</strong><span>.99</span></h2>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Window Wiping</li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price End -->




    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-contact">
                        <h2>Get In Touch</h2>

                        <p><i class="fa fa-map-marker-alt"></i>Paterno St. Tacloban CIty</p>
                        <p><i class="fa fa-phone-alt"></i>+9123456789</p>
                        <p><i class="fa fa-envelope"></i>123@123.com</p>

                        <div class="footer-social">
                            <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="footer-link">
                        <h2>Popular Links</h2>
                        <a href="index.php">Home</a>
                        <a href="about.php">About Us</a>
                        <a href="washing-plans.php">Washing Plans</a>
                        <a href="location.php">Washing Points</a>
                        <a href="contact.php">Contact Us</a>



                    </div>
                </div>

            </div>
        </div>
        <div class="container copyright">
            <p>Car Wash Management System</p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>
    <!--Model-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Car Wash Booking</h4>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <p>
                            <select name="packagetype" required class="form-control">
                                <option value="">Package Type</option>
                                <option value="1">BASIC CLEANING ($10.99)</option>
                                <option value="2">PREMIUM CLEANING ($20.99)</option>
                                <option value="3 ">COMPLEX CLEANING($30.99)</option>
                            </select>

                        <p>
                            <select name="washingpoint" required class="form-control">
                                <option value="">Select Washing Point</option>

                                <option value="1">Cielo Car Washing Point (ABC Street New Delhi 1110001)</option>

                                <option value="2">ABC Car Washing Point (A3263 Sector 1- Noida 201301)</option>

                                <option value="3"> Matrix Car washing Point (H911 Indira Puram Ghaziabad 201017 UP)</option>

                                <option value="6">Pawing Car Wash Center (Pawing, Palo, Leyte)</option>

                                <option value="7">Poto&#039;s War Wash (Pater St. Tacloban CIty)</option>

                                <option value="9">Jake Car Wash0 (Government Center, Palo Leyte, Sample)</option>
                            </select>
                        </p>
                        <p><input type="text" name="fname" class="form-control" required placeholder="Full Name"></p>
                        <p><input type="text" name="contactno" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" required placeholder="Mobile No."></p>
                        <p>Wash Date <br /><input type="date" name="washdate" required class="form-control"></p>
                        <p>Wash Time <br /><input type="time" name="washtime" required class="form-control"></p>
                        <p><textarea name="message" class="form-control" placeholder="Message if any"></textarea></p>
                        <p><input type="submit" class="btn btn-custom" name="book" value="Book Now"></p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>


























<main role="main" class="container">
    <div class="container marketing">

        <section class=" text-center">
            <div class="container">
                <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Explore Album</h1>
                <p class="lead text-muted">Explore album is a collection of tourist destination in a thumbnails format. <br>Have fun exploring PhilippinesTD!</p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <!-- Album -->
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/bc/d2/1b.jpg">
                            <div class="card-body">
                                <b style="font-family: cursive;">EL NIDO &amp; CORON (Palawan)</b>
                                <p class="card-text">El Nido is known for its limestone cliffs, hidden lagoons, and stunning beaches. Coron is famous for its world-class diving and snorkeling, particularly the shipwrecks.
                                    <br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="https://www.google.com/search?q=elnido+and+coron+philippines&amp;sca_esv=571e9f62cdadf4fd&amp;udm=2&amp;biw=1920&amp;bih=929&amp;sxsrf=AE3TifNygSd_3fLqylAmpDNvWUgzcev_Qg%3A1753169169922&amp;ei=ET1_aOeGOLm60-kPlbSBEA&amp;ved=0ahUKEwin0-qM-M-OAxU53TQHHRVaAAIQ4dUDCBE&amp;uact=5&amp;oq=elnido+and+coron+philippines&amp;gs_lp=EgNpbWciHGVsbmlkbyBhbmQgY29yb24gcGhpbGlwcGluZXNIxDFQAFjkLXAAeACQAQCYAV6gAbsKqgECMTa4AQPIAQD4AQGYAgegAuYEwgIGEAAYBxgewgIKEAAYgAQYQxiKBcICCBAAGAcYChgewgIIEAAYBxgIGB7CAgoQABgHGAgYChgewgIIEAAYBRgHGB6YAwCSBwE3oAfjLLIHATe4B-YEwgcFMC42LjHIBww&amp;sclient=img#imgrc=EDxA4YO92iIIQM&amp;imgdii=y1SKF0-yJUIqsM" target="_blank">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://gttp.images.tshiftcdn.com/360082/x/0/this-scenic-tour-of-islas-de-gigantes-in-iloilo-province-lets-you-experience-natures-raw-beauty.jpg?w=360&amp;h=220&amp;fit=crop&amp;auto=format%2Ccompress&amp;q=32&amp;dpr=2&amp;ixlib=react-9.8.1">
                            <div class="card-body">
                                <b style="font-family: cursive;">Gigantes Islands (Iloilo)</b>
                                <p class="card-text">The islands are a popular tourist destination, offering activities like island hopping, swimming, snorkeling, and exploring caves.
                                    <br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="https://www.google.com/search?q=Gigantes+Islands+%28Iloilo%29+philippines&amp;sca_esv=571e9f62cdadf4fd&amp;udm=2&amp;biw=1920&amp;bih=929&amp;sxsrf=AE3TifPXx0Q8QcXdQY-mUQralomIvu-WKA%3A1753171587066&amp;ei=g0Z_aInoA9fR2roP8pK0sQc&amp;ved=0ahUKEwjJtbWNgdCOAxXXqFYBHXIJLXYQ4dUDCBE&amp;uact=5&amp;oq=Gigantes+Islands+%28Iloilo%29+philippines&amp;gs_lp=EgNpbWciJUdpZ2FudGVzIElzbGFuZHMgKElsb2lsbykgcGhpbGlwcGluZXMyBhAAGAgYHjIIEAAYCBgKGB5InRxQ4RBY4RBwAXgAkAEAmAFYoAFYqgEBMbgBA8gBAPgBAvgBAZgCAaACWpgDAIgGAZIHATGgB9sBsgcBMbgHWsIHAzAuMcgHAQ&amp;sclient=img#imgrc=Cof7iLdwuxX8aM&amp;imgdii=oEcYSGlWAaHR-M" target="_blank">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://www.ourpangasinan.com/wp-content/uploads/2023/02/hundred-islands-1.jpg">
                            <div class="card-body">
                                <b style="font-family: cursive;">Hundred Island National Park (Pangasinan)</b>
                                <p class="card-text">The Hundred Islands National Park in the Philippines offers a variety of activities and attractions.It's a popular destination for both relaxation and adventure.
                                    <br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="https://www.google.com/search?sca_esv=28fff17e3de8b0c6&amp;q=hundred+islands+philippines+offer+what&amp;udm=2&amp;fbs=AIIjpHxU7SXXniUZfeShr2fp4giZ1Y6MJ25_tmWITc7uy4KIeoJTKjrFjVxydQWqI2NcOhYPURIv2wPgv_w_sE_0Sc6QLvDm7a9ZTpW1I1zYSRrvqjsoAv19aPowcFdkOSu6LUMu7VtRJ9PtrX9XFDtNktXYl6YI2h640uMQRntqdmJP9oB3K0JEqOqt7L8AhXsAl03zOiuskBzq5uOPc8S2ch3mjmRs_Q&amp;sa=X&amp;ved=2ahUKEwj6qKT9ydSOAxV96DQHHVhfHUYQtKgLKAF6BAgWEAE&amp;biw=1920&amp;bih=945&amp;dpr=1">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://www.thecoastalcampaign.com/wp-content/uploads/2020/05/Cambugahay-Falls-Siquijor-1-1079x675.jpg">
                            <div class="card-body">
                                <b style="font-family: cursive;">Cambugahay Falls (Siquijor)</b>
                                <p class="card-text">Known for its multi-tiered cascades and turquoise waters, Cambugahay Falls is a must-visit for its beauty and opportunities for swimming, rope swings, and bamboo raft rides.
                                    <br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="https://www.google.com/search?sca_esv=5f46ff70bad680f2&amp;q=siquijor+philippines+tourist+spots+falls&amp;udm=2&amp;fbs=AIIjpHxU7SXXniUZfeShr2fp4giZ1Y6MJ25_tmWITc7uy4KIetxLMeWi1u_d0OMRvkClUba76WL62NDKV-tuv6_wPYBCrGvk5KBEkll3Ni7Afsx8fU8EJamRDWNOuLAP9k161AGrFet1Tuu3j3Zikmy6KHKc4XFxbogObkAxQqYLliw1H-vuOGtprPW9J0_KT9xY8DyLnW-8ZrsbJYgw73nLTy3f334mVw&amp;sa=X&amp;ved=2ahUKEwjAvKzfy9SOAxXjp1YBHVKoMswQtKgLKAF6BAggEAE&amp;biw=1920&amp;bih=945&amp;dpr=1">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://thefroggyadventures.com/wp-content/uploads/2024/08/pahangog-falls-bohol-aerial-waterfalls.jpg">
                            <div class="card-body">
                                <b style="font-family: cursive;">Dimiao Twin Falls (Bohol)</b>
                                <p class="card-text">Dimiao Twin Falls, also known as Pahangog Falls, is a popular tourist destination in Bohol, Philippines. It features two waterfalls cascading down a limestone cliff into a refreshing pool. Visitors can swim, jump from rocks, and explore the area, including a small sandy islet and a cave.
                                    <br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="https://www.google.com/search?sca_esv=5f46ff70bad680f2&amp;q=Twin+Falls+in+Dimiao+bohol+philippines+tourist+spots+falls&amp;udm=2&amp;fbs=AIIjpHxU7SXXniUZfeShr2fp4giZ1Y6MJ25_tmWITc7uy4KIei9-d4bDCYGWNP_eFTtBNEwuAQVK0rg-1c_JXtht-6ycjXhp6YPsVv_gY7oqyxDH96n5AWMaB_OACWykuvoeYSNItldhASO-nBD09bkiU5ELZ6961UqJz7jHb-Cr0_53ttqY70VhCpNFBOWV-0tfZkQkNSjDg3ZlUUQUUaD09ioJu366VQ&amp;sa=X&amp;ved=2ahUKEwiwvMPMzdSOAxX11zQHHbwzLtAQtKgLKAF6BAgdEAE&amp;biw=1920&amp;bih=945&amp;dpr=1">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://vickyflipfloptravels.com/wp-content/uploads/2015/03/Kawasan-Waterfalls.jpg">
                            <div class="card-body">
                                <b style="font-family: cursive;">Kawasan Falls (Cebu)</b>
                                <p class="card-text">Kawasan Falls, a stunning three-tiered waterfall system in Badian, Cebu, is a popular tourist spot known for its turquoise blue waters and lush tropical surroundings. It's a great destination for swimming, canyoneering, and enjoying the natural beauty of the Philippines.
                                    <br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="https://www.google.com/search?q=philippines+tourist+spots+falls+in+kawasan+cebu&amp;sca_esv=5dbeab7b81d1ee5e&amp;udm=2&amp;biw=1554&amp;bih=944&amp;ei=zsCBaJj8A5S70-kP5_e6-Qc&amp;ved=0ahUKEwiYm-GB3tSOAxWU3TQHHee7Ln8Q4dUDCBE&amp;uact=5&amp;oq=philippines+tourist+spots+falls+in+kawasan+cebu&amp;gs_lp=EgNpbWciL3BoaWxpcHBpbmVzIHRvdXJpc3Qgc3BvdHMgZmFsbHMgaW4ga2F3YXNhbiBjZWJ1SOIfUO8KWMUccAF4AJABAJgBT6ABwQSqAQE4uAEDyAEA-AEBmAIAoAIAmAMAiAYBkgcAoAfoArIHALgHAMIHAMgHAA&amp;sclient=img">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://visitfortsantiago.com/wp-content/uploads/2019/02/rotator3.jpeg">
                            <div class="card-body">
                                <b style="font-family: cursive;">Fort Santiago (Intramuros, Manila)</b>
                                <p class="card-text">The fort features beautiful stone walls that are adorned with numerous structures, including Rizal Shrine, dedicated to Jose Rizal, a freedom fighter and the national hero of the Philippines.
                                    <br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="https://www.google.com/search?q=Fort+Santiago&amp;sca_esv=5dbeab7b81d1ee5e&amp;udm=2&amp;biw=1554&amp;bih=944&amp;ei=fMWBaKaOINCM2roP5Oyq4Qs&amp;ved=0ahUKEwimvJ294tSOAxVQhlYBHWS2KrwQ4dUDCBE&amp;oq=Fort+Santiago&amp;gs_lp=EgNpbWciDUZvcnQgU2FudGlhZ28yCBAAGIAEGLEDMgUQABiABDIFEAAYgAQyBRAAGIAEMgUQABiABDIFEAAYgAQyBRAAGIAEMgUQABiABDIFEAAYgAQyBRAAGIAESNsjUP4FWI8WcAJ4AJABApgBc6ABsRGqAQQyNi4xuAEMyAEA-AEB-AECmAIDoAKxAagCAMICChAAGIAEGEMYigXCAgYQABgHGB7CAgQQABgewgIGEAAYCBgemAMCiAYBkgcBM6AH8n-yBwEyuAeuAcIHBTAuMi4xyAcJ&amp;sclient=img#vhid=W3Yoe5K6JH3EyM&amp;vssid=mosaic">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://manilacathedral.com.ph/img/full-slider/full-slide5.jpg">
                            <div class="card-body">
                                <b style="font-family: cursive;">Manila Cathedral</b>
                                <p class="card-text">The Manila Cathedral, also known as the Minor Basilica and Metropolitan Cathedral of the Immaculate Conception, is open for visitors and offers a variety of experiences. Visitors can explore its rich history and architecture through guided tours, attend religious services, or simply admire the structure and its surroundings.
                                    <br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="https://www.google.com/search?sca_esv=5dbeab7b81d1ee5e&amp;q=manila+cathedral+offer+to+visit&amp;udm=2&amp;fbs=AIIjpHxU7SXXniUZfeShr2fp4giZ1Y6MJ25_tmWITc7uy4KIemkjk18Cn72Gp24fGkjjh6w0Scodj_KwyDDcIrPkvfwXubH1LN8E_CsJII_uNjikGt0iVHSMqPmLd4XIzphAY1wVDTZyVyxlq-42nqTDqqVpNW-TXrlZb1fPeElclWdP__WnhJERq3NGn5ebfbFJ8pGFQmEy7F0TWR-nZ2ebkyxzQANF7w&amp;sa=X&amp;ved=2ahUKEwjAwdXw5NSOAxWGslYBHcJIAigQtKgLKAF6BAgbEAE&amp;biw=1554&amp;bih=944&amp;dpr=1">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://info.myboracayguide.com/wp-content/uploads/2023/12/willys-rock.jpg">
                            <div class="card-body">
                                <b style="font-family: cursive;">Willy's Rock</b>
                                <p class="card-text">Willy's Rock is a must-see landmark in Boracay, Philippines, known for its unique rock formation and the statue of the Virgin Mary on top. It's a popular spot for photos, especially during sunrise and sunset, and is easily accessible from Station 1 of White Beach.
                                    <br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="https://www.google.com/search?q=willys+rock+&amp;sca_esv=5dbeab7b81d1ee5e&amp;udm=2&amp;biw=1554&amp;bih=944&amp;ei=BcmBaP-zHezQ2roPnfbI4Ac&amp;ved=0ahUKEwi_yt_s5dSOAxVsqFYBHR07EnwQ4dUDCBE&amp;uact=5&amp;oq=willys+rock+&amp;gs_lp=EgNpbWciDHdpbGx5cyByb2NrIDIHEAAYgAQYCjIHEAAYgAQYCjIHEAAYgAQYCjIHEAAYgAQYCjIHEAAYgAQYCjIHEAAYgAQYCjIHEAAYgAQYCjIHEAAYgAQYCjIHEAAYgAQYCjIHEAAYgAQYCkiDMFDLC1isHnABeACQAQCYAVigAfIIqgECMTS4AQPIAQD4AQGYAgGgAluYAwCIBgGSBwExoAfzDbIHATG4B1vCBwMyLTHIBwM&amp;sclient=img">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Album -->
                </div>
                <hr class="featurette-divider">
                <br><br>
                <center>
                    <div class="container row">
                        <div class="col-lg-4">
                            <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
                            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoBsfEW1_0uZwS6FOT3LB_AOUmxYmmgwKpGQ&amp;s" style="border: 1px solid gray;">
                            <h2>Mr.Jocson</h2>
                            <p>Founder</p>
                            <p>Mr.Jocson founded our travel company with a mission to showcase the natural beauty and rich culture of the Philippines.</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
                            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://i.pinimg.com/564x/69/65/9b/69659b6399aa75bd18f00ecd6da214a8.jpg" style="border: 1px solid gray;">
                            <h2>Ms.Pido</h2>
                            <p>Executive Director</p>
                            <p>Ms. Pido, our Executive Director, leads with experience and care, building strong partnerships and creating authentic experiences for every guest.</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
                            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://i.pinimg.com/736x/5c/57/56/5c57565b62fc0d56a96bf182fc8d7ff6.jpg" style="border: 1px solid gray;">
                            <h2>Ms.Deymos</h2>
                            <p>Manager</p>
                            <p>Ms. Deymos, our Manager, ensures daily operations run smoothly and supports both staff and guests for a safe and memorable experience.</p>
                        </div><!-- /.col-lg-4 -->
                    </div>
                    <hr class="featurette-divider">

                    <!-- FOOTER -->
                    <footer class="container" style="background-color: lightgray;">
                        <p style="float: inline-end; text-decoration: underline;"><a href="#">Back to top</a></p>
                        <p style="float: inline-start;">© 2025 PhilippinesTD Inc.</p>
                    </footer>
                </center>
            </div>
        </div>

    </div>
</main>