<?php   //creating connection
    $dbhost = "182.50.133.173";
    $dbuser = "studDB21a";
    $dbpass = "stud21DB1!";
    $dbname = "studDB21a";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    //testing connection success
    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Shir Amar</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Favicon-the p 
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(255,255,255,0); padding: 30px 0; box-shadow: 0px 0px 20px 6px rgba(0, 0, 0, 0);" data-top-bottom="background: rgba(255,255,255,1); padding: 10px 0; box-shadow: 0px 0px 20px 6px rgba(0, 0, 0, 0.2);">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-target="#portfolio-perfect-collapse" aria-expanded="false" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="main-menu" id="portfolio-perfect-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="page-scroll"><a href="#hero">Home</a></li>
                        <li class="page-scroll"><a href="#about">About</a></li>
                        <li class="page-scroll"><a href="#service">Service</a></li>
                        <li class="page-scroll"><a href="#portfolio">Works</a></li>
                        <li class="page-scroll"><a href="#contact">Contact</a></li>  
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="hero" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Shir Amar</h1>
                    <div class="page-scroll">
                        <p class="job-title">Software Engineer</p>
                        <a href="#" class="btn btn-fill ">Hire me</a>
                        <div class="clearfix visible-xxs"></div>
                        <a href="#portfolio" class="btn btn-border">Explore more</a>
                    </div>
                </div>
            
                <div class="col-md-6 text-right">
                    <img src="assets/img/temp.jpg" alt="Photo">
                </div>

            </div>
        </div>
    </div>

    <main id="main" class="site-main">
        <section id="about" class="site-section section-about text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2>About</h2>
                        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                        <p>Hello, I'm Shir, a second year software engineering student, serving in the Navy as a team leader in software quality testing.
                           Has high mentoring and training ability, ambitious and ambitious.
                           Very connected to the world of software, especially to the front-end.</p>
                        <a href="assets/docs/CV.pdf" class="btn btn-fill" target="_blank" download>Download my cv</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="site-section section-skills">
            <div class="container">
                <div class="text-center">
                    <h3>My Skills</h3>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Html/css</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="100"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4>C++</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="75"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Javascript</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="82"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4>C</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="66"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Php</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="97"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4>QA</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="service" class="site-section section-services overlay text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>What i do</h3>
                        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <h4>Front-end</h4>
                            <p>As a javascript developer, I have experience in HTML5 and CSS techniques working with jQuery or more advanced javascript</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <h4>Back-end</h4>
                            <p>Utilising php ,node.js ,working  with relational a databases.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <h4>QA</h4>
                            <p>Has experience in software testing and managing teams of testers. Has extensive knowledge in manual and automatic testing, writing and running.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="site-section section-portfolio">
            <div class="container">
                <div class="text-center">
                    <h3>My recent Works</h3>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <?php
                    $query = "select * from tbl_test_78 order by id";
                    $result = mysqli_query($connection, $query);
                    if(!$result){
                        die ("DB query failed");
                    }
                        while ($row = mysqli_fetch_assoc($result)){
                            $id = $row["id"];
                            if (!$id) $id = "ERROR";
                            $project_name = $row["project_name"];
                            if (!$project_name) $project_name = "ERROR";
                            $description = $row["description"];
                            if (!$description) $description = "ERROR"; 
                            $link = $row["link"];
                            if (!$link) $link = "ERROR";
                            $img = $row["img"];
                            if (!$img) $img = "ERROR";
                            

                            echo '<div class="col-md-4 col-xs-6">';
                            echo '<div class="portfolio-item">';
                            echo '<img src="data:image/jpeg;base64,' . base64_encode($img) . '" class="img-res" alt="">';
                                echo '<div class="portfolio-item-info">';
                                    echo "<h4>" . $description . "</h4>";
                                    echo '<a href="'.$link.'" data-toggle="modal" ><span class="glyphicon glyphicon-eye-open"></span></a>';
                                    echo '<a href="'.$link.'"><span class="glyphicon glyphicon-link"></span></a>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        }
                    ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="site-section section-counters text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="counter start" data-to="10" data-speed="2000">0</p>
                        <h4>Years Experience</h4>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="counter start" data-to="120" data-speed="2000">0</p>       
                        <h4>Projects Delivered</h4>      
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p id="infinity" class="counter" data-from="0" data-to="1" data-speed="1000">0</p>
                        <h4>Seconds on this site!<br>What are you waiting for?</h4>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="site-section section-form text-center">
            <div class="container">

                <h3>Contact</h3>
                <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control mt-x-0" placeholder="Full Name" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>   
                        </div>
                        <div class="col-sm-12">
                            <textarea name="message" id="mesaage" class="form-control" placeholder="Message" required></textarea>
                        </div>
                    </div>
                    <button href="#" class="btn btn-border" type="submit">Hire Me <span class="glyphicon glyphicon-send"></span></button>
                </form>
            </div>
        </section>

    </main>

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <a class="icon facebook-bg" href="#"><i class="icon-facebook"></i></a>
                    <a class="icon gplus-bg" href="#"><i class="icon-linkedin"></i></a>
                    <a class="icon icon-up-bg" href="#hero"><i class="icon-up"></i></a>
                </div>
                <div class="col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3"><p class="copyright">2021. All Rights Reserved </p></div>
                <div class="col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3"><a class="copyright" href="https://www.shenkar.ac.il/he/departments/engineering-software-department"> תואר ראשון בהנדסת תוכנה בשנקר</a></div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/skrollr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.9.0/bootstrap-progressbar.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>