<?php
require 'core.php';
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Secure Logging</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">


</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" style="font-size: 50px;" href="#page-top">Minor Project</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#team">Team Members</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#mentor">Mentor</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features">Features</a>
                    </li>
                    
                    
                    <li>
                        <a class="page-scroll" href="#admin">Admin</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logout.php" >Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading" style="font-size: 70px; padding-bottom: 50px;">Secure Logging Protocols</div>
                <a href="#tellme" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->

    <!-- Team Section -->
    <section id="team" class="bg-light-gray" style="padding-bottom: 0px; background-color: " >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    
                </div>
            </div>
            <div class="row" >
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/dangarh.jpg" class="img-responsive img-circle" alt=""  width="250px" height="250px">
                        <h4>Shubham Dangarh</h4>
                        <h3 class="text-muted">141112028</h3>
                        <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/deepak.jpg" class="img-responsive img-circle" alt="" width="250px" height="250px">
                        <h4>Deepak Baghel</h4>
                        <h3 class="text-muted">141112036</h3>
                        <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/rahul.jpg" class="img-responsive img-circle" alt="" width="250px" height="250px">
                        <h4>Rahul Mandloi</h4>
                        <h3 class="text-muted">141112037</h3>
                        <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/divyam.jpg" class="img-responsive img-circle" alt="" width="250px" height="250px">
                        <h4>Divyam Jagwani</h4>
                        <h3 class="text-muted">141112049</h3>
                        <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

   
 <!-- Team Section -->
    <section id="mentor" class="bg-light-gray" style="padding-bottom: 0px; padding-top: 35px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Mentor</h2>
                    <br><br>
                </div>
            </div>
            <div class="row">
                
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/dstsir.jpg" class="img-responsive img-circle" alt="">
                        <h4>Prof. Deepak Singh Tomar</h4>
                        <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="team-member">
                        <h2>Dr. DEEPAK SINGH TOMAR</h2>
                        <h4>Ph.D ( Computer Science and Engg.), M.Tech, B.E. Computer Technology</h4>
                        <h4>Chairman, Cyber Security Center,MANIT</h4>
                        <h4>Experience: 21 years</h4>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>

    <!-- About Section -->
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Features</h2>
                    <h3 class="section-subheading text-muted">Highlighted features of our project!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    
                                    <h4 class="subheading">Effective log management.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><br>Storage of log files!<br>All the server variables.<br>Admin Controls.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">File Encryption</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><br>Encryption of the stored log file.<br>Decryption of the encrypted file.<br>Hexadecimal hash key used.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    
                                    <h4 class="subheading">File Compresseion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><br>Compression of the stored log file.<br>Decompression of the compressed file.<br>Very impressive compression ratio.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Log Rotation.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><br>Rotated log storage.<br>Reduced file size of rotated log.<br>Recently surfed webpages."</p>
                                </div>
                            </div>
                        </li>

 <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/5.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    
                                    <h4 class="subheading">Log Searching</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><br>Searching in log files.<br>On the basis of date.<br>On the basis of IP Address.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/6.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Log Integrity Check</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><br>File Matching Algorithm.<br>Check for tempered log data.<br>Display of suspicious log data.</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Thank You<br>
                                For Your
                                    <br>Support!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<section id="admin" >
    <div style="align-items: center; ">
    <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Admin Pannel</h2>
                    
                </div>
            </div>
    <table style="align-items: center;">
        <tr>
            <td style="padding: 45px;">
              <button class="btn btn-xl" style="width: 350px"><a class="btn btn-xl" href="features.php?id=1">Open Log</a></button>  
            </td>
            <td style="padding: 45px;">
              <button class="btn btn-xl" style="width: 350px "><a class="btn btn-xl" href="features.php?id=2">Open Rotated Log</a></button>  
            </td>
            <td style="padding: 45px;">
              <button class="btn btn-xl" style="width: 350px " ><a class="btn btn-xl" href="features.php?id=3">Find logs</a></button>  
            </td>
            
        </tr>

        <tr>
            <td style="padding: 45px;">
              <button class="btn btn-xl" style="width: 350px "><a class="btn btn-xl" href="features.php?id=4">Log Information</a></button>  
            </td>
            <td style="padding: 45px;">
              <button class="btn btn-xl" style="width: 350px "><a class="btn btn-xl" href="features.php?id=5">Compression Ratio</a></button>  
            </td>
            <td style="padding: 45px;">
              <button class="btn btn-xl" style="width: 350px "><a class="btn btn-xl" href="features.php?id=6">Integrity Check</a></button>  
            </td>
            
        </tr>

         <tr>
            <td style="padding: 45px;">
              <button class="btn btn-xl" style="width: 350px "><a class="btn btn-xl" href="features.php?id=8">Flow of Project</a></button>  
            </td>
            <td style="padding: 45px;">
              <button class="btn btn-xl" style="width: 350px "><a class="btn btn-xl" href="features.php?id=9">Web Usage</a></button>  
            </td>
            <td style="padding: 45px;">
              <button class="btn btn-xl" style="width: 350px "><a class="btn btn-xl" href="features.php?id=10">Suspicios Log</a></button>  
            </td>
            
        </tr>

    </table>
    </div>

</section>

<!-- Team Section -->
    <section id="tellme" class="bg-light-gray" style="padding-bottom: 20px; padding-top: 35px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">ABOUT OUR PROJECT</h2>
                    <br><br>
                </div>
            </div>
            <div class="row" >
                
               
                <p style="font-size: 18px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Log files are one of the means available for securing a network against intrusion.
Log files record network traffic, taking note of the IP addresses trying to access
your network, on which ports access was attempted, time and date of the attempt,
whether or not the attempt was successful, etc. If used correctly log files can be
very helpful in maintaining network security and integrity. However, for log files
to provide any measure of security, logging must be activated and the log file must
be checked periodically.</p>
<p style="font-size: 18px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Using log files in this manner will provide protection against novice hackers. More
experienced hackers are aware of log files and will take steps to hide their
activities from the network administrator by either deleting the log file altogether
or replacing the log file with a copy showing normal network activity. In the first
instance, the network administrator will know that an intrusion was detected, but
will have no clues as to the identity of the intruder or how the intruder entered the
system. In the second instance, the network administrator will have no clues
whatsoever, and will have to rely on other methods for detecting intrusion.
Assuring that log files are accurate and trustworthy is fast becoming a difficult
proposition. From the authors’ observations, great pains are taken to exclude unauthorized access to any
one system. However, little attention is given to securing log files
against deletion or modification.</p>
<p style="font-size: 18px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log management isn’t a new concept. As long as there have been computers they
have generated logs. But with the advent of modern server and application
software, logging has become a staple of the IT management and monitoring
process. And, until recently, this is primarily because of the ease of generating log
data — not in using it.</p>
                
            </div>
            
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer style="background-color: #DCDCDC;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
   

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
