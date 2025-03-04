<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Resume - M. Arif Firdaus</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="shortcut icon" type="image/png" href="<?=$base_url_lib?>/img/aviro-logo.png">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Edu+TAS+Beginner:wght@400..700&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="<?=$base_url_lib?>/lib/animate/animate.min.css"/>
        <link href="<?=$base_url_lib?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="<?=$base_url_lib?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?=$base_url_lib?>/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?=$base_url_lib?>/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-section border-0">
            <nav class="navbar navbar-light">
                <div class="navbar-nav flex-column">
                    <a href="#pigraHome" class="nav-item nav-link active"><span class="far fa-address-card"></span> About</a>
                    <a href="#pigraAbout" class="nav-item nav-link d-none"><span class="far fa-address-card"></span> About</a>
                    <a href="#pigraEducation" class="nav-item nav-link"><span class="fas fa-graduation-cap"></span> Education</a>
                    <a href="#pigraService" class="nav-item nav-link"><span class="fab fa-servicestack"></span> Services</a>
                    <a href="#pigraWork" class="nav-item nav-link"><span class="fa fa-file-code"></span> Works</a>
                    <a href="#pigraContact" class="nav-item nav-link"><span class="fas fa-address-book"></span> Contact</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-fluid" id="pigraHome">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-lg-3">
                        <div class="header-content bg-dark h-100 pt-6 pe-6 pb-6">
                            <a href="index.html" class="navbar-brand d-inline-flex pb-5 wow fadeInUp" data-wow-delay="0.1s">
                                <h1 class="display-6 text-white mb-0">My Resume</h1>
                            </a>
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                                <p class="text-white sub-title">👋 Hello I'm Arif</p>
                                <h1 class="display-6 text-white mb-0">Full Stack Developer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="header-img d-flex h-100 pt-6 ps-6 pb-6">
                            <div class="row g-5">
                                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="bg-light p-4" style="border-radius: 68% 32% 100% 0% / 0% 75% 25% 100%;">
                                        <img src="<?=$base_url_lib?>/img/header-photo.jpg" class="img-fluid w-100" style="border-radius: 68% 32% 100% 0% / 0% 75% 25% 100%;" alt="Image">
                                    </div>
                                </div>
                                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <h1 class="display-6 mb-4">M. Arif Firdaus</h1>
                                    <p class="mb-4">Graduated from Magister Teknik Informatika in Amikom Yogyakarta University. 10 Years experience as Full Stack & Mobile Developer. Able to work & collaborate remotely. Happy to learn new things about technology & management.
                                    </p>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                        <p class="text-dark mb-0">Yogyakarta, Indonesia</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-envelope text-primary me-3"></i>
                                        <p class="text-dark mb-0">avi.roez@gmail.com</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fa fa-phone-alt text-primary me-3"></i>
                                        <p class="text-dark mb-0">(+62) 856 4585 8204</p>
                                    </div>
                                    <div class="d-none align-items-center mb-4">
                                        <i class="fab fa-firefox-browser text-primary me-3"></i>
                                        <p class="text-dark mb-0">Yoursite@ex.com</p>
                                    </div>
                                    <div class="d-flex">
                                        <a class="btn btn-primary btn-sm-square me-3" href="https://wa.me/6285645858204" target="_blank"><i class="fab fa-whatsapp text-white"></i></a>
                                        <a class="btn btn-primary btn-sm-square me-3" href="https://www.linkedin.com/in/aviroez" target="_blank"><i class="fab fa-linkedin-in text-white"></i></a>
                                        <a class="btn btn-primary btn-sm-square me-3" href="https://www.github.com/aviroez" target="_blank"><i class="fab fa-github text-white"></i></a>
                                        <a class="btn btn-primary btn-sm-square me-3" href="https://www.instagram.com/aviroez" target="_blank"><i class="fab fa-instagram text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- About Start -->
        <div class="container-fluid d-none" id="pigraAbout">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-lg-3">
                        <div class="about-header bg-dark h-100 pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">About Me</p>
                                <h1 class="display-6 text-white mb-0">UI Designer based in NYC, USA since 2025</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="about-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-5">
                                <div class="col-xl-5">
                                    <div class="about-img bg-light p-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <img src="<?=$base_url_lib?>/img/about.jpg" class="img-fluid w-100" alt="Image">
                                        <div class="sosial-icon">
                                            <a class="btn btn-primary btn-sm-square mb-3" href="https://wa.me/6285645858204" target="_blank"><i class="fab fa-whatsapp text-white"></i></a>
                                            <a class="btn btn-primary btn-sm-square mb-0" href="https://www.linkedin.com/in/aviroez" target="_blank"><i class="fab fa-linkedin-in text-white"></i></a>
                                            <a class="btn btn-primary btn-sm-square mb-3" href="https://www.facebook.com/aviroez" target="_blank"><i class="fab fa-facebook-f text-white"></i></a>
                                            <a class="btn btn-primary btn-sm-square mb-3" href="https://www.instagram.com/aviroez" target="_blank"><i class="fab fa-instagram text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 wow fadeInUp" data-wow-delay="0.3s">
                                    <h4 class="mb-4">Hello, I'm Mezbah, Based in USA</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam repellat, sint magni incidunt voluptatum eveniet numquam vel facilis sit similique a mollitia et dolorum aperiam repellendus ipsum, quidem nemo eligendi!
                                    </p>
                                    <div class="row g-4 mb-4">
                                        <div class="col-6">
                                            <p><strong class="fw-bold text-dark">Phone :</strong> + 113-804-9098</p>
                                            <p><strong class="fw-bold text-dark">skype :</strong> mezbah.wallas</p>
                                            <p class="mb-0"><strong class="fw-bold text-dark">Address :</strong> 123 Street New York</p>
                                        </div>
                                        <div class="col-6">
                                            <p><strong class="fw-bold text-dark">Nationality :</strong> New York, USA</p>
                                            <p><strong class="fw-bold text-dark">Email :</strong> contact@mezbah.com</p>
                                            <p class="mb-0"><strong class="fw-bold text-dark">Freelancer :</strong> Available</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary py-2 px-4"> <i class="fas fa-download me-2"></i>Download My CV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Education Start -->
        <div class="container-fluid" id="pigraEducation">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="education-header bg-dark h-100 pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Education</p>
                                <h1 class="display-6 text-white mb-0">My education qualification</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="education-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Universitas Amikom Yogyakarta</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> 2015 - 2017
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Master in IT (Informatics Engineering)</h4>
                                        <p class="mb-0">Graduated with a GPA of 3.65, with a concentration in Chief Information Officer (CIO) studies.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">STMIK Akakom Yogyakarta</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> 2009 - 2013
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Bachelor in IT (Informatics Engineering)</h4>
                                        <p class="mb-0">Graduated with a GPA of 3.45, with experience in Java, PHP, HTML, and CSS. Additionally, served as a teaching assistant for four semesters in the Programming Practicum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Education End -->

        <!-- Experience Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="experience-header bg-dark h-100 pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Experience</p>
                                <h1 class="display-6 text-white mb-0">My real work experience</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="experience-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="experience-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Sirclo</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> 2021 - 2024
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Magento Developer</h4>
                                        <p class="mb-0">

                                        </p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Develop multi channel enabler system to connect user with Marketplace & ERP</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Managing & detailing task to squad member & make sure to finish on sprint</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Mentoring Junior Members</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Review Code & Deploy</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="experience-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Freelance</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> 2018 - 2021
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Full Stack Developer</h4>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Gather requirements from clients to understand project goals and specifications</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Design and develop systems based on the gathered requirements, ensuring functional and technical feasibility</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Coordinate with the UI/UX team to implement responsive design for a seamless user experience</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Set up and configure staging and production servers for smooth deployment and testing</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="experience-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Printerous.com</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> 2016 - 2018
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Backend Developer</h4>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Develop e-Commerce for art & printing platform using Angular</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Develop RESTFul API using Laravel</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Test-driven development implementation</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="experience-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Sydeco</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> 2015
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Full Stack Developer</h4>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Develop Android Java app for e-wallet & transaction system</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Develop School Web application using CodeIgniter</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Develop Accounting & Task web application using Laravel</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="experience-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">PT. MURNI SOLUSINDO NUSANTARA</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> 2014
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Java Developer</h4>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Develop Settlement & Clearing System for Bank Indonesia using Java EE</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Generate data utilizing ISO 20022 standards for Payments Clearing and Settlement (pacs)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Exparience End -->


        <!-- Skills Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="skills-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Skills</p>
                                <h1 class="display-6 text-white mb-0">My expertise skills</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="skills-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-php fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                            <h4 class="display-6" data-toggle="counter-up">95</h4>
                                            <h4 class="display-6">%</h4>
                                        </div>
                                        <p class="mb-0">PHP</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-js fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                            <h4 class="display-6" data-toggle="counter-up">90</h4>
                                            <h4 class="display-6">%</h4>
                                        </div>
                                        <p class="mb-0">Javascript</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-java fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                            <h4 class="display-6" data-toggle="counter-up">85</h4>
                                            <h4 class="display-6">%</h4>
                                        </div>
                                        <p class="mb-0">Java</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.7s">
                                        <div class="text-primary text-center mb-3"><span class="fa fa-mobile fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                            <h4 class="display-6" data-toggle="counter-up">75</h4>
                                            <h4 class="display-6">%</h4>
                                        </div>
                                        <p class="mb-0">Flutter</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-html5 fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                            <h4 class="display-6" data-toggle="counter-up">85</h4>
                                            <h4 class="display-6">%</h4>
                                        </div>
                                        <p class="mb-0">HTML & CSS</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-git fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                            <h4 class="display-6" data-toggle="counter-up">75</h4>
                                            <h4 class="display-6">%</h4>
                                        </div>
                                        <p class="mb-0">Others</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Skills End -->


        <!-- Service Start -->
        <div class="container-fluid" id="pigraService">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="service-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">My Services</p>
                                <h1 class="display-6 text-white mb-0">What I do for you</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="service-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-2">
                                                <i class="fas fa-laptop-code fa-3x"></i>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#" class="h4 mb-0">Web Development</a>
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-0">Mostly use PHP for web development such as e-Commerce, ERP, and Management Tools</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <p><i class="fa fa-check me-2"></i> Laravel</p>
                                                <p><i class="fa fa-check me-2"></i> CodeIgniter</p>
                                                <p class="mb-0"><i class="fa fa-check me-2"></i> Magento</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-2">
                                                <i class="fab fa-js fa-3x"></i>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#" class="h4 mb-0">Javascript</a>
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-0">Javascript as a Front End function to handle microservice function & to be more interactive web</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <p><i class="fa fa-check me-2"></i> Node JS</p>
                                                <p><i class="fa fa-check me-2"></i> Vue JS</p>
                                                <p><i class="fa fa-check me-2"></i> React JS</p>
                                                <p><i class="fa fa-check me-2"></i> Angular JS</p>
                                                <p class="mb-0"><i class="fa fa-check me-2"></i> Jquery</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-2">
                                                <i class="fab fa-android fa-3x"></i>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#" class="h4 mb-0">Mobile Application</a>
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-0">Focusing on Mobile Apps and always keep up with current technology.</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <p><i class="fa fa-check me-2"></i> Android Java</p>
                                                <p class="mb-0"><i class="fa fa-check me-2"></i> Flutter</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-2">
                                                <i class="fas fa-cogs fa-3x"></i>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#" class="h4 mb-0">Others</a>
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-0">Any technologies used to help improving the experience of the system</p>
                                            </div>
                                            <div class="col-xl-3">
                                                <p><i class="fa fa-check me-2"></i> Git</p>
                                                <p><i class="fa fa-check me-2"></i> GCP</p>
                                                <p><i class="fa fa-check me-2"></i> Digital Ocean</p>
                                                <p><i class="fa fa-check me-2"></i> Dockers</p>
                                                <p class="mb-0"><i class="fa fa-check me-2"></i> Firebase</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 d-none">
                        <canvas id="experienceChart"></canvas>                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Portfolio Start -->
        <div class="container-fluid" id="pigraWork">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="portfolio-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Portfolio</p>
                                <h1 class="display-6 text-white mb-0">My Recent Works</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="portfolio-content h-100 pt-6 ps-6 pb-6">
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">Sirclo Commerce (2021 - 2024)</h4>
                                        <h1 class="display-6 mb-0">Omni Channel Management System</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="<?=$base_url_lib?>/img/portfolio/sirclo.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="<?=$base_url_lib?>/img/portfolio/sirclo.png" class="btn btn-primary btn-lg-square" data-lightbox="Sirclo" data-title="A system designed to integrate popular marketplaces in Indonesia, providing comprehensive management of inventory, products, orders, and returns. It also seamlessly integrates with ERP systems such as Odoo and NetSuite. The platform supports hundreds of popular brands across various industries in Indonesia."><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">APIK PLN UPDK Barito (2020 - 2021)</h4>
                                        <h1 class="display-6 mb-0">Working Tool Approval Management</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="<?=$base_url_lib?>/img/portfolio/apik.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="<?=$base_url_lib?>/img/portfolio/apik.png" class="btn btn-primary btn-lg-square" data-lightbox="apik" data-title="Handling Approval Management for a Public Electrical Company in South Borneo involves recording all tasks along with the tools required for each job. Managers have the authority to approve or reject work plans if the proposed tools are deemed unsuitable for the task. The system works for both Mobile Apps & Web."><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">WoPA PLN PT Kalselteng (2020)</h4>
                                        <h1 class="display-6 mb-0">Working Permit Approval Management</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="<?=$base_url_lib?>/img/portfolio/wopa.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="<?=$base_url_lib?>/img/portfolio/wopa.png" class="btn btn-primary btn-lg-square" data-lightbox="wopa" data-title="Handling working permit Management for a Public Electrical Company in South Borneo involves request working permit from internal / external organization. Manager can approve / reject the working permit. Any approved permission, will be exported to pdf as legal documents"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">Universitas Lambung Mangkurat (2020)</h4>
                                        <h1 class="display-6 mb-0">Edupartnership Management System</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="<?=$base_url_lib?>/img/portfolio/edupartnership.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="<?=$base_url_lib?>/img/portfolio/edupartnership.png" class="btn btn-primary btn-lg-square" data-lightbox="edupartnership" data-title="Managing partnerships between two instances for educational work at Universitas Lambung Mangkurat, including the creation of offering letters that can be validated or invalidated as needed. The letters can be exported in Word or PDF format."><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">PDAM HSS (2020)</h4>
                                        <h1 class="display-6 mb-0">Daily Attendance & Tracking Management</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="<?=$base_url_lib?>/img/portfolio/pdamhss.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="<?=$base_url_lib?>/img/portfolio/pdamhss.png" class="btn btn-primary btn-lg-square" data-lightbox="pdamhss" data-title="Employees perform specific tasks based on their roles and are required to capture a selfie and share their location as proof of attendance. Managers can approve or reject attendance submissions based on predefined rules. The system also supports offline mode to accommodate operations in remote areas."><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.3s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">PP-Property (2020)</h4>
                                        <h1 class="display-6 mb-0">Risk Management System</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="<?=$base_url_lib?>/img/portfolio/manrisk.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="<?=$base_url_lib?>/img/portfolio/manrisk.png" class="btn btn-primary btn-lg-square" data-lightbox="manrisk" data-title="Risk Management system for a public property company that records potential issues based on identified risks and possible outcomes. The system can assess risk levels, generate reports, track mitigation actions, and alert stakeholders to critical issues. It also supports data analytics for forecasting potential risks and improving decision-making."><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.3s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">Simarco (2019 - 2020)</h4>
                                        <h1 class="display-6 mb-0">Apartment Purchasing & Collection Management</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="<?=$base_url_lib?>/img/portfolio/simarco.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="<?=$base_url_lib?>/img/portfolio/simarco.png" class="btn btn-primary btn-lg-square" data-lightbox="simarco" data-title="Managing Apartment Purchases includes handling available stock, processing purchases, calculating installments, and signing contracts via mobile apps or the web. Customers receive notifications through email, SMS, or WhatsApp before the due date, along with reminders for penalties if payments are overdue."><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">PT PLN (Persero) UP2B Kalselteng (2020)</h4>
                                        <h1 class="display-6 mb-0">Unit Performance Management System</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="<?=$base_url_lib?>/img/portfolio/sikap.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="<?=$base_url_lib?>/img/portfolio/sikap.png" class="btn btn-primary btn-lg-square" data-lightbox="sikap" data-title="Managing unit transmission and transformers for a public electrical company in South and Central Borneo. Data is generated based on formulas provided by the company, allowing users to monitor issues in each unit."><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">Baby Care Indonesia (2019)</h4>
                                        <h1 class="display-6 mb-0">E-Commerce Platform for Baby and Toddler Products</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="<?=$base_url_lib?>/img/portfolio/babycare.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="<?=$base_url_lib?>/img/portfolio/babycare.png" class="btn btn-primary btn-lg-square" data-lightbox="babycare" data-title="Developing an e-commerce system gor baby & toddler products. Aute calculate shipping & multiple payment options."><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">Laboratorium Litbang Sabo (2019)</h4>
                                        <h1 class="display-6 mb-0">Web Platform for Laboratorium Mecanical Testing</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="<?=$base_url_lib?>/img/portfolio/litbangsabo.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="<?=$base_url_lib?>/img/portfolio/litbangsabo.png" class="btn btn-primary btn-lg-square" data-lightbox="litbangsabo" data-title="A comprehensive laboratory management system designed to test various building materials, including mechanical soil, hydraulic properties, and concrete. It supports the analysis and testing of materials related to construction, providing accurate results for quality assurance"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item py-5 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">Printerous.com (2015 - 2018)</h4>
                                        <h1 class="display-6 mb-0">E-Commerce Platform for Art & Printing Product</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="<?=$base_url_lib?>/img/portfolio/printerous.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="<?=$base_url_lib?>/img/portfolio/printerous.png" class="btn btn-primary btn-lg-square" data-lightbox="printerous" data-title="Developing an e-commerce system that allows customers to design their desired printing products using image editors. The system offers a variety of templates for users to choose from. Printing media are available in different sizes, styles, and materials. The platform manages both customer and business needs."><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->


        <!-- Blog Start -->
        <div class="container-fluid d-none" id="pigraBlog">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="blog-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Blog</p>
                                <h1 class="display-6 text-white mb-0">Recent Posts</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="blog-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-xl-6">
                                    <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="row g-4">
                                            <div class="col-4">
                                                <div class="blog-item-img bg-dark h-100">
                                                    <a href="#">
                                                        <img src="<?=$base_url_lib?>/img/blog-1.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="h-100">
                                                    <p class="text-body mb-3"><i class="fa fa-calendar-alt me-2"></i> November 12, 2024</p>
                                                    <a href="#" class="d-inline-block h4 mb-4">Secrets of the Mobile Application</a>
                                                    <div class="py-2 px-3 bg-light d-flex justify-content-between">
                                                        <p class="mb-0 text-body">By <a href="#" class="h6">Bernard</a></p>
                                                        <p class="mb-0 text-body">In <a href="#" class="h6">Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="row g-4">
                                            <div class="col-4">
                                                <div class="blog-item-img bg-dark h-100">
                                                    <a href="#">
                                                        <img src="<?=$base_url_lib?>/img/blog-2.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="h-100">
                                                    <p class="text-body mb-3"><i class="fa fa-calendar-alt me-2"></i> November 18, 2024</p>
                                                    <a href="#" class="d-inline-block h4 mb-4">How to Create Quality Figma Design</a>
                                                    <div class="py-2 px-3 bg-light d-flex justify-content-between">
                                                        <p class="mb-0 text-body">By <a href="#" class="h6">Walker</a></p>
                                                        <p class="mb-0 text-body">In <a href="#" class="h6">Media</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="blog-item wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="row g-4">
                                            <div class="col-4">
                                                <div class="blog-item-img bg-dark h-100">
                                                    <a href="#">
                                                        <img src="<?=$base_url_lib?>/img/blog-3.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="h-100">
                                                    <p class="text-body mb-3"><i class="fa fa-calendar-alt me-2"></i> November 23, 2025</p>
                                                    <a href="#" class="d-inline-block h4 mb-4">Tutorials for Learning Development</a>
                                                    <div class="py-2 px-3 bg-light d-flex justify-content-between">
                                                        <p class="mb-0 text-body">By <a href="#" class="h6">Jacob</a></p>
                                                        <p class="mb-0 text-body">In <a href="#" class="h6">Lifestyle</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="blog-item wow fadeInUp" data-wow-delay="0.7s">
                                        <div class="row g-4">
                                            <div class="col-4">
                                                <div class="blog-item-img bg-dark h-100">
                                                    <a href="#">
                                                        <img src="<?=$base_url_lib?>/img/blog-4.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="h-100">
                                                    <p class="text-body mb-3"><i class="fa fa-calendar-alt me-2"></i> November 26, 2025</p>
                                                    <a href="#" class="d-inline-block h4 mb-4">Tutorials for Learning Development</a>
                                                    <div class="py-2 px-3 bg-light d-flex justify-content-between">
                                                        <p class="mb-0 text-body">By <a href="#" class="h6">Perkel</a></p>
                                                        <p class="mb-0 text-body">In <a href="#" class="h6">Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="0.9s">
                                    <div class="blog-btn d-flex justify-content-center">
                                        <p class="mb-0 me-2">For More Works Visit</p>
                                        <a href="#" class="btn d-inline-block p-0">Our Blog</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Testimonial Start -->
        <div class="container-fluid d-none">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="testimonial-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Testimonial</p>
                                <h1 class="display-6 text-white mb-0">What People Say</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="testimonial-content h-100 pt-6 ps-6 pb-6">
                            <div class="testimonial-carousel owl-carousel bg-light wow fadeInUp" data-wow-delay="0.1s">
                                <div class="testimonial-item" data-dot="<img class='img-fluid' src='<?=$base_url_lib?>/img/testimonial-img-1.jpg' alt=''>">
                                    <div class="row gy-4 gx-2 mb-4">
                                        <div class="col-sm-6">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="testimonial-inner-img border border-primary border-3 me-4" style="width: 100px; height: 100px;">
                                                    <img src="<?=$base_url_lib?>/img/testimonial-img-1.jpg" class="img-fluid" style="object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div>
                                                <h5 class="mb-2">John Abraham</h5>
                                                <p class="mb-0">New York, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm-center">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                                        </p>
                                        <div class="d-flex justify-content-sm-center">
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item" data-dot="<img class='img-fluid' src='<?=$base_url_lib?>/img/testimonial-img-2.jpg' alt=''>">
                                    <div class="row gy-4 gx-2 mb-4">
                                        <div class="col-sm-6">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="testimonial-inner-img border border-primary border-3 me-4" style="width: 100px; height: 100px;">
                                                    <img src="<?=$base_url_lib?>/img/testimonial-img-2.jpg" class="img-fluid" style="object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div>
                                                <h5 class="mb-2">John Abraham</h5>
                                                <p class="mb-0">New York, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm-center">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                                        </p>
                                        <div class="d-flex justify-content-sm-center">
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item" data-dot="<img class='img-fluid' src='<?=$base_url_lib?>/img/testimonial-img-3.jpg' alt=''>">
                                    <div class="row gy-4 gx-2 mb-4">
                                        <div class="col-sm-6">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="testimonial-inner-img border border-primary border-3 me-4" style="width: 100px; height: 100px;">
                                                    <img src="<?=$base_url_lib?>/img/testimonial-img-3.jpg" class="img-fluid" style="object-fit: cover;" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div>
                                                <h5 class="mb-2">John Abraham</h5>
                                                <p class="mb-0">New York, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm-center">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                                        </p>
                                        <div class="d-flex justify-content-sm-center">
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                            <i class="fas fa-star text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-fluid" id="pigraContact">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="contact-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Contact Me</p>
                                <h1 class="display-6 text-white mb-0">Let’s Start A New Project</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                       <div class="contact-content h-100 pt-6 ps-6 pb-6">
                            <div class="bg-light p-4">
                                <div class="row g-5">
                                    <div class="col-xl-5 wow fadeInUp" data-wow-delay="0.1s">
                                        <p class="mb-4">Kindly complete this form to reach out regarding collaboration or hiring opportunities. To learn more about my qualifications and experience, please download my CV here, <a class="text-primary fw-bold" href="https://drive.google.com/drive/folders/1ZRTWszUQXwKVKC6dH9EYYDkZCi-cVAEi">Download Now</a>.</p>
                                        <div class="d-flex mb-4">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div>
                                                <h4>Address</h4>
                                                <p class="mb-0">Yogyakarta, Indonesia</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div>
                                                <h4>Mail Us</h4>
                                                <p class="mb-0">avi.roez@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fa fa-phone-alt"></i>
                                            </div>
                                            <div>
                                                <h4>Telephone</h4>
                                                <p class="mb-0">(+62) 856 4585 8204</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 wow fadeInUp" data-wow-delay="0.3s">
                                        <div>
                                            <form action="<?=base_url('contacts')?>" method="POST">
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control border-0" id="name" name="name" placeholder="Your Name" required>
                                                            <label for="name">Your Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-xl-6">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control border-0" id="email" name="email" placeholder="Your Email" required>
                                                            <label for="email">Your Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-xl-6">
                                                        <div class="form-floating">
                                                            <input type="phone" class="form-control border-0" id="phone" name="phone" placeholder="Phone" required>
                                                            <label for="phone">Your Phone</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control border-0" id="subject" name="subject" placeholder="Subject" required>
                                                            <label for="subject">Subject</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" name="message" style="height: 120px"></textarea>
                                                            <label for="message">Message</label>
                                                        </div>
                
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="rounded">
                                            <iframe class="rounded w-100" 
                                            style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1011773.6831388881!2d109.17510289381404!3d-7.869836583187099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x6d1b92b2cac8b3f0!2sSpecial%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1727255762740!5m2!1sen!2sid" 
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid footer bg-dark border-bottom-0">
            <div class="container wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                       <div class="footer-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4 align-items-center">
                                <div class="col-12 text-center">
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-light btn-md-square me-3" href="https://wa.me/6285645858204" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                        <a class="btn btn-light btn-md-square me-3" href="https://www.linkedin.com/in/aviroez" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-light btn-md-square me-3" href="https://www.github.com/aviroez"><i class="fab fa-github"></i></a>
                                        <a class="btn btn-light btn-md-square me-3" href="https://www.instagram.com/aviroez"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-body me-2"></i>Aviroez</a>, All right reserved.</span>
                                </div>
                                <div class="col-12 text-center text-body">
                                    Developed By <a class="border-bottom text-white" href="https://aviroez.com">Aviroez</a>
                                </div>
                            </div>
                       </div>        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?=$base_url_lib?>/lib/wow/wow.min.js"></script>
        <script src="<?=$base_url_lib?>/lib/easing/easing.min.js"></script>
        <script src="<?=$base_url_lib?>/lib/waypoints/waypoints.min.js"></script>
        <script src="<?=$base_url_lib?>/lib/counterup/counterup.min.js"></script>
        <script src="<?=$base_url_lib?>/lib/lightbox/js/lightbox.min.js"></script>
        <script src="<?=$base_url_lib?>/lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="<?=$base_url_lib?>/js/main.js"></script>

        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const { createApp } = Vue;

            createApp({
              mounted() {
                const ctx = document.getElementById('experienceChart').getContext('2d');
                
                new Chart(ctx, {
                  type: 'line',
                  data: {
                    labels: ["PHP", "Java", "Mobile Apps", "JavaScript"],
                    datasets: [
                      {
                        label: "Total Experience",
                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                        borderColor: "rgba(75, 192, 192, 1)",
                        data: [10, 5, 4, 8],
                        tension: 0.2,
                      },
                      { label: "Laravel", backgroundColor: "rgba(153, 102, 255, 0.2)", borderColor: "rgba(153, 102, 255, 1)", data: [6, null, null, null], tension: 0.2 },
                      { label: "CodeIgniter", backgroundColor: "rgba(255, 159, 64, 0.2)", borderColor: "rgba(255, 159, 64, 1)", data: [4, null, null, null], tension: 0.2 },
                      { label: "Magento", backgroundColor: "rgba(54, 162, 235, 0.2)", borderColor: "rgba(54, 162, 235, 1)", data: [3.5, null, null, null], tension: 0.2 },
                      { label: "Java EE", backgroundColor: "rgba(255, 206, 86, 0.2)", borderColor: "rgba(255, 206, 86, 1)", data: [null, 1, null, null], tension: 0.2 },
                      { label: "Android Java", backgroundColor: "rgba(75, 192, 192, 0.2)", borderColor: "rgba(75, 192, 192, 1)", data: [null, 4, 4, null], tension: 0.2 },
                      { label: "Flutter", backgroundColor: "rgba(255, 99, 132, 0.2)", borderColor: "rgba(255, 99, 132, 1)", data: [null, null, 1, null], tension: 0.2 },
                      { label: "Node.js", backgroundColor: "rgba(54, 162, 235, 0.2)", borderColor: "rgba(54, 162, 235, 1)", data: [null, null, null, 2], tension: 0.2 },
                      { label: "Angular", backgroundColor: "rgba(255, 206, 86, 0.2)", borderColor: "rgba(255, 206, 86, 1)", data: [null, null, null, 3], tension: 0.2 },
                      { label: "Vue", backgroundColor: "rgba(153, 102, 255, 0.2)", borderColor: "rgba(153, 102, 255, 1)", data: [null, null, null, 2], tension: 0.2 },
                      { label: "React", backgroundColor: "rgba(255, 159, 64, 0.2)", borderColor: "rgba(255, 159, 64, 1)", data: [null, null, null, 2], tension: 0.2 },
                      { label: "jQuery", backgroundColor: "rgba(255, 99, 132, 0.2)", borderColor: "rgba(255, 99, 132, 1)", data: [null, null, null, 2], tension: 0.2 },
                    ]
                  },
                  options: {
                    responsive: true,
                    plugins: {
                      legend: {
                        position: "top",
                      },
                      title: {
                        display: true,
                        text: "Experience in Programming Technologies by Category and Subcategory",
                      }
                    },
                    scales: {
                      y: {
                        beginAtZero: true,
                        title: {
                          display: true,
                          text: "Experience (Years)"
                        }
                      },
                      x: {
                        title: {
                          display: true,
                          text: "Technology Categories"
                        }
                      }
                    }
                  }
                });
              }
            }).mount('#app');
        </script>
    </body>

</html>