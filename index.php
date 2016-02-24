<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
		<meta name="author" content="Dan Andrei Rusu">

		<title>Dan Rusu - Personal Page</title>
		
		<!-- Bootstrap and Font Awesome CSS -->
		<link rel="stylesheet" href="static/css/bootstrap-darkly.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="static/css/style.css">
		<link rel="stylesheet" type="text/css" href="static/css/hover.css">
		<link rel="stylesheet" type="text/css" href="static/css/bootstrap-social.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu+Mono"/>

	</head>

	<body id="page-top" class="index">
		
		<!-- Navigation -->
	    <nav class="navbar navbar-default navbar-fixed-top">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="#page-top">Dan Rusu</a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right">
	                    <li class="hidden">
	                        <a href="#page-top"></a>
	                    </li>
	                    <li class="page-scroll hvr-underline-reveal">
	                        <a href="#portfolio">Portfolio</a>
	                    </li>
	                    <li class="page-scroll hvr-underline-reveal">
	                        <a href="#about">About</a>
	                    </li>
	                    <li class="page-scroll hvr-underline-reveal">
	                        <a href="#contact">Contact</a>
	                    </li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container-fluid -->
	    </nav>

	    <header>
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12">
	                    <img class="img-responsive img-circle img-custom" src="static/img/dan.jpg" alt="Dan Rusu">
	                    <div class="intro-text">
	                        <span class="name">DAN ANDREI RUSU</span>
	                        <hr class="style14">
	                        <span class="skills">Web Developer - Java/C++ Programmer - AGILE - MVC</span>
	                    </div>
	                </div>
	            </div>
	        </div>
    	</header>


    	<section id="portfolio">
	        <div class="container" style="background-color: #454859;">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h1>PORTFOLIO</h1>
	                    <hr class="style15">
	                </div>
	            </div>
	            <div class="row">
			        <div class="col-lg-12">
		                <h2 class="page-header">My Portfolio
		                    <small>This list contains recent projects I worked on as a developer.</small>
		                </h2>
            		</div>
	            </div>

        		<div class="row">
		            <div class="col-md-7">
		                    <img class="img-responsive hvr-grow-shadow" src="static/img/ibf.png" alt="Picture of IBF website">
		            </div>
		            <div class="col-md-5">
		                <h3>I've Been Found (IBF)</h3>
		                <h4>A Lost &amp; Found Service</h4>
		                <p>IBF represents my final year Masters Project, where alongside a team of 5 other students, I designed, built and tested a <strong>minimum viable product(MVP)</strong> which acts as a <strong>proof of concept(PoC)</strong> for a company called <i>The Big Consulting</i>. In a nuthsell, IBF acts as an intermediary betweed <i>finders</i> and  <i>seekers</i> who aims at easing the process of  repatriating lost and found items.</p>
		                <a class="btn btn-success hvr-icon-wobble-horizontal" href="http://ivebeenfound-dev2.elasticbeanstalk.com/" target="_blank"> Visit Website  </a>
	            	</div>
        		</div>
        		<br/>

        		<div class="row">
		            <div class="col-md-7">
		                    <img class="img-responsive hvr-grow-shadow" src="static/img/weather.png" alt="Picture of IBF website">
		            </div>
		            <div class="col-md-5">
		                <h3>What's my weather?</h3>
		                <h4>Weather information for your locatiom</h4>
		        		<p> This is a simple website, built with Bootstrap and jQuery, which displays information about the current weather 
		        			for the user's location. The location is automatically fetched based on user's IP. APIs used in this project: 
		        			<a href="http://openweathermap.org/">Open Weather API</a> and 
		        			<a href="http://ipinfo.io/">IP Info</a></p>
		                <a class="btn btn-success hvr-icon-wobble-horizontal" href="http://whats-my-weather.herokuapp.com/" target="_blank"> Visit Website  </a>
	            	</div>
        		</div>
        		<br/>

        		<div class="row">
		            <div class="col-md-7">
		                    <img class="img-responsive hvr-grow-shadow" src="static/img/quotedisp.png" alt="Picture of IBF website">
		            </div>
		            <div class="col-md-5">
		                <h3>Quote Dispatcher</h3>
		                <h4>Get a random quote :)</h4>
		        		<p> Quote Dispatcher is a simple website that generates a random quote and allows the user to share that quote on Twitter.
		        			The website was built using Bootstrap framework, as well as jQuery for live updates to the page.</p>
		                <a class="btn btn-success hvr-icon-wobble-horizontal" href="http://quote-dispatcher.herokuapp.com/" target="_blank"> Visit Website  </a>
	            	</div>
        		</div>
        		<br/>

        		<div class="row">
		            <div class="col-md-7">
		                    <img class="img-responsive hvr-grow-shadow" src="static/img/cmg.png" alt="Picture of Check My Garage website">
		            </div>
		            <div class="col-md-5">
		                <h3>Check My Garage</h3>
		                <p>Check My Garage is a website I developed as part of one of my modules in my fourth year at university. It uses PHP, PostgreSQL and Bootstrap to allow user registration, creation of a virtual garage and the possibility of adding or removing cars from that garage.</p>
		                <a class="btn btn-success hvr-icon-wobble-horizontal" href="http://check-my-garage.herokuapp.com" target="_blank"> Visit Website  </a>
	            	</div>
        		</div>
        		<br/>

        		<div class="row">
		            <div class="col-md-7">
		                    <img class="img-responsive hvr-grow-shadow" src="static/img/cinemabuddy.png" alt="Picture of Check My Garage website">
		            </div>
		            <div class="col-md-5">
		                <h3>Cinema Buddy</h3>
		                <h4>Search, find, match, watch</h4>
		                <p>Check My Garage is a website I developed as part of one of my modules in my fourth year at university. It uses PHP, PostgreSQL and Bootstrap to allow user registration, creation of a virtual garage and the possibility of adding or removing cars from that garage.</p>
		                <a class="btn btn-success hvr-icon-wobble-horizontal" href="http://comp3207k.appspot.com/" target="_blank"> Visit Website  </a>
	            	</div>
        		</div>
        		<br/>

        		

	        </div>
    	</section>

    	<!-- About Section -->
    	<section class="success" id="about">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h1>ABOUT ME</h1>
	                    <hr class="style14">
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-lg-4 col-lg-offset-2">
	                    <p>Hello, my name is Dan Rusu and I am a Computer Scientist/Web Developer. I am currently in my forth year at the University of Southampton, where I am studying for my MEng Computer Science Degree.Previously I attended Colegiul National "Radu Greceanu" Slatina, Romania, where I worked mainly with C++ and various algorithms.  </p>
	                </div>
	                <div class="col-lg-4">
	                    <p>My passion is programming and my favourite programming language is Java. I have good working experience with C/C++, Python and, to some extent, OCaml, Scheme and Ruby. Recently I started working mostly as a Web Developer, with a focus on the font-end where I enjoy working with Bootstrap and other responsive frameworks. I also have experience on the back-end of a web application, where I worked with Python's Django and PHP (e.g: Laravel).</p>
	                </div>
	            </div>
	        </div>
    	</section>

    	<section id="contact" style="background-color: #454859;">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h1>CONTACT ME</h1>
	                    <div class="row">
			            	<a href="https://www.facebook.com/dan.brrc" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
			            	<a href="https://github.com/dan-rusu" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
			            	<a href="https://plus.google.com/107802416124617467980" class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
			            	<a href="https://uk.linkedin.com/in/danrusu2" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
			            	<a href="https://twitter.com/RusuDan2" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
	            		</div>
	                    <hr class="style16">
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-lg-8 col-lg-offset-2">
	                    <form name="sentMessage" id="contactForm" novalidate>
	                        <div class="row control-group">
	                            <div class="form-group col-xs-12 controls">
	                                <label>Name</label>
	                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
	                                <p class="help-block text-danger"></p>
	                            </div>
	                        </div>
	                        <div class="row control-group">
	                            <div class="form-group col-xs-12 controls">
	                                <label>Email Address</label>
	                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
	                                <p class="help-block text-danger"></p>
	                            </div>
	                        </div>
	                        <div class="row control-group">
	                            <div class="form-group col-xs-12 controls">
	                                <label>Message</label>
	                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
	                                <p class="help-block text-danger"></p>
	                            </div>
	                        </div>
	                        <br>
	                        <div id="success"></div>
	                        <div class="row">
	                            <div class="form-group col-xs-12">
	                                <button type="submit" class="btn btn-success">Send Message</button>
	                            </div>
	                        </div>
	                    </form>
	                </div>
            	</div>
	        </div>
    	</section>

    	<!-- Footer -->
    <footer class="text-center">
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Dan Rusu 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>




		<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


		<!-- Plugin JavaScript -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    	<script src="static/js/classie.js"></script>
	    <script src="static/js/cbpAnimatedHeader.js"></script>

	    <script src="static/js/jqBootstrapValidation.js"></script>
    	<script src="static/js/contact.js"></script>
	    <script type="text/javascript" src="static/js/perspage.js"></script>
	    

	</body>
</html>

