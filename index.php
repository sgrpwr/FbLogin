<?php session_start(); ?>
<!DOCTYPE html>
<html> 
<head>
    <title>Sagar Pawar</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Website Landing Page for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- github calendar css -->
    <link rel="stylesheet" href="assets/plugins/github-calendar/dist/github-calendar.css"/>
    <!-- github acitivity css -->
    <link rel="stylesheet" href="assets/plugins/github-activity/src/github-activity.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
</head> 

<body>
<script type="text/javascript" src="./fbapp/fb.js"></script>
<?php if(isset($_SESSION["name"])) {echo $_SESSION["name"]; } ?>
<?php if(isset($_SESSION["name"])) { } else { ?><div class="fb-login-button" data-scope="public_profile,email" onlogin="checkLoginState();"></div>
<?php } ?>
    <!-- ******HEADER****** --> 
    <header class="header">
        <div class="container">                       
            <img class="profile-image img-responsive pull-left" src="assets/images/profile.png" alt="James Lee" />
            <div class="profile-content pull-left">
                <h1 class="name">Sagar Pawar</h1>
                <h2 class="desc">Web App Developer</h2>   
                <ul class="social list-inline">
                    <li><a href="https://twitter.com/sgrpwr1"><i class="fa fa-twitter"></i></a></li>                   
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/sagar-pawar-a6b0b2127?trk"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.facebook.com/people/Sagar-Pawar/100006511029413"><i class="fa fa-facebook"></i></a></li>                  
                    <li class="last-item"><a href="https://www.instagram.com/sagarpawar_/"><i class="fa fa-instagram"></i></a></li>                 
                </ul> 
            </div><!--//profile-->
            <a class="btn btn-cta-primary pull-right" href="#" ><i class="fa fa-paper-plane"></i> Contact Me</a>              
        </div><!--//container-->
    </header><!--//header-->
    
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">About Me</h2>
                        <div class="content">
                            <p>I am Delhi based web designer and developer, pursuing bachelor in technology in 'Information technology and mathematics' from Cluster Innovation Centre, University of Delhi. 
                            Currently I'm working for defense research and development organization(DRDO) and University of Delhi(DU).</p>    
         
                            <p>
                             projects that I'm working on are in web technologies. With the proficiency of IT skills, I have electronics and mathematics also as minor.
                             I enthusiastically would like to work in mentioned fields.</p>
                         
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
    
               <section class="latest section">
                    <div class="section-inner">
                        <h2 class="heading">Latest Projects</h2>
                        <div class="content">    
                                               
                            <div class="item featured text-center">
                                <h3 class="title"><a href="http://sagarpawar.comli.com/DRDO%20Search%20engine/" target="_blank">Student's Search engine - DRDO</a></h3>
                                <p class="summary">An online web portal designed for getting internships and interns</p>
                                <div class="featured-image">
                                    <a href="http://sagarpawar.comli.com/DRDO%20Search%20engine/" target="_blank">
                                    <img class="img-responsive project-image" src="assets/images/projects/project-featured.png" alt="project name" />
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">New</div>
                                        </div>
                                    </div>
                                    
                                <div class="desc text-left">                                    
                                    <p>The "Student's search engine" is a web portal which has been designed and developed for students and guides (admin) to meet their needs and requirements 
                                    in a way that when a student requires an internship or training he/ she can apply by signing up and fill their postal, academic and previous internship 
                                    details which resulting generates their resume in pdf format and gets store into the database.Then here comes other half of the application where an 
                                    admin has already been assigned an id and password with which he/she can login for the search page. Once admin login is done, all he/she has to do is 
                                    'search for expert interns!â€™.</p>
                                    <p>Admin can search by students profiles, i.e. 'java', and all the students having java profile would show up as a result, 
                                    where he/she can check their resumes. At last Admin can call the required student having required profile.By going through this utility both parties can 
                                    easily meet their requirements.</p>
                                </div><!--//desc-->         
                                <a class="btn btn-cta-secondary" href="#" ><i class="fa fa-thumbs-o-up"></i> Back my project</a>                 
                            </div><!--//item-->
                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-5.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://fitnessempire.comli.com/Sagar/" target="_blank">Fitness Empire - Designed for gym's beginner aspirants
                                    </a></h3>
                                    <p>Fitness Empire is an online website where one can easily find almost every information related
                                    to body fitness. This website is best for beginners who doesn't really have intuitive edge towards 
                                    gym's basics and dietary planings according to their physique.</p>
                                    <p><a class="more-link" href="#" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->
                            
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-4.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="#">Hindi department - Designed and developed for University of Delhi</a></h3>
                                    <p>I'm currently developing a website for department of Hindi, Delhi University. The website is containing all the necessary information related to academics for all the courses running in the department and every notification. By going through the website, students don't have to come to the noticeboard every time when there is an event occurred.
                                    </p>
                                    <p><a class="more-link" href="#" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->
                            
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-1.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="#" target="_blank">Chat Network - Developed as College project</a></h3>
                                    <p>Chat Network is one of my projects which is a social networking website user can sign up and create their profile. Once the users has registered themselves to the database, they can login and set their profile pictures, send requests, massages and so on..</p>
                                    <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->                            
                            
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                <!--//item-->
                <!--//item-->
                <!--//section--><!--//item-->
                <!--//section-inner-->
                <!--//content-->  
                <!--//section--><!--//section-inner--><!--//content--><!--//item--><!--//item--><!--//item-->
                <!--
                <section class="projects section">
                    <div class="section-inner">
                        <h2 class="heading">Other Projects</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><a href="#">Project Title Cras Lacus</a></h3>
                                <p class="summary">Provide a brief description of your project. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatu.</p>
                                <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                            </div>
                            <div class="item">
                                <h3 class="title"><a href="#">Project Title Cras eget lacus</a> <span class="label label-theme">Open Source</span></h3>
                                <p class="summary">Provide a brief description of your project. Maecenas ornare ultricies risus, in fermentum augue consectetur in. Vestibulum vitae mauris iaculis, sollicitudin velit in, molestie nulla. </p>
                                <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> View on GitHub</a></p>
                            </div>
                            <div class="item">
                                <h3 class="title"><a href="#">Project Title Maecenas Ornare</a> <span class="label label-theme">Open Source</span></h3>
                                <p class="summary">Provide a brief description of your project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel purus enim. Etiam tortor felis, fermentum ac ultrices sed.</p>
                                <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> View on GitHub</a></p>
                            </div>
                            
                            <a class="btn btn-cta-secondary" href="#">More on CoderWall <i class="fa fa-chevron-right"></i></a>
                            
                        </div>
                    </div>                 
                </section>
                
                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Work Experience</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Co-Founder & Lead Developer - <span class="place"><a href="#">Startup Hub</a></span> <span class="year">(2014 - Present)</span></h3>
                                <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                            </div>
                            <div class="item">
                                <h3 class="title">Software Engineer - <span class="place"><a href="#">Google</a></span> <span class="year">(2013 - 2014)</span></h3>
                                <p>Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                            </div>
                            
                            <div class="item">
                                <h3 class="title">Software Engineer - <span class="place"><a href="#">eBay</a></span> <span class="year">(2012 - 2013)</span></h3>
                                <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                            </div>
                            
                        </div> 
                    </div>                 
                </section> 
               -->

                <section class="github section">
                    <div class="section-inner">
                        <h2 class="heading">My GitHub</h2>
                        <p>github projects <a href="https://github.com/sgrpwr" target="_blank">GitHub Calendar</a> 
                        
                        <div id="github-graph" class="github-graph">

                        </div><!--//github-graph-->

                        <p>Github activities <a href="https://github.com/sgrpwr" target="_blank">GitHub Activity Stream</a>         
                        <!--//Usage: http://caseyscarborough.com/projects/github-activity/ -->                       
                        <!--<div id="ghfeed" class="ghfeed">
                        </div>--> <!--//ghfeed-->
                        
                    </div><!--//secton-inner-->
                </section><!--//section-->
            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                 <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>New Delhi, India</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="#">sagarpawar@one.ducic.ac.in</a></li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="#">pawarsgr18@gmail.com</a></li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="#">http://sagarpawar.comli.com/</a></li>
                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                
                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Skills</h2>
                        <div class="content">
                            <p class="intro">
                                
                              Followings are some of the skill sets and programming languages with which I have been working on. I am comfortable with the programming languages mentioned below and I have published my projects on that.
                              </p>
                            
                            <div class="skillset">
                               
                                <div class="item">
                                    <h3 class="level-title">PHP<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="You can use the tooltip to add more info...">Good</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="80%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">Javascript &amp; jQuery<span class="level-label">fine</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="60%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">HTML5, CSS3, SASS &amp; LESS<span class="level-label">Expert</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="90%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">C <span class="level-label">Good</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="70%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Coderwall</a></p> 
                            </div>              
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//section-->
                
                <aside class="testimonials aside section">
                    <div class="section-inner">
                        <h2 class="heading">Testimonials</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">                                  
                                    <p><i class="fa fa-quote-left"></i>Sagar is a good web developer and designer, he delivers the project on time.
                                    my experience with his is satifactory</p>
                                </blockquote>                
                                <p class="source"><span class="name">Vishwanath Anand</span><br /><span class="title">DRDO</span></p>                                                             
                            </div><!--//item-->
                            
                            <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Linkedin</a></p> 
                            
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading">Education</h2>
                        <div class="content">
                            <div class="item">                      
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> B.Tech IT and Mathematical Innovation</h3>
                                <h4 class="university">University of Delhi <span class="year">(2014-2017)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> High School</h3>
                                <h4 class="university">New Delhi, India <span class="year"></span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                            
                <aside class="languages aside section">
                    <div class="section-inner">
                        <h2 class="heading">Languages</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <span class="title"><strong>Hindi:</strong></span>
                                    <span class="level">Native Speaker <br class="visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                                </li><!--//item-->
                                <li class="item">
                                    <span class="title"><strong>English:</strong></span>
                                    <span class="level">Professional Proficiency <br class="visible-sm visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><i class="fa fa-star"></i> </span>
                                </li><!--//item-->
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
                <!--//section--><!--//section-inner--><!--//content-->
                <!--
                <aside class="blog aside section">
                    <div class="section-inner">
                        <h2 class="heading">Latest Blog Posts</h2>
                        <p>You can use Sascha Depold's <a href="https://github.com/sdepold/jquery-rss" target="_blank">jQuery RSS plugin</a> to pull in your blog post feeds.</p>
                        <div id="rss-feeds" class="content">

                        </div>
                    </div>
                </aside>
                -->
                
                <!--<aside class="list music aside section">
                    <div class="section-inner">
                        <h2 class="heading">Favourite coding music</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="#">Ut sollicitudin in mauris non auctor</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="#">Duis et felis bibendum</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>  -->
                
                <!--//section--><!--//section-inner--><!--//content-->
                <!--
                <aside class="list conferences aside section">
                    <div class="section-inner">
                        <h2 class="heading">Conferences</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-calendar"></i> <a href="https://developer.apple.com/wwdc/" target="_blank">WWDC 2014</a> (San Francisco)</li>
                                <li><i class="fa fa-calendar"></i> <a href="http://hive.aigaseattle.org/">Hive</a> (Seattle)</li>
                            </ul>
                        </div>
                    </div>
                </aside>
                -->
                
                <aside class="credits aside section">
                    <div class="section-inner">
                        <h2 class="heading">Credits</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><a href="http://getbootstrap.com/" target="_blank"><i class="fa fa-external-link"></i> Bootstrap</a></li>
                                <li><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank"><i class="fa fa-external-link"></i> FontAwesome</a></li>
                                <li><a href="http://jquery.com/" target="_blank"><i class="fa fa-external-link"></i> jQuery</a></li>
                                <li><a href="https://github.com/IonicaBizau/github-calendar" target="_blank"><i class="fa fa-external-link"></i> GitHub Calendar Plugin</a></li>
                                
                                <li><a href="http://caseyscarborough.com/projects/github-activity/" target="_blank"><i class="fa fa-external-link"></i> GitHub Activity Stream</a></li>
                                
                                <li><a href="https://github.com/sdepold/jquery-rss" target="_blank"><i class="fa fa-external-link"></i> jQuery RSS</a></li>

                                
                            </ul>
                            
                            <hr/>
                            
                             
                             
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
              
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Sagar <i class="fa fa-heart"></i> <a href="http://themes.3rdwavemedia.com" target="_blank">
                    
                </a> Pawar</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script> 
    <!-- github calendar plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/src/github-activity.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

