
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOME</title>
  
  <link rel="stylesheet" href="INDEX.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0/js/bootstrap.min.js"></script>
</head>
    <body>
        <?php
          include_once 'Sections/Back_to_top.php';
        ?>
        <section class="header" id="header" id style="background-image: url('IMG/pexels-cottonbro-5077043.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center; width: 100%;">
          <nav class="navbar navbar-inverse fixed-to-top" id="nav">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" id="togg-btn" class="navbar-toggle" style="border-color: #1e1c87; background-color: #ffffff;" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar" style="background-color: rgb(11, 11, 95);"></span>
                        <span class="icon-bar" style="background-color: rgb(11, 11, 95);"></span>
                        <span class="icon-bar" style="background-color: rgb(11, 11, 95);"></span>                        
                </button>
                <a class="navbar-brand" href="">WebSiteName</a>
              </div>
              <div class="collapse navbar-collapse navbar-right" style="border: none;" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li><a id="active" href="" style="color: white;">Home</a></li>
                  <li><a href="About Us" target="_blank" style="color: white;">About Us</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" style="color: white;" target="_blank" href="Services">
                      Services
                      <span class="caret"></span></a>
                    </a>
                    <ul class="dropdown-menu" id="dropdown-menu" style="left: 0; height: max-content;">
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="Website designing">Website Design</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="Website development">Website Development</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="Services">Mobile App Development</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="Digital Marketing">Digital Marketing</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="Business Development">Business Development</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid; border-bottom: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="Writing">Writing</a></li>
                    </ul>
                  </li>     
                  <li><a href="#" target="_blank" style="color: white;">Blogs</a></li>
                  <li><a href="Contact" target="_blank" style="color: white;">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </nav>
              <div class="row" id="header-space"></div>
              <div class="row" id="header-items">
                <div class="col-md-4 col-sm-5 col-lg-4 col-xl-4" id="header-items1">
                  <div id="header-cap">
                    <h1 id="caption">Redefining your business marketing strategies with modern-driven technologies for a fast and easy customers service.</h1>
                    <p id="P1">Get in touch with our team of experts to give your business a profitable internet presence with the best digital solutions.</p>
                  </div>
                  <div class="header-links">
                    <button onclick=" window.open('Contact','_blank')" class="cap-btn" id="contact">Contact US</button>
                    <button onclick=" window.open('About Us','_blank')" class="abt-btn" id="about-us">Watch a video</button>
                  </div>
                </div>
                <div class="col-md-8 col-sm-7"></div>
              </div>
        </section>   
        <section class="body">
          <?php
            include_once 'Sections/Serv_work.php';
          ?>
          <div class="spacee" style="height: 10px;"></div>
          <section id="service">
            <div class="row" id="card-row">
              <div class="col-md-4 col-sm-4" id="work-col">
                <div class="card" id="card">
                  <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                    <img id="card-img" src="Icons/website.png" alt="">
                    <h3 class="card-title1">Website Design</h3>
                  </div>
                  <div class="card-body" style="padding: 10px;">
                    <p class="card-text">We design professional, responsive, and SEO-friendly website user-interfaces, user-experiences, and functional website pages using customizable CMS and web design tools.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4" id="work-col">
                <div class="card" id="card">
                  <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                    <img id="card-img" src="Icons/WEB DEVELOPMENT.png" alt="">
                    <h3 class="card-title1">Web Development</h3>
                  </div>
                  <div class="card-body" style="padding: 10px;">
                    <p class="card-text">We develop professional and responsive and SEO-friendly websites for all kinds of businesses, this includes the front-end, back-end, and the full-stack web development.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4" id="work-col">
                <div class="card" id="card">
                  <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                    <img id="card-img" src="Icons/Digital Marketing.png" alt="">
                    <h3 class="card-title1">Digital Marketing</h3>
                  </div>
                  <div class="card-body" style="padding: 10px;">
                    <p class="card-text">We promote and market your business on the internet using the most beneficial internet marketing strategies based on your business industry or niche.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" id="card-row">
              <div class="col-md-4 col-sm-4" id="work-col">
                <div class="card" id="card">
                  <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                    <img id="card-img" src="Icons/WEB DEVELOPMENT.png" alt="">
                    <h3 class="card-title1">Mobile App Dev</h3>
                  </div>
                  <div class="card-body" style="padding: 10px;">
                    <p class="card-text">We develop functional and quality hybrid mobile applications for your business and thess mobile apps will have effective usability on all mobile operating systems.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4" id="work-col">
                <div class="card" id="card">
                  <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                    <img id="card-img" src="Icons/growth.png" alt="">
                    <h3 class="card-title1">Business Consultation</h3>
                  </div>
                  <div class="card-body" style="padding: 10px;">
                    <p class="card-text">We help you plan and strategize your business by following the most effective business process and leveraging on the profitable strategies for business success.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4" id="work-col">
                <div class="card" id="card">
                  <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                    <img id="card-img" src="Icons/Content writing.png" alt="">
                    <h3 class="card-title1">Writing</h3>
                  </div>
                  <div class="card-body" style="padding: 10px;">
                    <p class="card-text">We write all kinds of creative and business contents, articles, blog posts, books, magazines, newsletters, business plans, business proposals, and website contents.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <?php
            include_once 'Sections/Workflow.php';
          ?>
          <div class="space"></div>
          <div class="row" id="hire-us">
            <p>Get all your projects done by us, just drop us a message and we will give you a free quote.</p>
            <button id="quote">Get a quote</button>
          </div>
          <div class="space"></div>
          <?php
            include_once "Sections/Past clients.php";
            include_once "Sections/Panel.php";
          ?>
        </section>   
        <div class="space" id="spacer2"></div>  
        <section>
                <div class="row" id="achieve">
                        <h2 id="achieve-text">OUR ACHIEVEMENTS</h2>
                </div>
                <div class="row" id="ach-row">
                      <div class="col-md-3 col-sm-3" id="achievements">
                        <b id="ach-txt">100 Combleted brojects</b>
                      </div>
                      <div class="col-md-3 col-sm-3" id="achievements">
                        <b id="ach-txt">85 Satisfied clients</b>
                      </div>
                      <div class="col-md-3 col-sm-3" id="achievements">
                        <b id="ach-txt">30 Referrals</b>
                      </div>
                      <div class="col-md-3 col-sm-3" id="achievements">
                        <b id="ach-txt">4 Awards</b>
                      </div>
                  </div>
        </section>    
        <section>
                <div class="space" style="height: 10px;"></div>
                <div class="row">
                  <div class="col-md-12" style="border: 2px solid rgb(20, 20, 60); padding: 20px;">
                    <div class="row" id="test">
                      <h2 id="testimonial">Testimonials</h2>
                    </div>
                    <div class="space" style="height: 20px;"></div>
                    <div class="row" id="testimonials" >
                      <img src="img/Myselff.jpg" id="test-img" alt="">
                      <h5 id="test-auth">Andrew Maxwell</h5>
                      <h5 id="test-job">Business Strategist</h5>
                      <p id="test-cont">My business now have a productive internet presence and I can now reach thousands of people virtually through the internet, all thanks to ...... </p>
                    </div>
                  </div>
                </div>
                <div class="space" id="space-it"></div>
                <div class="row">
                  <div class="col-md-6 col-sm-6" id="consult-text">Why not get it done by us?</div>
                  <div class="col-md-6 col-sm-6" id="con-col">
                    <button id="consult">Consult us Today</button>
                  </div>
                </div>
                <div class="row" id="con-row">
                  <button id="consult2">Consult us Today</button>
                </div>
        </section>   
        <div class="space"></div>
        <section class="row" id="footer-row">
          <div class="col-md-3 col-sm-3" id="foot-col">
                  <div class="row" style="padding-left: 12px;">Company's Name</div>
                  <div class="row" style="padding-left: 12px;">Tagline</div>
                  <div class="space"></div>
                  <div class="">
                          <a href="#" class="fa fa-facebook"></a>
                          <a href="#" class="fa fa-linkedin"></a>
                          <a href="#" class="fa fa-instagram"></a>
                          <a href="#" class="fa fa-pinterest"></a>
                          <a href="#" class="fa fa-twitter"></a>
                          <a href="#" class="fa fa-youtube"></a>
                  </div>
          </div>
          <div class="col-md-3 col-sm-3" id="foot-col">
                  <div class="row" style="font-weight: bold; font-size: 25px; padding-left: 12px;">Quick links</div>
                  <div class="row">
                          <ul style="display: grid; font-size: 14px; color: white;">
                                  <li><a id="foot-links" style="font-size: 14px; color: white;" href="">HOME</a></li>
                                  <li><a id="foot-links" style="font-size: 14px; color: white;" href="About Us" target="_blank">ABOUT</a></li>
                                  <li><a id="foot-links" style="font-size: 14px; color: white;" href="Services" target="_blank">SERVICES</a></li>
                                  <li><a id="foot-links" style="font-size: 14px; color: white;" href="Contact" target="_blank">CONTACT</a></li>
                          </ul>
                  </div>
          </div>
          <div class="col-md-3 col-sm-3" id="foot-col">
                  <div class="row" style="font-weight: bold; font-size: 25px; padding-left: 12px;">Our Policies</div>
                  <div class="row">
                            <ul>
                                  <li><a id="foot-links" style="font-size: 14px; color: white;" href="Privacy policy" target="_blank">Privacy policy</a></li>
                                  <li><a id="foot-links" style="font-size: 14px; color: white;" href="Terms and conditions" target="_blank">Terms and conditions</a></li>
                                  <li><a id="foot-links" style="font-size: 14px; color: white;" href="Cookies policy" target="_blank">Cookies policy</a></li>
                                  <li><a id="foot-links" style="font-size: 14px; color: white;" href="Support" target="_blank">Support</a></li>
                          </ul>
                  </div>
          </div>
          <div class="col-md-3 col-sm-3" id="foot-col">
                  <div class="row" id="Email-news-form" style="padding-left: 12px;">
                    <p>Subscribe to our Email Newsletter..</p>
                  </div>
                  <form id="Email-form" action="">
                    <input id="Sub-Email" style="width: 65%; color: black; border: 1px solid rgb(255, 255, 255); height: 45px;" type="email" placeholder="Enter your E-mail">
                    <button id="mail-but" style="width: fit-content; height: 45px;" type="submit">Submit</button>
                    <div id="errors1"></div>
                  </form>            
          </div>

            <script src="../Sub-Form.js"></script>

        </section>  
        <?php
            include_once "Sections/Last footer.php";
        ?>
          <script src="Index.js" type="text/javascript"></script>
          <script src="Sub-Form.js" type="text/javascript"></script>
    </body>
</html>
