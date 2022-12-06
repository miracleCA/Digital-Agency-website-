<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website designing</title>
  
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
                  <li><a href="../" target="_blank" style="color: white;">Home</a></li>
                  <li><a href="../About Us/" target="_blank" style="color: white;">About Us</a></li>
                  <li class="dropdown">
                    <a id="active" class="dropdown-toggle" target="_blank" style="color: white;" href="../Services/">
                      Services
                      <span class="caret"></span></a>
                    </a>
                    <ul class="dropdown-menu" id="dropdown-menu" style="left: 0; height: max-content;">
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" id="dropdown-item" href="">Website Design</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Website development/">Website Development</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Services/">Mobile App Development</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Digital Marketing/">Digital Marketing</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Business Development/">Business Development</a></li>
                      <li style="border-top: rgb(255, 255, 255) 1px solid; border-bottom: rgb(255, 255, 255) 1px solid;"><a class="dropdown-item" target="_blank" id="dropdown-item" href="../Writing/">Writing</a></li>
                    </ul>
                  </li>     
                  <li><a href="#" style="color: white;" target="_blank">Blogs</a></li>
                  <li><a href="../Contact/" style="color: white;" target="_blank">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="row" id="header-space"></div>
        <div class="row" id="header-items">
                <div class="col-md-4 col-lg-4 col-xl-4" id="header-items1">
                <div id="header-cap">
                <h1 id="caption">We design, create, and develop responsive SEO-friendly websites with engaging contents to convert your web users and audiences into customers and clients.</h1>
                <p id="P1">Get in touch with our team of web designers to give you the best and profitable SEO-friendly website solutions.</p>
                </div>
                <div class="header-links">
                  <button onclick=" window.open('../Contact','_blank')" class="cap-btn" id="contact">Contact US</button>
                  <button onclick=" window.open('../About Us','_blank')" class="abt-btn" id="about-us">Watch a video</button>
                </div>
                </div>
                <div class="col-md-8"></div>
        </div>
    </section>
    <section class="body">
      <?php
        include_once '../Sections/Serv_work.php';
      ?>
      <div class="spacee" style="height: 10px;"></div>
      <section id="service">
        <div class="row" id="card-row">
                <div class="col-md-4 col-sm-4" id="work-col">
                <div class="card" id="card">
                <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/ux-design.png" alt="">
                <h3 class="card-title1">Website UI/UX Design</h3>
                </div>
                <div class="card-body" style="padding: 10px;">
                <p class="card-text">We design and prototype beautiful and responsive web page user-interfaces for a better website users-experience.</p>
                </div>
                </div>
                </div>
                <div class="col-md-4 col-sm-4" id="work-col">
                <div class="card" id="card">
                <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/brand-image.png" alt="">
                <h3 class="card-title1">Website Branding</h3>
                </div>
                <div class="card-body" style="padding: 10px;">
                <p class="card-text">We completely brand all your social media pages, website pages, and website contents for a better design structure and brand identity.</p>
                </div>
                </div>
                </div>
                <div class="col-md-4 col-sm-4" id="work-col">
                <div class="card" id="card">
                <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/Graphics.png" alt="">
                <h3 class="card-title1">Graphics Design</h3>
                </div>
                <div class="card-body" style="padding: 10px;">
                <p class="card-text">Designing attractive, engaging, and informative business and website graphics to effectively define yout brand.</p>
                </div>
                </div>
                </div>
        </div>
        <div class="row" id="card-row">
                <div class="col-md-4 col-sm-4" id="work-col">
                <div class="card" id="card">
                <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/wordpress.png" alt="">
                <h3 class="card-title1">Wordpress CMS</h3>
                </div>
                <div class="card-body" style="padding: 10px;">
                <p class="card-text">Designing and maintaining professional websites using the required wordpress features like LMS, woo commerce, and web page builders.</p>
                </div>
                </div>
                </div>
                <div class="col-md-4 col-sm-4" id="work-col">
                <div class="card" id="card">
                <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/shopify.png" alt="">
                <h3 class="card-title1">Shopify</h3>
                </div>
                <div class="card-body" style="padding: 10px;">
                <p class="card-text">Building professional SEO-friendly E-commerce websites and online stores using all the requires shopify tools and feautures.</p>
                </div>
                </div>
                </div>
                <div class="col-md-4 col-sm-4" id="work-col">
                <div class="card" id="card">
                <div class="card-header" style="border-bottom: rgb(16, 16, 82) 1px solid;">
                <img id="card-img" src="Icons/website.png" alt="">
                <h3 class="card-title1">Front-end web Dev</h3>
                </div>
                <div class="card-body" style="padding: 10px;">
                <p class="card-text">Designing and development of SEO-friendly website pages, web user-interfaces, and web page functions.</p>
                </div>
                </div>
                </div>
        </div>
      </section>
      <?php
      include_once '../Sections/Workflow.php';
      ?>
      <div class="space"></div>
      <div class="row" id="hire-us">
        <p>Get all your website projects done by us, just drop us a message and we will give you a free quote.</p>
        <button id="quote">Get a quote</button>
      </div>
      <div class="space"></div>
      <?php
        include_once '../Sections/Past clients.php';
      include_once '../Sections/Panel.php';
      ?>
    </section>   
    <div class="space" id="space-it"></div>
    <?php
     include_once '../Sections/Consult us.php';
    ?>
    <div class="space"></div>
        <?php
        include_once '../Sections/Footer 1.php';
        include_once '../Sections/Last footer.php';
        ?>
    <script src="../Index.js" type="text/javascript"></script>
</body>
</html>














































