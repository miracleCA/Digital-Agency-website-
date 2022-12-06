<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us</title>
  
  <link rel="stylesheet" href="Index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0/js/bootstrap.min.js"></script>

</head>
  <?php
    include_once '../Sections/Back_to_top.php';
  ?>
  <section class="header">
    <nav class="navbar navbar-inverse fixed-to-top" id="nav">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" id="togg-btn" class="navbar-toggle" style="border-color: #1e1c87; background-color: #ffffff;" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar" style="background-color: rgb(11, 11, 95);"></span>
                  <span class="icon-bar" style="background-color: rgb(11, 11, 95);"></span>
                  <span class="icon-bar" style="background-color: rgb(11, 11, 95);"></span>                        
          </button>
          <a class="navbar-brand" href="../">WebSiteName</a>
        </div>
        <div class="collapse navbar-collapse navbar-right" style="border: none;" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="../" style="color: white;">Home</a></li>
            <li><a id="active" href="" style="color: white;">About Us</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" target="_blank" style="color: white;" href="../Services">
                Services
                <span class="caret"></span></a>
              </a>
              <ul class="dropdown-menu" id="dropdown-menu" style="left: 0; height: max-content;">
                <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Website designing">Website Design</a></li>
                <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Website development">Website Development</a></li>
                <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../">Mobile App Development</a></li>
                <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Digital Marketing">Digital Marketing</a></li>
                <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Business Development">Business Development</a></li>
                <li style="border-top: rgb(255, 255, 255) 1px solid; border-bottom: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="__blank" id="dropdown-item" href="../Writing">Writing</a></li>
              </ul>
            </li>     
            <li><a href="#" style="color: white;" target="_blank">Blogs</a></li>
            <li><a href="../Contact" target="_blank" style="color: white;">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
      <div class="row" id="header-space"></div>
      <div class="row" id="header-items">
        <div class="col-md-4 col-sm-5 col-lg-4 col-xl-4" id="header-items1">
          <div id="header-cap">
            <h1 id="caption">We are a digital and business development agency that builds and markets result-driven internet presence for businesses both locally and internationally.</h1>
            <p id="P1">Get in touch with our team of experts to give you the best business solutions and profitable internet presence.</p>
          </div>
          <div class="header-links">
                    <button onclick=" window.open('../Contact','_blank')" class="cap-btn" id="contact">Contact US</a></button>
                    <button onclick=" window.open('../Services','_blank')" class="abt-btn" id="about-us">Our Services</button>
          </div>
        </div>
        <div class="col-md-8 col-sm-7"></div>
      </div>
  </section>
    <section class="body">
      <div class="space"></div>
      <div class="row" id="mission" style="color: black;">
        <h2>OUR MISSION</h2>
        <P id="mission-text">We take the respnsibility of promoting your business and it's products or services on the internet so that you can reach your target market or audiences, and then convert them to clients or customers.
          <br>
          We also ensure that we build the best tools that will grant you the ability to do business effectively on the internet.
        </P>
        <br>
      </div>
      <div class="row" id="vision" style="color: black;">
        <h2>OUR VISION</h2>
        <P id="vision-text">We desire to be the best digital and business consulting agency in africa, europe and worldwide as we dominate the niche.</P>
      </div>
      <div class="space"></div>
      <div class="row">
        <h1 class="work-flow" style="color: black;">OUR<m style="color: rgb(12, 12, 95);"> WORKFLOW</m></h1>
      </div>
      <?php
        include_once '../Sections/workflow.php';
      ?>
      <div class="space"></div>
      <div class="row" id="hire-us">
              <p>Get all your projects done by us, just drop us a message and we will give you a free quote.</p>
              <button id="quote">Get a quote</button>
      </div>
      <div class="spacer" style="height: 20px;"></div>
      <?php
        include_once '../Sections/Past clients.php';
      ?>
      <div class="space"></div>
      <?php
        include_once '../Sections/Panel.php';
      ?>
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
      <div class="space" id="space-it"></div>
      <?php
             include_once '../Sections/Consult us.php';
      ?>
      <div class="space"></div>
      <div class="row" id="Founders-row">
        <div class="col-md-6 col-sm-6" id="Founder">
          <div id="space" style="height: 370px;"></div>
          <div id="Founder-cap">
            <p id="Founder-name"> MIRACLE C. ANYIAM</p>
            <p id="Founder-title">CEO/FOUNDER</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6" id="Founder-quote">
            <h3>"Designing starts with creative thinking and every great idea is developed for a purpose."</h3>
        </div>
      </div> 
      <div class="row" id="follow-socials">
        <h2>FOLLOW US ON SOCIAL MEDIA</h2>
      </div>
      <div class="row" id="fol-soc">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-pinterest"></a>
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
                              <li><a id="foot-links" style="font-size: 14px; color: white;" href="../" target="_blank">HOME</a></li>
                              <li><a id="foot-links" style="font-size: 14px; color: white;" href="">ABOUT</a></li>
                              <li><a id="foot-links" style="font-size: 14px; color: white;" href="../Services" target="_blank">SERVICES</a></li>
                              <li><a id="foot-links" style="font-size: 14px; color: white;" href="../Contact" target="_blank">CONTACT</a></li>
                      </ul>
              </div>
      </div>
      <div class="col-md-3 col-sm-3" id="foot-col">
              <div class="row" style="font-weight: bold; font-size: 25px; padding-left: 12px;">Our Policies</div>
              <div class="row">
                      <ul>
                              <li><a id="foot-links" style="font-size: 14px; color: white;" href="../Privacy policy" target="_blank">Privacy policy</a></li>
                              <li><a id="foot-links" style="font-size: 14px; color: white;" href="../Terms and conditions" target="_blank">Terms and conditions</a></li>
                              <li><a id="foot-links" style="font-size: 14px; color: white;" href="../Cookies policy" target="_blank">Cookies policy</a></li>
                              <li><a id="foot-links" style="font-size: 14px; color: white;" href="../Support" target="_blank">Support</a></li>
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
      include_once '../Sections/Last footer.php';
    ?>

    <script src="../Index.js" type="text/javascript"></script>
</body>
</html>