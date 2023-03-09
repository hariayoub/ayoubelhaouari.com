<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {
     $mail->isSMTP();
     $mail->Host = 'smtp.gmail.com';//gbrvpgzhfzqyzmbl
     $mail->SMTPAuth=true;//ecpcosombfqgzxfa
     $mail->Username= 'ayoubhaouari670@gmail.com';
     $mail->Password='gbrvpgzhfzqyzmbl';
     $mail->SMTPSecure= "tls";
     $mail->Port='587';

     $mail-> setFrom("$email");
     $mail-> addAddress('ayoubhaouari670@gmail.com');
     $mail->isHTML(true);
     $mail->Subject='Message Received (Contact Page)';
     $mail->Body='<h3>Name : '.$name.' <br>Email : '.$email.' <br>Message : '.$message.'</h3>';
    $mail->send();
    $alert= '<div class="alert-success">
                <span>Message sent! Thank you for contacting me.</span>
            </div>';
    } catch(Exception $e){
        $alert= '<div class="alert-success">
                    <span>'.$e->getMessage().'</span>
                </div>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AYOUB EL-HAOUARI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/AYOUB.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/AYOUB.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">AYOUB EL-HAOUARI</a></h1>
                <div class="social-links mt-3 text-center">
                    <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                    <a href="https://wa.me/+212700400797/" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                    <a href="https://www.facebook.com/ayoub.haouari" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/ayoub.el.haouari/" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/ayoub-el-haouari-426246215/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>

            </div>
            <div class="btn">
                <a href="CV/Ayoub_ELHAOUARI_ENG.pdf" download class="getstarted animate__animated animate__fadeInUp scrollto">Download CV
                    <i class="bx bx-cloud-download"></i>
                </a>
            </div>
            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Projects</span></a></li>
                    <!-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>AYOUB <br> EL-HAOUARI</h1>
            <p>I'm <span class="typed" data-typed-items="Developer, Designer, Freelancer, Photographer"></span></p>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>I'm a specialized technician in the information systems development branch (ISD), and now I want to put my skills and experience into the IT department. Having designed several techniques such as application and website development
                        and project management etc., to which are added excellent adaptation and communication skills.</p>
                </div>
                <div class="row">
                    <div class="col-lg-2" data-aos="fade-right">

                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Designer &amp; Web Developer.</h3>

                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 June 2000</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+212 700-400797</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>FES, MAROC</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>BTS</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Gmail:</strong> <span>ayoubelhaouari13@gmail.com</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->
        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Skills</h2>
                </div>
                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">PHP <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Bootstrap <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">


                        <div class="progress">
                            <span class="skill">LARAVEL <i class="val">45%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Visual Basic (VB.net) <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">Java <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">Kotlin <i class="val">30%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>AYOUB EL-HAOUARI</h4>
                            <p><em>I'm a specialized technician in the information systems development branch (ISD), 
                              and now I want to put my skills and experience into the IT department. Having designed 
                              several techniques such as application and website development and project management etc., 
                              to which are added excellent adaptation and communication skills.</em></p>
                            <ul>
                                <li>12 RUE 01 BLED BENSOUDA SEHB ELOUARD FES</li>
                                <li>(+212) 700-400797</li>
                                <li>aayoubelhaouari13@gmail.com</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4> DIPLOMA OF HIGHER TECHNICIAN CERTIFICATE - BTS CENTER, FEZ
                            </h4>
                            <h5>2020 - 2022</h5>
                            <p><em> Information Systems Development (ISD)</em></p>

                        </div>
                        <div class="resume-item">
                            <h4>HIGH SCHOOL DIPLOMA - MOULAY RCHID HIGH SCHOOL, FEZ</h4>
                            <h5>2018 - 2019</h5>
                            <p><em>Physical Sciences</em></p>

                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>TRAINEE</h4>
                            <h5>2021 - 2022</h5>
                            <ul>
                                <li>One-month internship for the second year within a company (COMPETENCE CENTER) + a project: -I developed a static website for client management.
                                </li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>END OF STUDY PROJECT</h4>
                            <h5>2021 - 2022</h5>
                            <ul>
                                <li> TOPIC: Realization of a website Implementation of a solution for the follow-up and guidance of BTS laureates nationwide.</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>TRAINEE</h4>
                            <h5>2020 - 2021</h5>
                            <ul>
                                <li> One-month introductory internship during the first year within the company (I-TECH) + a project: -I developed a static website for employee management.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Resume Section -->

        <!-- ======= Projects Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Projects</h2>
                </div>
                <p>In this partie i have to put all of my different projects, in my Internship and as Freelancer...</p>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-web">Web</li>
                            <li data-filter=".filter-card">Card</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/competence.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/competence.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                <a href="project-web-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/itech.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/itech.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                <a href="project-web-itech-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/card.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/card.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->
        <!-- Contact section -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Welcome to my portfolio, leave an message if you like it or when you want something like Diesgn your brand...</p>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>12 RUE 01 BLED BENSOUDA SEHB ELOUARD FES</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Gmail:</h4>
                                <p><a href="mailto:ayoubelhaouari13@gmail.com">ayoubelhaouari13@gmail.com</a></p>

                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p><a href="tel:+212700400797">+212 700-400797</a></p>

                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6610.8651307746995!2d-4.95291300000004!3d34.058423999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1677854656637!5m2!1sfr!2sma" frameborder="0" style="border:0; width: 100%; height: 290px;"
                                allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form method="POST" class="text-center border p-5" style="background-color: azure;" action="" class="php-email-form" >
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input name="name" type="text" id="name" class="form-control mb-4" placeholder="Name">            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input name="email" type="email" id="email" class="form-control mb-4" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="subject" type="text" id="subject" class="form-control mb-4" placeholder="Subject">
                                    </div>                
                                    <div class="form-group">
                                        <textarea name="message" class="form-control rounded-3" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="text-center my-4 btn-send">
                                        <button name="submit" class="btn btn-info btn-block my-2 mx-6" type="submit" id="btn">Message</button>
                                    </div>
                        </form>  
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright
                <div class="credits">
                    Designed by <a href="https://www.linkedin.com/in/ayoub-el-haouari-426246215/"><strong><span></span>AYOUB EL-HAOUARI</span></strong></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);           
        }
    </script>

</body>
<!-- ieylwrntmussrunx -->

</html>