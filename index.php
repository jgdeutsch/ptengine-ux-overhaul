<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Ptengine - Web Analytics and Heat Map Tool</title>
    <!-- Meta -->
    <!-- comment -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles-8.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    	font-family: Calibri;
    </style>

    <link rel="stylesheet" href="assets/css/step-form-wizard-all.css" type="text/css" media="screen, projection">

    <!-- nicer scroll in steps -->
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">


    <style>
        pre {margin: 45px 0 60px;}
        h2 {margin: 60px 0 30px 0;}
        p {margin-bottom: 10px;}
        
        
    </style>
    <script>
    function register()
    {
    
	    $('#signUpForm').css('zIndex', 2040);
	    $('#emailAddress').focus();
      var scrollPosition = [
        self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
        self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
      ];
      var html = jQuery('html'); // it would make more sense to apply this to body, but IE7 won't have that
      html.data('scroll-position', scrollPosition);
      html.data('previous-overflow', html.css('overflow'));
      html.css('overflow', 'hidden');
      window.scrollTo(scrollPosition[0], scrollPosition[1]);
    }
    </script>

</head> 

<body class="home-page">   

    <!-- ******HEADER****** --> 
    <header id="header" class="header navbar-fixed-top">  
        <div class="container">       
            <h1 class="logo">
                <a href="index.html"><span class="text"><img style="height: 40px" src="assets/images/background/ptengine_logo_white.png" /></span></a>
            </h1><!--//logo-->
            <nav class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item"><a href="index.html">Home</a></li>
                        <li class="nav-item featuresButton" class="nav-item"><a href="#">Features</a></li>
                        <li class="nav-item"><a href="http://ptengine.com/plan">Pricing</a></li>
                        <li class="nav-item"><a href="#">Log in</a></li>
                        <li class="nav-item nav-item-cta last"><a class="btn btn-cta btn-cta-secondary" href="#" onclick="register()">Get Started</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->                     
        </div><!--//container-->
    </header><!--//header-->
    
    <div class="bg-slider-wrapper">
        <div class="flexslider bg-slider">
            <ul class="slides">
                <li class="slide slide-1"></li>
                <li class="slide slide-2"></li>
                <li class="slide slide-3"></li>
            </ul>
        </div>
    </div><!--//bg-slider-wrapper-->        
    
    <section class="promo section section-on-bg">
        <div class="container text-center">
        	<div style="width: 600px; margin: 0 auto; overflow: hidden;">
	            <div style="float: left;"><h2 class="title">Your visitors are&nbsp;</h2></div>
    	        <div style="margin-left: 1em; border-bottom: 5px solid white; overflow: hidden"><div><h2 class="title" style="margin: 0px; margin-bottom: 5px; padding: 0px;"><span id="type"></span></h2></div></div>
    	    </div>
    	    <button type="button" class="btn btn-cta btn-cta-primary" onclick="register()">FIX IT NOW</button>

            <p style="font-weight: bold; opacity: 1.0; margin-bottom: 0px; margin-top: 1em;" class="intro">Understand exactly what your visitors want with the world's ONLY<br>affordable, easy, all-in-one <span class="underline">web analytics</span> and <span class="underline">heat map tool</span>.</p>
            <button style="background-color: #000; padding: .5em; border: 1px solid #000; border-radius: 1em;" type="button" class="play-trigger btn-link featuresButton" style="opacity: 1.0"><i class="fa fa-youtube-play"></i> See why Ptengine is trusted by 20,000+ companies, including:<br>
			<img src="assets/images/background/Ptengine-partners-bw-small.png" /></button>
        </div><!--//container-->
    </section><!--//promo-->
    
    <div class="sections-wrapper">   
     
        <!-- ******Features Section****** -->
        <section class="section features">
            <div class="container">
                <h2 id="features" class="title text-center">Make your visitors so happy they throw money at the screen.</h2>
                <p class="intro text-center" style="margin-bottom: 0px;">Ptengine has ALL the tools you need to understand your visitors and give them what they want.<br>So they'll convert into leads, sign-ups, and sales.</p>
                <p class="intro text-center" ><img src="http://i.imgur.com/ZsNQoSa.png" width="600"></p>
                <div class="row item">
                    <div class="content col-md-4 col-sm-12 col-xs-12">
                        <h3 class="title">See what interests (and turns off) your visitors with <span style="border-bottom: 1px dotted">Heat Maps</span></h3>
                        <div class="desc">
                            <p>Click. Scroll. Read. People are telling you what they like and dislike about your web pages every single time they visit.</p>
                            <p>Ptengine <span style="border-bottom: 1px dotted">Heat Maps</span> give the most complete picture of user intent and preference in the industry, and are the easiest to use. <a href="#">Find out more about why Ptengine heat maps are the best</a></p>
                        </div>
                        <div class="quote">
                            <div class="quote-profile">
                                <img style="width: 100px" class="img-responsive img-circle" src="https://pbs.twimg.com/profile_images/494512193736417280/hW4u05AZ.jpeg" alt="" />
                            </div><!--//profile-->
                            <div class="quote-content">
                                <blockquote><p><a href="https://twitter.com/JoelKlettke" target="_blank">@Ptengine</a> Awesome! Ptengine heat maps are the best in the industry, and I've used them all.</p></blockquote>
                                <p class="source"><a href="https://twitter.com/JoelKlettke" target="_blank">@JoelKlettke</a>, award-winning CRO copywriter, content marketing strategist, TEDx speaker</p>
                            </div><!--//quote-content-->
                        </div><!--//quote-->                        
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <img class="img-responsive" src="assets/images/figures/figure-1_ptengine.png" alt="" />
                        <figcaption class="figure-caption">
                                                    <ul class="checkboxes">
                            <li><strong>Re-design with confidence</strong> knowing which elements need higher (or lower) prominence with <span style="border-bottom: 1px dotted">Click Maps</span></li>
                            <li><strong>Know which pages are boring visitors</strong> with <span style="border-bottom: 1px dotted">Scroll Maps</span> that show you how deep visitors are reading</li>
                            <li><strong>Understand what visitors are fascinated by</strong> (and don't care about) with <span style="border-bottom: 1px dotted">Attention&nbsp;Heat&nbsp;Maps</span> (Ptengine's are the only affordable ones in the industry)</li>
                            </ul>
                        </figcaption>
                    </figure>
                </div><!--//item-->
                
                <div class="row item">
                    <div class="content col-md-4 col-sm-12 col-xs-12 col-md-push-8 col-sm-push-0 col-xs-push-0">
                        <h3 class="title">Works across all devices</h3>
                        <div class="desc">
                            <p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>
                            <p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>
                            <p><i class="fa fa-download"></i> <a href="download.html">Download mobile versions</a></p>
                        </div>
                        
                        <div class="quote">
                            <div class="quote-profile">
                                <img class="img-responsive img-circle" src="assets/images/people/profile-s-2.png" alt="" />
                            </div><!--//profile-->
                            <div class="quote-content">
                                <blockquote><p>I find the mobile app very useful when I'm on the go. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p></blockquote>
                                <p class="source">@JackT, San Francisco</p>
                            </div><!--//quote-content-->         
                        </div><!--//quote-->                        
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-pull-4 col-sm-pull-0 col-xs-pull-0">
                        <img class="img-responsive" src="assets/images/figures/figure-2.png" alt="" />
                        <div class="control text-center">
                        </div><!--//control-->
                    </figure>
                </div><!--//item-->
                
                <div class="row item ">
                    <div class="content col-md-4 col-sm-12 col-xs-12">
                        <h3 class="title">Easy to customise</h3>
                        <div class="desc">
                            <p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>
                            <p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>
                        </div>
                        <div class="quote">
                            <div class="quote-profile">
                                <img class="img-responsive img-circle" src="assets/images/people/profile-s-3.png" alt="" />
                            </div><!--//profile-->
                            <div class="quote-content">
                                <blockquote><p>Nice template! It’s practical and there is no gimmicks. Very easy to customise as well!</p></blockquote>
                                <p class="source"><a href="#">@AlexD</a>, London</p>
                            </div><!--//quote-content-->          
                        </div><!--//quote-->                        
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <img class="img-responsive" src="assets/images/figures/figure-3.png" alt="" />
                        <figcaption class="figure-caption">(Screenshot: <a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/?ref=3wm" target="_blank">Tempo - Bootstrap template for startups)</a> </figcaption>

                    </figure>
                </div><!--//item-->
                
                <div class="row item last-item">
                    <div class="content col-md-4 col-sm-12 col-xs-12 col-md-push-8 col-sm-push-0 col-xs-push-0">
                        <h3 class="title">Connect your users</h3>
                        <div class="desc">
                            <p>Explain one of your product benefits here. Let users know how they can benefit using your product. It’s also a good idea to back it up with a testimonial or tweet from your users.</p>
                            <p>The original PSD of the graphic is included in the package. You can easily customise the PSD to meet your needs.</p>
                            
                        </div>
                        
                        <div class="quote">
                            <div class="quote-profile">
                                <img class="img-responsive img-circle" src="assets/images/people/profile-s-4.png" alt="" />
                            </div><!--//profile-->
                            <div class="quote-content">
                                <blockquote><p>I can connect to like-minded people lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></blockquote>
                                <p class="source">@JackT, San Francisco</p>
                            </div><!--//quote-content-->
                        </div><!--//quote-->
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-pull-4 col-sm-pull-0 col-xs-pull-0">
                        <img class="img-responsive" src="assets/images/figures/figure-4.png" alt="" />
                    </figure>
                </div><!--//item-->
                
                
                <div class="feature-lead text-center">
                    <h4 class="title">Want to discover all the features?</h4>
                    <p><a class="btn btn-cta btn-cta-secondary" href="features.html">Take a Tour</a></p>
                </div>
            </div><!--//container-->
        </section><!--//features-->  
        
        <!-- ******Testimonials Section****** -->
        <section class="section testimonials">
            <div class="container">

                <h2 class="title text-center">What are people saying about Velocity?</h2>
                <div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                        <li data-target="#testimonials-carousel" data-slide-to="2"></li>
                    </ol><!--//carousel-indicators-->
                    <div class="carousel-inner">
                        <div class="item active">
                            <figure class="profile"><img src="assets/images/people/profile-m-1.png" alt="" /></figure>
                            <div class="content">
                                <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>We used Velocity as a front-end design template for our product site. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elit tortor, consectetur vitae varius at, interdum eget libero. Morbi.</p>
                                </blockquote>
                                <p class="source">Kevin Knight<br /><span class="title">Co-Founder, Startup Hub</span></p>
                            </div><!--//content-->                         
                        </div><!--//item-->                        
                        <div class="item">
                            <figure class="profile"><img src="assets/images/people/profile-m-2.png" alt="" /></figure>
                            <div class="content">
                                <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint.</p>
                                </blockquote>
                                <p class="source">Diana	Luna<br /><span class="title">Entrepreneur, Maecenas</span></p>
                            </div><!--//content-->                         
                        </div><!--//item-->  
                        <div class="item">
                            <figure class="profile"><img src="assets/images/people/profile-m-3.png" alt="" /></figure>
                            <div class="content">
                                <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</p>
                                </blockquote>
                                <p class="source">Tony Lee<br /><span class="title">CTO, Lorem Ipsum</span></p>
                            </div><!--//content-->                         
                        </div><!--//item-->                                         
                    </div><!--//carousel-inner-->
                    
                </div><!--//carousel-->
            </div><!--//container-->
        </section><!--//testimonials-->          
        
        <!-- Large modal -->
<!-- Button trigger modal -->



        
        <!-- ******Press Section****** -->
        <section class="section press">
            <div class="container text-center">
                <h2 class="title">Press Coverage</h2>
                <ul class="press-list list-inline row">
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-1.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-2.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4 xs-break"><a href="#"><img class="img-responsive" src="assets/images/press/press-3.png" alt="" /></a></li>                   
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-4.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-5.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-6.png" alt="" /></a></li>                    
                </ul><!--//press-list-->
                <ul class="press-list list-inline row last">
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-7.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-8.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4 xs-break"><a href="#"><img class="img-responsive" src="assets/images/press/press-9.png" alt="" /></a></li>                   
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-10.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-11.png" alt="" /></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="#"><img class="img-responsive" src="assets/images/press/press-12.png" alt="" /></a></li>                    
                </ul><!--//press-list-->
                
                <div class="press-lead text-center">
                     <h3 class="title">Have press inquires?</h3>
                     <p class="press-links"><a href="#">Download our press kit</a> or <a href="contact.html">Get in touch</a></p>
                </div>
               
            </div><!--//container-->
        </section><!--//press-->
        
        <!-- ******CTA Section****** -->
        <section id="cta-section" class="section cta-section text-center home-cta-section">
            <div class="container">
               <h2 class="title">Ready to promote your product online?</h2>
               <p class="intro">More than <span class="counting">300,000</span> users are using Velocity</p>
               <p><a class="btn btn-cta btn-cta-primary" href="https://wrapbootstrap.com/theme/velocity-designed-for-products-WB0N38R04" target="_blank">Get Velocity Now</a></p>
            </div><!--//container-->
        </section><!--//cta-section-->
        
    </div><!--//section-wrapper-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">                    
                    <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                        <div class="footer-col-inner">
                            <h3 class="title">About us</h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-caret-right"></i>Who we are</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Press</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Blog</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Jobs</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Contact us</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->    
                    <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                        <div class="footer-col-inner">
                            <h3 class="title">Product</h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-caret-right"></i>How it works</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>API</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Download Apps</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Pricing</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->              
                    <div class="footer-col links col-md-2 col-sm-4 col-xs-12 sm-break">
                        <div class="footer-col-inner">
                            <h3 class="title">Support</h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-caret-right"></i>Help</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Documentation</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Terms of services</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i>Privacy</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->            
                    </div><!--//foooter-col-->   
                    <div class="footer-col connect col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-col-inner">
                            <ul class="social list-inline">
                                <li><a href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>        
                                <li class="row-end"><a href="#"><i class="fa fa-rss"></i></a></li>             
                            </ul>
                            <div class="form-container">
                                <p class="intro">Stay up to date with the latest news and offers from Velocity</p>
                                <form class="signup-form navbar-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                    </div>   
                                    <button type="submit" class="btn btn-cta btn-cta-primary">Subscribe Now</button>                                 
                                </form>                               
                            </div><!--//subscription-form-->
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                    <div class="clearfix"></div> 
                </div><!--//row-->
                <div class="row has-divider">
                    <div class="footer-col download col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-col-inner">
                            <h3 class="title">Mobile apps</h3>
                            <ul class="list-unstyled download-list">
                                <li><a class="btn btn-ghost" href="#"><i class="fa fa-apple"></i><span class="text">Download for iOS</span> </a></li>
                                <li><a class="btn btn-ghost" href="#"><i class="fa fa-android"></i><span class="text">Download for Android</span></a></li>
                                <li><a class="btn btn-ghost" href="#"><i class="fa fa-windows"></i><span class="text">Windows coming soon...</span></a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//download-->
                    <div class="footer-col contact col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-col-inner">
                            <h3 class="title">Contact us</h3>                          
                            <p class="adr clearfix">
                                <i class="fa fa-map-marker pull-left"></i>        
                                <span class="adr-group pull-left">       
                                    <span class="street-address">College Green</span><br>
                                    <span class="region">56 College Green Road</span><br>
                                    <span class="postal-code">BS1 XR18</span><br>
                                    <span class="country-name">UK</span>
                                </span>
                            </p>
                            <p class="tel"><i class="fa fa-phone"></i>0800 123 4567</p>
                            <p class="email"><i class="fa fa-envelope-o"></i><a href="#">enquires@website.com</a></p> 
                            <a href="https://twitter.com/3rdwave_themes" class="twitter-follow-button" data-show-count="false">Follow @3rdwave_themes</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>                        
                        </div><!--//footer-col-inner-->
                    </div><!--//contact-->
                </div>
            </div><!--//container-->
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container">
                <small class="copyright">Copyright @ 2015 <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>                
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
    
<div>

<div id="signUpForm" style="position: absolute; top: 0; left: 0; width: 100%; height: 1000px;  z-index: -1;">
<div style="position: absolute; background-color: #000; opacity: 0.8; width: 100%; height: 100%"></div>
<div id="signUpFormBackground" style="position: absolute; top: 0; left: 0; width: 100%; height: 1000px; z-index: 2010;">
            <div style="background-color: white; position: relative; top: 50px; margin-left: 25%; margin-right: 25%;border-radius: 10px;">
                <div class="row" style="position: relative; margin-left: 5%; margin-right: 5%; width: 90%; padding: 20px">
                
                <!-- form box code -->
                
                    <div class="form-box" style="padding-bottom: 0px; margin-bottom: 0px;">     
                        <div class="form-box-inner">

                    <form id="wizard_example" action="">
                        <fieldset style="">
                            <legend>Email</legend>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="emailAddress">Email address</label>
                                        <p>Hello there. Let's get to know each other! Here's what you'll get when you enter your email here:
                                        <ul class="checkboxes">
                                        	<li>One month <strong>FREE</strong> of unlimited Ptengine<br>(no credit card required)</li>
                                        	<li>Unlimited <span style="border-bottom: 1px dotted">Heat Maps</span>, unlimited data on which visitors <span style="border-bottom: 1px dotted">Converted</span>, which ones <span style="border-bottom: 1px dotted">Completed Goals</span> <strong>and WHY</strong>
                                        	<li>Free guides revealing <span style="border-bottom: 1px dotted">real</span> methods our customers have used to get stunning conversion rate increases</p>
                                        </ul>
                                        </p>
                                        <input type="email" class="form-control" id="emailAddress"
                                               name="emailAddress" placeholder="Enter email">
                                        <p style="opacity: 0.9; margin-bottom: 0px; padding-bottom: 0px; font-size: smaller; text-align: center; margin-top: 5px;">You're in good company! 20,000+ organizations including:<br>
                                        <img src="assets/images/background/Ptengine-partners-color-small.png"></p>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Website</legend>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
							        <p>Awesome job. You just unlocked a special free offer!</p>
							        <table>
							        	<tr><td style="width:120px">
			                                <img style="width: 100px" class="img-responsive img-circle" src="assets/images/people/robin-granlund.png" alt="">
            			                </td>
							        	<td>"Hey, I'm Robin, Ptengine's customer success manager. Congratulations! I just emailed you with an offer to learn how to get started from me <strong>live and 1 on 1</strong>--for free! But please respond quickly,
							        	<span style="border-bottom: 1px dotted">you only have 72 hours to collect it."</span></td>
							        	</tr>
							        </table>
							        <br>
							        <p>Next, we need the first domain name you want to use Ptengine on:</p>

                                        <label for="domainName">Domain</label>
                                        <input type="domainName" class="form-control" id="domainName"
                                               name="domainName" placeholder="Example: www.example.com">
										<p style="opacity: 0.9; margin-bottom: 0px; padding-bottom: 0px; font-size: smaller; text-align: center; margin-top: 5px;">Rest assured. Ptengine is 100% safe for your website:<br>
                                        <img src="assets/images/background/trust-icons-04.png"></p>

                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Time Zone</legend>
                            <div class="row">
                                <div class="col-lg-12">
                                <p>There's only one step left! Make sure we detected your correct time zone, then click FINISH. You'll go straight into the Ptengine dashboard.</p>
                                <p>Remember all the awesome stuff you'll be getting for free with Ptengine:</p>
                                <p>
                                	<ul class="checkboxes">
                                		<li>More leads, sign-ups, and sales than you ever imagined.</li>
                                		<li>The appreciation of visitors who will love that you can respond to their user behavior.</li>
                                		<li>The praise from your client/boss, who will recognize you for the genius you are!</li>
                                </p>
<select class="form-control" id="timeZone" name="timeZone">
	<option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12">(GMT-12:00) International Date Line West</option>
	<option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11">(GMT-11:00) Midway Island, Samoa</option>
	<option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10">(GMT-10:00) Hawaii</option>
	<option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9">(GMT-09:00) Alaska</option>
	<option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
	<option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Tijuana, Baja California</option>
	<option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7">(GMT-07:00) Arizona</option>
	<option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
	<option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
	<option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Central America</option>
	<option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Central Time (US & Canada)</option>
	<option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
	<option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Saskatchewan</option>
	<option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
	<option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
	<option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Indiana (East)</option>
	<option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
	<option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Caracas, La Paz</option>
	<option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Manaus</option>
	<option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Santiago</option>
	<option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">(GMT-03:30) Newfoundland</option>
	<option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Brasilia</option>
	<option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>
	<option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Greenland</option>
	<option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Montevideo</option>
	<option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">(GMT-02:00) Mid-Atlantic</option>
	<option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">(GMT-01:00) Cape Verde Is.</option>
	<option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">(GMT-01:00) Azores</option>
	<option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
	<option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
	<option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
	<option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
	<option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
	<option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
	<option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) West Central Africa</option>
	<option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Amman</option>
	<option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>
	<option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Beirut</option>
	<option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Cairo</option>
	<option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">(GMT+02:00) Harare, Pretoria</option>
	<option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
	<option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Jerusalem</option>
	<option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Minsk</option>
	<option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Windhoek</option>
	<option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
	<option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
	<option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Nairobi</option>
	<option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Tbilisi</option>
	<option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">(GMT+03:30) Tehran</option>
	<option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">(GMT+04:00) Abu Dhabi, Muscat</option>
	<option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Baku</option>
	<option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Yerevan</option>
	<option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">(GMT+04:30) Kabul</option>
	<option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">(GMT+05:00) Yekaterinburg</option>
	<option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
	<option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Sri Jayawardenapura</option>
	<option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
	<option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">(GMT+05:45) Kathmandu</option>
	<option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">(GMT+06:00) Almaty, Novosibirsk</option>
	<option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">(GMT+06:00) Astana, Dhaka</option>
	<option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">(GMT+06:30) Yangon (Rangoon)</option>
	<option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
	<option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">(GMT+07:00) Krasnoyarsk</option>
	<option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
	<option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>
	<option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
	<option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Perth</option>
	<option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Taipei</option>
	<option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
	<option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Seoul</option>
	<option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">(GMT+09:00) Yakutsk</option>
	<option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Adelaide</option>
	<option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Darwin</option>
	<option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Brisbane</option>
	<option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>
	<option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Hobart</option>
	<option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Guam, Port Moresby</option>
	<option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Vladivostok</option>
	<option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
	<option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">(GMT+12:00) Auckland, Wellington</option>
	<option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
	<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">(GMT+13:00) Nuku'alofa</option>
</select>
                                </div>
                            </div>
                                <noscript>
                                    <input class="nocsript-finish-btn sf-right nocsript-sf-btn" type="submit"
                                           name="no-js-clicked" value="finish"/>
                                </noscript>
                            </div>
                        </fieldset>
                    </form>
			</div>
	</div>

<!-- END SIGN UP CODE -->
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>     
    <script type="text/javascript" src="assets/js/main.js"></script>
	<script src="assets/js/step-form-wizard.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Vimeo video API -->
<script src="js/typed.js"></script>
<script>
  $(function(){
      $("#type").typed({
        strings: ["confused.^600", "frustrated.^600",  "leaving.^600", "disappointed.^600", "bouncing.^600", "abandoning.^600", "annoyed.^600" ],
        typeSpeed: 50,
        loop: true,
        showCursor: true
      });
  });
</script>
<script>
$(".featuresButton").click(function() {
	var location = $("#features").offset().top;
	location -= 100;
    $('html, body').animate({
        scrollTop: location
    }, 500);
});
</script>

    <script>
        $(document).ready(function () {
            $("#wizard_example").stepFormWizard({
                theme: 'simple' // sea, sky, simple, circle, sun
            });
        })
        $("#wizard_example").on('sf-step-after', function(e, to, data) {
    		if (to == 0)
    		{
    			$('#emailAddress').focus();
    			$('#bottom').innerhtml('<p>that was a next button!</p>');
    		}
    		if (to == 1)
    		{
    			$('#domainName').focus();
    		}
    		if (to == 2)
    		{
    			$('select').blur();
    		}
		})
    </script>
	<script>
    	var d = new Date()
		var n = d.getTimezoneOffset()/-60;
		$('#timeZone').val(n);
    </script>
</body>
</html> 

