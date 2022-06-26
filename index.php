<?php include('services.php') ?>
<?php $services = new Services(); ?>

<!doctype html>
<html lang="en" data-theme='dark'>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $services->name ?> | Fullstack Developer</title>
    <meta name="keywords" content="Micol Peralta - Fullstack Web Developer with 3+ years of experience building Websites" />
    <!-- google font -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">


    <meta name="description" content="Fullstack Web Developer with 3+ years of experience building Websites" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Micol Peralta | Fullstack Web Developer Portfolio" />
    <meta property="og:description" content="Fullstack Web Developer with 3+ years of experience building Websites" />
    <meta property="og:url" content="http://localhost/" />
    <meta property="og:site_name" content="Micol Peralta: Fullstack Web Developer Portfolio" />
        
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">
                    Micol Peralta
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="margin-right: 0px !important;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">My Intro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <!-- <form action="#search" method="GET" class="d-flex search-header">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search"
                            required>
                        <button class="btn btn-style" type="submit">Search</button>
                    </form> -->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <!-- <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div> -->
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    

    <!-- banner section -->
    <section class="w3l-banner py-5" id="home">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center pt-4">
                <div class="col-md-6 banner-left pe-xl-5">
                    <h4>Hi, I'm <?= $services->name ?></h4>
                    <h3 class="mb-3 mt-1">Developer</h3>
                    <p class="banner-sub me-md-5"> I am a Fullstack Developer Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                    <div class="d-flex align-items-center buttons-banner mt-sm-5 mt-4">
                        <a href="#contact" class="btn btn-style me-2">Hire Me</a>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <!-- animations icons -->
        <div class="icon-effects-w3-1 text-right">
            <img src="assets/images/icon2.png" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-2 text-right">
            <img src="assets/images/icon3.png" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-3 text-right">
            <img src="assets/images/icon1.png" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-4 text-right">
            <img src="assets/images/icon6.png" alt="" class="img-fluid">
        </div>
        <!-- //animations icons -->
    </section>
    <!-- //banner section -->

    <!-- logo partners -->
    <!-- <section class="w3l-clients pt-5 pb-4" id="clients">
        <div class="container">
            <div class="company-logos text-center">
                <div class="row mx-auto justify-content-center">
                    <div class="col-md-2 col-sm-4 col-6 ">
                        <img src="assets/images/logo6.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <img src="assets/images/logo8.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-sm-0 mt-3">
                        <img src="assets/images/logo3.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-md-0 mt-3">
                        <img src="assets/images/logo4.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-md-0 mt-3">
                        <img src="assets/images/logo5.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //logo partners -->


    <!-- about section -->
    <section class="w3l-aboutblock1 pt-lg-5 pt-2 pb-5" id="about">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="position-relative">
                        <img src="assets/images/me.jpg" alt="" class="radius-image img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 ps-lg-5 mt-lg-0 mt-5">
                    <h5 class="title-small mb-1">My Intro</h5>
                    <h3 class="title-style">About Me</h3>
                    <p class="mt-3">Multi-task and agile individual with a professional attitude and 3+ years of experience and 2+ as a freelancer. Full Stack Web Developer specialized in PHP and JavaScript. Organizational skills with the ability to work independently with minimal supervision. Excellent interpersonal skills, able to collaborate with the team.</p>
                    <div class="my-info mt-md-5 mt-4">
                        <ul class="single-info">
                            <li class="name-style">Name</li>
                            <li>:</li>
                            <li>
                                <p><?= $services->name ?></p>
                            </li>
                        </ul>
                        <ul class="single-info">
                            <li class="name-style">Age</li>
                            <li>:</li>
                            <li>
                                <p><?= $services->age ?></p>
                            </li>
                        </ul>
                        <ul class="single-info">
                            <li class="name-style">From</li>
                            <li>:</li>
                            <li>
                                <p>Santo Domingo, Dominican Republic</p>
                            </li>
                        </ul>
                        <ul class="single-info">
                            <li class="name-style">Email</li>
                            <li>:</li>
                            <li>
                                <p><a href="mailto:<?= $services->email ?>"><?= $services->email ?></a></p>
                            </li>
                        </ul>
                    </div>
                    <a href="https://micolperalta.com/micol-peralta-cv.pdf" class="btn btn-style mt-5" target="_blank">Download CV</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- qualification section -->
    <section class="w3l-timeline-1 py-5" id="experience">
        <div class="container py-lg-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small">Resume</h5>
                <h3 class="title-style">JOB & EDUCATION</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="sub-title-timeline"><i class="fas fa-graduation-cap"></i> Education</h5>
                    <div class="timeline">
                        <div class="column">
                            <div class="title">
                                <h2>Angular: Front-end Development</h2>
                            </div>
                            <div class="description">
                                <p>Las Americas Institute of Technology (ITLA)</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2022</h6>
                            </div>
                        </div>
                        <div class="column">
                            <div class="title">
                                <h2>Software development</h2>
                            </div>
                            <div class="description">
                                <p>Las Americas Institute of Technology (ITLA)</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2015</h6>
                            </div>
                        </div>
                        <div class="column">
                            <div class="title">
                                <h2>Bachelor School Diploma in IT Technician</h2>
                            </div>
                            <div class="description">
                                <p>Ángeles Custodio Polytechnic Institute</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2015</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-lg-0 mt-4">
                    <h5 class="sub-title-timeline"><i class="fas fa-briefcase"></i> Experience</h5>
                    <div class="timeline">
                        <div class="column">
                            <div class="title">
                                <h2>Software Developer Technician (Remote)</h2>
                            </div>
                            <div class="description">
                                <p>ASTECH, SRL</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2018 - Current</h6>
                            </div>
                        </div>
                        <div class="column">
                            <div class="title">
                                <h2>Freelancer</h2>
                            </div>
                            <div class="description">
                                <p>MiCode</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2020 - Current</h6>
                            </div>
                        </div>
                        <div class="column">
                            <div class="title">
                                <h2>Full Stack Web Developer</h2>
                            </div>
                            <div class="description">
                                <p>Caona Interactive</p>
                                <h6><i class="fas fa-calendar-alt"></i> 2019 - 2020</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //qualification section -->

    <!-- skills section -->
    <section class="w3l-progress py-5" id="skills">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">My Skills</h5>
                <h3 class="title-style">My Expertise Area</h3>
            </div>
            <div class="row py-lg-4">
                <div class="col-lg-6 pe-lg-5">
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">PHP <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-1" role="progressbar"
                                style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">HTML/CSS <span class="">90%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-2" role="progressbar"
                                style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">JavaScript <span class="">60%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-3" role="progressbar"
                                style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="progress-info info4 mb-0">
                        <h6 class="progress-tittle">RESTful APIs <span class="">85%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-4" role="progressbar"
                                style="width: 85%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-6 pe-lg-5">
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">PHP <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-1" role="progressbar"
                                style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">HTML/CSS <span class="">90%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-2" role="progressbar"
                                style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">JavaScript <span class="">60%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-3" role="progressbar"
                                style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="progress-info info4 mb-0">
                        <h6 class="progress-tittle">RESTful APIs <span class="">85%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-4" role="progressbar"
                                style="width: 85%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-6 ps-lg-5 mt-lg-0 mt-5">
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">RESTful APIs <span class="">85%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-1" role="progressbar"
                                style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">Bootstrap <span class="">95%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-2" role="progressbar"
                                style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">MySQL/ SQL Server <span class="">60%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-3" role="progressbar"
                                style="width: 60%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="progress-info info4 mb-0">
                        <h6 class="progress-tittle">UI/UX Design <span class="">85%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-5" role="progressbar"
                                style="width: 50%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- //skills section -->

    <!-- projects section -->
    <section class="w3l-gallery pb-5" id="gallery">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">Portfolio</h5>
                <h3 class="title-style">Some of my most recent projects</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 item mb-4">
                    <a href="assets/images/projects/rudok-search-reactjs.png" data-lightbox="example-set" data-title="Search Engine using ReactJS + Google API (DEMO: https://rudok-search.netlify.app)"
                        class="zoom d-block">
                        <div style="height:300px;background-image: url('assets/images/projects/rudok-search-reactjs.png');background-position: left;background-repeat: no-repeat;background-size:cover">
                            
                        </div>
                        <!-- <img class="card-img-bottom d-block" src="assets/images/projects/micobro.png" alt="Card image cap"> -->
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Search Engine</span>
                            <span class="content">Search Engine using ReactJS + Google API (https://rudok-search.netlify.app)</span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 item mb-4">
                    <a href="assets/images/projects/micobro.png" data-lightbox="example-set" data-title="MiCobro - Billing, inventory and point of sale (POS) system in the Cloud. (PHP Yii2 + JS + MySQL)"
                        class="zoom d-block">
                        <div style="height:300px;background-image: url('assets/images/projects/micobro.png');background-position: center;background-repeat: no-repeat;background-size:cover">
                            
                        </div>
                        <!-- <img class="card-img-bottom d-block" src="assets/images/projects/micobro.png" alt="Card image cap"> -->
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">MiCobro</span>
                            <span class="content">Billing, inventory and point of sale (POS) system in the Cloud. (PHP Yii2 + JS + MySQL)</span>
                        </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 item mb-4">
                    <a href="assets/images/projects/rotonda.png" data-lightbox="example-set" data-title="Auto Service's management System (PHP Yii2 + AJAX + MySQL)"
                        class="zoom d-block">
                        <div style="height:300px;background-image: url('assets/images/projects/rotonda.png');background-position: center;background-repeat: no-repeat;background-size:cover">
                            
                        </div>
                        <!-- <img class="card-img-bottom d-block" src="assets/images/projects/micobro.png" alt="Card image cap"> -->
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <!-- <span class="title">MiCobro</span> -->
                            <span class="content">Auto Service's management System (PHP Yii2 + AJAX + MySQL)</span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 item mb-4">
                    <a href="assets/images/projects/iglesia.png" data-lightbox="example-set" data-title="Church Member register system (PHP Yii2 + AJAX + MySQL)"
                        class="zoom d-block">
                        <div style="height:300px;background-image: url('assets/images/projects/iglesia.png');background-position: center;background-repeat: no-repeat;background-size:cover">
                            
                        </div>
                        <!-- <img class="card-img-bottom d-block" src="assets/images/projects/micobro.png" alt="Card image cap"> -->
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <!-- <span class="title">MiCobro</span> -->
                            <span class="content">Church Member register system (PHP Yii2 + AJAX + MySQL)</span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 item mb-4">
                    <a href="assets/images/projects/padilla.png" data-lightbox="example-set" data-title="Sympathizers registration system (PHP Codeigniter + JS + MySQL"
                        class="zoom d-block">
                        <div style="height:300px;background-image: url('assets/images/projects/padilla.png');background-position: center;background-repeat: no-repeat;background-size:cover">
                            
                        </div>
                        <!-- <img class="card-img-bottom d-block" src="assets/images/projects/micobro.png" alt="Card image cap"> -->
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <!-- <span class="title">MiCobro</span> -->
                            <span class="content">Sympathizers registration system (PHP Codeigniter + JS + MySQL</span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 item mb-4">
                    <a href="assets/images/projects/planetard.png" data-lightbox="example-set" data-title="Digital newspaper (WordPress). It is currently in production (https://planetard.net/)"
                        class="zoom d-block">
                        <div style="height:300px;background-image: url('assets/images/projects/planetard.png');background-position: center;background-repeat: no-repeat;background-size:cover">
                            
                        </div>
                        <!-- <img class="card-img-bottom d-block" src="assets/images/projects/micobro.png" alt="Card image cap"> -->
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">PlanetaRD</span>
                            <span class="content">Digital newspaper (WordPress). It is currently in production (https://planetard.net/).</span>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- //projects section -->

    <!-- home service section -->
    <section class="w3l-servicesblock1 py-5" id="services">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">What i do?</h5>
                <h3 class="title-style">How I can help your next project</h3>
            </div>
            <div class="w3-services-grids py-lg-4">
                <div class="fea-gd-vv row">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-gd icon-yellow">
                            <div class="icon">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Web design<br> and development </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="feature-gd icon-vilot">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Backend <br> Development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-5 mt-4">
                        <div class="feature-gd icon-blue">
                            <div class="icon">
                                <i class="fas fa-code-branch"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">RESTful <br>APIs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-5 mt-4">
                        <div class="feature-gd icon-red">
                            <div class="icon">
                                <i class="fab fa-php"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">PHP Web<br> development</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- //home service section -->

    <!-- contact -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-lg-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small">Get In Touch</h5>
                <h3 class="title-style">Contact Me</h3>
            </div>
            <div class="row contact-block">
                <div class="col-md-6 contact-left pe-lg-5">
                    <h3 class="mb-sm-4 mb-3">Contact Info</h3>
                    <p class="cont-para mb-sm-5 mb-4">I enjoy discussing new projects and design challenges. Please
                        share as
                        much info, as possible so
                        we can get the most out of our first catch-up.</p>
                    <div class="cont-details">
                        <p><i class="fas fa-map-marker-alt"></i>Santo Domingo, Dominican Republic</p>
                        <p><i class="fas fa-phone-alt"></i><a href="tel:+1(21) 234 4567">+(809) 442 5493</a></p>
                        <p><i class="fas fa-envelope-open-text"></i><a href="mailto:contacto@micolperalta.com"
                                class="mail">contacto@micolperalta.com</a></p>
                    </div>
                    <h4 class="mb-3 mt-5">Follow Me</h4>
                    <ul class="social-icons-contact">
                        
                        <li>
                            <a href="https://github.com/MicolPA" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/MicolPA" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 contact-right mt-md-0 mt-5 ps-lg-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49108.863486334056!2d-69.94726568477934!3d18.473828146115363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf8838def1b6f5%3A0x29143f1c70ffcd9f!2sDistrito%20Nacional%2C%20Santo%20Domingo!5e0!3m2!1ses-419!2sdo!4v1653240945531!5m2!1ses-419!2sdo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="footer-w3ls text-center py-5">
        <!-- <div class="container pt-4">
            <div class="mx-auto" style="max-width:600px;">
                <a href="index.html" class="footer-logo py-1">
                    <i class="fas fa-bold"></i>.
                </a>
                <p class="mt-4 text-white">Itaque earum rerum hic tenetur asaItaque
                    earum rerum hic tenetur asap iente delectus ac elit in
                    coeiciendis maiores.</p>
                <div class="social-icons-main mt-4 pb-3">
                    <ul class="social-icons3">
                        <li>
                            <a href="#facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#linkedinin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#dribbble">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> -->
            <!-- copyright -->
            <!-- <p class="copy-right-w3 text-white mt-5 pt-4">© 2021 Biodata. All rights reserved | Design by
                <a href="http://w3layouts.com" target="_blank"> W3layouts.</a>
            </p> -->
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- libhtbox -->
    <script src="assets/js/lightbox-plus-jquery.min.js"></script>
    <!-- libhtbox -->

    <!-- testimonials owlcarousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for Testimonials-->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>