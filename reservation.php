<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Your Description Goes Here">
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/7c73c501f3.js" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
</head>

<body>
    <!--Begin Header-->
    <div id="header-bkgd">
        <header class="container">
            <div class="row">

                <section class="col-md-2">
                    <div id="site-header">
                        <a href="index.html">
                            <img class="img-fluid" src="images/logo.png" width="544" height="500" alt="Website Logo">
                        </a>
                    </div>
                </section>

                <section class="col-md-8">
                    <div id="site-main-nav-container">
                        <nav>
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a class="active_link" href="reservation.php">Reservation</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </section>

                <section class="col-md-2">
                    <div id="site-main-nav-container-icon">
                        <nav>
                            <ul>
                                <li><a href="profile.html"><i class="fa-solid fa-user" style="color: #4f4f4f;"></i></a>
                                </li>
                                <li><a href="profile.html"><i class="fa-solid fa-cart-shopping"
                                            style="color: #4f4f4f;"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </section>

            </div>
        </header>
    </div>
    <!--End Header-->

    <!--Begin Mobile Header-->
    <div id="mobile-header-bkgd">
        <header class="container">
            <div class="row">

                <section class="col-3">
                    <p id="sj_burger" data-bs-toggle="offcanvas" data-bs-target="#demo">
                        <i class="fa-solid fa-bars" style="color: #4f4f4f;"></i>
                    </p>
                    <!-- Offcanvas Sidebar -->
                    <div class="offcanvas offcanvas-start" id="demo">
                        <div class="offcanvas-header">
                            <h1 class="offcanvas-title">Spark Joy</h1>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                        </div>
                        <div class="offcanvas-body">
                            <a href="about.html">About</a><br>
                            <a href="blog.html">Blog</a><br>
                            <a href="reservation.php">Reservation</a><br>
                            <a href="shop.html">Shop</a><br>
                            <a href="contact.php">Contact</a>

                        </div>
                    </div>
                </section>

                <section class="col-6">
                    <div id="mobile-site-header">
                        <a href="index.html">
                            <img class="img-fluid" src="images/logo.png" width="544" height="500" alt="Website Logo">
                        </a>
                    </div>
                </section>


                <section class="col-3">
                    <div id="mobile-site-main-nav-container-icon">
                        <nav>
                            <ul>
                                <li><a href="profile.html"><i class="fa-solid fa-user" style="color: #4f4f4f;"></i></a>
                                </li>
                                <li><a href="profile.html"><i class="fa-solid fa-cart-shopping"
                                            style="color: #4f4f4f;"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </section>

            </div>
        </header>
    </div>

    <!--End Mobile Header-->

    <!--Begin Page Content-->
    <div>
        <div class="row reservationContent">
            <section class="col-md-12">
                <h3>Make Your Reservation</h3>
                <div class="About-article">
                    <p>
                        Our experienced team of organizers is dedicated to providing top-quality cleaning and
                        organization services to help you declutter your space and create a more organized and
                        functional environment. Whether you need help with a one-time deep clean or ongoing
                        maintenance, our team is here to support you. We use effective cleaning techniques and
                        organization strategies to ensure that your space is not only clean, but also easy to
                        maintain in the long-term. We pride ourselves on our attention to detail, and we work
                        closely with our clients to understand their unique needs and preferences. We are excited to
                        offer our first-time customers a complimentary tidy up service to help get you started on
                        your journey to a cleaner and more organized space. Contact us today to schedule your tidy
                        up service and start enjoying the benefits of a clean and organized space.
                    </p>
                </div>
            </section>
        </div>
    </div>
    
    <!--Begin Page Content-->
    <div class="container">
        <div class="row contactFrame">
            <section class="col-lg-6">
                <div id="contact-info">
                    <h2>Contact Us</h2>
                    <p>Need help getting your home or office organized? We’re here to help! Contact us using the
                        form or
                        feel free to call or email us using the information provided. Our team of professional
                        organizers is available to answer any questions you may have about our services, pricing,
                        and
                        scheduling. We look forward to hearing from you!<br><br>
                    </p>
                    <h5>Phone:</h5>
                    <p>209-415-007</p>
                    <h5>Email:</h5>
                    <p>info@sparkjoyco.com</p>
                    <h5>Mailing Address:</h5>
                    <p>Spark Joy Co.<br>
                        1901 E 4th St<br>
                        Pittsburg, KS 66762</p>
                </div>
            </section>

            <section class="col-lg-6 contactForm">
                <div id="contact-us-form">
                    <form action="contact.php" method="post">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input name="person_name" class="form-control" type="text" id="inputName"
                                placeholder="Your Name">
                        </div>

                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input name="email" class="form-control" type="email" id="inputEmail"
                                placeholder="Your Email Address">
                        </div>

                        <div class="form-group">
                            <label for="inputComments">Message</label>
                            <textarea name="message" class="form-control" id="inputComments"
                                placeholder="Your Message..."></textarea>
                        </div>

                        <input name="submit" class="btn btn-secondary" type="submit" value="submit">

                        <!--Begin PHP code-->
                        <?php 
                        // This script scrubs dangerous strings from the submitted input.
                        
                        // Check for form submission:
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        
                        /* The function takes one argument: a string.
                        * The function returns a clean version of the string.
                        * The clean version may be either an empty string or
                        * just the removal of all newline characters.
                        */
                        function spam_scrubber($value) {
                        
                        // List of very bad values:
                        $very_bad = array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:');
                        
                        // If any of the very bad strings are in 
                        // the submitted value, return an empty string:
                        foreach ($very_bad as $v) {
                        if (stripos($value, $v) !== false) return '';
                        }
                        
                        // Replace any newline characters with spaces:
                        $value = str_replace(array( "\r", "\n", "%0a", "%0d"), ' ', $value);
                        
                        // Return the value:
                        return trim($value);
                        
                        } // End of spam_scrubber() function.
                        
                        // Clean the form data:
                        $scrubbed = array_map('spam_scrubber', $_POST);
                        
                        // Minimal form validation:
                        if (!empty($scrubbed['person_name']) && !empty($scrubbed['email'])) {
                        
                        // Create the body:
                        $body = "Name: {$scrubbed['person_name']}\n\nEmail: {$scrubbed['email']}\n\nMessage: {$scrubbed['message']}";
                        
                        // Make it no longer than 1000 characters long:
                        $body = wordwrap($body, 1000);
                        
                        // Send the email:
                        mail('annelovedance0513@gmail.com', 'Spark Joy', $body, "From: {$scrubbed['email']}"); 
                        // mail (to, subject, body, [,headers]);
                        
                        // Print a message:
                        echo '<p style="margin-top: 15px;">Thank you for contacting me. You will hear from me soon!</p>';
                        
                        // Clear $_POST (so that the form's not sticky):
                        $_POST = array();
                        
                        } else {
                        echo '<p style="margin-top: 15px; font-weight: bold; color: #C00;">Please fill out the form completely.</p>';
                        }
                        
                        } // End of main isset() IF.
                        
                        // Create the HTML form:
                        ?>

                        <!--End PHP code-->
                    </form>

                </div>
            </section>
        </div>
    </div>
    <!--End Page Content-->







    <!--Begin Footer Content-->
    <div id="footer-bkgd">
        <footer class="container">

            <!--Begin Footer credits-->
            <div class="row">
                <section class="col-3">
                    <div id="footer">
                        <div class="footer-left">
                            <a href="index.html">
                                <img class="img-fluid" src="images/logo.png" width="544" height="500"
                                    alt="Website Logo">
                            </a>
                        </div>
                        <div class="footer-left">
                            <p>&copy; 2023 YuEnLin</p>
                        </div>
                    </div>
                </section>

                <section class="col-9">
                    <div id="footer-right">
                        <p id="sj_social">

                            <a href="#">
                                <i class="fa-brands fa-square-facebook" style="color: #4f4f4f;">
                                </i>
                            </a>

                            <a href="#">
                                <i class="fa-brands fa-instagram" style="color: #4f4f4f;">
                                </i>
                            </a>

                            <a href="#">
                                <i class="fa-brands fa-square-twitter" style="color: #4f4f4f;">
                                </i>
                            </a>

                        </p>

                        <p id="sj_terms"><a href="https://www.tidyupangels.com/terms-of-use/" target="_blank">Terms of
                                service</a>
                            <a href="contact.php">contact</a>
                        </p>


                    </div>
                </section>
            </div>
            <!--End Footer credits-->

        </footer>
    </div>
    <!--End Footer Content-->

    <!-- JavaScript -->
    <!-- Popper.js, then Bootstrap JS, then Your Own Script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>

</html>